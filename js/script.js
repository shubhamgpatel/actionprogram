


$(document).ready(function(){
    $(".user_sets").click(function(){
        $(".menu_lists").slideToggle("slow");
    });
});


      $(function(){
    var url = window.location.href; 
    $(".top_bar a").each(function() {
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }else{
         $(this).closest("li").removeClass("active");
        }
    });

});

      $(function(){
    var url = window.location.href; 
    $(".side_nav a").each(function() {
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }else{
         $(this).closest("li").removeClass("active");
        }
    });

});

      $(document).ready(function(){

        $(".pay_btn1").click(function(){
            $(".overlay,.pay_size").show(1000);
        });

        $(".close_img").click(function(){
            $(".pay_size,.overlay").hide(1000);
        });

      });
		   //  $(function() {
     //    $('.side_nav li a').click(function() {
     //       $('.side_nav li a').removeClass();
     //       $($(this).attr('href')).addClass('active');
     //    });
     // });
// $(document).ready(function(){
//     $(".user_sets").click(function(){
//         $(".setting_list").slideToggle();
//     });

// $('.chg_img').click(function() {
//      $(this).attr('src', 'images/tweter.png');
// });


// });

// function imgactive(){
//   $('.chg_img').attr('src','images/link.png');
// }



        
 // end  the document
