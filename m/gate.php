<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta property="og:type" content="website" />
		<meta property="og:title" content="[바이오더마] Atoderm PT CLUB" />
		<meta property="og:url" content="http://www.atodermcare.com" />
		<meta property="og:image" content="http://www.atodermcare.com/images/share_img.jpg" />
		<meta property="og:description" content="당신의 스킨도 이제는 체력 관리가 필요하니까! 지금 바이오더마에서 당신에게 필요한 무료 스킨 PT를 받아보세요!" />
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
								<span>PT에 성공하면 당신에게 맞는 PT크림을 드립니다</span>
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