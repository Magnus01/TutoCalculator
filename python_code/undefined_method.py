import unittest


class UndefinedMethod(unittest.TestCase):
    
    def test_no_such_method(self):
        s = 'hello'
        # strings have no method called helloThere()
        with self.assertRaises(AttributeError):
            s.helloThere()

if __name__ == '__main__':
    unittest.main()

