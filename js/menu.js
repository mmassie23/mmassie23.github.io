//Jquery script for mobile version menu button
$(document).ready(function(){
    var clicked = false;
    $(".menu-btn").click(function(){
        if(clicked == false){
            $("nav").css("display", "block");
            clicked = true;
        } else {
            $("nav").css("display", "none");
            clicked = false;
        }
    });
});
