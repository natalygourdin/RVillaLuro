
$('.descripcion').hide();

function mostrar(id, idP, idNoticia) {
  
       $('#'+id).show();
       $('#'+idP).css("height", "26vh")
       $('#'+idP).css("background", "rgba(0, 33, 66, 1)")
       $('#'+idNoticia).css("height", "60vh")
	}
	
function ocultar(id, idP, idNoticia) {
  
  $('#'+id).hide();
  $('#'+idP).css("height", "18vh")
  $('#'+idP).css("background", "rgba(0, 33, 66, 0.9)")
$('#'+idNoticia).css("height", "55vh")
}