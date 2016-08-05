## falling
''' d = falling(t)
    Computes the distance (meters) an object has fallen due to gravity after t seconds.
'''
def falling(t):
    g = 9.81 # gravitational field (acceleration)
    d = (0.5)*g*t**2
    return d

def main():
    print("Falling objects")
    print("----------------")
    t = float(input("Time in seconds since object was dropped:"))
    d = falling(t)
    print("Distance object has fallen:", d,' m.')

main()
