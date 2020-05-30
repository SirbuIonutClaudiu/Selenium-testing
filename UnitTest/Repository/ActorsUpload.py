from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import NoAlertPresentException
import time

class ActorsUpload(object):

    def __init__(self, driver, errorFile):
        self.driver = driver
        self.errorFile = errorFile
        self.testcase = 1

    def OpenForm(self):
        self.driver.get("http://localhost/Project/index.php")
        self.LogIn()
        self.clickButton()

    def LogIn(self):
        self.driver.find_element_by_name("username").send_keys("admin")
        self.driver.find_element_by_name("password").send_keys("admin")
        self.driver.find_element_by_xpath("/html/body/div[2]/table/tbody/tr[3]/td/input").click()

    def clickButton(self):
        element_to_hover_over = self.driver.find_element_by_xpath("/html/body/div[2]/div[2]/ul/li[4]/a")
        hover = ActionChains(self.driver).move_to_element(element_to_hover_over)
        hover.perform()
        self.driver.find_element_by_xpath("/html/body/div[2]/div[2]/ul/li[4]/ul/li[2]/a").click()

    def submit_form(self):
        self.driver.find_element_by_xpath("/html/body/div[1]/div[3]/div[1]/input[5]").click()
        try:
            if EC.alert_is_present():
                self.driver.switch_to.alert.accept()
                self.errorFile.write("Introduce Actor test case" + str(self.testcase) + " was not introduced into form\n")
        except NoAlertPresentException:
            self.driver.find_element_by_xpath("/html/body/div[1]/div[3]/div/button").click()
            self.errorFile.write("Introduce Actor test case " + str(self.testcase) + " was introduced into form successfully\n")
        self.testcase += 1

    def introduce_actor(self, name, birthYear, awards, details, image):
        self.driver.find_element_by_name("name").send_keys("" + name)
        self.driver.find_element_by_name("birth_year").send_keys(birthYear)
        self.driver.find_element_by_name("awards").send_keys(awards)
        self.driver.find_element_by_name("details").send_keys(details)
        self.driver.find_element_by_name("image").send_keys(image)
