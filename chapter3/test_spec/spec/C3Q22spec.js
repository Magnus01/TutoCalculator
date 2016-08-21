var sol = require("../src/test2.js");

console.log(sol.isNumeric.toString() + "GETS");

console.log(sol.isNumeric + "THIS MUST PRINT IT OUT");
console.log(sol.isNumeric["+"].precedence);
            
 //console.log(calculator[name] +"Hey");

describe("precedence", function ()
{
    
    
  it("check precedence", function () 
  {

    solution = sol.operators;
    
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
    
    it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
          
          // console.log(product+ "PRODUCT")
 var string = sol.operators.toString()
    console.log(string);
          expect(string).toContain("^");
          expect(string).toContain("precedence: 4");
        
          expect(string).toContain("function (x)");
          expect(string).toContain("return !isNaN(parseFloat(x)) && isFinite(x);");

           
         }); 
});    


