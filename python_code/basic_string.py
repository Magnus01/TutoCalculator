import unittest
# Code is taken from python documentation with additional commentary by myself (Mikael)


# By subclassing unittest.TestCase
# we've made a test suite.

# TODO: remove notes starting with ln
class TestStringMethods(unittest.TestCase):
    
    # ln Almost identical to check-expect(func(input)) syntax from systematic programming design

    # Each test within the test suite has to start with 'test'
    def test_upper(self):
        self.assertEqual('foo'.upper(), 'FOO')
    
    def test_isupper(self):
        self.assertTrue('FOO'.isupper())
        self.assertFalse('Foo'.isupper())
    
    # ln split(), will by default split a string by white-space into a list item
    def test_split(self):
        s = 'hello world'
        self.assertEqual(s.split(), ['hello', 'world'])

        # Check that s.split fails when the seperator is not a string.
        # ln TypeError is raised when object does not support attribute references
        # ln or assignments at all. In this case, a string does not contain numbers
        # ln and it makes no sense to split a string by number.
        with self.assertRaises(TypeError):
            s.split(2)

if __name__ == '__main__':
    unittest.main()

