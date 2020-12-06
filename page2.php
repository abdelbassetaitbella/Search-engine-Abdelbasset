<?php
     if(isset($_POST))
	 {
	 $lien=$_POST['tlien'];
		echo $_POST['tlien'];
		
		include('connection.php');

		 $reponse=$db->query('SELECT * FROM moteur WHERE mot= "'.$lien .'"');
		 while($data=$reponse->fetch())
		 {
		 echo $data['description'];
		 echo '<img src="images/'.$data['image'].'.jpg"/>';
		 }
	 }

?>
