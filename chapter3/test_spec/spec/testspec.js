var sol = require("../src/test2.js");

console.log(sol.isNumeric.toString());



describe("isNumeric", function() {
        
it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
           //  var product = console.log(sol.isNumeric.toString());
          // console.log(product+ "PRODUCT")
    var product = sol.isNumeric.toString();
    console.log(product);
          expect(product).toContain(["return !isNaN(parseFloat(x))"]);

           
         }); 

});
