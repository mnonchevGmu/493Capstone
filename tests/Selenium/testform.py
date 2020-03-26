import unittest
import time
from selenium import webdriver
from selenium.webdriver.support.select import Select


class TestForm(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(
            executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_form_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/testform")
        self.driver.find_element_by_name("fname").send_keys("News")
        obj = Select(self.driver.find_element_by_name("mediaSelect"))
        obj.select_by_index(2)
        time.sleep(5)
        self.driver.find_element_by_name("customerInfo").click()
        time.sleep(10)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")
