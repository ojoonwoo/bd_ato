<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta property="og:type" content="website" />
		<meta property="og:title" content="바이오더마 PT 클럽" />
		<meta property="og:url" content="http://www.atodermcare.com" />
		<meta property="og:image" content="http://www.atodermcare.com/images/share_img2.jpg" />
		<meta property="og:description" content="당신의 피부도 건강해지기 위해 PT가 필요하니까! 지금 바이오더마에서 선착순으로 무료 스킨 PT받으세요!" />
		<title>BIODERMA - Atoderm</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<link type="image/icon" rel="shortcut icon" href="http://www.atodermcare.com/images/favicon.ico" />
		<script src="./js/snap.svg-min.js"></script>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/jquery-ui.min.js"></script>
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
			<div class="content sub find">
				<div id="header">
					<div class="inner">
						<div class="logo">
							<a href="http://www.bioderma.co.kr/?utm_source=atoderm-pt&utm_medium=miniver-link&utm_campaign=by-atoderm&utm_content=btn-header-logo" target="_blank">
								<img src="./images/header_logo.png" alt="logo">
							</a>
						</div>
						<ul class="menu">
							<li><a href="index.php">HOME</a></li>
							<li><a href="gate.php">PT 시작</a></li>
							<li class="is-active"><a href="find.php">PT 찾기</a></li>
						</ul>
					</div>
				</div>
				<div class="scroll-content">
					<div class="title-group">
						<div class="object">
							<img src="./images/find_title_obj.png" alt="">
						</div>
						<div class="text">
							<h3>나에게 맞는 <b>PT</b> 찾기</h3>
							<span>
								몰랐던 당신의 건성 유형을 알아보고 그에 맞는 PT크림을 확인해보세요!
							</span>
						</div>
					</div>
					<div class="checklist">
					<!-- <a href="http://www.bioderma.co.kr/front/product_view.php?id=028067B" target="_blank"> -->
						<a href="http://www.bioderma.co.kr/front/product_view.php?id=7000077&utm_source=atoderm-pt&utm_medium=miniver-link&utm_campaign=by-atoderm&utm_content=btn-find-cream" target="_blank">
							<button type="button" class="season">
								<img src="./images/find_btn_season.png" alt="">
							</button>
						</a>
						<a href="http://www.bioderma.co.kr/front/product_view.php?id=028106&utm_source=atoderm-pt&utm_medium=miniver-link&utm_campaign=by-atoderm&utm_content=btn-find-cream" target="_blank">
							<button type="button" class="chronic">
								<img src="./images/find_btn_chronic.png" alt="">
							</button>
						</a>
						<a href="http://www.mdeshop.co.kr/shop/item.php?it_id=1456728614" target="_blank">
							<button type="button" class="problem">
								<img src="./images/find_btn_problem.png" alt="">
							</button>
						</a>
					</div>
				</div>
<?
	include_once "./footer.php";
?>
			</div>
		</div>
		<script type="text/javascript">
		$(window).on('scroll', function(e) {
			var currentScroll = $(this).scrollTop();
			
			if (currentScroll != 0)
				$("#header").css("background","rgba(255, 255 ,255 ,0.3)");
			else
				$("#header").css("background","none");
		});

		</script>
	</body>
</html>