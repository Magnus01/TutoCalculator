var calculator = require("../src/C3Q1.js");

describe("isNumeric", function () {
  it("identify number or isNaN", function () {
    var product = calculator.isNumeric(3);
    expect(product).toBe(true);
  });
});  