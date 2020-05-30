from selenium.webdriver.support.ui import Select
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import NoAlertPresentException
import time
import MySQLdb

class SignUp(object):

    def __init__(self, driver, errorFile):
        self.driver = driver
        self.errorFile = errorFile
        self.testcase = 1

    def introduce_personal_info(self, username, password, email, gender):
        time.sleep(1)
        self.driver.find_element_by_name("username").send_keys("" + username)
        self.driver.find_element_by_name("password").send_keys("" + password)
        self.driver.find_element_by_name("email").send_keys(email)
        Select(self.driver.find_element_by_name("gender")).select_by_value(gender)

    def submit_form(self):
        self.driver.find_element_by_xpath("/html/body/div[2]/table/tbody/tr[5]/td/input").click()
        try:
            if EC.alert_is_present():
                self.driver.switch_to.alert.accept()
                self.errorFile.write("Sign_up test case" + str(self.testcase) + " was not introduced into form\n")
                self.driver.get("http://localhost/Project/index.php")
        except NoAlertPresentException:
            self.driver.find_element_by_xpath("/html/body/div[1]/div[2]/ul/li/form/input").click()
            self.errorFile.write("Sign_up test case " + str(self.testcase) + " was introduced into form successfully\n")
        self.testcase += 1

    def enter_form(self):
        self.driver.find_element_by_xpath("/html/body/div[2]/table/tbody/tr[4]/td/a").click()