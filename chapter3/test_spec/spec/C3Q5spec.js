var calculator = require("../src/C3Q5.js");

var sol = require("../src/C3Q5.js");

console.log("body", sol.pushToArray)

console.log("SOL OPERATORS STRING", sol.pushToArray);


describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["4", "5", "2"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'pushToArray').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        
        
        it("Is it Defined??", function() {
            
            expect(calc.pushToArray).toBeDefined();
            console.log(typeof(calc.pushToArray)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.pushToArray(["4", "5", "2"]); 
            expect(calc.pushToArray).toHaveBeenCalled();
            expect(calc.pushToArray).toHaveBeenCalledWith(["4", "5", "2"]);
             
           
    });
      it("Does it remove operators?", function() {
          
            expect(calc.pushToArray(["4", "5", "2"])).toEqual(["4", "5"]);
             
           
    });  

           it("Does the pushToArray Contain the correct essential code?", function() {
            
           var PushToArrayStr = sol.pushToArray.toString();
           
            var product = console.log(sol.PushToArrayStr+ "What does this print out")
            
             expect(PushToArrayStr).toContain("for"); 
           expect(PushToArrayStr).toContain("var i = 0; i < array.length; i++)"); 
        
    expect(PushToArrayStr).toContain("var token = array[i];"); 
     expect(PushToArrayStr).toContain("postfixStack.push(token)");
               expect(PushToArrayStr).toContain("return postfixStack;"); 
               
       
         }); 

});
});