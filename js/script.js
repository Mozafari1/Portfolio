$(window).on("load", function(){
    $(".loader .inner").fadeOut(500, function(){
        $(".loader").fadeOut(750);
        
    });
    $(".items").isotope({
        filter: '*',
        animationOptions:{
            duration: 1500,
            easing:'linear',
            queue: false
        }
    });
});

$(document).ready(function(){ // When page is ready execute this code
    $('#slides').superslides({
        animation: 'fade',
        play: 5000,
        pagination: false

    });
    var typed = new Typed(".typed", {
        strings: ["Software Engineer", "Web Developer", "Computer Science Student"],
        typeSpeed: 70,
        loop: true,
        startDelay: 5000,
        showCursor: false
    });
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        768:{
            items:3
        },
        938:{
            items:4
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});


    var windowH =$(window).height();
    $(window).bind('resize', function(){
        windowH=$(window).height();
    });

    var skillsTopOffset = $(".skillSec").offset().top;
    var statsTopOffset = $(".statsSec").offset().top;
    var timelineTopOffset = $('.timeline').offset().top;
    var countUpFinished= false;
    $(window).scroll(function(){
        //Fixed navbar 
            if(window.pageXOffset>windowH){
                $('.navbar-flat').addClass('navbar-fixed-top');
                $('.firstSec').addClass('fixed');
            }
            else{
                $('.navbar-flat').removeClass('navbar-fixed-top');
                $('.firstSec').removeClass('fixed');
            }
            if(window.pageYOffset > timelineTopOffset-windowH+200)
		{
			$('.timeline #cont').addClass('fadeInUp');
		}
        if(window.pageYOffset>skillsTopOffset - $(window).height()+200){
            $('.chart').easyPieChart({
                easing: 'easeInOut',
                barColor: '#fff',
                trackColor: false,
                scaleColor: false,
                lineWidth: 4,
                size: 152,
                onStep: function(from, to, percent){
                    $(this.el).find('.percent').text(Math.round(percent));
        
                }
            });
        }
        if(!countUpFinished && window.pageYOffset>statsTopOffset - $(window).height()+200){
            $(".counter").each(function(){
                var element =$(this);
                var end_val = parseInt(element.text());
                element.countup(end_val);
            });
            countUpFinished=true;
        }
    });
    $("[data-fancybox]").fancybox();
   
    $("#filters a").click(function(){
        $("#filters .current").removeClass("current");
        $(this).addClass("current");
        var selector = $(this).attr("data-filter");
        $(".items").isotope({
            filter: selector,
            animationOptions:{
                duration: 1500,
                easing:'linear',
                queue: false
            }
        });
        return false;
    });

    $("#navbarUl a").click(function(){
        $("#navbarUl .active").removeClass("active");
        $(this).addClass("active");
  
        return false;
     });
     
    $("#navigation li a").click(function(e){
        e.preventDefault();
        var targetE = $(this).attr("href");
        var targetP = $(targetE).offset().top;
        $("html, body").animate({scrollTop: targetP - 50}, "slow");
    });
    const nav =$("#navigation");
    const navTop = nav.offset().top;
    $(window).on("scroll",stickyNav);
    function stickyNav(){
        var body =$("body");
        if($(window).scrollTop()>=navTop){
            body.css("padding-top", nav.outerHeight() + "px");
            body.addClass("fixedNav");
        }else{
            body.css("padding-top",0);

            body.removeClass("fixedNav");
        }
    }
    $(document).on('click','.navbar-collapse.show',function(e) {
        $(this).collapse('hide');
    });
    function initMap() {
        // The location of Uluru
        var uluru = {lat: -25.344, lng: 131.036};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }

});

