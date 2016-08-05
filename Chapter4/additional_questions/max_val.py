## module max_val
''' max = max_of_two(x1, x2)
    Returns the maximum of the given numbers
'''

def max_of_two(x1, x2):
    max_val = x1
    if max_val > x2:
        return max_val
    return x2

def main():
    print("Max Value")
    print("-----------")

    x1 = float(input("Val1 : "))
    x2 = float(input("Val2 : "))
    max_val = max_of_two(x1, x2)
    print("Max Value:", max_val)

main()
