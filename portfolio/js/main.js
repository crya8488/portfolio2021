$(document).ready(function(){

  



  // Add smooth scrolling to all links
  $("#top-nav a , .process-list a , .jump-btn").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  // if ($(this).scrollTop() > 100) {
  //   $('#top-nav , #gotop').removeClass('active');
  // };


  
  
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $(' #top-nav , #gotop').addClass('active');
       
      }
      else{
        $('#top-nav , #gotop').removeClass('active');
      }
    });

    //Go top button

    $('#gotop').click(function () {

        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

        $body.animate({
        scrollTop: 0
        }, 1000);

        return false;

     });
    
    // Top Nav open / close
    $('#menu-btn').click(function(){
      $(this).toggleClass('active');
      $('#web-nav-menu , body').toggleClass('active');
      $('#web-nav-bg').fadeToggle();
      
    });
    $('#web-nav-bg').click(function(){
      $('#menu-btn').toggleClass('active');
      $('#web-nav-menu , body').toggleClass('active');
      $('#web-nav-bg').fadeToggle();
      
    });

    // worklist filter button - active switch
    $('.tab-btn li').click(function(){
      $(this).addClass('active').siblings('li').removeClass('active');
    });

    // Light / Dark Style switch
    $('#style-btns .btn-light').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      $('body, #top').removeClass('dark').addClass('light');
    });
    $('#style-btns  .btn-dark').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      $('body, #top').removeClass('light').addClass('dark');

    });

    // Toggle box
    $('.toggle-wrap').each(function(){

      var btn = '.toggle-title';
      var content = '.toggle-content';


      $(btn).click(function(){
       if($(this).hasClass('active')){
        $(this).removeClass('active');
        $(this).next(content).slideUp();
       }else{
        $(this).addClass('active');
        $(this).next(content).slideDown();
       }
  
      });

    });

    // Toggle Open box
    $('.open-wrap').each(function(){

      var btn = $('.open-btn');
      var content = $('.open-content');

      content.hide();

      btn.click(function(){
        content.slideToggle();
        btn.toggleClass('active');
        return false
      });




    });

    

    


  });

  
