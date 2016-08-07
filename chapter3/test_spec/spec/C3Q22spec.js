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
    expect(solution["-"].precedence).toBe(2)
    expect(solution["+"].precedence).toBe(2)
    expect(solution["/"].precedence).toBe(3)
    expect(solution["*"].precedence).toBe(3)
    expect(solution["^"].precedence).toBe(4)
  });
    it("Is it Defined??", function() {
            var product = solution["^"].precedence;
            expect(solution["-"].precedence).toBeDefined();
            console.log(typeof(solution["-"].precedence)+ "What is this");
         });
});    


