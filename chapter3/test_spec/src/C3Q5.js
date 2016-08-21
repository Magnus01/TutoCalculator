MathUtils = function() {};



var postfixStack = [];


MathUtils.prototype.pushToArray = function(array) {
     var postfixStack = [];
    for(var i = 0; i < array.length; i++){
        var token = array[i];
        if (token > 3) {
        postfixStack.push(token);};
    };
    return postfixStack;
}; 

pushToArray = function(array) {
    for(var i = 0; i < array.length; i++){
        var token = array[i];
        if (token > 3) {
        postfixStack.push(token);};
    };
    return postfixStack;
}; 


//STUDENT INPUT PHP SOLUTION ABOVE
//KEEP THE TEMPLATE BELOW
exports.MathUtils = function () {
    return MathUtils;
};

exports.pushToArray = pushToArray;
