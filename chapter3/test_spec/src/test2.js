//var isNumeric = function(x)
//{
//     return !isNaN(parseFloat(x)) && isFinite(x);
//};



isNumeric = function (x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
};

exports.isNumeric = isNumeric;