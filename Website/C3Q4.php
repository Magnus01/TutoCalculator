

<!DOCTYPE html>

<html lang="en" >
	<head>
		<meta charset="UTF-8">
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/ace.js"></script>
		<title>TutoCalculator</title>





</script>
		

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		
	</head>
	<body >

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"><img src="images/LogoUIA.png"/></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="Calculator.html">Tutorial</a></li>
						<li><a href="inscriptionCal.php">Subscription</a></li>
						<li><a href="#">Project team</a></li>
					</ul> 
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

				
					<header class="major">
						<h2>Calculator Tutorial</h2>
						<p>In this page, you can find a tutorial on how to implement a calculator. </p>
					</header>

					        
					
							
					<!-- Form -->
			
							<!-- Table -->
						<section>
						<h2>Third Chapter</h2><h3 id="test4"></h3><div id="test"></div>
                        <h3> Infix to Postfix- complete</h3>
						
                            <p>Now to complete the expression, lets add the operator stack like so! As an empty array:</p>
                            
                           <img src="images/operatorstack.png" id="example"/><br/><br/>
                            
 <p id="pp">We will need to include this in our function now as well in order to define which operation goes first. Note here the difference in how operators is defined. Precedence is added in order to extract the general ranking of the operator. </p>
                            
                            <img src="images/operatorsnew.png" id="example"/><br/><br/>
                            
 <p id="pp">As well, the same initialization of the for loop will be inside the math solver: </p>
                         
                            <img src="images/forMathSolver.png" id="example"/><br/><br/>
                            
 <p id="pp"> And remember, while the push adds an element, the pop() method simply removes the last element of an array, and returns that element. Remember, these actions change the length of the array. This is why it is used in the calculator, as one can now calculate in a step by step method by using stacks. 
</p>
				
                          
                            
<p id="pp">But we have to consider now, what if the infix expression has an operator in it? What do we do then? This is where the “else if” statement comes in handy, and this works in conjunction with the if statement (i.e. it follows above code directly):</p>
                          <img src="images/infixtopostfix.png" id="example"/><br/><br/>    
<p id="pp">So if it goes through this else if statement, we know it is going to be an operator token as described by the (“^*/+.indexOf(token) !==-1). This means only accept the following tokens. The strange “!==-1”, means this is false if it equals “-1” (simply used for debugging purposes).</p>
                            
 <p id="pp">Now that you know it is an operator token, there are two operator tokens you are concerned with. This goes back to the infix to postfix rules. There is one operator lying on top of the stack “var o2”, and there is the operator coming from the infix expression “var o1”. </p>
                            
 <p id="pp">Here’s the important piece to get. If the operator on the stack (var o2) is of a higher precedence (ranking) than the infix variable coming through, that means that it’s this operators turn to operate on the numbers. Higher precedence operators get to operate first of course, this is the logic.</p>
                            
 <p id="pp">The next step is to define var outputPop. This takes the variable o2 from the stack or array by using the pop function “operatorStack.pop()”. Note how this is then pushed on to the postfixStack.  stack?</p>
                            
 <p id="pp">At the bottom you will see that the “var o1” is pushed onto the operator stack. This then enables the cycle to continue until you have reached the final infix index.</p>
                            
<p id="pp">As a safety mechanism this last part of the code is added to pop operators from the operator stack and push them onto the postfix stack until the operator stack is empty.</p>

 <img src="images/operatorbug.png" id="example"/><br/><br/>

<p id="pp">The last part, is simply to add the final return my transformed postfix to infix result!</p>
                             <img src="images/return.png" id="example"/><br/><br/>
                            
						<div id="test"></div>
						
						
						<div id="test"></div>
						
					
	
	<style type="text/css" media="screen">
    
    #editor_div {
        display: block;
        margin: auto;
        width: 1000px;
        height: 500px;
        border: 1px solid #888;
    }
    
