$(function(){
    var projectType = 'Web Project';
    var projectTypeName = '網站專案';
    var projectListPage = 'project-web.html';
    var projectListPageLink = '../../' + projectListPage;
    var color =['dark','white','tint','lighter','no-bg'];


    

    // body #project-page
    $('#project-page').html(`
            <section id="project-top" class="">
                <div class="title-box" id="project-top">
                        <a href="${projectListPageLink}"><h4></h4></a>
                        <h2></h2>
                        <p></p>
                </div>
                <div class="swiper-container swiper-project">
                    <div class="swiper-wrapper"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>

            <section id="project-overview-box" class="deco-flow-wrap flow-light">
                <div class="content-width wow animate__animated animate__fadeIn">
                    <span class="scrollpin" id="project-overview"></span>

                    <ul class="time-line" id="project-info"></ul>

                    <ul class="toggle-list toggle-wrap" id="project-detail">
                        <li class="active story" id="project-story">
                            <div class="toggle-title active">
                                <h5></h5>
                                <span class="open-btn"></span>
                            </div>
                            <div class="toggle-content">
                                <p></p>
                            </div>
                        </li>
                        <li class="detail" id="project-function">
                            <div class="toggle-title">
                                <h5></h5>
                                <span class="open-btn"></span>
                            </div>
                            <div class="toggle-content">
                                <ul class="dot-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </section>

            

            <section id="moreproject" class="deco-flow-wrap flow-light">
                <div class="content-width">
                    <div class="section-title title-box"></div>
                    <ul class="card-list-block rows" id="moreList"></ul>
                    <div class="btn-block"></div>
                </div>
            </section>

        `);
    $('#top-nav').find('ul').append(`
        <li>
            <a href="#project-top">TOP</a>
        </li>
        <li>
            <a href="#project-overview">專案概覽</a>
        </li>
        <li class="nav-detail" style="display:none;">
            <a href="#design-detail">詳細介紹</a>
        </li>
        <li>
            <a href="#moreproject">更多專案</a>
        </li>
        <li class="back">
            <a href="${projectListPageLink}">回列表</a>
        </li>

    `);
            

    
    $.getJSON( "../../data/project-web.json", function( data ) {

        for  ( var i = 0 ; i < data.length ; i++ ){

            var page = data[i].folder;

            var pageColor =  data[i].colorStyle;
            
            

            if( page == thisProject ){

                    document.title = `${data[i].title}｜${projectTypeName}｜WAN JIN LUO`;
                    
                    for  ( var j = 0 ; j < color.length ; j++ ){
                        if( pageColor == color[j] ){
                            $('header').addClass(color[j]);
                            $('.project-focus-wrap').addClass(color[j]);
                        }
                    };
                    

                    $('#project-top').each(function(){

                        // $('#project-top').each(function(){
                            $('#project-top h4').html(projectType);
                            $('#project-top h2').html(data[i].title);
                            $('#project-top p').html(data[i].introText);
                        // });

                        for  ( var n = 0 ; n < data[i].img.length ; n++ ){
                            $('.swiper-wrapper').append(`
                                <div class="swiper-slide"><img src="img/${data[i].img[n].fileName}" alt="${data[i].img[n].title}"></div>
                            `);

                        };


                    });

                    $('#project-overview-box').each(function(){
                        var info = data[i].info[0];
                        var detail = data[i].detail;

                        $("#project-info").html(`
                            <li>
                                <div class="content time">
                                    <h5>執行期間</h5>
                                    <p>${info.time}</p>
                                </div>
                            </li>
                            <li>
                                <div class="content work">
                                    <h5>專案角色</h5>
                                    <p>${info.work}</p>
                                </div>
                            </li>
                            <li>
                                <div class="content tool">
                                    <h5>工具與技術</h5>
                                    <p>
                                        <span><i class="bi bi-vector-pen"></i></span> ${info.designTool}<br>
                                        <span><i class="bi bi-code-slash"></i></span> ${info.webTool}
                                    </p>
                                </div>
                            </li>
                            
                        `);
                        
                        $('#project-detail').each(function(){

                            $('.story .toggle-title h5').html('專案背景故事');
                            $('.story .toggle-content p').html(info.projectStory);
                            $('.detail .toggle-title h5').html('網站頁面與功能');

                        
                            for  ( var n = 0 ; n < detail.length ; n++ ){
                                $('.detail .dot-list').append(`
                                    <li><p><span class="title">${detail[n].title}：</span>${detail[n].content}</p></li>
                                `);
                            }
                        });

                        if( info.url !== ""){
                            $("#project-info").append(`
                                <li>
                                    <div class="content url">
                                        <h5>網址</h5>
                                        <p>
                                            <span><i class="bi bi-link-45deg"></i></span>
                                            <a href="${info.url}" target="_blank">${info.url}</a>
                                        </p>
                                    </div>
                                </li>
                            `);
                            $('#project-overview-box').append(`
                                <div class="content-width wow animate__animated animate__fadeIn">
                                    <div class="btn-block">
                                        <a href="${info.url}" target="_blank" class="btn-primary btn-lg">瀏覽網站<i class="bi bi-arrow-right-circle-fill"></i></a>
                                    </div>
                                </div>
                            `);
                        }
                        
                        
                    });

                    

                    
                    
                    
                    $('#moreproject').each(function(){

                            $('.section-title').html(`
                                <h4>More Projects</h4>
                                <h2>更多${projectTypeName}</h2>
                            `);

                            $(this).find('.btn-block').append(`
                                <a href="${projectListPageLink}" class="btn-primary btn-lg">返回列表<i class="bi bi-arrow-right-circle-fill"></i></a>
                            `);

                            var prev = data[i-1];
                            var next = data[i+1];
                            var first = 0;
                            var last = data.length - 1;

                            
                            if( i == first ){

                                var prev = data[last];
                                var next = data[i+1];

                                $("#moreList").html(`
                                <li>
                                    <a href="../${prev.folder}/index.html">
                                        <div class="pic-box">
                                            <img data-src="../${prev.folder}/img/cover.jpg" alt="" class="lazyload">
                                        </div>
                                        <div class="text-box">
                                            <h3>${prev.title}</h3>
                                            <h5>${prev.subtitle}</h5>
                                            <p>${prev.introText}</p>
                                            <span onclick="location.href='../${prev.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                <a href="../${next.folder}/index.html">
                                    <div class="pic-box">
                                        <img data-src="../${next.folder}/img/cover.jpg" alt="" class="lazyload">
                                    </div>
                                    <div class="text-box">
                                        <h3>${next.title}</h3>
                                        <h5>${next.subtitle}</h5>
                                        <p>${next.introText}</p>
                                        <span onclick="location.href='../${next.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                    </div>
                                </a>
                            </li>`);

                            }else if( i == last){

                                var prev = data[i-1];
                                var next = data[first];

                                $("#moreList").html(`
                                <li>
                                    <a href="../${prev.folder}/index.html">
                                        <div class="pic-box">
                                            <img data-src="../${prev.folder}/img/cover.jpg" alt="" class="lazyload">
                                        </div>
                                        <div class="text-box">
                                            <h3>${prev.title}</h3>
                                            <h5>${prev.subtitle}</h5>
                                            <p>${prev.introText}</p>
                                            <span onclick="location.href='../${prev.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                <a href="../${next.folder}/index.html">
                                    <div class="pic-box">
                                        <img data-src="../${next.folder}/img/cover.jpg" alt="" class="lazyload">
                                    </div>
                                    <div class="text-box">
                                        <h3>${next.title}</h3>
                                        <h5>${next.subtitle}</h5>
                                        <p>${next.introText}</p>
                                        <span onclick="location.href='../${next.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                    </div>
                                </a>
                            </li>`);

                            }else{

                                $("#moreList").html(`
                                <li>
                                    <a href="../${prev.folder}/index.html">
                                        <div class="pic-box">
                                            <img data-src="../${prev.folder}/img/cover.jpg" alt="" class="lazyload">
                                        </div>
                                        <div class="text-box">
                                            <h3>${prev.title}</h3>
                                            <h5>${prev.subtitle}</h5>
                                            <p>${prev.introText}</p>
                                            <span onclick="location.href='../${prev.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                <a href="../${next.folder}/index.html">
                                    <div class="pic-box">
                                        <img data-src="../${next.folder}/img/cover.jpg" alt="" class="lazyload">
                                    </div>
                                    <div class="text-box">
                                        <h3>${next.title}</h3>
                                        <h5>${next.subtitle}</h5>
                                        <p>${next.introText}</p>
                                        <span onclick="location.href='../${next.folder}/'" class="btn-light">專案詳情<i class="bi bi-arrow-right-circle-fill"></i></span>
                                    </div>
                                </a>
                            </li>`);

                            };

                            


                    });


                    // 詳細介紹(圖文)

                    var detailInfo = data[i].detailIntroWrap;
                    var detailWrap = "#detail-wrap";

                    if( detailInfo !== "" ){

                        $('#top-nav').find('.nav-detail').show();

                        $('#project-overview-box').after(`
                            <section id="design-detail">
                                <div class="section-title title-box">
                                    <h4>Details</h4>
                                    <h2>詳細介紹</h2>
                                </div>
                                <div class="content-width" id="detail-wrap">
                                </div>
                            </section>`
                        );


                        $('#design-detail').each(function () {
    
                            for  ( var n = 0 ; n < detailInfo.length ; n++ ){
                            
                                $(detailWrap).append(`
                                    <h4>${detailInfo[n].title}</h4>
                                    <p>${detailInfo[n].content}</p>
                                    <img src="img/${detailInfo[n].img}" alt="">

                                `);

                                
                                
    
                            };
                            
                        });
                    }

                    // 詳細介紹(僅圖片)

                    var detailImg = data[i].detailIntroImg;
                    var detailWrap = "#detail-wrap";

                    if( detailImg !== "" ){

                        // $('#top-nav').find('.back').before(`
                        // <li>
                        //     <a href="#design-detail">詳細介紹</a>
                        // </li>
                        // `);

                        $('#top-nav').find('.nav-detail').show();

                        $('#project-overview-box').after(`
                            <section id="design-detail">
                                <div class="section-title title-box">
                                    <h4>Details</h4>
                                    <h2>詳細介紹</h2>
                                </div>
                                <div class="content-width" id="detail-wrap">
                                </div>
                            </section>`
                        );


                        $('#design-detail').each(function () {
    
                            for  ( var n = 0 ; n < detailImg.length ; n++ ){
                            
                                $(detailWrap).append(`
                                    
                                    <img src="img/${detailImg[n]}" alt="">

                                `);

                                
                                
    
                            };
                            
                        });
                    }

                    
                    

                }
            };
        
        const swiper = new Swiper('.swiper-project', {
                direction: 'horizontal',
                loop: true,
                speed: 1000,
                slidesPerView: 1,
                spaceBetween: 0,
                
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
    
                //AutoPlay
                autoplay: {
                    delay: 2400,
                },

            
        });

        
        
    });




    $('.toggle-wrap').each(function(){

        var btn = '.toggle-title';
        var content = '.toggle-content';
  
  
        $(btn).click(function(){
            $(this).toggleClass('active');
            $(this).next().slideToggle();
        });
  
      });

      // Add smooth scrolling to all links
    $("#top-nav a").on('click', function(event) {

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
});