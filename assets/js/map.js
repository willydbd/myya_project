$(document).ready(function(){
	var i = 0;
	var $path = $("path").toArray();

	$.each($path,function(i,id){
		++i;
		$(this).attr("id",i);
		$(this).text(i);
	});

	$.each($path,function(i,id){
		var $id = $(this).attr("id");
		if($id == 35){
			$(this).attr("country","morocco");
		}else if($id == 2){
			$(this).attr("country","algeria");
		}else if($id == 52){
			$(this).attr("country","tunisia");
		}else if($id == 30){
			$(this).attr("country","lybia");
		}else if($id == 17){
			$(this).attr("country","egypt");
		}else if($id == 57){
			$(this).attr("country","west sahara");
		}else if($id == 37){
			$(this).attr("country","mauritania");
		}else if($id == 39){
			$(this).attr("country","niger");
		}else if($id == 7){
			$(this).attr("country","chad");
		}else if($id == 49){
			$(this).attr("country","sudan");
		}else if($id == 20){
			$(this).attr("country","ethiopia");
		}else if($id == 19){
			$(this).attr("country","eritrea");
		}else if($id == 16){
			$(this).attr("country","djibouti");
		}else if($id == 48){
			$(this).attr("country","somalia");
		}else if($id == 27){
			$(this).attr("country","kenya");
		}else if($id == 34){
			$(this).attr("country","mali");
		}else if($id == 46){
			$(this).attr("country","senegal");
		}else if($id == 41){
			$(this).attr("country","guinea bisau");
		}else if($id == 24){
			$(this).attr("country","guinea");
		}else if($id == 47){
			$(this).attr("country","seria leone");
		}else if($id == 28){
			$(this).attr("country","liberia");
		}else if($id == 25){
			$(this).attr("country","ivory coast");
		}else if($id == 23){
			$(this).attr("country","ghana");
		}else if($id == 5){
			$(this).attr("country","benin republic");
		}else if($id == 50){
			$(this).attr("country","togo");
		}else if($id == 40){
			$(this).attr("country","nigeria");
		}else if($id == 12){
			$(this).attr("country","cameroon");
		}else if($id == 14){
			$(this).attr("country","central african republic");
		}else if($id == 18){
			$(this).attr("country","equitorial guinea");
		}else if($id == 22){
			$(this).attr("country","gabon");
		}else if($id == 8){
			$(this).attr("country","congo");
		}else if($id == 9){
			$(this).attr("country","zaire");
		}else if($id == 54){
			$(this).attr("country","uganda");
		}else if($id == 43){
			$(this).attr("country","rwanda");
		}else if($id == 6){
			$(this).attr("country","burundi");
		}else if($id == 53){
			$(this).attr("country","tanzania");
		}else if($id == 3){
			$(this).attr("country","angola");
		}else if($id == 59){
			$(this).attr("country","zambia");
		}else if($id == 33){
			$(this).attr("country","malawi");
		}else if($id == 38){
			$(this).attr("country","mozambique");
		}else if($id == 60){
			$(this).attr("country","zimbabwe");
		}else if($id == 56){
			$(this).attr("country","namibia");
		}else if($id == 4){
			$(this).attr("country","botswana");
		}else if($id == 58){
			$(this).attr("country","swaziland");
		}else if($id == 29){
			$(this).attr("country","lesotho");
		}else if($id == 45){
			$(this).attr("country","south africa");
		}else if($id == 31){
			$(this).attr("country","madagascar");
		}else if($id == 55){
			$(this).attr("country","burkina faso");
		}
	});

	$("path").on("mouseenter",function(){
		if($(this).attr("id") === 40){
			$(this).attr("fill","green");
		}else{
			$(this).attr("fill","gray");
		}
	}).on("mouseleave",function(){
		$(this).attr("fill","#cbd2f7");
	});
	// $("path").click(function(){
	// 	var $id = $(this).attr("id");
 //    	var $country = $(this).attr("country");
 //        alert("Country is : " + $country + " and id is : " + $id);
	// });

	// if(coords) alert(coords);
	$("path").on("hover",function(){
		alert("Hovered");
	})
	setInterval(function(){
		var coords = localStorage.getItem("screens");
		if(coords){
			coords = JSON.parse(coords);
			console.log(coords);
			console.log(coords.scrX + " " + coords.scrY + " " + coords.country);
			localStorage.removeItem("screens");

			var e = new jQuery.Event("click");
			e.pageX = coords.scrX, e.pageY = coords.scrY;
			$("path#40").trigger(e);
			//console.clear();
		}
	},500);

	$("path").bind("click",function(){

		// var posX= $(this).pageX;
		// var posY= $(this).pageY;
		// alert(posX + " " + posY);

		var $id = $(this).attr("id");
    	var $country = $(this).attr("country");
        alert("Country is : " + $country + " and id is : " + $id);

	});



})