</style>
	
	
	
	
	<div class="container" >

        <div class="row">                                 
            <div class="form-group col-md-3">
              
							</div>
							
						<!--
						<form method="post" action="mailto:Frank@cohowinery.com" 
							name="ContactForm" onsubmit="return ValidateContactForm();">
								<p>1.Convert the following expression from infix to postfix: 2*3+4  <input type="text" size="65" name="one"></p>
									<p>2.Now calculate that postfix expression   <input type="text" size="65" name="two"></p>
								<p>3.Convert the following expression from infix to postfix: 8+3*3^2 <input type="text" size="65" name="three"><br>
								<p>4.Now calculate that postfix expression.  <input type="text" size="65" name="four"><br>
						<p>5.Convert the following expression from infix to postfix: 9*3+4-(2*3)  <input type="text" size="65" name="five"><br>
								<p>6.Now calculate that postfix expression.  <input type="text" size="65" name="six"><br>
        </form>--><div class="form-group col-md-3">
					<form action="C3Q4.php"  method="post">
					
					
					
					
					
					
					<!--Put the question here!!-->
					
			<p><h3><strong>Question 4:</strong> Final Infix to Postfix </h3> Create an else if statement for the case where there is an operator in the infix expression. Create another stack for the operator. Define variable “o1” to be the token in the infix expression, define variable “o2” to be the token in the operator stack.</p>
<p id="pp">Remember the operator in question “o1” is placed in the stack only if it has higher precedence than the operator in the stack “o2”. If the operator in question is lower in precedence than the operator in the stack, it is placed immediately into the postfix stack. </p>
<p id="pp">So while the index of operator “o2” is greater than “o1” push it onto the postfixstack
Now pop the operator out of the operator stack
To get the next o2 value, use the operator stack indexing method.
If the operator stack “o1” is greater than the precedence of “o2”, push it onto the operator stack.

				</p>
				
				
				
				
				<p><div id="editor_div"></div></p>
				<p><textarea name="answer" rows="8" cols="45" placeholder="Your answer here."></textarea><h3 id="test3"></h3><div id="test2"></div></p>
					 <p><input   class="button" type="submit" value="Submit" name="submit1" id="submit1" >
					    
					   <input type="reset" value="Reset answer" name="reset"> 
			
			</p>
		</form>
		<form method="post" action="mailto:Frank@cohowinery.com" 
							name="ContactForm" onsubmit="return ValidateContactForm();">
							<p>Comments:  <textarea cols="55" name="Comment">  </textarea></p>
							<p><input type="submit" value="Send" name="submit2">
					<input type="reset" value="Reset" name="reset"></p>
							</form>

							
							
							
							
							</div></div>
							
							
							<div class="row">                                 
            
										<div class="6u 12u$(small)">
								<br/><br/><br/>
									<ul class="actions fit">
										<li><a href="calculator.html" class="button alt fit">Back</a></li>
										<li><a href="#" class="button  alt fit">Next chapter</a></li>
										
									</ul>
								</div>
							</div>
						</section>
							

							
							
							<!--                                           *****Some useful tools ****
							<form method="post" action="#">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Adresse de départ" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Adresse d'arrivée" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="category" id="category">
												<option value="">- Catégorie -</option>
												<option value="1">Etudiant</option>
												<option value="1">Personnel de l'EPF</option>
												<option value="1">Intervenant extérieur</option>
											</select>
											
										</div>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="copy" name="copy">
										<label for="copy">Email me a copy of this message</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human" checked>
										<label for="human"></label>
									</div>
									
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Rechercher" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>-->
									
									
								</div>
							
						
