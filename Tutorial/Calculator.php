<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]>
        <script src="../css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		
		<title>TutoCalculator</title>

        <link rel="stylesheet" href="../css/skel.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-xlarge.css" />

	</head>


	<body >
		<!-- Header -->
        <header id="header">
            <h1><a href="../index.html"><img src="../images/LogoUIA.png"/></a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="Calculator.php">Tutorial</a></li>
                    <li><a href="../unknowns/sign-up.html">Subscription</a></li>
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

                <!-- Table -->
                <section>
						<h2>Third Chapter</h2>
						<p>Write your answer on the inputs below. A message will be displayed to tell you if it's correct or not.</p>
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
					<form action="Calculator.php" method="post">
					
					
					
					
					
					
					<!--Put the question here!!-->
					
			<p><strong>Question 2: Multiply function</strong> <br/> Create a function to compute the square of a number. Use this function to compute the squares of 1 to 10 and print it to the console.
				</p>
				
				
				
				
				
				<p><textarea name="answer" rows="8" cols="45" placeholder="Your answer here."></textarea></p>
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
				
				
					$monfichier = fopen('Jasmine_Code/npm/node_modules/jasmine/bin/src/C2Q2.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
						fputs($monfichier, $_POST['answer']);    //post the answer
																
 
						fclose($monfichier); //close and save the file 
	




	
////////////////////////////////NODE.JS//////////////////////////////////////////					
						
						//$command1='cd C:\\Users\\R9KT4\\AppData\\Roaming\\npm\\node_modules\\jasmine\\bin ; jasmine-node spec --junitreport';
						
						//Here we change the directory, it's working
						//echo getcwd() . '<br/>';
						chdir( 'Jasmine_Code/npm/node_modules/jasmine/bin/spec');
						//echo getcwd() . '<br/>';
						
						
						//$command1='  jasmine-node spec --junitreport';
						$command1='  jasmine-node C2Q2-spec.js --junitreport';   //PHP doesn't seem to recognize it..
						
						
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
						
						$test=highlight_file('reports/TEST-multiply.xml',  $return = true );
						
						
						echo 'CACACACACACACACACA' . $test . '<br/>';
						//echo 'sdsdsdsd<br/><br/><br/><br/>';
						
						//Catch exceptions
						if (preg_match("#TypeError|Exception#", $output1))
							{
											echo '<script>alert("ERROR  Type EXCEPTION.\n\nYour answer can\'t be compiled. Try again.\n\n\n ");</script> ';
									
							}
							else
							{
								echo 'HYGGELIG ikke exception <br/>';
								
									//XML REGEX
										if (preg_match("#failures=\"[1-99]\"#", $test))
											{
												echo '<script>alert("Your answer is wrong. Try again. ");</script> ';
											}
											else
											{
												echo '<script>alert("Congratulation! Your answer is correct. ");</script>';
												
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