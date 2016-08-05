## module calories
''' cal = calories(fat, carbs)
    Computes the amount of calories consumed in a day
    given the amount of fat grams and carbohydrate grams eaten in a day.
'''

def calFromFat(fat):
    return fat*9

def calFromCarbs(carbs):
    return carbs*4

def calories(fat, carbs):
    return calFromFat(fat) + calFromCarbs(carbs)

def main():
    print("Calories.py\n")
    fat = float(input("Fat (grams) eaten in a day:"))
    carbs = float(input("Carbohydrates (grams) eaten in a day:"))
    print("\n----------------------")
    print("Calories from Fat:", calFromFat(fat))
    print("Calories from Carbohydrates:", calFromCarbs(carbs))
    print("Total:", calories(fat, carbs))

main()
