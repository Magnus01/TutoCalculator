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
