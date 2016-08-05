## module primes

''' x = is_prime(number)
    Computes true if the number is prime, false if not.
'''

def is_prime(number):
    number = abs(number)
    for i in range(2, number):
        if number % i == 0:
            return False
    return True

def main():
    title = '*** Prime Number ***'
    print(title)
    print('-'*len(title))
    print("Enter a number to determine if it's a prime or not.")
    number = int(input("Number: "))
    print("Number is prime = ", is_prime(number))

