var calculator = require("../src/C3Q4.js");

var sol = require("../src/C3Q4.js");

console.log("body", sol.MathSolver)

console.log("SOL OPERATORS STRING", sol.MathSolver);



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
            expect(calc.MathSolver(["4", "+", "5", "*", "2"])).toEqual([4 , 5, 2, "*", "+"]);
             
           
    });  
        
it("Does the MathSolver Contain the correct essential code?", function() {
            
           var MathSolverStr = sol.MathSolver.toString();
           var postfixStackStr = sol.postfixStack1.toString();
            var product = console.log(sol.MathSolver+ "What does this print out")
            
           expect(MathSolverStr).toContain("for (var i = 0; i < infix.length; i++)"); 
        
    expect(MathSolverStr).toContain("var token = infix[i];"); 
     expect(MathSolverStr).toContain("if (isNumeric(token) == true)"); 
    expect(MathSolverStr).toContain("postfixStack.push(Number(token)"); 
       
         }); 
        
        it("Is the postfixStack included?", function() {
           var postfixStackStr = sol.postfixStack1.toString();
           console.log(postfixStackStr+ "_postfixStack String");   
           expect(postfixStackStr).toContain("var postfixStack = []"); //CAN WE HAVE AN OR HERE TO GET MULTIPLE SYNTAX POSSIBILITIES
                 
         }); 


});
});
