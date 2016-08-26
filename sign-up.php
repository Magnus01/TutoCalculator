<?php    session_start(); 



?>



<!DOCTYPE html>

<html lang="en" ng-app="CineFinder"> 
	<head>
		<meta charset="UTF-8">
		<title>Sign Up</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		
		
		<!-- Chargement d'Angular JS et du fichier JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="testPost.js"></script>
		

		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body   ng-controller="ListingCTRL">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"><img src="images/LogoUIA.png"</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="Tutorial/Overview.php">Tutorial</a></li>
						<li><a href="sign-up.php">Subscription</a></li>
						<li><a href="#">Project team</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Subscription page</h2>
						<p>Subscribe with only one click! It'll help us to make some statistics about the project so we can adapt its content and improve the teaching methods and the correction system.</p>
					</header>

					
					
					
					<!-- Form -->
						<section>
							<h3>Subscribe to TutoCalculator</h3>
							<form method="post" action="sign-up.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="surname" id="surname" value="" placeholder="Surname" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="password" name="password1" id="email" value="" placeholder="Password" />
									</div><div class="6u$ 12u$(xsmall)">
										<input type="password" name="password2" id="email" value="" placeholder="Rewrite the password" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="level" id="category">
												<option value="">- Level in Javascript -</option>
												<option value="1">Beginner</option>
												<option value="2">Regular</option>
												<option value="3">Advanced</option>
												
											</select>
										</div>
									</div>
									<!--<div class="4u 12u$(small)">
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
									</div>-->
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="conditions">
										<label for="human">I have read and agree to the terms of use.</label>
									</div>
									<!--
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>-->
									<div class="12u$">
										<ul class="actions">
											<!--<li><input type="submit" value="Valider" class="special" /></li>-->
											<li><input href="TutorialOverview.php" type="submit" class="button" name="submit" value="Confirm"></li>
											<!--<li><a href="connexion.html" class="button">Déja inscris?</a></li>-->
											<!--<li><input type="reset" value="Déja inscris?" /></li>-->
										</ul>
									</div>
								</div>
							</form>
						</section>

					
					<?php  
		
		// echo $_POST['conditions'] . '<br/>';echo $_POST['category'] . '<br/>';
				// echo $_POST['password1'] . '<br/>';
				// echo $_POST['password2'] . '<br/>';
				// echo $_POST['nom'] . '<br/>';
				// echo $_POST['prenom'] . '<br/>';
		
		
				if(isset($_POST['submit']))
				{ Validation();
					
			
			
			     ;}
		
		function Validation()  {
		
		 if (!isset($_POST['password1']) OR !isset($_POST['password2']) OR $_POST['password1'] != $_POST['password2']) { echo '<script> alert("Please, rewrite your password.");</script>';}
		
		elseif (isset($_POST['name']) AND 
		isset($_POST['surname']) AND 

		isset($_POST['email']) AND 
		isset($_POST['conditions']) AND isset($_POST['password1']) AND isset($_POST['password2']) AND 
	
		isset($_POST['level']) AND 
		$_POST['password1'] = $_POST['password2'] )
		
			
			{      
					
					
						
					$email=$_POST['email'];
					// $password=$_POST['password1'];
					$surname=$_POST['surname'];
					$name=$_POST['name'];$level=$_POST['level']; $password=$_POST['password1'];
			         echo $email;
						//$salt = "ahiadhdoskfb";
					//$newPwd = hash('sha256', $password . $salt);
				  try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=TutoCalculator;charset=utf8', 'root', 'mysql');
					}
					catch (Exception $e)
					{
							die('Erreur : ' . $e->getMessage());
					}
					
						
						
					//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES($_POST[\'email\'], $_POST[\'password1\'],$_POST[\'nom\'] ,$_POST[\'prenom\'])');
						//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES(\'email\', \'password1\',\'nom\' ,\'prenom\')');
						
						$req = $bdd->prepare('INSERT INTO user(email, level, surname,name, password) VALUES(:email, :level, :surname, :name, :password)');
						$req->execute(array(
							'email' => $email,
							 'level' => $level,
							 'surname' => $surname,
							 'name' => $name,
							 'password' => $password
							
							));

						
						
						
						$reponse = $bdd->query('SELECT * FROM user');
						while ($donnees = $reponse->fetch()) {
						$donnees = $reponse->fetch();
						echo $donnees['email'];  }
						$reponse->closeCursor();
						
						
						$_SESSION['email']=$email;
							$_SESSION['name']=$name;
							$_SESSION['surname']=$surname;
						
						
							echo 'Le user a bien été ajouté !';
		echo '<script> alert("You have subscribed successfully ! Thanks a lot!"); location.href = "Tutorial/Overview.php";</script>';
			
		           }   else { 
				   
				   echo '<script> alert("Please, fill all the blanks."); </script>'; }
				   // echo '<script> alert("Vbien ouejsssssssssssssss."); </script>';
				   // echo '<br/>prenom:' . empty($_POST['prenom']);
			       // echo '<br/>password2:' . isset($_POST['password2']);			
			       // echo '<br/>conditions:' . isset($_POST['conditions']);			
			       // echo '<br/>category:' . isset($_POST['category']);
					// echo $_SESSION['prenom'];
				   
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
						<!--
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						-->
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
				</div></footer>

	</body>
</html>