from Repository import ActorsUpload
from selenium import webdriver
import mysql.connector
import random

class TestActorsUpload(object):

    def __init__(self, TestNR, errorFile):
        self.TestNR = TestNR
        self.errorFile = errorFile
        self.driver = webdriver.Chrome()
        self.scenarios = []
        self.upload_actor_form = ActorsUpload.ActorsUpload(self.driver, errorFile)

    def TestDatabaseAccuracy(self):
        self.errorFile.write("-> UploadActor check accuracy of database input :\n")
        try:
            connection = mysql.connector.connect(host = "localhost",
                                                      database = "movies",
                                                      user = "root",
                                                      password = "")
            self.errorFile.write("Connected to movies database successfully !\n")
            sql_select_Query = "select * from actors"
            cursor = connection.cursor()
            cursor.execute(sql_select_Query)
            records = cursor.fetchall()
            iter = 0
            for scenario in self.scenarios:
                found = False
                for row in records:
                    if (scenario[0] == row[1] and scenario[1] == row[2] and scenario[2] == row[3] and
                            scenario[3] == row[6] and scenario[4] == row[5]):
                        found = True
                if found == False:
                    self.errorFile.write("Upload Actor test case " + str(iter) + " found in database\n")
                else:
                    self.errorFile.write("Upload Actor test case " + str(iter) + " is not in the database\n")
                iter += 1
            if (connection.is_connected()):
                connection.close()
                cursor.close()
        except Error as e:
            self.errorFile.write("Error connecting to users database : ", e)

    def CreateTestScenarios(self):
        for test in range(self.TestNR):
            name = chr(97+test)
            for it in range(3):
                name += chr(random.randint(97,122))
            birthYear = random.randint(1900, 2000)
            awards = random.randint(0, 10)
            details = "Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
            image = "C:\\Users\\Johnny\\PycharmProjects\\UnitTest\\TestImages\\" + str(random.randint(1, 2)) + ".png"
            self.scenarios.append([name, birthYear, awards, details, image])

    def TestUploadForm(self):
        self.errorFile.write("-> UploadActor form upload testing :\n")
        self.upload_actor_form.OpenForm()
        for test in range(self.TestNR):
            self.upload_actor_form.introduce_actor(self.scenarios[test][0], self.scenarios[test][1], self.scenarios[test][2],
                                                   self.scenarios[test][3], self.scenarios[test][4])
            self.upload_actor_form.submit_form()
        self.driver.quit()