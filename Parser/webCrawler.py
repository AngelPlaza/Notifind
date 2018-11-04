#!/usr/bin/env python3

from selenium import webdriver

driver = webdriver.Firefox()
driver.get("https://njit-connect.njit.edu/page.aspx?pid=299")
button = driver.find_elementby_ed('PC4871_1btnExportICal')
button.click()
