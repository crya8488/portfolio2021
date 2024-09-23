$(function(){
    $('#list-page').html(`
        <div class="title-box" id="list-page-title">
            <h4></h4>
            <h2></h2>
            <p></p>
        </div>

        <section class="deco-flow-wrap flow-light">
            <div class="content-width">
            <ul class="card-list-block rows" id="workList"></ul>
            </div>
        </section>

        <section class="deco-flow-wrap flow-light">
            <div class="section-title title-box">
                <h4>More</h4>
                <h2>更多作品</h2>
            </div>
            <div class="content-width">
                <ul class="card-list-block rows three" id="moreList">
                </ul>
                <div class="btn-block">
                    <a href="index.html" class="btn-primary btn-lg">回到首頁</a>
                </div>
            </div>
        </section>
    `);
    $.getJSON( 'data/indexIntro.json', function( data ){


        for  ( var i = 0 ; i < data.length ; i++ ){
            var type = data[i].name;
            var titleBox = $('#list-page-title');


            if( type == thisProjectType ){
                document.title = `${data[i].titleCN}｜WAN JIN LUO`;

                titleBox.find('h4').html(data[i].titleEN);
                titleBox.find('h2').html(data[i].titleCN);
                titleBox.find('p').html(data[i].intro);
            }

        };
    });
    // <img data-src="${projectFolder}/${data[i].folder}/img/cover.jpg" alt="" class="lazyload"></img>
    // project list
    $.getJSON( projectListJson, function( data ){
            for  ( var i = 0 ; i < data.length ; i++ ){

                if( data[i].hide !== 'hide'){
                    $(projectListId).append(`
                        <li>
                            <a href="${projectFolder}/${data[i].folder}/index.html" >
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

                }
                
                
            };
            
    });

    //moreWorks
    $.getJSON( 'data/skills.json', function( data ){

        for  ( var i = 0 ; i < data.length ; i++ ){
            
            if ( data[i].name !== thisProjectType  &&  data[i].name !== null ){

                $('#moreList').append(`
                    <li>
                        <a href="${data[i].button[0].pageLink}">
                            <div class="pic-box">
                            <img data-src="img/index/skill/${data[i].project[0].imageName}" alt="" class="lazyload">
                            </div>
                            <div class="text-box">
                                <h3>${data[i].title}</h3>
                                <span onclick="location.href='${data[i].button[0].pageLink}'" class="btn-light">${data[i].button[0].text}<i class="bi bi-arrow-right-circle-fill"></i></span>
                            </div>
                        </a>
                    </li>
                `);
            }

        };
    });
   
});
