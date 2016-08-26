
<!-- For the download system   -->



 <?php
    // Chemin du fichier
    $file = 'C2Q1download.js';
	//echo '<script>alert(' . $_POST['answerDLtest'] . ');</script>';
	
	$monfichier = fopen('C2Q1download.js', 'w+');
	    fseek($monfichier, 0);
	   fputs($monfichier, $_POST['answerDLtest']);
	   	fclose($monfichier);
		
		
    // Gestion du telechargement dans le navigateur
     header('Content-Type: application/force-download');
     header('Content-Disposition: attachment; filename='.basename($file));
     readfile($file);
     
	 
	 
    ?>