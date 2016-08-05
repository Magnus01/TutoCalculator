## module feetToInches
''' inches = feetToInches(feet)
    Computes inches from feet.
'''
def feetToInches(feet):
    return feet*12

def main():
    print("Feet to inches converter")
    print("Enter an amount of feet to find the corresponding inches.")
    feet = float(input("Feet: "))
    print("Inches: ", feetToInches(feet))

main()
