var postfixStack = new Array

String.prototype.isNumeric = function() {
    return !isNaN(parseFloat(this)) && isFinite(this);
}


function MathSolver() {

this.infixToPostfix = function(infix) {
        

 for(var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if(token.isNumeric()) {
                postfixStack.push(Number(token));       //SMM
            } 
       
        }
      
 }
   this.printStack = function() {
                return postfixStack;
            }
}


console.log(postfixStack)