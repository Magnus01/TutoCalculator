## automobile
''' Given the costs for operating an automobile
    Computes the monthly and annual costs
'''

def loanPayment():
    loan = float(input("Loan payment: "))
    return loan

def insurancePay():
    c = float(input("Insurance payment: "))
    return c

def gasPay():
    g = float(input("Gas payment: "))
    return g

def oilPay():
    o = float(input("Oil payment: "))
    return o

def tiresPay():
    t = float(input("Tires payment: "))
    return t

def maintenancePay():
    m = float(input("Maintenance payment: "))
    return m

def monthlyCost(expenses):
    return sum(expenses)

def annualCost(expenses):
    return monthlyCost(expenses)*12.0

def main():
    print("Calculates total monthly and yearly expenses for owning an automobile given individual costs.")
    expenses = []
    expenses.append(loanPayment())
    expenses.append(insurancePay())
    expenses.append(gasPay())
    expenses.append(oilPay())
    expenses.append(tiresPay())
    expenses.append(maintenancePay())
    
    print("Monthly cost:", monthlyCost(expenses))
    print("Annual cost:", annualCost(expenses))
main()

