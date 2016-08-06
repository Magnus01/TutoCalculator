// Create a function that given a list
// Reverses the items in the list and returns the result.
// 
// It's possible to use the array.reverse function for this solution.
// For your own exercise you should try to do it without a premade function.
//
var sol = require("../src/pop_question.js");

describe("Pop question [temp name]", function()
        {
            it("should be defined", function()
                    {
                        expect(sol.reverseList).toBeDefined();
                     });
            it("should return an empty list when given an empty list", function()
                    {
                        expect(sol.reverseList([])).toEqual([]);
                     });
            it("should reverse [1,2,3] to be [3,2,1]", function()
                    {
                        tst_list = [1,2,3]
                        expect(sol.reverseList(tst_list)).toEqual([3,2,1]);
                    });
        });
