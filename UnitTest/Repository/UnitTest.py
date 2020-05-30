from Repository import TestSignUp
from Repository import TestActorsUpload

class UnitTest(object):

    def __init__(self, TestNR, errorFile):
        self.errorFile = errorFile
        self.SignUP_UT = TestSignUp.TestSignUp(TestNR, errorFile)
        self.UploadActor_UT = TestActorsUpload.TestActorsUpload(TestNR, errorFile)

    def test_SignUP(self):
        self.SignUP_UT.CreateTestScenarios()
        self.SignUP_UT.TestUploadForm()
        self.SignUP_UT.TestDatabaseAccuracy()

    def test_ActorsUpload(self):
        self.UploadActor_UT.CreateTestScenarios()
        self.UploadActor_UT.TestUploadForm()
        self.UploadActor_UT.TestDatabaseAccuracy()