/*
 * PROBLEM:
 * Create a function main that takes an array of OperatorTokens and numbers
 * in postfix notation.
 *
 * F.eks: [2, 4, new OperatorToken("+", "binary")]
 * The function should calculate the result of the given expression and return the correct answer
 *
 * Due to the complexity of this assignment, little care is given to how you've implemented it.
 * As long as your function is able to correctly compute the expressions we hand it, it will pass.
 */
var solution = require("../src/C4Q4.js");



describe("Chapter 4 Question 3", function () {
    
    // definition of arrays to be passed to the main funciton
    easyExpression = [13, 2, {operator: "*", type: "binary"}];
    mediumExpression = [2, {operator: "-", type: "sign"}, 14, {operator: "+", type: "binary"}];
    hardExpression = [13, 2, {operator: "*", type: "binary"}, 2, {operator: "-", type: "binary"}, 14, {operator: "+", type: "binary"}];
    
    
    describe("The function main computes the result of a postfix expression", function() {
        
        beforeEach(function() {
            spyOn(solution, "main").and.callThrough();
        });
        
        it("should be defined", function() {
            expect(solution.main).toBeDefined();    
        });
        
        it("should have been called", function () {
            solution.main(easyExpression);
            expect(solution.main).toHaveBeenCalled();
        });
        
        it("should have been called with the array named testArray", function() {
            solution.main(easyExpression);
            expect(solution.main).toHaveBeenCalledWith(easyExpression);
        });
        
        it("should compute the right answer to the easyExpression", function() {
           expect(solution.main(easyExpression)).toBe(26);
        });
        
        it("should compute the right answer to the mediumExpression", function() {
           expect(solution.main(mediumExpression)).toBe(12);
        });
        
        it("should compute the right answer to the hardExpression", function() {
           expect(solution.main(hardExpression)).toBe(38);
        });
        
        // in the postfix stack evaluation, there should be testing for the amount of numbers, and the amount of operator tokens.
        // I don't see how that could be possible, since we didn't create the token class before chapter 4.
        // This is definately something to look into!

    });
    
});

