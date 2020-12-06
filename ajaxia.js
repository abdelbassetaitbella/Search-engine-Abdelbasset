
$(document).ready(function () {
 
 $('#divx').click(function()
 {
	
  // var c= $(this).text(); 
    //alert(c);
	
	//$.post('page3.php',{texto:c},function(data){$('#paragraphe').html(data);
	$.post('page3.php',{mot:mot,zone:zone},function(data){'#affichage'.html(data);
	
	});
  });
  });
 