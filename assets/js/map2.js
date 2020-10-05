$(document).ready(function(){
	$("path").on("click",function(){
		var $country = $(this).attr("country");
		alert($country);
	});
	 var $path = $("path").toArray();
	 $path.each(function(i,path){
	 	$(this).attr("draggable","true");
	 });
});
