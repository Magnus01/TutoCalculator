

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
						<li><a href="C2Q1tarek2IFRAME.php">Refreshtest</a></li>
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
						<h2>Second Chapter </h2>
						
						
						
						
						
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










	
					<style type="text/css" media="screen">
    
	
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
	#fixed {
  position: absolute;
  bottom: 0; 
  left: 0; 
  width: 50%;
height: 100%;
  
  border: 1px solid #888;
}
#view{
  position: absolute;
 right: 0; 
  bottom: 0; 
  width:50%;
height: 100%;
  background-color: lightblue;
  border: 1px solid #888;
}

#submit1{
  position: fixed;
  bottom: 30%;
  right: 0;
  
  border: 1px solid #888;
}

#hide{
  position: fixed;
  bottom: 30%;
  right: 130px;

  border: 1px solid #888;
}
#download{
  position: fixed;
  bottom: 30%;
  right: 245px;

  border: 1px solid #888;
}
#hint{
  position: fixed;
 bottom: 26.2%;
 
  
width: 100%;
 background-color: rgb(255,180,180);
  border: 1px solid #888;
  
 
}
#hintRight{
  position: fixed;
 bottom: 26.2%;
 
  
width: 100%;
 background-color: lightgreen;
  border: 1px solid #888;
  
 
}
#YTHint{
  position: absolute;
 bottom: 0;
  right: 0;
width: 50%;
height: 100%;
 
  border: 1px solid #888;
  
 
}
#canva{
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%; height: 30%;


 
 
}#menuQuestion2{  backface-visibility: hidden;
    transition: -webkit-transform 0.5s ease, opacity 0.5s ease;
    position: fixed;
    display: block;
    overflow-y: auto;
    overflow-x: hidden;
    top: 0px;
    left: -250px;
    transform: translate(250px, 0px);
    max-width: 100%;
    max-height: 100%;
    width: 250px;
    height: 100%;} 
#menuQuestion{
  position: fixed;
  top: 0;
 left: -250px;
  width: 250px; height: 100%;
transition: -webkit-transform 0.5s ease, opacity 0.5s ease;
 transform: translate(250px, 0px);

 background-image: linear-gradient(70deg, #181818 50%, #1a1a1a 50%);
    color: #888;
	
	  
	
	
	
}
#menuQuestion nav {
		
			padding: 0.5em 1.25em;
		}

			#menuQuestion nav > ul {
				list-style: none;
				margin: 0;
				padding-left: 0;
			}

				#menuQuestion nav > ul > li {
					border-radius: 4px;
					display: inline-block;
					margin-left: 1.5em;
					padding-left: 0;
				}

					#menuQuestion nav > ul > li a {
						-moz-transition: color 0.2s ease-in-out;
						-webkit-transition: color 0.2s ease-in-out;
						-o-transition: color 0.2s ease-in-out;
						-ms-transition: color 0.2s ease-in-out;
						transition: color 0.2s ease-in-out;
						color: #cee8d8;
						display: inline-block;
						text-decoration: none;
					}

						#menuQuestion nav > ul > li a:hover {
							color: #ffffff;
						}

					

					#menuQuestion nav > ul > li .button {
						height: 2.25em;
						line-height: 2.25em;
						margin-bottom: 0;
						padding: 0 1em;
						position: relative;
						top: -0.075em;
						vertical-align: middle;
					}


					
			#navButton .toggle {
		text-decoration: none;
		height: 100%;
		left: 0;
		position: absolute;
		top: 0;
		width: 100%;
	}
		
					
					

</style>

<!--
  magnus' code

<div id="editor_div"></div>

<form  method="post" action="C2Q1test.php">
<input type="submit" value="Submit" id='submit' name="submit11">
<br>
<textarea name="answer1" rows="8" cols="45" placeholder="test"></textarea>
</form>-->

 <div id="canva"><iframe id="view"></iframe><div id="fixed" style="height: 100%;"> &lt;script type="text/javascript"&gt;       


 
 
 
 
 
 
 
 
 
 
 &lt;/script&gt; </div>
 <div id="test2"></div>

						<div id="test"></div>
 <form action="C2Q1tarek2IFRAME.php" method="post">
 
 <textarea name="answer" rows="8" cols="45" ></textarea>
 
