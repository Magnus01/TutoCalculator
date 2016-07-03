/*function isNumeric(x){
    return !isNaN(parseFloat(x)) && isFinite(x);
}*/
//PHP STUDENT SOLUTION GOES HERE
isNumeric = function (x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
};

//BELOW IS FOR TEMPLATE
exports.isNumeric = function(x) {  
    return isNumeric(x);
}

