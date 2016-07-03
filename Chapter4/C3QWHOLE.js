
var InfixToPostfix = [];
var operatorStack = [];

var isNumeric = function(infix){
    return !isNaN(parseFloat(infix)) && isFinite(infix);
}


 Array.prototype.clean = function() {
for(var i = 0; i < this.length; i++) {
        if(this[i] === "") {
            this.splice(i, 1);
        }
    }
    return this;
}

MathSolver = function(infix){
 var infix = ourExpression   
    InfixToPostfix = [];
    operatorStack = [];
    var operators = {
        "^": {
            precedence: 4,
            },
        "/": {
            precedence: 3,
        },
        "*": {
            precedence: 3,
        },
        "+": {
            precedence: 2,
            },
        "-": {
            precedence: 2,
            }
        }
         infix = infix.replace(/\s+/g, "");
        infix = infix.split(/([\+\-\*\/\^\(\)])/).clean();
        
for (var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if(isNumeric(token) == true) {
                InfixToPostfix.push(Number(token));
            }
             else if("^*/+-".indexOf(token) !== -1)
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^/*+-".indexOf(o2) !== -1 && operators[o1].precedence <= operators[o2].precedence)
                {
                    var outputPop = operatorStack.pop();
                    InfixToPostfix.push(outputPop);
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
        };
             
    
        while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();
            InfixToPostfix.push(outputPop);    
        }

    return InfixToPostfix;
    }

function printStack() {
    return InfixToPostfix
}


    
    // creating stack. Holds the postfix (RPN) version of equation
// equation is used for debugging purposes
var tokenStack = new Array();
var equation = "";
// Defines the operatorToken class
function operatorToken(tokenIn) {
  this.token = tokenIn;
}

/*
    Input: the equation in a stack datastrucure
*   Precondition: The given stack must be in postfix notation
*   This is necessary to define the step by step process required to compute the result.
*   (eg) one operand at a time to be processed with the following operator
*   
*/
function setStack(InfixToPostfix){
    this.tokenStack = InfixToPostfix;
    console.log("our stack: ", tokenStack);
}

// Store various test equations as functions so we can quickly retest if we've changed something.
function test1() {
    tokenStack = new Array();
    console.log("Test1: 5 + 8 * sin(2*15)");
    console.log("postfix: 5 8 2 15 * sin * +");
    tokenStack.push(5);
    tokenStack.push(8);
    tokenStack.push(2);
    tokenStack.push(15);
    tokenStack.push(new operatorToken("*", "binary"));
    tokenStack.push(new operatorToken("sin", "unary"));
    tokenStack.push(new operatorToken("*", "binary"));
    tokenStack.push(new operatorToken("+", "binary"));
}

function test2() {
    tokenStack = new Array();
    console.log("Test2: 17^(2) + (4/3) + 2 * 4");
    console.log("postfix: 17 2 ^ 4 3 / + 2 4 * +");
    tokenStack.push(17);
    tokenStack.push(2);
    tokenStack.push(new operatorToken("^", "binary"));
    tokenStack.push(4);
    tokenStack.push(3);
    tokenStack.push(new operatorToken("/", "binary"));
    tokenStack.push(new operatorToken("+", "binary"));
    tokenStack.push(2);
    tokenStack.push(4);
    tokenStack.push(new operatorToken("*", "binary"));
    tokenStack.push(new operatorToken("+", "binary"));
}

function test3()
{
    tokenStack = new Array();
    console.log("Test3: -2*3");
    console.log("postfix: 2 3 * -");
    tokenStack.push(2);
    tokenStack.push(3);
    tokenStack.push(new operatorToken("*", "binary"));
    tokenStack.push(new operatorToken("-", "sign"));
}

function test4()
{
    tokenStack = new Array();
    console.log("Test3: -2*3");
    console.log("postfix: 2 3 * -");
    tokenStack.push(2);
    tokenStack.push(3);
    tokenStack.push(new operatorToken("*", "binary"));
    tokenStack.push(new operatorToken("-", "sign"));
}

function debug_manager(global_logging, function_logging, print_value) {
    print("hello");
}


function equate(token, num1, num2)
{
    sum = 0;
    tk = token;
    switch (tk) {
    case '+':
        sum += num1 + num2;
        console.log("+ result: ", sum);
        break;
    case '-':
        sum += num1 - num2;
        console.log("- result: ", sum);
        break;
    case '*':
        sum += num1 * num2;
        console.log("* result: ", sum);
        break;
    case '/':
        sum += num1 / num2;
        console.log("/ result: ", sum);
        break;

    case '^':
        sum += Math.pow(num1,num2);
        console.log("/ result: ", sum);
        break;
    case 'sin':
        sum += Math.sin(num1 * Math.PI / 180.0);
        console.log("+ result: ", sum);
        break;
    case 'cos':
        sum += Math.cos(num1);
        console.log("+ result: ", sum);
        break;
    case 'tan':
        sum += Math.tan(num1);
        console.log("+ result: ", sum);
        break;

    case 'arcsin':
        sum += Math.asin(num1);
        console.log("+ result: ", sum);
        break;
    case 'arccos':
        sum += Math.acos(num1);
        console.log("+ result: ", sum);
        break;
    case 'arctan':
        sum += Math.atan(num1);
        console.log("+ result: ", sum);
        break;

    case 'abs':
        sum += Math.abs(num1);
        console.log("+ result: ", sum);
        break;
    case 'sqrt':
        sum += Math.sqrt(num1);
        console.log("+ result: ", sum);
        break;
    case 'log':
        sum += Math.log(num1);
        console.log("+ result: ", sum);
        break;
    }
    return sum;
}

var main = function(InfixToPostfix)
{

var sum = 0;
var numStack = new Array();
for(var i = 0; i < tokenStack.length; i++)
{
        inputToken = tokenStack[i];
        console.log("The token: ", inputToken);
        if(isNaN(inputToken))
            {
               
                         num2 = numStack.pop()
                         num1 = numStack.pop()
                         opToken = inputToken;
                         sum = equate(opToken, num1, num2);
                         numStack.push(sum);
            }
        else
            {
                
                numStack.push(inputToken);
            }
}

    return sum;
}
var run = function()
                {
                    ourExpression = document.getElementById("input_expression").value;
                    console.log("am i running at all",ourExpression);
                    this.infix  = ourExpression
                    var ms = new MathSolver();
                    
                    setStack(printStack());
                    main();
                    
                }
