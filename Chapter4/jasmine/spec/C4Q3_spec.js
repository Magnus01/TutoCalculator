// require
var calculator = require("../src/C4Q3.js");


/*
 * PROBLEM:
 * Create a function called 'countOperators' that counts and returns the number of OperatorTokens in the list.
 * The list given can include both numbers and OperatorTokens.
 * ex. [1, 2, new OperatorToken("+", "binary")] - function should output 1.
 * ex. [5, 2, 4, new OperatorToken("*", "binary"), new OperatorToken("+", "binary")] - function should output 2.
 *
 * hint: function isNaN - look it up.
 */
OperatorToken = function(operator, type){
    this.operator = operator;
    this.type = type;
}

// chapter 4 - question 4
describe("Chapter 4 Question 3", function () {
    
    describe("The countOperators funciton", function () {
        
        // definition of testing arrays
        var easyArray = [new OperatorToken("+", "binary"), 1, 2];
        var mediumArray = [3, 2, 4, new OperatorToken("*", "binary"), new OperatorToken("+", "binary")];
        var hardArray = [3, 2, 4, new OperatorToken("*", "binary"), new OperatorToken("+", "binary"), new OperatorToken("+", "binary"), 1, 2];
        
        
        beforeEach(function() {
            spyOn(calculator, 'countOperators').and.callThrough();
        });
        
        it("should be defined", function () {
            expect(calculator.countOperators).toBeDefined();
        });
        
        it("should have been called", function () {
            calculator.countOperators(easyArray);
            expect(calculator.countOperators).toHaveBeenCalled();
        });
        
        it("should have been called with the array named testArray", function() {
            calculator.countOperators(easyArray);
            expect(calculator.countOperators).toHaveBeenCalledWith(easyArray);
        });
        
        it("should count the operator tokens in the easyArray", function () {
            expect(calculator.countOperators(easyArray)).toBe(1);
        });
        
        it("should count the operator tokens in the mediumArray", function () {
            expect(calculator.countOperators(mediumArray)).toBe(2);
        });
        
        it("should count the operator tokens in the hardArray", function () {
            expect(calculator.countOperators(hardArray)).toBe(3);
        });
    });
    
});