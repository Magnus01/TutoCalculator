var calculator = require("../src/C3Q6.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["LA", "Oslo", "Grimstad", "London"]);
        console.log(typeof(Pop)+ "object");
        spyOn(calc, 'Pop').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to calculate sum of 3 and 5", function() {
           
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.Pop).toBeDefined();
            console.log(typeof(calc.Pop)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]); 
            expect(calc.Pop).toHaveBeenCalled();
            expect(calc.Pop).toHaveBeenCalledWith(["LA", "Oslo", "Grimstad", "London"]);
             
           
    });
      it("IS IT ADDED", function() {
            expect(calc.Pop(["LA", "Oslo", "Grimstad", "London"])).toBe("Oslo");
             
           
    });  

});
});  