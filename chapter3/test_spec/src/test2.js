//var isNumeric = function(x)
//{
//     return !isNaN(parseFloat(x)) && isFinite(x);
//};

isNumeric = function (x) {
    return  isFinite(x);
};

exports.isNumeric = isNumeric;