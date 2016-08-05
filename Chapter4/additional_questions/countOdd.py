## module countOdd
''' Computes 100 random numbers and keeps a count of how many of them are even and how many are odd.
'''
import random

def countOdd():
    odd_numbers = 0
    for i in range(100):
        val = random.randint(0, 1000)
        if val %2.0 == 0:
            odd_numbers += 1
    return odd_numbers

def main():
    print("Count odd numbers")
    odd_numbers = countOdd()
    print("odd: ", odd_numbers)
    print("even: ", abs(odd_numbers - 100))
    print("odd/even: ", odd_numbers/(abs(odd_numbers-100)))

main()

