MathUtils = function() {};
postfixStack1 = function() {
var postfixStack = [];
var operatorStack = [];
};


var postfixStack = [];
var operatorStack = [];



isNumeric = function(x){
    return !isNaN(parseFloat(x)) && isFinite(x);
};

//Export as a string first solution

//Export as a prototype function copied from previous
MathUtils.prototype.MathSolver = function(infix) {
     var postfixStack = [];
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
        };
    
    
  for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
             else if("^*/+-".indexOf(token) !== -1)
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^*/+-".indexOf(o2) !== -1 && ((operators[o1].associativity === "Left" && operators[o1].precedence <= operators[o2].precedence)))
                {
                    var outputPop = operatorStack.pop();
                    //postfixStack.push(new operatorToken(outputPop,"binary"));
                     postfixStack.push(outputPop);
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
    };
      
    while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();

            postfixStack.push(outputPop);    
        };
    
return postfixStack;
};

MathSolver = function(infix) {
     var postfixStack = [];
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
        };
    
    
  for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
             else if("^*/+-".indexOf(token) !== -1)
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^*/+-".indexOf(o2) !== -1 && ((operators[o1].associativity === "Left" && operators[o1].precedence <= operators[o2].precedence)))
                {
                    var outputPop = operatorStack.pop();
                    //postfixStack.push(new operatorToken(outputPop,"binary"));
                     postfixStack.push(outputPop);
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
    };
      
    while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();

            postfixStack.push(outputPop);    
        };
    
return postfixStack;
};

exports.MathSolver = MathSolver;


exports.postfixStack1 = postfixStack1;

exports.MathUtils = function (){
    return MathUtils;
};

