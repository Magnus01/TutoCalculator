var calculator = require("../src/C3Q22.js");


console.log(calculator.operators.notstring);
 //console.log(calculator[name] +"Hey");

describe("precedence", function ()
{
  it("check precedence", function () 
  {

    solution = calculator.operators;
    
    var product = solution["^"];
    
    expect(product).toBe(4);
  });
});    

