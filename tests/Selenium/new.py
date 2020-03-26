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
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com")
        self.driver.find_element_by_link_text("CHECK IN HERE").click()
        self.driver.find_element_by_name("customerFirstName").send_keys("New")
        self.driver.find_element_by_name("customerLastName").send_keys("Member")
        self.driver.find_element_by_name("customerEmail1").send_keys("New@gmail.com")
        self.driver.find_element_by_name("customerEmail2").send_keys("New@gmail.com")
        self.driver.find_element_by_name("customerPhoneNum").send_keys("703-123-4567")
        self.driver.find_element_by_name("customerJumpDate").send_keys("04/20/2020")
        obj = Select(self.driver.find_element_by_name("customerMediaSelection"))
        obj.select_by_index(2)
        time.sleep(5)
        self.driver.find_element_by_id("deliveryTimeAck").click()
        self.driver.find_element_by_name("customerInfo").click()
        time.sleep(10)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")
