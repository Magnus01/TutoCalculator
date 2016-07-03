var calculator = require("../src/C2Q2.js");

describe("multiply", function () {
  it("should multiply 2 and 3", function () {
    var product = calculator.multiply(2, 3);
    expect(product).toBe(6);
  });
    
     it("should add 3 and 5", function () {
    var product = calculator.multiply(3, 5);
    expect(product).toBe(15);
  });
});    