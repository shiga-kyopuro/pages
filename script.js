if(window.matchMedia( "(max-width: 480px)" )){
    $(function() {
        $(".nav").css("display","none");
        $(".menu_button").on("click", function() {
            $(".nav").slideToggle();
        });
    });
}