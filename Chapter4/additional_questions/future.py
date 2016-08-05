## future
''' Compute the mney saved after storing it in a savings account
'''

def future_value(i, t, P):
    return P * (1+i)**t

def main():
    print("*** Future value ***")
    val = float(input("Money in savings account: "))
    i = float(input("Interest rate: "))
    t = float(input("Months: "))
    print("Future value: ", future_value(i, t, val))

main()
