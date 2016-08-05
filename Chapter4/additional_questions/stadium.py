## stadium

''' There are three seating categories at a stadium. For a softball game, Class A seats cost $20,
    Class B seats costs $15, and Class C seats cost $10.
    
    Given the amount of tickets sold for each class, computes the amount of income from ticket sales.
'''
class_a = 20
class_b = 15
class_c = 10

def income_a():
    n = int(input("tickets sold for class a: "))
    return n*class_a

def income_b():
    n = int(input("Tickets sold for class b: "))
    return n*class_b

def income_c():
    n = int(input("tickets sold for class c: "))
    return n*class_c

def main():
    print("Ticket sales.")
    inca = income_a()
    incb = income_b()
    incc = income_c()
    tot = inca+incb+incc
    print("total earned:", tot)

main()
