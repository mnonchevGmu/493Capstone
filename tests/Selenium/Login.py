import unittest
import time
from selenium import webdriver
from selenium.webdriver.support.select import Select


class LoginVideoTest(unittest.TestCase):

    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(executable_path=r"C:\Users\J\PycharmProjects\FirstSeleniumProject\drivers\chromedriver.exe")
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def test_login_valid(self):
        self.driver.get("http://ec2-54-172-128-139.compute-1.amazonaws.com/query")
        self.driver.find_element_by_name("email").send_keys("dsmith@gmail.com")
        self.driver.find_element_by_id("password").send_keys("123456789")
        time.sleep(5)
        self.driver.find_element_by_id("remember").click()
        self.driver.find_element_by_css_selector(".btn-primary").click()
        self.driver.find_element_by_name("customerFirstName").send_keys("Maria")
        self.driver.find_element_by_name("customerLastName").send_keys("Wilson")
        self.driver.find_element_by_name("customerEmail1").send_keys("mar@gmail.com")
        self.driver.find_element_by_name("customerPhoneNum").send_keys("703-765-4325")
        self.driver.find_element_by_id("homePhoneType").click()
        self.driver.find_element_by_name("customerJumpDate").send_keys("2020-04-24")
        self.driver.find_element_by_id("PhotosOnly").click()
        time.sleep(10)
        self.driver.find_element_by_css_selector(".btn-primary").click()
        time.sleep(8)



    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")


if __name__ == "__main__":
    unittest.main()
