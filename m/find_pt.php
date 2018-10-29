<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
		<meta property="og:type" content="website" />
        <meta property="og:title" content="바이오더마 PT 클럽" />
        <meta property="og:url" content="http://www.atodermcare.com" />
        <meta property="og:image" content="http://www.atodermcare.com/images/share_img2.jpg" />
        <meta property="og:description" content="당신의 피부도 건강해지기 위해 PT가 필요하니까! 지금 바이오더마에서 선착순으로 무료 스킨 PT받으세요!" />
		<link type="image/icon" rel="shortcut icon" href="http://www.atodermcare.com/images/favicon.ico" />
		<title>BIODERMA - Atoderm</title>
        <link rel="stylesheet" type="text/css" href="./css/common_pt.css">
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/m_main.js"></script>
        <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124914521-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-124914521-1');
		</script>
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			 n.queue=[];t=b.createElement(e);t.async=!0;
			 t.src=v;s=b.getElementsByTagName(e)[0];
			 s.parentNode.insertBefore(t,s)}(window,document,'script',
											 'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '325252378028378'); 
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1" 
				 src="https://www.facebook.com/tr?id=325252378028378&ev=PageView
					  &noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <!-- <div id="main">
            <div class="section">
                <div class="bg">
                    <img src="./images/PT/bg.jpg" alt="배경">
                </div> -->
		<div id="container">
			<div class="content sub find">
<?
	include_once "header_area.php";
?>				
                <div class="wrapper">
                    <div class="txt">
                        <img src="./images/PT/txt.png">
                    </div>
                    <div class="contents">
                        <div class="images">
                            <img src="./images/PT/contents.png">
                        </div>
                        <div class="button">
							<!-- <a class="button01" href="http://www.bioderma.co.kr/front/product_view.php?id=028067B" target="_blank"> -->
							<a class="button01" href="http://www.bioderma.co.kr/front/product_view.php?id=7000077&utm_source=atoderm-pt&utm_medium=miniver-link&utm_campaign=by-atoderm&utm_content=btn1" target="_blank">
                              <img src="./images/PT/button_cream.png">
                            </a>
							<a class="button02" href="http://www.bioderma.co.kr/front/product_view.php?id=028106&utm_source=atoderm-pt&utm_medium=miniver-link&utm_campaign=by-atoderm&utm_content=btn2" target="_blank">
                              <img src="./images/PT/button_pp.png">
                            </a>
							<a class="button03" href="http://www.mdeshop.co.kr/shop/item.php?it_id=1456728614" target="_blank">
                              <img src="./images/PT/button_balm.png">
                            </a>
                        </div>
                    </div>
<?
	include_once "footer_area.php";
?>	
                </div>
            </div>
        </div>

		<script type="text/javascript">
			$('.content').on('scroll', function() {
				if($(this).scrollTop()>$('#header').height()) {
					$('html').addClass('is-scrolled');
				} else {
					$('html').removeClass('is-scrolled');
				}
            });
            
            $('.burger').on('click', function() {
				$('html').addClass('menu-opened');
			});
			$('#menu-layer .btn-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});

		</script>
    </body>
</html>
