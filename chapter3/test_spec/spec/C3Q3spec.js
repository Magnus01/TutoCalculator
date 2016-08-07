var calculator = require("../src/C3Q3short.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["4", "+", "5", "*", "2"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'MathSolver').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to return ONLY numbers", function() {
           
            calc.MathSolver(["4", "+", "5", "*", "2"]);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.MathSolver).toBeDefined();
            console.log(typeof(calc.MathSolver)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.MathSolver(["4", "+", "5", "*", "2"]); 
            expect(calc.MathSolver).toHaveBeenCalled();
            expect(calc.MathSolver).toHaveBeenCalledWith(["4", "+", "5", "*", "2"]);
             
           
    });
      it("Does it remove operators?", function() {
            expect(calc.MathSolver(["4", "+", "5", "*", "2"])).toEqual([4, 5, 2]);
             
           
    });  

});
});
