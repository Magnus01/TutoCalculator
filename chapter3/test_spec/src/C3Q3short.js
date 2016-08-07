MathUtils = function() {};

var postfixStack = [];

function isNumeric(x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
}

MathUtils.prototype.MathSolver = function (infix) {
    postfixStack = [];
    for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
    } 
    return postfixStack;
}
exports.MathUtils = function (){
    return MathUtils;
};



exports.isNumeric = function(x) {  
    return isNumeric(x);
}


exports.MathSolver = function(infix) {  
    return MathSolver(infix);
}