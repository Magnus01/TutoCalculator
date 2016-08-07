var sol = require("../src/test2.js");

console.log(sol.isNumeric.toString());

 beforeEach(function() {
      
        calc = new MathUtils(["4"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'isNumeric').andCallThrough();
    });

describe("isNumeric", function() {

    it("Does it contain??", function() {
        
        calc = new MathUtils(["4"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'isNumeric').andCallThrough();
        expect(calc.isNumeric).toBeDefined();
        console.log(typeof(calc.isNumeric)+ "function");
        calc.isNumeric(["4"]); 
        expect(calc.isNumeric).toHaveBeenCalled();
        expect(calc.isNumeric).toHaveBeenCalledWith(["4"]);
        var product = calc.isNumeric(4);
    expect(product).toBe(true);
        
          }); 
        
it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
           //  var product = console.log(sol.isNumeric.toString());
          // console.log(product+ "PRODUCT")
    var product = sol.isNumeric.toString();
    console.log(product);
          expect(product).toContain(["return !isNaN(parseFloat(x))"]);
          expect(product).toContain(["function (x)"]);
          expect(product).toContain(["return !isNaN(parseFloat(x)) && isFinite(x);"]);

           
         }); 

});

        
        