<?php           //////////////////////////////////////////////////////////PHP code//////////////////////////////////////////////////
				
				if(isset($_POST["submit1"])) {  Correction();}  //Listener
				
   
				
   function Correction() {
				
				
					$monfichier = fopen('Jasmine_Code/npm/node_modules/jasmine/bin/src/C3Q4.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
						fputs($monfichier, $_POST['answer'] . ' exports.printStack = function() {
										run();
										return postfixStack;
									};');    //post the answer
																																					
									 
						fclose($monfichier); //close and save the file 
	




	
////////////////////////////////NODE.JS//////////////////////////////////////////					
						
						//$command1='cd C:\\Users\\R9KT4\\AppData\\Roaming\\npm\\node_modules\\jasmine\\bin ; jasmine-node spec --junitreport';
						
						//Here we change the directory, it's working
						//echo getcwd() . '<br/>';
						chdir( 'Jasmine_Code/npm/node_modules/jasmine/bin/spec');
						//echo getcwd() . '<br/>';
						
						
						//$command1='  jasmine-node spec --junitreport';
						$command1='  jasmine-node C3Q4spec.js --junitreport';   //PHP doesn't seem to recognize it..
						
						
						//$command2="jasmine-node spec --junitreport";
						
						//echo   $command1 . '<br/>'  ;
						//echo   $command2
						  
						$output1 = shell_exec($command1);         //execute it on the shell, the function works but not with node.js commands...
						
						//echo $output1 . '<br/>';
						
						
						
						//retrieve xml file
						// $monXml = fopen('reports/TEST-multiplication.xml', 'a'); 
						// $ligne = fgets($monXml);
						// echo 'sdsdsdsd';
						// echo htmlspecialchars($ligne). '<br/>';
						// echo '<pre>' . htmlspecialchars($ligne) . '</pre><br/>';
						// fclose($monXml);
						
						$test=highlight_file('reports/TEST-multiplication.xml',  $return = true );
						
						
						//echo 'CACACACACACACACACA' . $test . '<br/>';
						//echo 'sdsdsdsd<br/><br/><br/><br/>';
						
						echo '<script>
									var test3 = document.getElementById(\'test3\');
									var test4 = document.getElementById(\'test4\');
									
									test3.innerHTML = \'Corrections and hints :\';
									test4.innerHTML = \'Corrections and hints :\';

								</script>';
						
						
						
						
						
						//Catch exceptions
						if (preg_match("#TypeError|Exception#", $output1))
							{
											
											echo '<script> var test1 = document.getElementById(\'test\');  
														   var test2 = document.getElementById(\'test2\');  
											
												test1.innerHTML = \'<blockquote> Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Please View Video Hint below.</blockquote>\';
												//test2.innerHTML = \'<blockquote> Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Try again.  </blockquote>\';
												test2.innerHTML= \' <iframe width="854" height="480" src="https://www.youtube.com/embed/ouGI0vcMjNM" frameborder="0" allowfullscreen></iframe>\'
												</script>';    //Put the message inside the blockquote tags. for the video, put the link just above in the src inside the iframe
                        
							}
							else
							{
								//echo 'HYGGELIG ikke exception <br/>';
								
									//XML REGEX
										if (preg_match("#failures=\"[1-99]\"#", $test))
											{
												
												echo '<script> var test1 = document.getElementById(\'test\');
												var test2 = document.getElementById(\'test2\');
												test1.innerHTML = \'<blockquote>Your answer is wrong. Try again.</blockquote>\';
												test2.innerHTML = \'<blockquote>Your answer is wrong. Try again.</blockquote>\';
												//console.log(test1);
												</script>';
												
											}
											else
											{
												//echo '<script>alert("Congratulation! Your answer is correct. ");</script>';
												echo '<script> var test1 = document.getElementById(\'test\');
														var test2 = document.getElementById(\'test2\');
														test1.innerHTML = \'<blockquote>Congratulation! Your answer is correct.</blockquote>\';
														test2.innerHTML = \'<blockquote>Congratulation! Your answer is correct.</blockquote>\';
														 
														</script>';
											}
							}
      }
					
					
					
					
					
					
					
					?>
					
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Practical informations</h3>
							<p>Do you need an information?</p>
							<ul class="alt">
								<li><a href="#">How the website works?</a></li>
								<li><a href="#">Frequently Asked Questions</a></li>
								
								<li><a href="#">About the team project</a></li>
							</ul>
						</section>
						
						<!--<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>-->
						
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									Gimlemoen 25, 4630 Kristiansand S, Norvège<br>
									
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">magnusl15@uia.no</a>
								</li>
								<li>
									
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; UiA. All rights reserved.</li>
						<li>Design: <a href="">Calculator Tutorial</a></li>
						<li>Images: <a href="">Calculator Tutorial</a></li>
					</ul>
				</div>
			</footer>

			
			

<hr>

<script src="../Calculator_final_version/js/src-min/ace.js" type="text/javascript" charset="utf-8"></script>

<script>
    var textarea = $('textarea[name="answer"]');
   textarea.hide(); 
    var editor = ace.edit("editor_div");
editor.setHighlightActiveLine(false);
editor.getSession().setUseWrapMode(true);
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/javascript");
    $('#submit1').on('click', function() {
        textarea.val(editor.getSession().getValue());
    });
</script>









</body>

</html>