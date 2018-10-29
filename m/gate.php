<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta property="og:type" content="website" />
		<meta property="og:title" content="바이오더마 PT 클럽" />
		<meta property="og:url" content="http://www.atodermcare.com" />
		<meta property="og:image" content="http://www.atodermcare.com/images/share_img2.jpg" />
		<meta property="og:description" content="당신의 피부도 건강해지기 위해 PT가 필요하니까! 지금 바이오더마에서 선착순으로 무료 스킨 PT받으세요!" />
		<link type="image/icon" rel="shortcut icon" href="http://www.atodermcare.com/images/favicon.ico" />
		<title>BIODERMA - Atoderm</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="../js/snap.svg-min.js"></script>
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
		<div id="container">
			<div class="content sub gate">
<?
	include_once "header_area.php";
?>				
				<div class="wrapper">
					<div class="balls"></div>
					<div class="visual-wrap">
						<div class="title-group">
							<div class="object">
								<img src="./images/gate_obj_choice.png" alt="">
							</div>
							<div class="text">
								당신에게 <b>필요한 PT</b>를 선택하세요
								<span>PT에 성공하면 추첨을 통해 당신에게 맞는 PT크림을 드립니다</span>
							</div>
						</div>
						<div class="btn-group">
							<a href="game1.php" class="btn">
								<img src="./images/gate_btn_face.png" alt="">
							</a>
							<a href="game2.php" class="btn">
								<img src="./images/gate_btn_body.png" alt="">
							</a>
						</div>
					</div>
				</div>
<?
	include_once "footer_area.php";
?>	
			</div>
		</div>
		<script type="text/javascript">
		$('.burger').on('click', function() {
			$('html').addClass('menu-opened');
		});
		$('#menu-layer .btn-close').on('click', function() {
			$('html').removeClass('menu-opened');
		});
		</script>
	</body>
</html>