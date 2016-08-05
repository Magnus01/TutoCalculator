## module math_quiz
''' Prints random math questions for client to answer.
'''

import random

def randMathQuiz():
    x = random.randint(-1000, 1000)
    y = random.randint(-1000, 1000)
    return x, y

def main():
    print("Math Quiz")
    print("------------")
    a, b = randMathQuiz()
    sol = a + b
    print("\n ",a,'\n',\
              "+"+str(b),
              "\n------")
    inp = float(input("= "))
    if inp == sol:
        print("Congratulations!")
    else:
        print("Better Practice more..")

main()

