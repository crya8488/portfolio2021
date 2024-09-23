$(function(){
            $('.source-more').click(function(){
                $(this).siblings('.source-more-content').slideToggle('slow');
                // $('.source-more-content').slideToggle('slow');
            });

            $('.source-more').click(function(){
                

                if( !$(this).find('.open').hasClass('active') ){
                    $(this).find('.open').addClass('active');
                    $(this).find('.close').addClass('active');
                    $(this).find('.arrow').addClass('active');
                }else{
                    $(this).find('.open').removeClass('active');
                    $(this).find('.close').removeClass('active');
                    $(this).find('.arrow').removeClass('active');
                }
          
    });
            
        });