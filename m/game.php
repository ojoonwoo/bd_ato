<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>BIODERMA - Atoderm</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="../js/snap.svg-min.js"></script>
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/m_main.js"></script>
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="content sub game">
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
								제한시간 동안 <b>아토덤으로 피부PT</b> 받으세요
							</div>
						</div>
						<div class="game-container">
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
							<div class="frame">
								<div class="bg">
									<img src="./images/game_frame_bg.png" alt="">
								</div>
								<div class="hand" id="hand">
									<img src="./images/game_hand.png" alt="">
								</div>
								<div class="timer">
									<span id="count">10</span>
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
<?
	include_once "popup.php";
?>		
<!--		<input type="button" id="sample-btn" data-popup="#terms2">-->
		<script type="text/javascript">
			$(window).on('load', function() {
				$('#sample-btn').trigger('click');
			});

			$('#pt-pass .check-block .check').on('click', function() {
				var $parent = $(this).parent();
				$parent.find('.check').not(this).removeClass('is-checked');
				$(this).addClass('is-checked');
				pt_type	= $(this).data("value");

				// 사용자가 선택한 피부타입에 맞는 제품 및 문구 변경
				if (pt_type == "light")
				{
					$(".your-status").html("라이트 PT를 선택한 당신은 <b>계절성 건성</b>입니다");
					$(".need").html("아토덤 크림으로 스킨 PT가 필요합니다");
				}else if (pt_type == "medium"){
					$(".your-status").html("미디움 PT를 선택한 당신은 <b>만성 건성</b>입니다");
					$(".need").html("아토덤 PP밤으로 스킨 PT가 필요합니다");
				}else{
					$(".your-status").html("헤비 PT를 선택한 당신은 <b>문제성 건성</b>입니다");
					$(".need").html("아토덤 인텐시브밤으로 스킨 PT가 필요합니다");
				}
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
			});
			$('#rs1').on('click', function() {
				// console.log("1111");
				bato.popup.close($("#pt-pass"));
				bato.popup.show($("#pt-pass2"));
			});
			$('#rs2').on('click', function() {
				var mb_name 	= $("#mb_name").val();
				var mb_phone1 	= $("#mb_phone1").val();
				var mb_phone2 	= $("#mb_phone2").val();
				var mb_phone3 	= $("#mb_phone3").val();
				var mb_addr1 	= $("#mb_addr1").val();
				var mb_addr2 	= $("#mb_addr2").val();
				var mb_phone 	= mb_phone1 + mb_phone2 + mb_phone3;

				// console.log($('.mb_type').val());
				if (mb_name == "") {
					alert("이름을 입력해 주세요.");
					$("#mb_name").focus();
					return false;
				}

				if (mb_phone1 == "") {
					alert("전화번호를 입력해 주세요.");
					$("#mb_phone1").focus();
					return false;
				}
				
				if (mb_phone2 == "") {
					alert("전화번호를 입력해 주세요.");
					$("#mb_phone2").focus();
					return false;
				}
				if (mb_phone3 == "") {
					alert("전화번호를 입력해 주세요.");
					$("#mb_phone3").focus();
					return false;
				}
				if (mb_addr1 == "") {
					alert("주소를 입력해 주세요.");
					return false;
				}
				if (mb_addr2 == "") {
					alert("상세주소를 입력해 주세요.");
					$("#mb_addr2").focus();
					return false;
				}

				if ($("#agree1").is(":checked") === false)
				{
					alert('개인정보 수집 및 이용약관에 동의하셔야만 이벤트 참여가 가능합니다.');
					return false;
				}

				if ($("#agree2").is(":checked") === false)
				{
					alert('개인정보 취급 위탁 약관에 동의하셔야만 이벤트 참여가 가능합니다.');
					return false;
				}

				$.ajax({
					type:"POST",
					data:{
						"exec"				: "insert_member_info",
						"mb_name"			: mb_name,
						"mb_phone"			: mb_phone,
						"mb_addr1"			: mb_addr1,
						"mb_addr2"			: mb_addr2,
						"mb_type"			: pt_type
					},
					url: "../main_exec.php",
					success: function(response){

						if (response == "Y")
						{
							bato.popup.close($("#pt-pass"));
							bato.popup.show($("#pt-result"));
						}else{
							alert("참여자가 많습니다. 다시시도해 주세요!");
						}
					}
				});
			});
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
							$('#gage').css('width', percentage+'%');
						}, 10);
					} else {
						// alert("게임 클리어")
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
						$('#gage').css('width', percentage+'%');
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
			$('.burger').on('click', function() {
				$('html').addClass('menu-opened');
			});
			$('#menu-layer .btn-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>