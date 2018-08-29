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
				<div id="footer">
					<ul>
						<li><a href="http://www.bioderma.co.kr/page/brand_philosophy.php" target="_blank">바이오더마 소개</a></li>
						<li><a href="http://www.bioderma.co.kr/front/board.php?bbs_id=notice" target="_blank">온라인 고객센터</a></li>
					</ul>
					<ul>
						<li>나오스코리아 유한회사</li>
						<li>대표: 장이브데모트</li>
					</ul>
					<ul>
						<li>사업자등록번호: 214-88-79685 <a href="#">(사업자정보확인)</a></li>
					</ul>
					<ul>
						<li>주소: 서울특별시 서초구 서초중앙로 138 우림빌딩 7층 나오스코리아 유한회사</li>
					</ul>
					<ul>
						<li>개인정보책임자: 김민정</li>
						<li>안내 번호: 070-4888-1640</li>
					</ul>
					<ul>
						<li>통신판매업신고번호: 2015-서울서초-0215</li>
						<li>E-MAIL: bioderma@bioderma.kr</li>
					</ul>
					<p>©2018  BIODERMA.  ALL RIGHT RESERVED</p>
				</div>
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