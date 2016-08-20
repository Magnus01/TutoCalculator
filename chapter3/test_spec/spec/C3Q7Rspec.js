var Check = require("../src/C3Q7R.js")

describe("Cahpter 3 IndexOf question", function(){
       beforeEach(function() {
      
        calc = new MathUtils();
        console.log(typeof(calc) + "object");
        spyOn(calc, 'check').andCallThrough();
    });
    describe("Test IndexOf function ", function() {
        var something = Check.check.toString();
        console.log(something);
       
        it("Check if function was called ", function() {
           calc.check("Hello world, welcome to the universe.");
           expect(calc.check).toHaveBeenCalled();
           expect(calc.check).toHaveBeenCalledWith("Hello world, welcome to the universe.");
        });
        
        it("Check if indexOf was used", function () {
           expect(something).toContain("indexOf");
           expect(something).toContain("welcome")
        });
        
        it("Check string for 'welcome' ", function() {
           expect(calc.check("Hello world, welcome to the universe.")).toBe(13); 
        });
    });
  
});