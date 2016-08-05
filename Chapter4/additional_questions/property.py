## module property
''' Computes property tax and assesment value from a given actual value'''

def getValue():
    val = float(input("Property value: "))
    return val

def assessment(val):
    return 0.6*val

def propertyTax(assessment):
    return 0.72*assessment/100

def main():
    print("Property Tax")
    print("-----------")
    print("\nComputes assessment value and property value,\n", \
            "from the value of a property.")
    value = getValue()
    as_val = assessment(value)
    tax = propertyTax(as_val)
    print("Value:", value)
    print("assessment:",as_val)
    print("property tax:",tax)

main()
