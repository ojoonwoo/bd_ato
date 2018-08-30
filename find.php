<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<title>BIODERMA - Atoderm</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<link type="image/icon" rel="shortcut icon" href="http://www.atodermcare.com/images/favicon.ico" />
		<script src="./js/snap.svg-min.js"></script>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/jquery-ui.min.js"></script>
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
						<button type="button" class="season" onclick="location.href='http://www.bioderma.co.kr/front/product_view.php?id=028067B'">
							<img src="./images/find_btn_season.png" alt="">
						</button>
						<button type="button" class="chronic" onclick="location.href='http://www.bioderma.co.kr/front/product_view.php?id=028106'">
							<img src="./images/find_btn_chronic.png" alt="">
						</button>
						<button type="button" class="problem" onclick="location.href='http://www.bioderma.co.kr/front/product_view.php?id=028104S'">
							<img src="./images/find_btn_problem.png" alt="">
						</button>
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