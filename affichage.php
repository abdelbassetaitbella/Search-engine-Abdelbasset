<?php
     if(isset($_POST))
	 {
		 include('connection.php');
		 $rech=$_POST['recherche'];
		 $reponse=$db->query("SELECT * FROM moteur WHERE mot LIKE '$rech%'");
		 while($data=$reponse->fetch())
		 {
			 echo "<li><a id='lien' href='#'>".$data['mot']."</a></li>";
		 }
		 //echo "<p><a href='#'>"."voila"."</a></p>";
	 }

?>
