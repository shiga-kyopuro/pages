var width = window.innerWidth;

if(width <= 480){
    $(function() {
        $(".nav").css("display","none");
        $(".menu_button").on("click", function() {
            $(".nav").slideToggle();
        });
    });
    console.log("woiwoi")
}