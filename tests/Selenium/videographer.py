import unittest
import time
from selenium import webdriver
from selenium.webdriver.support.select import Select


class VideoTest(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_login_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/query")
        self.driver.find_element_by_name("customerFirstName").send_keys("Evan")
        self.driver.find_element_by_name("customerLastName").send_keys("George")
        self.driver.find_element_by_name("customerEmail1").send_keys("Evan@gmail.com")
        self.driver.find_element_by_name("customerPhoneNum").send_keys("703-123-4567")
        self.driver.find_element_by_name("customerPhoneType").send_keys("Cell")
        self.driver.find_element_by_name("customerJumpDate").send_keys("2020-04-30")
        time.sleep(5)
        self.driver.find_element_by_css_selector("input[type='radio'][value='PHOTOS']").click()
        self.driver.find_element_by_css_selector(".btn-primary").click()
        time.sleep(10)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")
