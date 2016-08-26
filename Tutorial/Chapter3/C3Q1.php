

<!DOCTYPE html>

<html lang="en" >
	<head>
		<meta charset="UTF-8">
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]>
        <script src="../../css/ie/html5shiv.js"></script><![endif]-->
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/skel.min.js"></script>
		<script src="../../js/skel-layers.min.js"></script>
		<script src="../../js/init.js"></script>
		<script src="../../js/ace.js"></script>
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
				<h1><a href="index.html"><img src="../../images/LogoUIA.png"/></a></h1>
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
						<h2>Third Chapter</h2>
						<h3 id="test4"></h3>
						<div id="test"></div>
                        <h3>isNumeric</h3>
						
<p id="pp">The IsNumeric function returns a Boolean value that indicates whether a specified expression can be evaluated as a number. It returns True if the expression is recognized as a number; otherwise, it returns False. The next code is quite complex but everything is explained part by part.</p>
                            
                            <img src="../../images/isNumeric.png" id="example"/><br/><br/>
 <p id="pp">Here, we are creating the function to tell us whether a number is indeed a number defined by JavaScript or not
As explained in the JavaScript theory, the period symbolizes accessing through Similarly to your desktop this is what it means to access object properties.  </p>
                            
 <p id="pp">So, in order for a number to be true, it must return the following inputs explained in the next paragraph.
The exclamation mark “!” means false, isNaN means false if it’s a number, combining the two negatives make a true. Every number in JavaScript is a floating point number – meaning 12.000000 where the 0’s repeat continuously. This is what is known as floating point. So this condition must be true. Also isFinite means it must be finite, so this must also be true.
So isNumeric will return true with these added functionalities (this must be done as JavaScript has no good way of identifying what a number is). And is in fact commonly used. </p>


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
					<form action="C3Q1.php"  method="post">
					
					
					
					
					
					
					<!--Put the question here!!-->
					
			<p><h3><strong>Question 1:</strong> isNumeric function </h3> Create a function called isNumeric giving it the input variable (x)</p>
				
				
				
				
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
										<li><a href="C3Q2.php" class="button  alt fit">Next question</a></li>
										
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
				
				
					$monfichier = fopen('Jasmine_Code/npm/node_modules/jasmine/bin/src/C3Q1.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
						fputs($monfichier, $_POST['answer'] . ' exports.isNumeric = function(x) {  
									return isNumeric(x);
								};');    //post the answer
																									
									 
						fclose($monfichier); //close and save the file 
	




	
////////////////////////////////NODE.JS//////////////////////////////////////////					
						
						//$command1='cd C:\\Users\\R9KT4\\AppData\\Roaming\\npm\\node_modules\\jasmine\\bin ; jasmine-node spec --junitreport';
						
						//Here we change the directory, it's working
						//echo getcwd() . '<br/>';
						chdir( 'Jasmine_Code/npm/node_modules/jasmine/bin/spec');
						//echo getcwd() . '<br/>';
						
						
						//$command1='  jasmine-node spec --junitreport';
						$command1='  jasmine-node C3Q1spec.js --junitreport';   //PHP doesn't seem to recognize it..
						
						
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
						
						$test=highlight_file('reports/TEST-isNumeric.xml',  $return = true );
						
						
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
												test2.innerHTML= \' <iframe width="854" height="480" src="https://www.youtube.com/embed/N4kPpJUStkU" frameborder="0" allowfullscreen></iframe>\'
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