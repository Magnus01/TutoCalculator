## insurance
''' insurance = insurance(cost)
    Computes the minimum amount of insurance adviced for the given cost of a structure.
'''

def insurance(cost):
    return cost*0.80

def getCost():
    '''Get the cost of a structure'''
    cost = float(input("Cost: "))
    return cost

def main():
    cost = getCost()
    c = insurance(cost)
    print("Minimum insurance needed for strucutre: ", c)

main()
