$(document).ready(function () {




    $('#menu-1 img').mouseenter(function(){
                 $('#menu-1 h2').css("opacity", "1");
    });
    $('#menu-1 img').mouseleave(function(){
                 $('#menu-1 h2').css("opacity", "0");
    });


    $('#menu-2 img').mouseenter(function(){
                 $('#menu-2 h2').css("opacity", "1");
    });
    $('#menu-2 img').mouseleave(function(){
                 $('#menu-2 h2').css("opacity", "0");
    });


    $('#menu-3 img').mouseenter(function(){
                 $('#menu-3 h2').css("opacity", "1");
    });
    $('#menu-3 img').mouseleave(function(){
                 $('#menu-3 h2').css("opacity", "0");
    });

    $('#menu-4 img').mouseenter(function(){
                 $('#menu-4 h2').css("opacity", "1");
    });
    $('#menu-4 img').mouseleave(function(){
                 $('#menu-4 h2').css("opacity", "0");
    });


//     $('#tribeca-1 img').mouseenter(function(){
//                  $('#tribeca-1 h5').css("opacity", "0");
//     });
//     $('#tribeca-1 img').mouseleave(function(){
//                  $('#tribeca-1 h5').css("opacity", "1");
//     });



//     $('#tribeca-3 img').mouseenter(function(){
//                  $('#tribeca-3 h5').css("opacity", "0");
//     });
//     $('#tribeca-3 img').mouseleave(function(){
//                  $('#tribeca-3 h5').css("opacity", "1");
//     });








// $(document).ready(function () {
//                 $("nav").addClass('animated fadeIn');
//             });

// //    console.log("scrolled!");

//              //create an variable that store the value of how much document has been scrolled
//     var how_much_document_scrolled = $(document).scrollTop();

//     //create an variable that store our animated element's offset
//     var h1_offset_top = $('#tagline h1').offset().top;

//     //    console.log(how_much_document_scrolled + "<," + h1_offset_top);

//     if(h1_offset_top - how_much_document_scrolled < window.innerHeight){
//         $('#tagline h1').addClass('animated fadeInDown');
//     });

//         var h3_offset_top = $('#founder h3').offset().top;
//     if(h3_offset_top - how_much_document_scrolled < window.innerHeight-100){
//         $('#founder h3').addClass('animated lightSpeedIn');
});




$(window).scroll(function () {
    console.log("document is scrolled!");
    var how_much_document_scrolled = $(document).scrollTop();
    // console.log(how_much_document_scrolled);
    var textHome_offset_top = $('#textHome') .offset().top;
    // console.log(h4_offset_top);

    var recent_works_offset_top = $('#introHome2 h3') .offset().top;

    if(textHome_offset_top - how_much_document_scrolled < window.innerHeight-300){
        // console.log("element showed up")
        $('#textHome').addClass('animated bounceInUp');
    }

    if(h3_offset_top - how_much_document_scrolled < window.innerHeight-300){
        // console.log("element showed up")
        $('#introHome2 h3').addClass('animated rubberBand');
    }

});













