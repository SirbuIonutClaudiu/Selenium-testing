from Repository import SignUp
from selenium import webdriver
import mysql.connector
import random

class TestSignUp(object):

    def  __init__(self, TestNR, errorFile):
        self.driver = webdriver.Chrome()
        self.TestNR = TestNR
        self.errorFile = errorFile
        self.genders = ["male", "female"]
        self.scenarios = []
        self.sign_up_form = SignUp.SignUp(self.driver, errorFile)


    def TestDatabaseAccuracy(self):
        self.errorFile.write("-> SignUp check accuracy of database input :\n")
        try:
            connection = mysql.connector.connect(host = "localhost",
                                                      database = "users",
                                                      user = "root",
                                                      password = "")
            self.errorFile.write("Connected to users database successfully !\n")
            sql_select_Query = "select * from users"
            cursor = connection.cursor()
            cursor.execute(sql_select_Query)
            records = cursor.fetchall()
            iter = 0
            for scenario in self.scenarios:
                found = False
                for row in records:
                    if (scenario[0] == row[0] and scenario[1] == row[1] and
                        scenario[2] == row[2] and scenario[3] == row[3]):
                        found = True
                if found == False:
                    self.errorFile.write("Sign_up test case " + str(iter) + " found in database\n")
                else:
                    self.errorFile.write("Sign_up test case " + str(iter) + " is not in the database\n")
                iter += 1
            if (connection.is_connected()):
                connection.close()
                cursor.close()
        except Error as e:
            self.errorFile.write("Error connecting to users database : ", e)

    def CreateTestScenarios(self):
        for test in range(self.TestNR):
            username = "user" + str(test)
            password = "pass" + str(test)
            email = str(username) + "@gmail.com"
            gender = self.genders[random.randint(0, 1)]
            self.scenarios.append([username, password, email, gender])

    def TestUploadForm(self):
        self.errorFile.write("-> SignUp form upload testing :\n")
        self.driver.get("http://localhost/Project/index.php")
        for test in range(self.TestNR):
            self.sign_up_form.enter_form()
            self.sign_up_form.introduce_personal_info(self.scenarios[test][0], self.scenarios[test][1],
                                                      self.scenarios[test][2], self.scenarios[test][3])
            self.sign_up_form.submit_form()
        self.driver.quit()