MathUtils = function() {};

var city = ["LA", "Oslo", "Grimstad", "London"]

MathUtils.prototype.Pop = function () {
    return city.pop();
};

exports.MathUtils = function() {
    return MathUtils;
};

