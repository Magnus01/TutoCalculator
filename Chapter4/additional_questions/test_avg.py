## module test_avg
''' Given five test scores the program displays a letter
    grade for each score and the average test score.
'''

def calc_average(scores):
    '''list -> float
       Compute the average score from a list of scores.
    '''
    return sum(scores)/float(len(scores))

def stdDev(scores):
    S = 0.0
    mean = calc_average(scores)
    for s in scores:
        S += (s-mean)**2
    return (S/float(len(scores)))**0.5

def variance(scores):
    S = 0.0
    mean = calc_average(scores)
    for s in scores:
        S += (s-mean)**2
    return S/float(len(scores))

def determine_grade(score):
    ''' float -> str
        Computes a letter grade from given score.
        90-100  A
        80-89   B
        70-79   C
        60-69   D
        < 60    E
    '''
    if score >= 90.0:
        return 'A'
    elif score >= 80.0:
        return 'B'
    elif score >= 70.0:
        return 'C'
    elif score >= 60.0:
        return 'D'
    else:
        return 'E'

def main():
    title = '*** Test Grading ***'
    print(title)
    print('-'*len(title))
    print('\n')
    print("Scores >")
    scores = input("Enter 5 scores delimited by space ( 2 4 3): ")
    scores = scores.split()
    
    scores = [float(i) for i in scores]
    avg = calc_average(scores)
    sd = stdDev(scores)
    var = variance(scores)
    
    grades = {score: determine_grade(score) for score in scores}
    
    i = 1
    for score, grade in grades.items():
        print("Number: ", i, "\tScore: ", score, "\tGrade: ", grade,'\n')
        i += 1

main()


