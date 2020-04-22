import unittest
import time
from selenium import webdriver
from selenium.webdriver.support.select import Select


class ThanksTest(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_login_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/thanks")
        titleofWebPage = self.driver.title
        self.assertEqual("Thank You", titleofWebPage, "Not the Same")
        self.driver.find_element_by_link_text("CHECK IN HERE").click()
        time.sleep(8)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")


if __name__ == "__main__":
    unittest.main()
