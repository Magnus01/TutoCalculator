exports.OperatorToken = function(token, type) {
    this.token = token;
    this.arguments = type;
}

exports.multiply = function(mul1, mul2)
{
    return mul1*mul2;
}

exports.equate = function(token, num1, num2)
{
    sum = 0;
    tk = token;
    switch (tk) {
    case '+':
        sum += num1 + num2;
        console.log("+ result: ", sum);
        break;
    case '-':
        sum += num1 - num2;
        console.log("- result: ", sum);
        break;
    case '*':
        sum += num1 * num2;
        console.log("* result: ", sum);
        break;
    case '/':
        sum += num1 / num2;
        console.log("/ result: ", sum);
        break;

    case '^':
        sum += Math.pow(num1,num2);
        console.log("/ result: ", sum);
        break;
    case 'sin':
        sum += Math.sin(num1 * Math.PI / 180.0);
        console.log("+ result: ", sum);
        break;
    case 'cos':
        sum += Math.cos(num1);
        console.log("+ result: ", sum);
        break;
    case 'tan':
        sum += Math.tan(num1);
        console.log("+ result: ", sum);
        break;

    case 'arcsin':
        sum += Math.asin(num1);
        console.log("+ result: ", sum);
        break;
    case 'arccos':
        sum += Math.acos(num1);
        console.log("+ result: ", sum);
        break;
    case 'arctan':
        sum += Math.atan(num1);
        console.log("+ result: ", sum);
        break;

    case 'abs':
        sum += Math.abs(num1);
        console.log("+ result: ", sum);
        break;
    case 'sqrt':
        sum += Math.sqrt(num1);
        console.log("+ result: ", sum);
        break;
    case 'log':
        sum += Math.log(num1);
        console.log("+ result: ", sum);
        break;
    }
    return sum;
}