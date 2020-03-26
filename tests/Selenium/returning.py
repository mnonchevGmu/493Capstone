import unittest
import time
from selenium import webdriver
from selenium.webdriver.support.select import Select


class SignupTest(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_login_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/thanks")
        self.driver.find_element_by_link_text("RETURNING CUSTOMER").click()
        self.driver.find_element_by_name("customerFirstName").send_keys("Old")
        self.driver.find_element_by_name("customerLastName").send_keys("Member")
        self.driver.find_element_by_name("customerEmail1").send_keys("New@gmail.com")
        time.sleep(5)
        self.driver.find_element_by_name("customerInfo").click()
        time.sleep(10)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")
