var calculator = require("../src/C3Q6.js");


var sol = require("../src/C3Q6.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["LA", "Oslo", "Grimstad", "London"]);
        console.log(typeof(Pop)+ "object");
        spyOn(calc, 'Pop').andCallThrough();
    });
 
    describe("When using Pop function", function(){
         
       
        it("should be able take out the last string in an array", function() {
           
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.Pop).toBeDefined();
            console.log(typeof(calc.Pop)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]); 
            expect(calc.Pop).toHaveBeenCalled();
            expect(calc.Pop).toHaveBeenCalledWith(["LA", "Oslo", "Grimstad"]);
             
           
    });
      it("IS IT Popped", function() {
            expect(calc.Pop(["LA", "Oslo", "Grimstad", "London"])).toBe("London");
       
    });  
                it("Does the pushToArray Contain the correct essential code?", function() {
            
           var PopStr = sol.Pop.toString();
           
            var product = console.log(PopStr+ "What does this print out")
            
             expect(PopStr).toContain("function"); 
           expect(PopStr).toContain("return x.pop();"); 
    
               
       
         }); 

});
});  