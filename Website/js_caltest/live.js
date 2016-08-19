// Add following code to HTML (or make sure it's already there)
/*
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="live.js" type="text/javascript"></script>
*/

// additionally, add these arguments to the input tag:
/*
id="input_expression"
autofocus onKeyPress="liveUpdate()"
onKeyUp="liveUpdate()"
*/

// for showing the result
function liveUpdate () {
    // the html code running the appstack js file
    var ourExpression = document.getElementById("input_expression").value;
    console.log("am i running at all",ourExpression);
    var ms  = new MathSolver();
    console.log(ms.infixToPostfix(ourExpression));
    setStack(printStack());
    main();
    console.log("the stack: ", postfixStack);
    // end of html code running the appstack js file.
	
    
    
	// getting the input and storing it in a variable.
	var input_expression = document.getElementById("input_expression");
	// result of conversion to prostfix
    // Ideally, we want to have a single functino here that returns the RPN Notation.
	var postfix_expression = ms.infixToPostfix(ourExpression);
	// result of calculation based on the postfix expression
    // Ideally, we want to have a single functino here that returns the result.
    var expression_result = thaResult;
	
	// if the expression is valid, the result and postfix notation change right away.
	if (true) {
		// output the postfix result in the span tag with id "postfix_output"
		var postfix_output = document.getElementById("postfix_output");
        postfix_output.innerText = postfix_expression;

		// output the result of the calculation in the span with id "result_output"
		var result_output = document.getElementById("result_output");
        result_output.innerText = expression_result;
	};
	
	/*
	
	some jquery candy that can even change the actual
	html code if we want to display some stuff related
	to certain expressions.

	Example: We get an expression with an x as input by
	the user. We want the user to specify the x. In that
	case, we can add an html input box when the code sees
	the 'x' in the expression. Pretty freaking cool.

	The html can be bundeled into templates that can change
	in relation to the expression at hand. Cool interfaces
	can be made from this.

	var expression_with_var = '<h1>Yeeeeaahh.</h1><a onclick="addXifyer()" class="btn btn-lg btn-primary">Click me</a>';
	
	//checking if the expression is valid or not.
	if (expression is valid) {
		// showing the expression on postfix form
		$("div.").html("Something here with a span thing for the rpn");
		// actually calculating the result
		$("div.").html("Something here with a span thing for the result");
	}; // can add an else here that says the expression is not valid or something.
	
	*/
};