## number_guess
''' User must guess a random number 1-100
'''
import random

def secret_number():
    return random.randint(1, 100)

def intro():
    print("Number Guess!")
    print("---------------")
    print("Guess a number between 1-100!")

def main():
    intro()
    number = secret_number()
    
    while True:
        guess = float(input("Guess a number 1-100: "))
        if guess == number:
            print("Correct!")
            break
        elif guess < number:
            print("Too low!")
        else:
            print("Too high!")

main()
