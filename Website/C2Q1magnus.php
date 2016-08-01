

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
						<h2>Second Chapter</h2>
						
						<h3 id="test4"></h3>
						<div id="test"></div>
						
						
						
						<h3>Variables, Properties, Methods, Objects</h3>
						
						
						<p id="pp">Variables in JavaScript are used to store a specific value or to link certain parts of the code together. A variable is defined by the keyword “var”. Here is an example of how variables could look like in a script.</p>
						<img src="images/variable_example.png" id="example"/><br/><br/>
						<p id="pp">Here the variables named “x”, “y” and “z” are defined. In the variables “x” and “y” the values “5” and “6” are stored respectively. In variable “z” there is not a value stored but rather the sum of the variables “x” and “y”. </p>
						<p id="pp">Variables can be used to store more than just values it can store strings of information. Strings can be things like sentences here is an example. </p>
						<img src="images/array_example.png" id="example" /><br/><br/>
						<p id="pp">Strings need to be stored in quotation marks ether single or double quotation marks, meaning “” or ‘’. <br/>
Variables can also be storing Arrays. Arrays are several values stored as one variable. Here is an example a variable defined as an Array.
</p>
						<img src="images/array_example1.png" id="example"/><br/><br/>
						<p id="pp">Arrays has to be defined within brackets [], and every value need to be separated by commas when defining the Array. The brackets is an important subtlety. <br/> 
Variables can be defined as objects. Objects in JavaScript are much like objects in real life.<br/> 
For example, a car can be defined as an object. The following demonstrates an example of how you would use an object and its importance. 
</p>
						<p id="pp">To define the variable “car” as an object it is put in curly brackets {}</p>
						<img src="images/array_example2.png" id="example"/><br/><br/>
						<p id="pp">Note that a car has certain properties such as its type, model, and colour. It contains the property values Fiat, 500, and white respectively.<br/>
To extract the value of the property, a period is used after car and the name of the property is written down as follows:<br/><br/>
<i class="example">car.name = fiat<br/>
car.model = 500<br/>
car.weight = 850kg<br/>
car.color = white<br/><br/></i>
The properties of an object are variables tied to the object. In this example the car object has the properties name, model, weight and colour.<br/>
Another aspect of objects are methods. Methods are what the object can do like in our example with the car the car also has methods.<br/><br/>
<i class="example">car.start()<br/>
car.drive()<br/>
car.brake()<br/>
car.stop()<br/><br/></i>
A car has several methods like “start”, “drive”, “brake” and “stop”. Methods are more complicated than properties. They are functions in JavaScript and will be explained in the next part. To access the method of a particular object in JavaScript it is written like the example above ObjectName.MethodName().
</p>













				/////////
					<style type="text/css" media="screen">
    textarea {
        display: block;
        margin: auto;
        width: 600px;
        height: 5px;
    }
    #editor_div {
        display: block;
        margin: auto;
        width: 600px;
        height: 300px;
        border: 1px solid #888;
    }
    form {
        text-align: center;
    }
</style>

<div id="editor_div"><%= @escaped_text %></div>

<form action="/tutorial_44_demo_1" method="post">
<input type="submit" value="Submit" id='submit'>
<br>
<textarea name="editor"><%= @text %></textarea>
</form>

<hr>

<script src="../Calculator_final_version/js/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var textarea = $('textarea[name="editor"]');
    textarea.hide();
    var editor = ace.edit("editor_div");
editor.setHighlightActiveLine(false);
editor.getSession().setUseWrapMode(true);
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/javascript");
    $('#submit').on('click', function() {
        textarea.val(editor.getSession().getValue());
    });
</script>
			




			/////

			
			
			
			
			
			
			
			
						<h3>Function</h3>
						<p id="pp">To create a function in JavaScript the function keyword is used. This function is then named by the next part of the code. Here is an example. </p>
						<img src="images/function1.png" /><br/><br/>
						<p id="pp">Here it is clear that the function is called “myFunction”. It also has two variables “a” and “b”. In the {} is what the function does whenever it is called. In this case the function is multiplying its variables and returning the product. <br/>
This example also shows how the function is called. Variable x is used to call on the function “myFunction” and provides values for the variables “a” and “b”. <br/>
Functions do not do anything until they are invoked (summoned) to do something, this can be done in different ways. For example, when it is invoked (called) from JavaScript code.<br/>
</p>
					
	
	<div class="container" >

        <div class="row">                                 
            <div class="form-group col-md-3">
              
							</div>
							
						<div class="form-group col-md-3">
					<form action="C2Q1.php"  method="post">
					
	
					
					
					<!--Put the question here!!-->
					
			<p><h3><strong>Question 1:</strong> Add function </h3> Create a code that adds two variables together. Take user input from console and compute the result, then print it back out.
                        
				</p>
				
				
				<p><textarea name="answer" rows="8" cols="45" placeholder="Your answer here."></textarea><h3 id="test3"></h3><div id="test2"></div> </p>
					 <p><input   class="button" type="submit" value="Submit" name="submit1" >
					    
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
										<li><a href="C2Q2.php" class="button  alt fit">Next question</a></li>
										
									</ul>
								</div>
								
							
						</div>
							</div>
						</section>
							

							
							
							
									
								</div>
							
						
