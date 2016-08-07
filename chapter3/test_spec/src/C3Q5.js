MathUtils = function() {};



var postfixStack = new Array;
var array = ["2", "3", "2"];

MathUtils.prototype.pushToArray = function() {
    for(var i = 0; i < array.length; i++){
        var token = array[i];
        postfixStack.push(token);
    };
    return postfixStack;
}; 



//STUDENT INPUT PHP SOLUTION ABOVE
//KEEP THE TEMPLATE BELOW
exports.MathUtils = function () {
    return MathUtils;
};

var postfixStack = [];

function isNumeric(x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
}

MathSolver = function (infix) {
    postfixStack = [];
    for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
    } 
    return postfixStack;
}
exports.MathSolver = function (infix){
    return MathSolver(infix);
};