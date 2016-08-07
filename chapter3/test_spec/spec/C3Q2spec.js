var calculator = require("../src/C3Q22.js");


console.log(calculator.operators.precedence[^]);
 //console.log(calculator[name] +"Hey");
//for strings access using square brackets
//for variables access using . notation                                            

describe("precedence", function ()
{
  it("check precedence", function () 
  {

    solution = calculator.operators;
    
    var product = solution["^"];
    
    expect(product).toBe(4);
  });
});    

