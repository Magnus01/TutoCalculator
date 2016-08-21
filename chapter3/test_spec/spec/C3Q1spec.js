var sol = require("../src/test2.js");

console.log(sol.isNumeric.toString());
    var product = sol.isNumeric.toString();

 beforeEach(function() {
     String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g, '');};

      
        calc = new MathUtils(["4"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'isNumeric').andCallThrough();
       this.addMatchers({
            toHaveNormalizedText: function(expected) {
                var actualText = String(product).replace(/\s+/g, ' ');
                var result = actualText === expected;
                if( result) return result;
                //rest is only if it fails
                var notText = this.isNot ? " not" : "";
                var charcodes = [];
                for(var i=0; i<actualText.length; i++){
                    charcodes.push(actualText.charCodeAt(i));
                    if(i>23) break;
                }
                this.message = function () {return 'Expected "' + actualText + notText + '" to match "'+expected+'"\n\nFirst 25 charcodes:\n'+charcodes;};
                return result1;
            }
        });
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
    
    this.addMatchers({
            toHaveNormalizedText: function(expected) {
                var actualText = String(product).replace(/\s+/g, ' ');
                var result = actualText === expected;
                if( result) return result;
                //rest is only if it fails
                var notText = this.isNot ? " not" : "";
                var charcodes = [];
                for(var i=0; i<actualText.length; i++){
                    charcodes.push(actualText.charCodeAt(i));
                    if(i>23) break;
                }
                this.message = function () {return 'Expected "' + actualText + notText + '" to match "'+expected+'"\n\nFirst 25 charcodes:\n'+charcodes;};
                return result;
                console.log(result + "result")
            }
        });
    
    var product = sol.isNumeric.toString();
    console.log(product);
          expect(product).toHaveNormalizedText("function (x) { return !isNaN(parseFloat(x)) && isFinite(x); }");
          expect(product).toContain(["function (x)"]);
          expect(product).toContain(["return !isNaN(parseFloat(x)) && isFinite(x);"]);

           
         }); 

});