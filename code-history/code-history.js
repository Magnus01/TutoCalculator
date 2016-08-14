/**************************************************************************************************************************************************************************

[Client Side] Code History Implementation 
    +) On submit, if correct, store as a string value (append to database/file)

**************************************************************************************************************************************************************************/


// code history
var code_history = {
    C1Q1: "",
    C1Q2: "",
    C1Q3: "",
    C1Q4: "",
    
    C2Q1: "",
    C2Q2: "",
    C2Q3: "",
    C2Q4: "",
    
    C3Q1: "",
    C3Q2: "",
    C3Q3: "",
    C3Q4: "",
    
    C4Q1: "",
    C4Q2: "",
    C4Q3: "",
    C4Q4: "",
}


var sayHello;
var sayGoodbye;


function main(qnavigation) {
    var mainArray = [];
    switch (qnavigation) {
        case 'c1q3':
            mainArray.push(function sayName() {
                console.log("Name");
            }.toString());
        case 'c1q2':
            mainArray.push(function sayHello() {
                console.log("Hello");
            }.toString());
        case 'c1q1':
            mainArray.push(function sayGoodbye() {
                console.log("Goodbye.");
            }.toString());
    }
    return mainArray;
}

var x = main("c1q2");
console.log(x);

for (var i = 0; i < x.lenght; i++) {
    var y = x[i];
    console.log(y);
    eval(y);
}



/**************************************************************************************************************************************************************************

[Client Side] Run Jasmine Specs
    +) Take the input from the users.
    +) Run input with code history strings using the eval function

**************************************************************************************************************************************************************************/

// Make sure jQuery is imported
$( document ).ready(function() {
    $('#submit-button').on('click', function() {
        console.log("Hello World.");
        eval($('#code-input').val());
        // Run Jasmine Unit Tests - Client Side
        success = true;
        // If the tests run successfully; add code to code history.
        if (success) {
            code_history.C1Q1 = $('#code-input').val();
            console.log(code_history);
        }
    });
});