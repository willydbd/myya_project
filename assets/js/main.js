$(document).ready(function(){


    $("#artCarousel").carousel({
        interval : 4000,
        cycle : 'true'
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    //Map Game Logic
    var $count = 0;
    $(".maps img").draggable({
        revert:true,
        start: function(e,ui){
            //var img_id = $(this).attr("id");
            //localStorage.setItem("country",img_id);
            // var e = window.event;
            // var x = e.screenX;
            // var y = e.screenY;
            // var coords = x + " " + y;
            // //alert(coords);
            // localStorage.setItem("screens",coords);

        },
        stop: function(e,ui){
            // var n = window.event;
            var img_id = $(this).attr("id");
            var x = e.pageX;
            var y = e.pageY;
            //var coords = x + " " + y + " " + img_id;
            // alert(coords);
            var coords = {
                scrX : x,
                scrY : y,
                country : img_id
            }
            console.log(coords);
            localStorage.setItem("screens",JSON.stringify(coords));
        }
    });

    // $("object").droppable({
    //     drop: function(e,ui){
    //         var k = new jQuery.Event("click");
    //         k.clientX = e.clientX;
    //         k.clientY = e.clientY;
    //         $(this).trigger(k);
    //         console.log(this);
    //         // var country = $(this).attr("country");
    //         // if(country == img_id){
    //         //     $(this).html(ui.draggable.remove().html());
    //         // }else{
    //         //     $count++;
    //         //     if($count == 1){
    //         //         //$count = 0;
    //         //         alert("Can't work now");
    //         //     }
    //         // }
    //     }
    // });
    // $("object").droppable({
    //     drop: function(e,ui){  $(this).html(ui.draggable.remove().html());
    //     }
    // });

    $(".maps img").click(function(){
        var country = $(this).attr("id");
        alert(country);
    })
});

function send_pages(){
    var x = 40;
    return x;
}
// var x = 40;
// prompt(x);
// //return x;
