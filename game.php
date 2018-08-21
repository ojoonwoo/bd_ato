<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/snap.svg-min.js"></script>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/jquery-ui.min.js"></script>
		<script src="./js/main.js"></script>
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="content sub game">
				<div id="header">
					<div class="inner">
						<div class="logo">
							<img src="./images/header_logo.png" alt="">
						</div>
						<ul class="menu">
							<li><a href="javascript:void(0)">HOME</a></li>
							<li class="is-active"><a href="javascript:void(0)">PT GAME</a></li>
							<li><a href="javascript:void(0)">PT CREAM</a></li>
						</ul>
					</div>
				</div>
				<div class="wrapper">
					<div class="balls"></div>
					<div class="svg-wrapper pink">
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 width="2166.8px" height="1004.8px" id="svg-line-pink" class="svg-line" preserveAspectRatio="none">
							<path fill-rule="evenodd"  stroke="rgb(201, 62, 139)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M0.600,750.600 C0.600,750.600 66.530,800.747 149.600,616.600 C232.670,432.452 262.264,274.469 425.600,302.600 C588.936,330.731 652.941,556.025 729.600,665.600 C819.631,794.290 983.456,854.587 1126.600,753.600 C1259.350,659.946 1359.053,516.624 1418.600,330.600 C1478.147,144.576 1531.098,-40.179 1728.600,8.600 C1890.069,48.479 1925.967,153.386 2165.600,187.600 L2164.600,1003.600 L101.600,1003.600 L0.600,750.600 Z"/>
						</svg>
<!--
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 id="svg-line-pink" class="svg-line" viewbox="150 180 2166 1004" preserveAspectRatio="none">
							<path fill-rule="evenodd"  stroke="rgb(201, 62, 139)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M0.600,750.600 C0.600,750.600 66.530,800.747 149.600,616.600 C232.670,432.452 262.264,274.469 425.600,302.600 C588.936,330.731 652.941,556.025 729.600,665.600 C819.631,794.290 983.456,854.587 1126.600,753.600 C1259.350,659.946 1359.053,516.624 1418.600,330.600 C1478.147,144.576 1531.098,-40.179 1728.600,8.600 C1890.069,48.479 1925.967,153.386 2165.600,187.600 L2164.600,1003.600 L101.600,1003.600 L0.600,750.600 Z"/>
						</svg>
-->
					</div>
					<div class="svg-wrapper blue">
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 width="2069.8px" height="1017.8px" id="svg-line-blue" class="svg-line">
							<path fill-rule="evenodd"  stroke="rgb(23, 106, 193)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M0.600,680.600 C0.600,680.600 82.155,757.290 171.600,649.600 C261.045,541.910 280.444,259.368 420.600,256.600 C560.756,253.832 566.897,515.139 630.600,677.600 C686.709,820.696 856.548,870.751 1031.600,804.600 C1176.747,749.750 1434.281,627.135 1475.783,381.813 C1497.025,256.250 1497.677,2.360 1674.600,0.600 C1859.533,-1.239 1914.162,397.679 2058.600,398.600 L2068.600,1016.600 L8.600,1016.600 L0.600,680.600 Z"/>
						</svg>
					</div>
					<div class="visual-wrap">
						<div class="title-group">
							<div class="object">
								<img src="./images/game_obj_clock.png" alt="">
							</div>
							<div class="text">
								제한시간 동안 <b>아토덤으로 피부PT</b> 받으세요
							</div>
						</div>
						<div class="game-container">
							<div class="frame">
								<div class="bg">
									<img src="./images/game_frame_bg@2x.jpg" alt="">
								</div>
								<div class="hand" id="hand">
									<img src="./images/game_hand@2x.png" alt="">
								</div>
								<div class="timer">
									<span id="count">10</span>
								</div>
							</div>
							<div class="gage-wrap">
								<div class="msg-box">
									<span>피부 체력</span>
									<span>강화 지수</span>
								</div>
								<div class="inner">
									<div class="percent">
										<span class="num" id="percent-num">0</span>
										<span>%</span>
									</div>
									<div class="gage-bg">
										<div class="gage" id="gage"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="footer">
					<ul>
						<li><a href="#">바이오더마 소개</a></li>
						<li><a href="#">온라인 고객센터</a></li>
					</ul>
					<ul>
						<li>나오스코리아 유한회사</li>
						<li>대표: 장이브데모트</li>
						<li>사업자등록번호: 214-88-79685 <a href="#">(사업자정보확인)</a></li>
					</ul>
					<ul>
						<li>주소: 서울특별시 서초구 서초중앙로 138 우림빌딩 7층 나오스코리아 유한회사</li>
						<li>개인정보책임자: 김민정</li>
					</ul>
					<ul>
						<li>이벤트 안내 번호: 070-4888-1640</li>
						<li>통신판매업신고번호: 2015-서울서초-0215</li>
						<li>E-MAIL: bioderma@bioderma.kr</li>
					</ul>
					<p>©2018  BIODERMA.  ALL RIGHT RESERVED</p>
				</div>
			</div>
		</div>
