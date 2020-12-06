
$(document).ready(function () {
 
 $('#recherche').keyup(function()
 {
	$('affichage').html('');
   var ch = $('#recherche').val(); 
    //$('#resultat').text(ch);
  // ch=trim(ch);
   if(ch!=="")
   {  
   $('a').click(function(){alert("reussi");});
  }
  return false;
  });
  });
 