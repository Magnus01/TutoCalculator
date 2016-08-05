## rock_paper_scissor
import random

def playerHand():
    hand = input("r(rock), p(paper) or s(scissor): ")
    return hand

def computerHand():
    hand = random.randint(1,3)
    return hand

def winner(cHand, pHand):
    if cHand == 1:
        if pHand == 'r':
            return 'draw' 
        elif pHand == 's':
            return 'computer'
        else:
            return 'player'
    elif cHand == 2:
        if pHand == 'r':
            return 'computer'
        elif pHand == 's':
            return 'player'
        else:
            return 'draw'
    else:
        if pHand == 'r':
            return 'player'
        elif pHand == 's':
            return 'draw'
        else:
            return 'computer'



def main():
    title = '** Rock Paper scissors **'
    print(title)
    print('-'*len(title))

    pHand = playerHand()
    cHand = computerHand()

    who_won = winner(cHand, pHand)

    if who_won == 'computer':
        print("Computer won with ",cHand,"against ", pHand)
    elif who_won == 'player':
        print("Player won with ", pHand, "against ", cHand)
    else:
        print("Draw! Player: ", pHand, " - computer: ", cHand)
main()
