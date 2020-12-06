<?php
$ytilisateur='root';
$mp=''; 
$dns='mysql:host=localhost;dbname=google'; 
 try
 {
	 $db=new PDO($dns,$ytilisateur,$mp);
 }
 catch(PDOException $e)
 {
   die('Erreue :'.$e->getMessage()); // die comme echo
 }
 
?>