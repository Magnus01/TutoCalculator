## module paint

''' A painting company has determined that for every 112 square feet of wall space,
    gallon of pain and eight hours of labor is required.  The company charges $35.00
    per hour for labor.
'''

def wallspace():
    space = float(input("The amount in square feet of wall to be painted: "))
    return space

def pricePerGallonPaint():
    price = float(input("The price of a gallon of paint: "))
    return price

def paintNeeded(space):
    return space/112

def hoursNeeded(space):
    return (space/112)*8

def laborCharges(hours):
    return hours*35.0

def totalCost(laborCost, 
def main():
    print("Painting")
    print("------------\n")
    
    space = wallspace()
    price = pricePerGallonPain()

    print("Number of gallons of paint needed: ", wallspace