<?
	include_once "popup.php";
?>		
		<input type="button" id="sample-btn" data-popup="#pt-pass">
		<script type="text/javascript">
			$(window).on('load', function() {
				$('#sample-btn').trigger('click');
			});
			
			$('#pt-pass .check-block .check').on('click', function() {
				var $parent = $(this).parent();
				$parent.find('.check').not(this).removeClass('is-checked');
				$(this).addClass('is-checked');
				pt_type	= $(this).data("value");
//				$('.tab-contents').find('.content').not(tabTarget).hide();
//				$('.tab-contents').find('.'+tabTarget).show();
			});
			
			$('.tab-wrapper .tab').on('click', function() {
				var $parent = $(this).parent();
				var tabTarget = $(this).data('tab-target');
				if($parent.hasClass('init-state')) {
					$('.tab-block .content-opened').show();
//					$('.tab-contents').find('.content').not(tabTarget).hide();
//					$('.tab-contents').find.(tabTarget).show();
				}
				$('.tab-contents').find('.content').not(tabTarget).hide();
				$('.tab-contents').find('.'+tabTarget).show();
			})
			$('#hand').draggable({
				axis: "x",
				revert: true,
				revertDuration: 250,
				snap: true,
				snapMode: "inner",
				start: function( event, ui ) {
					if(!gameController.firstPower) {
						gameController.firstPower = true;
						timer(0);
					}
				},
				drag: function( event, ui ) {
					gameController.dragging = true;
					if(gameController.point<=gameController.goalPoint) {
						setTimeout(function() {
							var percentage = Math.floor((gameController.point/gameController.goalPoint)*100);
							gameController.point++;
							$('#percent-num').text(percentage);
							$('#gage').css('height', percentage+'%');
						}, 10);
					} else {
						// alert("게임 클리어");
						bato.popup.show($("#pt-pass"));
						gameController.clearFlag = true;
						return false;
					}
				},
				stop: function( event, ui) {
					gameController.dragging = false;
					if(!gameController.clearFlag) {
						gageDown();
					}
				}
			});
			
//			수정 안되게
			var gameController = {
				firstPower: false,
				dragging: false,
				clearFlag: false,
				point: 0,
				time: 10,
				goalPoint: 300
			}
			
			function gageDown() {
				if(!gameController.dragging && gameController.point>0) {
					setTimeout(function() {
						var percentage = Math.floor((gameController.point/gameController.goalPoint)*100);
						gameController.point--;
						$('#percent-num').text(percentage);
						$('#gage').css('height', percentage+'%');
						gageDown();
					}, 30);
				} else {
					return false;
				}
			}
			
			function timer(time) {
				if(gameController.time>0) {
					if(!gameController.clearFlag) {
						setTimeout(function() {
							gameController.time--;
							$('#count').text(gameController.time)
							timer(1000);
						}, time);
					}
				} else {
//					time out!
					alert("게임 오버");
					gameController.point = 0;
					gameController.firstPower = false;
					gameController.dragging = false;
				}
			}
		</script>
	</body>
</html>