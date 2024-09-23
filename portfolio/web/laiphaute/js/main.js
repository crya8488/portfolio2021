$(function(){

    
    $('.menu_open').click(function(){
        // console.log('.menu_open')
            if( !$('.menu_open li').hasClass('active')){
                $('.menu_open li').addClass('active');
                $('.menu_list').addClass('active');
                
            }else{
                $('.menu_open li').removeClass('active');
                $('.menu_list').removeClass('active');
                
            }
          
    });


    $(window).scroll(function(){

        if($(this).scrollTop()>500){
            $('.gotop').addClass('active');
        }else {
            $('.gotop').removeClass('active');
        }


    });

    $(function(){
        $('a.gotop').click(function(){
            var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
            $body.animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });
    
    $('.source-more').click(function(){
        // console.log('.menu_open')
            if( !$('.source-more-content').hasClass('active')){
                $('.source-more-content').addClass('active');
                // $('.menu_list').addClass('active');
                
            }else{
                $('.source-more-content').removeClass('active');
                $('.source-more-content').removeClass('active');
                
            }
          
    });

});
 