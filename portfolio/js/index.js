$(function(){

    // section intro
    $.getJSON( "data/indexIntro.json", function( data ) {
            for  ( var i = 0 ; i < data.length ; i++ ){

                var idName = `#${data[i].id}`;

                $(idName).find('.title-box').append(`
                    <h4>${data[i].titleEN}</h4>
                    <h2>${data[i].titleCN}</h2>
                    <p>${data[i].intro}</p>
                `);
                
            }


    });

    // skills
    $.getJSON( "data/skills.json", function( data ) {
    
            var projectFolder = '';
            var projectListId = '#skillList';
            var btnListId = '#skillBtn';
            
            for  ( var i = 0 ; i < data.length ; i++ ){
                
                $(projectListId).append(`
                    <div class="swiper-slide">
                        <div class="text-box">
                            <h3>${data[i].title}</h3>
                            <ul class="dot-list">${data[i].intro}</ul>
                            <a href="${data[i].button[0].link}" class="btn-dark">${data[i].button[0].text}<i class="bi bi-arrow-right-circle-fill"></i></a>
                        </div>
                    </div>
                `);


                
            };

            const swiper = new Swiper(".swiper-container", {
                slidesPerView: 1,
                speed: 1000,
                loop: true,
                // lazy: true,
                grabCursor: true,
                allowTouchMove: true,
                spaceBetween: 40,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640:{
                        slidesPerView: 2,
                        slidesPerGroupSkip: 2
                    }
                },
                
                
            });
    
    });

    // web project
    $.getJSON( "data/project-web.json", function( data ) {
            
            var projectFolder = 'project-web';
            var projectListId = '#webProjectList';
            var showItem = 4 ;

            if (data.length > showItem){
                $(projectListId).next('.btn-block').append(`
                    <a href="${projectFolder}.html" class="btn-primary btn-lg">MORE PROJECTS<i class="bi bi-arrow-right"></i></a>
                `);
            };

            for  ( var i = 0 ; i < showItem ; i++ ){
                $(projectListId).append(`
                    <li>
                        <a href="${projectFolder}/${data[i].folder}/index.html">
                            <div class="pic-box">
                                <img data-src="${projectFolder}/-cover/${data[i].folder}.jpg" alt="" class="lazyload">
                                <img data-src="${projectFolder}/-cover/${data[i].folder}2.jpg" alt="" class="lazyload">
                            </div>
                            <div class="text-box">
                                <h3>${data[i].title}</h3>
                                <h5>${data[i].subtitle}</h5>
                                <p>${data[i].introText}</p>
                                <span onclick="location.href='${projectFolder }/${data[i].folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                            </div>
                        </a>
                    </li>
                `);
                $("#index-webproject").find('.swiper-wrapper').append(`

                        <div class="swiper-slide">
                            <a href="project-web/${data[i].folder}/index.html" class="title-btn">
                                <h4>${data[i].title}</h4>
                            </a>
                            <img data-src="project-web/${data[i].folder}/img/cover-main.png" alt="" class="swiper-lazy lazyload">
                        </div>
                `);
            };


            
            
        
    });

    // app project
    $.getJSON( "data/project-app.json", function( data ) {
      
            var projectFolder = 'project-app';
            var projectListId = '#appList';
            var showItem = 4 ;

            if (data.length > showItem){
                $(projectListId).next('.btn-block').append(`
                    <a href="${projectFolder}.html" class="btn-primary btn-lg">MORE WORKS<i class="bi bi-arrow-right"></i></a>
                `);
            };

            for  ( var i = 0 ; i < showItem ; i++ ){
                $(projectListId).append(`
                    <li>
                        <a href="${projectFolder}/${data[i].folder}/index.html" >
                            <div class="pic-box">
                                <img data-src="${projectFolder}/-cover/${data[i].folder}.jpg" alt="" class="lazyload">
                            </div>
                            <div class="text-box">
                                <h3>${data[i].title}</h3>
                                <h5>${data[i].subtitle}</h5>
                                <p>${data[i].introText}</p>
                                <span onclick="location.href='${projectFolder}/${data[i].folder}/'" class="btn-light">作品詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                            </div>
                        </a>
                    </li>
                `);
            };
            
        
    
    });

    // design project
    $.getJSON( "data/project-design.json", function( data ) {
   
            var projectFolder = 'project-design';
            var projectListId = '#designList';
            var showItem = 4 ;

            if (data.length > showItem){
                $(projectListId).next('.btn-block').append(`
                    <a href="${projectFolder}.html" class="btn-primary btn-lg">MORE WORKS<i class="bi bi-arrow-right"></i></a>
                `);
            };

            for  ( var i = 0 ; i < showItem ; i++ ){
                $(projectListId).append(`
                <li>
                    <a href="${projectFolder}/${data[i].folder}/" >
                        <div class="pic-box">
                            <img data-src="${projectFolder}/-cover/${data[i].folder}.jpg" alt="" class="lazyload">
                            <img data-src="${projectFolder}/-cover/${data[i].folder}2.jpg" alt="" class="lazyload">
                        </div>
                        <div class="text-box">
                            <h3>${data[i].title}</h3>
                            <h5>${data[i].subtitle}</h5>
                            <p>${data[i].introText}</p>
                            <span onclick="location.href='${projectFolder}/${data[i].folder}/'" class="btn-light">作品詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                        </div>
                    </a>
                </li>
            `);
            };

            
    
    });

    // Contact
    $.getJSON( "data/profile.json", function( data ) {

            var myName = data[0].name;
            var myEmail = data[0].email;
            var myLinks = data[0].link;

            $('#index-contact').each(function (){

                $(".main").append(`
                    <h3>${myName}</h3>
                    <a href="mailto:${myEmail}" target="_blank" class="btn-dark"><i class="bi bi-envelope"></i> ${myEmail}</a></p>
                
                `)
                for  ( var i = 0 ; i < myLinks.length ; i++ ){
                    $(".link").append(`
                        <a href="${myLinks[i].url}" target="_blank" class="btn-light">${myLinks[i].title}</a>
        
                    `);
                };


            });

    });

    
    
    const swiper2 = new Swiper(".swiper-project", {
        speed: 1000,
        // loop: true,
        spaceBetween: 0,
        // allowTouchMove: true,
        // grabCursor: true,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        
    });



    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
          $('header').removeClass('index-top');
         
        }
        else{
          $('header').addClass('index-top');
        }
      });

    


    


});