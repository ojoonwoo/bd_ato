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
							<a class="button01" href="http://www.bioderma.co.kr/front/product_view.php?id=028067B" target="_blank">
                              <img src="./images/PT/button_cream.png">
                            </a>
							<a class="button02" href="http://www.bioderma.co.kr/front/product_view.php?id=028106" target="_blank">
                              <img src="./images/PT/button_pp.png">
                            </a>
							<a class="button03" href="http://www.bioderma.co.kr/front/product_view.php?id=028104S" target="_blank">
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
