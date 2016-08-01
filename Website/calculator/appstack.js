// defining a variable for the token stack (can be wrong...)
var postfixStack = new Array();
var postfixStack2 = "hello";

/* Operator has two pieces of information, the kind of operator(+,- etc) and whether it is unary or binary

*/
function operatorToken(tokenIn, type) {
  this.token = tokenIn;
    this.arguments = type;
}

/* DEFINE if token is a number (aka not an operator)

*/
String.prototype.isNumeric = function() {
    return !isNaN(parseFloat(this)) && isFinite(this);
}

/* 
Gets rid of space
*/

 Array.prototype.clean = function() {
for(var i = 0; i < this.length; i++) {
        if(this[i] === "") {
            this.splice(i, 1);
        }
    }
    return this;
}

/* 
Currently does not work, meant to be basic interface
*/
 
var run = function()
{
    var ourExpression = document.getElementById("input_box").value;
    console.log(ourExpression);
    var ms  = new MathSolver();
    console.log(ms.infixToPostfix(ourExpression));
    console.log("the stack: ", postfixStack);
}

/* 
Name:Infix to postfix
Job:Convert infix input to postfix resulting in a stack for the calculation algorithm
First: Defines ranking of precedence for operators


*/
function MathSolver() {
 
    this.infixToPostfix = function(infix) {
        var outputQueue = "";
        var operatorStack = [];
        var operators = {
            "^": {
                precedence: 4,
                associativity: "Right"
            },
            "/": {
                precedence: 3,
                associativity: "Left"
            },
            "*": {
                precedence: 3,
                associativity: "Left"
            },
            "+": {
                precedence: 2,
                associativity: "Left"
            },
            "-": {
                precedence: 2,
                associativity: "Left"
            }
        }
        /*
        Search for global (g) i.e every value in the script for (s) ie empty space and replace it with blank
        */
        infix = infix.replace(/\s+/g, "");
        infix = infix.split(/([\+\-\*\/\^\(\)])/).clean();
        
        /*
        Check the infex length
        Define token to be infix index
        if token is numeric send it as a stack to postfix
        if token is operator
            define token to be infix o1
            define token to be on stack o2 (the length is subtracted by 1 in order to go through the stack list)
            
        Three condition AND statement
            
        */
        for(var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if(token.isNumeric()) {
                outputQueue += token + " ";
                postfixStack.push(Number(token));       //SMM
            } 
            else if("^*/+-".indexOf(token) !== -1)
            {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                console.log("value of o2:",o2);
                while("^*/+-".indexOf(o2) !== -1 && ((operators[o1].associativity === "Left" && operators[o1].precedence <= operators[o2].precedence) || (operators[o1].associativity === "Right" && operators[o1].precedence < operators[o2].precedence)))
                {
                    // outputQueue += operatorStack.pop() + " ";
                    var outputPop = operatorStack.pop();
                    outputQueue += outputPop + " ";
                    console.log("outputpop", outputPop);
                    postfixStack.push(new operatorToken(outputPop,"binary"));
                    console.log("smm");
                    
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
            
            else if(token === "(") {
                operatorStack.push(token);
            }
            else if(token === ")")
            {
                while(operatorStack[operatorStack.length - 1] !== "(") {
                    var outputPop = operatorStack.pop();
                    outputQueue += outputPop + " ";
                    console.log("outputpop", outputPop);
                    postfixStack.push(new operatorToken(outputPop,"binary"));
                    //outputQueue += operatorStack.pop() + " ";
                    
                }
                var outputPop = operatorStack.pop();
                outputQueue += outputPop + " ";
            }
        }
        while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();
            outputQueue += outputPop + " ";
            console.log("outputpop", outputPop);
            postfixStack.push(new operatorToken(outputPop,"binary"));    //SMM
        }
            
                              
        return outputQueue;
    }
 
   this.printStack = function() {
                return postfixStack;
            }
}


function printStack()
{
    return postfixStack;
}

console.log(postfixStack)