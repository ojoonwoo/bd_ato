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
	</head>
	<body>
		<div id="container">
			<div class="content sub find">
				<div id="header">
					<div class="inner">
						<div class="logo">
							<a href="http://www.bioderma.co.kr/" target="_blank">
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
					<a href="http://www.bioderma.co.kr/front/product_view.php?id=7000077" target="_blank">
							<button type="button" class="season">
								<img src="./images/find_btn_season.png" alt="">
							</button>
						</a>
						<a href="http://www.bioderma.co.kr/front/product_view.php?id=028106" target="_blank">
							<button type="button" class="chronic">
								<img src="./images/find_btn_chronic.png" alt="">
							</button>
						</a>
						<a href="http://www.bioderma.co.kr/front/product_view.php?id=028104S" target="_blank">
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