$(function(){
    var projectType = 'Branding / Graphic';
    var projectTypeName = '品牌與平面設計';
    var projectListPage = 'project-design.html';
    var projectListPageLink = '../../' + projectListPage;
    var color =['dark','white','tint','lighter','no-bg'];


    

    // body #project-page
    $('#project-page').html(`
            <section id="design-top">
                <div class="title-box">
                        <h4></h4>
                        <h2></h2>
                        <p></p>
                </div>
                <div class="cover-pic">
                    <img src="img/cover.jpg" alt="">
                </div>
                
            </section>

            <section id="design-detail">
                <div class="content-width" id="detail-wrap">
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
            <a href="#design-top">TOP</a>
        </li>
        <li>
            <a href="#detail-wrap">設計介紹</a>
        </li>
        <li class="back">
            <a href="#moreproject">更多作品</a>
        </li>
        <li class="back">
            <a href="${projectListPageLink}">回列表</a>
        </li>

    `);
    
    $.getJSON( "../../data/project-design.json", function( data ) {

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
                    


                    $('#project-page').each(function(){

                        var top ="#design-top";
                        var detail = "#detail-wrap";

                        // 標題
                        $(top).find('h4').html(projectType);
                        $(top).find('h2').html(data[i].title);
                        $(top).find('p').html(data[i].introText);

                        
                        

                        var detailInfo = data[i].detail;

                        for  ( var n = 0 ; n < detailInfo.length ; n++ ){
                        

                            $(detail).append(`
                                <h4>${detailInfo[n].title}</h4>
                                <p>${detailInfo[n].content}</p>
                                <img src="img/${detailInfo[n].img}" alt="">
                            `)

                        };

                        


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


   
});