<?php           //////////////////////////////////////////////////////////PHP code//////////////////////////////////////////////////
				
				if(isset($_POST["submit1"])) {  Correction();}  //Listener
				
   
				
   function Correction() {
				
				
					$monfichier = fopen('Jasmine_Code/npm/node_modules/jasmine/bin/src/C2Q1.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
						fputs($monfichier, $_POST['answer'] . ' exports.add = function (add1, add2) {
																return add(add1, add2);
															};');    //post the answer
																
 
						fclose($monfichier); //close and save the file 
	




	
////////////////////////////////NODE.JS//////////////////////////////////////////					
						
						//$command1='cd C:\\Users\\R9KT4\\AppData\\Roaming\\npm\\node_modules\\jasmine\\bin ; jasmine-node spec --junitreport';
						
						//Here we change the directory, it's working
						//echo getcwd() . '<br/>';
						chdir( 'Jasmine_Code/npm/node_modules/jasmine/bin/spec');
						//echo getcwd() . '<br/>';
						
						
						//$command1='  jasmine-node spec --junitreport';
						$command1='  jasmine-node C2Q1-spec.js --junitreport';   //PHP doesn't seem to recognize it..
						
						
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
						
						$test=highlight_file('reports/TEST-add.xml',  $return = true );
						
						
						//echo 'CACACACACACACACACA' . $test . '<br/>';
						//echo 'sdsdsdsd<br/><br/><br/><br/>';
						
						echo '<script>
									var test3 = document.getElementById(\'test3\');
									var test4 = document.getElementById(\'test4\');
									
									test3.innerHTML = \'Corrections and hints :\';
									test4.innerHTML = \'Corrections and hints :\';

								</script>';
						
						
						
						
						
		////////////               HINT SYSTEM             ////////////////////////////////////////////////////////////////////////////////////////////			
						
						
						//Catch exceptions, Put the regex below
						if (preg_match("#TypeError|Exception#", $output1)) //It means that the answer is not a code
							{
											
											echo '<script> var test1 = document.getElementById(\'test\');  
														   var test2 = document.getElementById(\'test2\');  
														   
											
												test1.innerHTML = \'<blockquote> Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Please View Video Hint below.</blockquote>\';
												//test2.innerHTML = \'<blockquote> Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Try again.  </blockquote>\';
												test2.innerHTML= \' <iframe width="854" height="480" src="https://www.youtube.com/embed/MeewPtL_R8o" frameborder="0" allowfullscreen></iframe>\'
												</script>';    //Put the message inside the blockquote tags. for the video, put the link just above in the src inside the iframe
                        
							}
							
						
						else    // if it is not an exception (the answer is an actual code)
							{
								
								
									           //XML REGEX
								if (preg_match("#failures=\"[1-99]\"#", $test))             //Wrong answer
									{
												
												
												
												if (preg_match("#Error: Cannot find module#", $test))  //specific hint
													{
														
														echo '<script> var test1 = document.getElementById(\'test\');
																  var test2 = document.getElementById(\'test2\');  
														test1.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>File name must be <i class="example">C2Q1.js</i>.</blockquote>\';
														test2.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>File name must be <i class="example">C2Q1.js</i>.</blockquote>\';
														
														</script>';
														
														}
														
												elseif (preg_match("#calculator.add is not a function#", $test)) 		
														{
														
														echo '<script> var test1 = document.getElementById(\'test\');
															 var test2 = document.getElementById(\'test2\');  
												test1.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>Remember to name function <i class="example">exports.add</i>.</blockquote>\';
												test2.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>Remember to name function <i class="example">exports.add</i>.</blockquote>\';
												
												</script>';
														
														}
														
												elseif (preg_match("#expected [1-99] to be 5|expected [1-99] to be 8#", $test)) 		
														{
														
														echo '<script> var test1 = document.getElementById(\'test\');
											 var test2 = document.getElementById(\'test2\');  
												test1.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>In the function parenthesis, define two variables like this : <i class="example">function (variable1, variable2)</i>.</blockquote>\';
												test2.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>In the function parenthesis, define two variables like this : <i class="example">function (variable1, variable2)</i>.</blockquote>\';
												//console.log(test1);
												</script>';
														}
														
												elseif (preg_match("#expected undefined to be 6|expected undefined to be 15#", $test)) 		
														{
														
														echo '<script> var test1 = document.getElementById(\'test\');
											 var test2 = document.getElementById(\'test2\');  
												test1.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>Function should return the two variables defined in the function like this : <i class="example"> return variable1 * variable2</i>.</blockquote>\';
												test2.innerHTML = \'<blockquote>Your answer is wrong. <br/><strong> Hint : </strong>Function should return the two variables defined in the function like this : <i class="example"> return variable1 * variable2</i>.</blockquote>\';
												//console.log(test1);
												</script>';
														}
												
												
												
												else    //general hint in case of wrong answer
														{
															
															echo '<script> var test1 = document.getElementById(\'test\');
														 var test2 = document.getElementById(\'test2\');  
																	test1.innerHTML = \'<blockquote>Your answer is wrong. Try again.</blockquote>\';
																	test2.innerHTML = \'<blockquote>Your answer is wrong. Try again.</blockquote>\';
																	//console.log(test1);
																	</script>';
														}
												
												
												
									}
											
											
											
											
									else     //in case of right answer
									{
												
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

			
			











</body>

</html>