
var topNavPage;

$.getJSON( "data/topnav.json", function( data ) {


    for  ( var i = 0 ; i < data.length ; i++ ){

        var page = data[i].page;
        thispage = topNavPage;

        if( page == thispage ){

            for  ( var n = 0 ; n < data[i].menu.length ; n++ ){

                $('#top-nav').find('ul').append(`
                    <li><a href="${data[i].menu[n].link}">${data[i].menu[n].title}</a></li>
                `);
        
            };
        }
    };


});

$(function () {
    // Add smooth scrolling to all links
    $("#top-nav a").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                window.location.hash = hash;
            });
        }
    });
})


