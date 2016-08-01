// require
var calculator = require("../src/calculator.js");
console.log(calculator);

// chapter 4 - question 1
describe("mul", function(){
    it("Should return 6", function(){
        expect(calculator.multiply(3,2)).toBe(6);
    });
});

describe("Chapter 4 Task 1", function () {  
    it("should create a function that defines an object called operatorToken", function () {
        expect(typeof calculator.OperatorToken).toBe('function');
    });
    it("should contain properties token and arguments passed from the parameters", function () {
        var test = new calculator.OperatorToken('+', 'binary');
        expect(test.token + test.arguments).toBe('+binary');
    });
});




// chapter 4 - question 3
describe("Chapter 4 Task 3", function () {  
    it("should create a function called equate", function () {
        expect(typeof calculator.equate).toBe('function');
    });
    
    it("should take 3 parameters", function () {
        expect(calculator.equate.length).toBe(3);
    });
    it("should give the right answer to a plus expression", function () {
        expect(calculator.equate("+", 30, 31)).toBe(61);
    });
    it("should give the right answer to a division expression", function () {
        expect(calculator.equate("/", 30, 15)).toBe(2);
    });
});




// chapter 4 - question 4
describe("Chapter 4 Task 4", function () {  
    it("should ...", function () {
        expect(1).toBe(1);
    });
});