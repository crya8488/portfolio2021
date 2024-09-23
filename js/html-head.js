var headContent = `
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159581635-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-159581635-1');
        </script>
    
        <meta charset="utf-8">
        <title>WAN JIN LUO - Portfolio</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0 user-scalable=no">
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="og:image" content="http://wanjinluo.com/img/ogimg.png">
    
        
        <link rel="stylesheet" href="font/bootstrap-icons.css">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Isotope-Filter -->
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        
        <script src="js/w3.js"></script>
        
        <!-- Img LazyLoad -->
        <script src="js/lazysizes.min.js" async=""></script>
    
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    
        <script src="js/header.js"></script>
        
    
        <!-- Customized -->
        <link rel="stylesheet" href="css/style.css">
        <script src="js/main.js"></script>
`

document.head.innerHTML = headContent;