<input name="submit1" type="submit" value="Submit" id='submit1'>
</form>
 
<a onclick="hide()" id="hide" class="button default">Hide</a></div>
			
         




<div id="menuQuestio"><span class="toggle" ></span>
<nav id="nav">
					<ul>
						<li><a href="C2Q1tarek2IFRAME.php">Refreshtest</a></li>
						<li><a href="Calculator.html">Tutorial</a></li>
						<li><a href="inscriptionCal.php">Subscription</a></li>
						<li><a href="#">Project team</a></li>
					</ul> 
				</nav></div>
			
			
			
			
			
			
			
			
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
					
					
	
					
					
					<!--Put the question here!!-->
					
			<p><h3><strong>Question 1:</strong> Add function </h3> Create a code that adds two variables together. Take user input from console and compute the result, then print it back out.
                        
				</p>
				<p></p>
				
				
				<form action="C2Q1recup.php" method="post">
  <textarea name="answerDLtest" rows="8" cols="45" ></textarea>
<input name="download" type="submit" value="Download" id='download'></form>
				
				
				
				<!-- <p><div id="editor_div"></div></p>-->
				<p><h3 id="test3"></h3> </p>
					<!-- <p>  <input   class="button" type="submit" value="Submit" name="submit1" id="submit1">
					    
					   <input type="reset" value="Reset answer" name="reset"> 
			
			</p>-->
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
					// if(isset($_POST["download"])) {  Download();} 
				if(isset($_POST["submit1"])) {  Correction();}
			 //Listener
				
   // function Download() {
	   
	  // $coucou = $_POST['answerDLtest'];
	   // echo $coucou;
				 // echo '<script>alert("coucou" );</script>';  
	   // echo '<script>alert(' . $_POST['answerDLtest'] . ');</script>'; 
	   // echo '<script>alert(' . $coucou . ');</script>';
	   
	   
	   // $monfichier = fopen('C2Q1download.js', 'w+');
	    // fseek($monfichier, 0);
	   // fputs($monfichier, $_POST['answerDLtest']);
	   	// fclose($monfichier);
		//header('Location: C2Q2.php');
		 //echo '<script> alert("ca marche") ;location.href="C2Q1download.js"</script>';
		
   // }
			function remplaceMoi($chaine) {
    $aRemplacer = array('">', '" >', '>', '</'); // etc... tu met ici tout ce que tu veux remplacer
    return $traitement = str_replace($aRemplacer, '', $chaine); // Si la chaine se fini pour exemple par "chaine ?!!", il faut virer l'espace avec trim() une fois les autres caractères emplacés, sinon on se retrouve avec un "-" en fin de chaine "...chaine-"
			}

			function tableau($post) {
				
				$array1= explode("script", $post);
				$return1= $array1[0];$return2= $array1[1];$return3= $array1[2];$return4= $array1[3];
				
				if (preg_match("#text/javascript#", $post)) {
					echo 'coucou<br/>';
					
					$return= remplaceMoi($array1[2]);
					echo $return;
					
					
				}
				else {
					$return= remplaceMoi($array1[1]);
					echo $return;
					
				}
				
				 // echo $return1 . '<br/><br/>';echo $return2 . '<br/><br/>';echo $return3 . '<br/><br/>';//echo $return4 . '<br/><br/>';
							
				return $return;
				
				
			}
			
			
			
   function Correction() {
	   
	   // $coucou = $_POST['answer'];
	   // echo $coucou;
				 // echo '<script>alert("coucou1" );</script>';  
	   // echo '<script>alert(' . $_POST['answer'] . ');</script>'; 
	   // echo '<script>alert(' . $coucou . ');</script>';
				
				
				$PostAnswer= tableau($_POST['answer']);   //remplaceMoi($_POST['answer']);
				
				
					$monfichier = fopen('Jasmine_Code/npm/node_modules/jasmine/bin/src/C2Q1.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
				

//OLD VERSION FOR TEST				
						fputs($monfichier, $PostAnswer . ' exports.add = function (add1, add2) {
																return add(add1, add2);
															};');    //post the answer
						
//NEW NODEJS INPUT FUNCTION						
						// fputs($monfichier, ' MathUtils = function() {};
// MathUtils.prototype.' . $PostAnswer . ' 

// ' . $PostAnswer . ' exports.MathUtils = function() {
   // return MathUtils;
// };

// exports.Pop = Pop;
	// ');    //post the answer
																
 
						fclose($monfichier); //close and save the file 
	
	
	
	
	
	  // MathUtils = function() {};
// MathUtils.prototype.Pop = function (x) {
   // return x.pop();
// };



// Pop = function (x) {
    // return x.pop();
// };



//exports.MathUtils = function() {
   // return MathUtils;
// };

// exports.Pop = Pop;
	
	
	
	
	
	
	
	
	
	
	




	
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
						
						
						   //echo '<script>alert(' . $test . ');</script>';
						
						
						
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
														  var txt = document.getElementById(\'fixed\');
																		txt.style.width = \'50%\';
											
												test1.innerHTML = \'<blockquote id="hint"> <strong>Correction and Hint: </strong> <br/>Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Please View Video Hint below.</blockquote>\';
												//test2.innerHTML = \'<blockquote> Your answer  cannot be compiled.<br/>It is not recognized as a code by the system. Try again.  </blockquote>\';
												test2.innerHTML= \' <iframe id=YTHint  height=100% width=50% src="https://www.youtube.com/embed/MeewPtL_R8o" frameborder="0" allowfullscreen></iframe>\'
												 



											</script>';  
//special video YOUTUBE above


												//Put the message inside the blockquote tags. for the video, put the link just above in the src inside the iframe
                        
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
											test1.innerHTML = \'<blockquote id="hintRight"><strong>Correction: </strong> <br/>Congratulation! Your answer is correct.</blockquote>\';
											//test2.innerHTML = \'<blockquote>Congratulation! Your answer is correct.</blockquote>\';
														
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

// function color code and live preview



//For submit 
    var textarea = $('textarea[name="answer"]');
    textarea.hide();
	
	  //VIEW variable
	var view=$('#view');
	
    var editor = ace.edit("fixed");
editor.setHighlightActiveLine(false);
editor.getSession().setUseWrapMode(true);  
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/javascript"); //works for JS
	
   //VIEW function
   // editor.getSession().on('change', function () {
    // view.contents().find('body').html(editor.getSession().getValue());
// });
   editor.getSession().on('change', function () {
    view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%;\" src=" +
             "data:text/html," + encodeURIComponent(editor.getSession().getValue()) +
        "></iframe>");
});

  $('#submit1').on('click', function() {
        textarea.val(editor.getSession().getValue());alert("héhaaaa");
    });
	
	
	//For download 
	
	 var textarea1 = $('textarea[name="answerDLtest"]');
    //textarea1.hide();
    
  $('#downwload').on('click', function() {
        textarea1.val(editor.getSession().getValue());
		alert("hého");
    });
	
	
	
	
	
	function hide() {
     var txt = document.getElementById('fixed');var submit = document.getElementById('submit1');var hide = document.getElementById('hide');
	 var view = document.getElementById('view');
	 var download = document.getElementById('download');
	 var yt = document.getElementById('YTHint');var hint = document.getElementById('hint');
	 var hint1 = $('blockquote[id="hint"]'); var hint2 = $('blockquote[id="hintRight"]'); 
	 //alert(hide); console.log("coucou" + hide);
	//alert("caca" + txt.offsetHeight + "  hide " + hide.style.bottom);
	
	if (txt.offsetHeight != 2) {
		
		 
		 
	hint1.hide();hint2.hide();
	submit.style.bottom = '0';download.style.bottom = '0';
	hide.style.bottom = '0';
	
	txt.style.height = '0';view.style.height = '0';
	yt.style.height = '0';
	
	
	
   
    
	} 
	else {
		hint1.show();hint2.show();  hide.style.bottom = '30%'; download.style.bottom = '30%';
		
		submit.style.bottom = '30%';
		
	  
		txt.style.height = '100%'; view.style.height = '100%'; yt.style.height = '100%';
		
	}
	
	
	
	
	}
	
	
</script>





</body>

</html>