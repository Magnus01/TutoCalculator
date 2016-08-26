var calculator = require("../src/C2Q1.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(3, 5);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'sum').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to calculate sum of 3 and 5", function() {
           
            calc.sum(3,5);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.sum).toBeDefined();
            console.log(typeof(calc.sum)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.sum(3,5); 
            expect(calc.sum).toHaveBeenCalled();
            expect(calc.sum).toHaveBeenCalledWith(3,5);
             
           
    });
      it("IS IT ADDED", function() {
            expect(calc.sum(3,5)).toBe(8);
             
           
    });  
                        it("Does the Sum Contain the correct essential code?", function() {
            
           var sumStr = calculator.sum.toString();
             expect(sumStr).toContain("function"); 
           expect(sumStr).toContain("return add1+add2"); 
    
               
       
         }); 

});
});  



 

