const webHostFolder = "/portfolio";

$(function (){
            // loading 動畫
            $('body').addClass('active');

            // var startTime = new Date().getTime();
            var loadingTime = 2500;
            var fadeOutTime = 1000;

            // window.onload = function(){
            // 計算時間差
            // var timeSpan = new Date().getTime() - startTime;

        
            setTimeout(function(){

                $('#loader').fadeOut(fadeOutTime);
                $('body').removeClass('active');

            }, loadingTime);
    

            // $('#loader').fadeOut(fadeOutTime);
            
                // 判断時差
                // if(timeSpan >= loadingTime) {

                    
                //     $('#loader').fadeOut(fadeOutTime);
                //     $('body').removeClass('active');

                //     // 大於N秒结束動畫

                // } else {

                //     // 小於N秒用定時器延遲處理
                //     setTimeout(function(){

                //         $('#loader').fadeOut(fadeOutTime);
                //         $('body').removeClass('active');

                //     }, loadingTime - timeSpan);

                // }
        
            // };

    $('header').append(`
        <div id="navbar">
            <div id="logo">
                <a href="${webHostFolder}/"></a>
            </div>
            <nav id="top-nav">
                <ul></ul>
            </nav>
            <nav id="web-nav">
            <div id="web-nav-bg"></div>
                <ul id="menu-btn">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div id="web-nav-menu">
                 
                    <a href="${webHostFolder}/" class="logo"><img src="${webHostFolder}/img/index/name-w.png" alt=""></a>
                    <h6>WANJINLUO PORTFOLIO</h6>
                    <ul id="header-menu">
                    <!-- <li><a href="#"><h4>TEST</h4></a></li> -->
                    </ul>
                </div>
            </nav>
        </div>
        <div id="loader">
            <div>
                <img src="${webHostFolder}/img/index/name.png">
                <ul><li></li><li></li></ul>
            </div>
        </div>
    `);

    $('footer').append(`
        <div id="gotop"><p>TOP</p></div>
        <a href="${webHostFolder}/" class="logo">
            <img data-src="${webHostFolder}/img/index/name.png" alt="" class="lazyload">
        </a>
        <ul class="webmap" id="footer-menu"></ul>
        <small>2021 &copy; WANJINLUO PORTFOLIO WEBSITE</small>
    `);
    
    $.getJSON( webHostFolder+"/data/webpage.json", function( data ) {
            
            for  ( var i = 0 ; i < data.length ; i++ ){
                $('#header-menu').append(`
                    <li><a href="${webHostFolder}/${data[i].link}">${data[i].title}</a></li>
                `);
                $('#footer-menu').append(`
                    <li><a href="${webHostFolder}/${data[i].link}">${data[i].title}</a></li>
                `);
            };

    });

    
});



