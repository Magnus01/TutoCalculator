var calculator = require("../src/C3Q22.js");

console.log(calculator);
console.log(calculator.operators);
console.log(calculator.operators["+"].precedence);
            
 //console.log(calculator[name] +"Hey");

describe("precedence", function ()
{
  it("check precedence", function () 
  {

    solution = calculator.operators;
    
    var product = solution["^"].precedence;
    
    expect(product).toBe(4);
  });
});    

