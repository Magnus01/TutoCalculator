## module kinetic_energy
''' An object in motion has kinetic energy.
    An object's kinetic energy is calculated by:

    KE = (0.5)*m*v**2

    KE: Kinetic Energy
    m: Object's mass kilograms
    v: velocity in (m/s)
'''

def kinetic_energy(m, v):
    return (0.5)*m*v**2

def main():
    print("Kinetic Energy")
    print("---------------")
    m = float(input("mass (kg): "))
    v = float(input("velocity (m/s): "))

    print("\nKinetic Energy (KE) = ", kinetic_energy(m,v))

main()
