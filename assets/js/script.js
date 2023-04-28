    // owl carousel
    $('.main-owl').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        stagePadding: 30,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    //owl carusel end




    // owl carousel
    $('.career-slide').owlCarousel({
        loop:true,
        margin:50,
        nav:false,
        dots:false,
        stagePadding: 30,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    //owl carusel end



    //nav scroll style
    $(window).scroll(function(){
        var top = $(window).scrollTop();

        if (top>=90){
            $("header").addClass('head');
        }
        else 
            if ($("header").hasClass('head')) {
                $("header").removeClass('head');
            }
    });


    // DataTable
    $(document).ready(function() {
        $('#example').DataTable();
    });
;