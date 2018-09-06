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
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/m_main.js"></script>
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
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
			<div class="content sub game body-selected">
<?
	include_once "header_area.php";
?>				
				<div class="wrapper">
					<div class="balls"></div>
					<div class="visual-wrap">
						<div class="title-group">
							<div class="object">
								<img src="./images/game_obj_clock.png" alt="">
							</div>
							<div class="text">
								제한시간 동안 <b>아토덤으로 스킨PT</b> 받으세요
							</div>
						</div>
						<div class="game-container">
							<div class="pre-layer"></div>
							<div class="gage-wrap">
								<div class="msg-box">
									<span>피부 체력 강화 지수</span>
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
							<div class="guide-text guide-obj">
								<div class="text">
									제한시간 10초동안<br>
									<b>아토덤 크림을 빠르게 펴발라주면</b><br>
									스킨PT성공! 
								</div>
								<button class="start-btn" id="game-start">
									START
								</button>
							</div>
							<div class="guide-line guide-obj">
								<img src="./images/game_pre_line.png" alt="">
							</div>
							<div class="frame">
								<div class="bg">
									<img src="./images/game_body_frame_01.jpg" alt="">
								</div>
								<div class="hand" id="hand">
									<img src="./images/game_hand2.png" alt="">
								</div>
								<div class="timer">
									<div class="bg"></div>
									<div id="count">
										<img src="./images/timer_10.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?
	include_once "footer_area.php";
?>
			</div>
		</div>
<?
	include_once "popup.php";
?>	
		<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:9999;-webkit-overflow-scrolling:touch;">
			<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="width:7%;cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">
		</div>

<!--		<input type="button" id="sample-btn" data-popup="#terms2">-->
		<script type="text/javascript">
			var imageArray = [];
			for(var i = 2; i <= 19; i++) {
				var j = i;
				if(i<10) {
					j = '0'+i;
				}
				imageArray.push('./images/game_body_frame_'+j+'.jpg');
			}
			function preloading (imageArray) {
				var n = imageArray.length;
				for (var i = 0; i < n; i++) {
					var img = new Image();
					img.src = imageArray[i];
				}
			}
			preloading(imageArray);
			var pt_type		= "light";
			$('#game-start').on('click', function() {
				$('#hand').draggable("enable");
				$('.content.game').addClass('started');
				if(!gameController.firstPower) {
					gameController.firstPower = true;
					timer(1000);
				}

				$.ajax({
					type   : "POST",
					async  : false,
					url    : "./main_exec.php",
					data:{
						"exec"          : "insert_click_info",
						"click_name"    : "바디게임시작"
					}
				});
			});
			$(window).on('load', function() {
				//				$('#sample-btn').trigger('click');
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
				disabled: true,
				start: function( event, ui ) {
					//					if(!gameController.firstPower) {
					//						gameController.firstPower = true;
					//						timer(0);
					//					}
				},
				drag: function( event, ui ) {
					gameController.dragging = true;
					if(gameController.point<=gameController.goalPoint) {
						setTimeout(function() {
							var percentage = Math.floor((gameController.point/gameController.goalPoint)*100);
							gameController.point = gameController.point+0.7;
							$('#percent-num').text(percentage);
							$('#gage').css('width', percentage+'%');

							if(gameController.point<30) {
								$('.frame .bg img').attr('src', './images/game_body_frame_01.jpg');
							} else if(gameController.point>=30 && gameController.point<45) {
								$('.frame .bg img').attr('src', './images/game_body_frame_02.jpg');	
							} else if(gameController.point>=45 && gameController.point<60) {
								$('.frame .bg img').attr('src', './images/game_body_frame_03.jpg');	
							} else if(gameController.point>=60 && gameController.point<75) {
								$('.frame .bg img').attr('src', './images/game_body_frame_04.jpg');	
							} else if(gameController.point>=75 && gameController.point<90) {
								$('.frame .bg img').attr('src', './images/game_body_frame_05.jpg');	
							} else if(gameController.point>=90 && gameController.point<110) {
								$('.frame .bg img').attr('src', './images/game_body_frame_06.jpg');	
							} else if(gameController.point>=110 && gameController.point<125) {
								$('.frame .bg img').attr('src', './images/game_body_frame_07.jpg');	
							} else if(gameController.point>=125 && gameController.point<135) {
								$('.frame .bg img').attr('src', './images/game_body_frame_08.jpg');	
							} else if(gameController.point>=135 && gameController.point<150) {
								$('.frame .bg img').attr('src', './images/game_body_frame_09.jpg');	
							} else if(gameController.point>=150 && gameController.point<165) {
								$('.frame .bg img').attr('src', './images/game_body_frame_10.jpg');	
							} else if(gameController.point>=165 && gameController.point<180) {
								$('.frame .bg img').attr('src', './images/game_body_frame_11.jpg');	
							} else if(gameController.point>=180 && gameController.point<190) {
								$('.frame .bg img').attr('src', './images/game_body_frame_12.jpg');	
							} else if(gameController.point>=190 && gameController.point<210) {
								$('.frame .bg img').attr('src', './images/game_body_frame_13.jpg');	
							} else if(gameController.point>=210 && gameController.point<225) {
								$('.frame .bg img').attr('src', './images/game_body_frame_14.jpg');	
							} else if(gameController.point>=225 && gameController.point<240) {
								$('.frame .bg img').attr('src', './images/game_body_frame_15.jpg');	
							} else if(gameController.point>=240 && gameController.point<255) {
								$('.frame .bg img').attr('src', './images/game_body_frame_16.jpg');	
							} else if(gameController.point>=255 && gameController.point<270) {
								$('.frame .bg img').attr('src', './images/game_body_frame_17.jpg');	
							} else if(gameController.point>=270 && gameController.point<280) {
								$('.frame .bg img').attr('src', './images/game_body_frame_18.jpg');	
							} else {
								$('.frame .bg img').attr('src', './images/game_body_frame_19.jpg');
							}
						}, 10);
					} else {
						//						alert("게임 클리어")
						setTimeout(function(){
							// bato.popup.show($("#pt-pass"));
							bato.popup.show($("#pt-success"));
						},1000);
						gameController.clearFlag = true;
						$('.frame .bg img').attr('src', './images/game_body_frame_19.jpg');
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
				overFlag: false,
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
						$('#gage').css('width', percentage+'%');
						gageDown();
					}, 30);
				} else {
					return false;
				}
			}

			function timer(time) {
				if(gameController.time>0) {
					if(!gameController.clearFlag && !gameController.overFlag) {
						setTimeout(function() {
							gameController.time--;
							
							$('#count img').attr('src', './images/timer_'+gameController.time+'.png');
							timer(1000);
						}, time);
					}
				} else {
					//					time out!
					//					alert("게임 오버");
					if(!gameController.clearFlag) {
						bato.popup.show($('#pt-fail'));
						gameController.overFlag = true;
						gameController.point = 0;
						gameController.firstPower = false;
						gameController.dragging = false;
					}
				}
			}
			$('.burger').on('click', function() {
				$('html').addClass('menu-opened');
			});
			$('#menu-layer .btn-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>