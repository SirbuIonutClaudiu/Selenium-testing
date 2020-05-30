from Repository import UnitTest

open('TestResults', 'w').close()
errorFile = open("TestResults", "a+")

myUnitTest = UnitTest.UnitTest(5, errorFile)
myUnitTest.test_SignUP()
myUnitTest.test_ActorsUpload()

errorFile.close()