## module primes_list
''' Computes the primes numbers from 1-100
    imports is_prime from primes
'''

import primes

def main():
    title = "*** Primes List ***"
    print(title)
    print("-"*len(title))
    primes_l = []
    for i in range(1, 101):
        if primes.is_prime(i):
            primes_l.append(i)

    print(primes_l)

main()


