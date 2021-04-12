import unittest
import App

class TestStringMethod(unittest.TestCase):

    def test_upper(self):
        self.assertEqual('foo'.upper(), 'FOO')

    def test_sin2rad(self):
        self.assertEqual()