//infix expression should be ["4", "+", "5", "*", "2"]
var Cha3Q3 = require("../src/C3Q3.js");
describe("multiplication", function () {
  it("should multiply 2 and 3", function () {

    var product = Cha3Q3.printStack();
    expect(product).toEqual([3, 5, 2]);
  });
    

});    