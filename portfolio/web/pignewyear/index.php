<!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>五隻廢豬迎豬年</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#ffe3e1"/>
    <link rel="shortcut icon" href="img/pig.ico"/>
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    // ======================TOP 至頂==========================
        $(window).scroll(function(){

                if($(this).scrollTop()>500){
                    $('.top_box').addClass('top_act');
                }else {
                    $('.top_box').removeClass('top_act');
                }


             });
        $(function(){
            // 幫 a.abgne_gotoheader 加上 click 事件
            $('a.top_box').click(function(){
                // 讓捲軸用動畫的方式移動到 0 的位置
                // 感謝網友 sam 修正 Opera 問題
                var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
                $body.animate({
                    scrollTop: 0
                }, 600);
         
                return false;

            });

        });
        $(function(){
            $('.index_popup').hide();
            setTimeout(function(){
                $('.index_popup').fadeIn("slow");
            },300);

            $('.close').click(function(){
                $('.index_popup').fadeOut("slow");
                return false 
            }); 
        });
</script>
</head>

<body>

<!-- ------------POPUP----------- -->
<div class="index_popup">
    <div>
        <div class="in_pop">
            <span>本網站僅限豬豬瀏覽，請問你是豬豬嗎？</span>            
            <a href="#" class="close">對，我是豬豬</a>
                
        </div>
    </div>
</div>


<div class="main">
    <!-- <img src="img/pig1.png" alt="" class="pic"> -->
    <img src="img/pig4.png" alt="" class="picbg">
    <img src="img/pig3.png" alt="" class="picpig">
    <img src="img/pig2.png" alt="" class="title">
</div>
<div class="text">
    <h2>貓棟跨年特別企劃</h2>
    <h3>五隻廢豬迎豬年</h3>
    <span class="line"></span>
    <p>經過了整整一年的奮鬥，2019豬年即將到來，不只是歪最愛的豬豬，還是我們所有成員的生肖豬豬，為了這值得紀念的時刻，我們一起成為五隻廢豬，快樂迎接新的一年～</p>
    <ul class="btns">
        <li><a href="#tab1">活動時間</a></li>
        <li><a href="#tab2">注意事項</a></li>
        <li><a href="#tab3">夜宿地點</a></li>
    </ul>

</div>
<div class="text" id="tab1">
    <h2>活動時間</h2>
    <h3>2018/12/31 (一) ~ 2019/1/1 (二)</h3>
    <span class="line"></span>
    <p>跨年一起嗨嗨嗨</p>
</div>

<div class="text" id="tab2">
    <h2>注意事項</h2>
    <h3>豬豬們要注意看！</h3>
    <span class="line"></span>
    <ul class="list">
        <li><span>每人攜帶物品：</span> 個人衣物用品、<span>個人的豬豬配件(請用心一點)</span>、交換禮物(300元以上的看起來很廢但其實很棒或是看起來很棒但其實很廢的東西)</li>
        <li><span>指定攜帶物品：</span>歪豬帶麥克風、祐豬帶桌遊、媛豬帶腦袋和零食、今豬帶飲料、茹豬帶佈置用品</li>

    </ul>
</div>

<div class="text" id="tab3">
    <h2>夜宿地點</h2>
    <h3>台中金典酒店</h3>
    <span class="line"></span>
    <ul class="list">
        <li><span>住房時間：</span>下午15:00後</li>
        <li><span>退房時間：</span>中午12:00前</li>
        <li><span>設備：</span>SPA、早餐</li>
        <li>提供多種清潔及個人衛生用品，包含沐浴乳、洗髮精、潤髮乳、柔膚乳液、牙刷、牙膏、浴帽、刮鬍刀、梳子、棉花棒、牙線棒、化妝棉</li>
        <li>提供電熱水壺、電子保險箱、鬧鐘、冰箱設備</li>
        <li>提供多種設備，包含行李架、商務辦公桌、大型衣櫃、著衣鏡、 衣架、室內用拖鞋、擦鞋布、洗衣袋、購物袋</li>
        <li>採用乾濕分離的獨立淋浴室，備有大型浴缸、吹風機、理容鏡、浴廁電話</li>
        <li><span>地址：</span>台中市西區健行路1049號(台灣大道路口)</li>
        <li><span>訂房專線：</span>04-2324-6000</li>  
    </ul>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.4480761051836!2d120.66094061547568!3d24.15601363439103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d9d2a396547%3A0xbcfaedfa2eb17a15!2z5Y-w5Lit6YeR5YW46YWS5bqX!5e0!3m2!1szh-TW!2stw!4v1545880545968" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<div class="footer">
    <h4>活動企畫：淳豬 | 網頁設計：今豬</h4>
    <span>2018 © WANJIN</span>

</div>
<span class=""></span>


<!-- <div> -->
    <a href="#" class="top_box"><img src="img/top.png" alt=""></a>
<!-- </div> -->

<div>
    <table>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>




    
</body>