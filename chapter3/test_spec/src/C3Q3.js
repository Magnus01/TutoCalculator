var postfixStack = new Array;
var infix = ["3", "+", "5", "*", "2"];


String.prototype.isNumeric = function() {
    return !isNaN(parseFloat(this)) && isFinite(this);
}

function MathSolver() {
 
    this.infixToPostfix = function(infix) {

            for(var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if(token.isNumeric()) {
                postfixStack.push(Number(token));
            }          
        } 
    } 
}

function printStack()
{
    return postfixStack;
}

function run()
    {
        postfixStack = [];
        var ourExpression = infix;
        var ms  = new MathSolver();
        console.log(ms.infixToPostfix(ourExpression));
        return postfixStack;
    }



//STUDENT INPUT CODE ABOVE
//TEMPLATE BELOW
exports.printStack = function(){
    run();
    return postfixStack
};
