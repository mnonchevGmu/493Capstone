import unittest
import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys


class SignupTest(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(
            executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_new_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/")
        self.driver.find_element_by_link_text("CHECK IN HERE").click()
        self.driver.find_element_by_name("customerFirstName").send_keys("Maria")
        self.driver.find_element_by_name("customerLastName").send_keys("Wilson")
        self.driver.find_element_by_name("customerEmail1").send_keys("mar@gmail.com")
        self.driver.find_element_by_name("customerEmail2").send_keys("mar@gmail.com")
        self.driver.find_element_by_name("customerPhoneNum").send_keys("703-765-4325")
        self.driver.find_element_by_id("homePhoneType").click()
        self.driver.find_element_by_name("customerJumpDate").send_keys("04/24/2020")
        self.driver.find_element_by_id("PhotosOnly").click()
        time.sleep(5)
        self.driver.find_element_by_id("deliveryTimeAck").click()
        self.driver.find_element_by_name("customerInfo").click()
        time.sleep(5)

    @classmethod
    def tearDownClass(cls):

        print("Test Completed")


if __name__ == "__main__":
    unittest.main()

