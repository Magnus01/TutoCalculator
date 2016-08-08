/*****************


SYNTAX ERROR = won't run
SEMANTIC ERROR = will run, but not like you intended


We now have an editor that can pinpoint your syntax errors.
We also have a mechanism that rewrites and displays error messages.

One thing we can't pinpoint, and which could be a very bad issue,
is the chance of creating endless loops. This would be a mistake in
the semantics of a for loop, that we have in one chapter.

The reason why semantic errors can't really be implemented in a language
is because it's dependent on the goal of the program. In our case, we have
the goal of the program explained in detail. This makes the problem of checking
for semantic errors much more solvable.


*****************/

var test = require("./st.js");
// logs the js file as a string to the console.






/*** 

    for loop semantics testing

***/


// defining needed variables
var code_as_string;
var for_parenthesis_start;
var for_parenthesis_end;
var for_in_parts;
var count_variable_name;

//str.split(" ")


// Import the code into sting format
code_as_string = test.t.toString();

// find first instance of a for loop in the code.
first_word_for = code_as_string.search("for");

// finding the for parenthesis start
for (var i = code_as_string.search("for"); code_as_string[i] != "("; i++) {
    for_parenthesis_start = i + 1;
}

// finding the for parenthesis end
for (var i = for_parenthesis_start; code_as_string[i] != ")"; i++) {
    for_parenthesis_end = i + 1;
}

// extracting the specific part from the main string, and splitting it into an array
for_in_parts = code_as_string.substring(for_parenthesis_start+1, for_parenthesis_end).split(";");

// extracting the chosen count variable name
count_variable_name = for_in_parts[0].split(" ")[1];
console.log(count_variable_name);

console.log(code_as_string[for_parenthesis_start]);
console.log(code_as_string[for_parenthesis_end]);
console.log(for_in_parts);
console.log(test.t.toString());

// evalute the three expressions, and print out the variable value after each of them.
eval(for_in_parts[0]);
console.log(eval(count_variable_name));
eval(for_in_parts[1]);
console.log(eval(count_variable_name));
eval(for_in_parts[2]);
console.log(eval(count_variable_name));


/*****************

Add this to an actual unit test.
    C2Q4

*****************/