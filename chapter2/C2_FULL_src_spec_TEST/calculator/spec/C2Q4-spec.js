var calculator = require("../src/C2Q4.js");
console.log(calculator.fc);

describe("list", function () {
    
    /*****************
    PARSING SETUP START
    *****************/
    
    var code_as_string; // these will all equal undefined by default
    var first_word_for;
    var for_parenthesis_start;
    var for_parenthesis_end;
    var for_in_parts;
    var count_variable_name;
    
    code_as_string = calculator.fc.toString();
    
    /*****************
    PARSING SETUP END
    *****************/
    
    it("has a the word 'for' in the code somewhere", function() {
        // can use toContain function
        if (!isNaN(code_as_string.search("for"))) {
            first_word_for = code_as_string.search("for");
        }
        expect(!isNaN(code_as_string.search("for"))).toBe(true);
    });
    
    it("has the start parenthesis of the for loop included", function() {
        for (var i = code_as_string.search("for"); code_as_string[i] != "("; i++) {
            for_parenthesis_start = i + 1;
        }
        expect(!isNaN(for_parenthesis_start)).toBe(true);
    });
    
    it("has the ending parenthesis of the for loop included", function() {
        for (var i = for_parenthesis_start; code_as_string[i] != ")"; i++) {
            for_parenthesis_end = i + 1;
        }
        expect(!isNaN(for_parenthesis_end)).toBe(true);
    });
    
    it("has three different sections within the for loop, all of which are separated by a comma", function() {
        for_in_parts = code_as_string.substring(for_parenthesis_start+1, for_parenthesis_end).split(";");
        expect(for_in_parts != undefined && for_in_parts.length == 3).toBe(true);
    });
    
    it("has a variable declared", function() {
        // need to add fail-safe for extra spaces!
        count_variable_name = for_in_parts[0].split(" ")[1];
        expect(count_variable_name != undefined && count_variable_name != " ").toBe(true);
    });
    
    it("has the variable set to 0", function () {
        eval(for_in_parts[0]);
        expect(i).toBe(0);
    });
    
    it("has the variable incremented by 1 after each loop", function (){
        eval(for_in_parts[0]);
        eval(for_in_parts[2]);
        expect(i).toBe(1);
    });
    
    it("has the limit of the loop set to the lenght of the list", function () {
        var list = [1,2,3,1,1,5,4,3];
        eval(count_variable_name + " = " + (list.length - 1).toString());
        //console.log(i); // equals 7
        expect(eval(for_in_parts[1])).toBe(true);
        eval(count_variable_name + " = " + (list.length + 1).toString());
        //console.log(i); // equals 9
        expect(eval(for_in_parts[1])).toBe(false);
    });
    
    it("count 1's", function () {
        expect(calculator.fc()).toBe(3);
    });
 });   

    
