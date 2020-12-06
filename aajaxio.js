
$(document).ready(function () {
 
 $('#recherche').keyup(function()
 {
   var ch = $('#recherche').val(); 
    //$('#resultat').text(ch);
  // ch=trim(ch);
   if(ch!=="")
   { 
   $.post('affichage.php',{recherche:ch},function(data){$('#resultat ul').html(data); });
      
	 }
	 return false;
  });
  });
 