<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>Document</title>
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
		<div class="popup pt-pass" id="pt-pass">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_cup.png" alt="">
					<h5>PT에 통과하셨습니다<i>!</i></h5>
					<p>당신에게 맞는 PT크림을 보내드릴게요</p>
				</div>
				<div class="tab-block">
					<div class="tab-wrapper init-state">
						<div class="tab light" data-tab-target="light">
							<div class="gage">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>라이트 PT</p>
								<span>Light</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab medium" data-tab-target="medium">
							<div class="gage">
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>미디움 PT</p>
								<span>Medium</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab heavy" data-tab-target="heavy">
							<div class="gage">
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>헤비 PT</p>
								<span>Heavy</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
					</div>
					<div class="content-opened">
						<div class="tab-wrapper">
							<div class="tab" data-tab-target="light">
								<span>라이트 PT</span>
							</div>
							<div class="tab" data-tab-target="medium">
								<span>미디움 PT</span>
							</div>
							<div class="tab" data-tab-target="heavy">
								<span>헤비 PT</span>
							</div>
						</div>
						<div class="tab-contents">
							<div class="content light">
								<img src="./images/tab_content_light.jpg" alt="">
							</div>
							<div class="content medium">
								<img src="./images/tab_content_medium.jpg" alt="">
							</div>
							<div class="content heavy">
								<img src="./images/tab_content_heavy.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="check-block">
					<div class="check-wrapper">
						<div class="check is-checked">
							<div class="checkbox"></div>
						</div>
						<div class="check">
							<div class="checkbox"></div>
						</div>
						<div class="check">
							<div class="checkbox"></div>
						</div>
					</div>
				</div>
				<div class="check-guide-msg">
					체크리스트를 확인하고 나에게 맞는 PT 크림을 선택해주세요
				</div>
				<button type="button" class="btn-result">
					다음 단계
				</button>
			</div>
		</div>
		<div class="popup pt-pass _2" id="pt-pass2">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_cup.png" alt="">
					<h5>PT에 통과하셨습니다<i>!</i></h5>
					<p>당신에게 맞는 PT크림을 보내드릴게요</p>
				</div>
				<div class="input-block">
					<div class="input-group">
						<div class="guide">
							<span>이름</span>
						</div>
						<div class="input">
							<input type="text">
						</div>
					</div>
					<div class="input-group n3">
						<div class="guide">
							<span>전화번호</span>
						</div>
						<div class="input">
							<input type="tel">
							<span>-</span>
							<input type="tel">
							<span>-</span>
							<input type="tel">
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span>주소</span>
						</div>
						<div class="input">
							<input type="text" id="mb_addr1" readonly style="padding-right: 20px;text-overflow: ellipsis;">
							<button type="button" class="search find-addr"></button>
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span style="color: #ffffff;">주소2</span>
						</div>
						<div class="input">
							<input type="text">
						</div>
					</div>
				</div>
				<div class="input-guide-msg">
					입력하신 정보로 경품이 발송되니 정확하게 입력해주세요<br>
					부정확한 정보 입력으로 경품 미발송은 책임지지 않습니다
				</div>
				<div class="terms-block">
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms1">
							개인 정보 수집 및 이용약관보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree1" class="check-target"></label>
							<input type="checkbox" class="" id="agree1">
							<span class="checkbox"></span>
							<label for="agree1">개인 정보 수집 및 이용에 동의합니다</label>
						</div>
					</div>
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms2">
							개인 정보 취급 위탁 약관 보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree2" class="check-target"></label>
							<input type="checkbox" id="agree2">
							<span class="checkbox"></span>
							<label for="agree2">개인 정보 취급 위탁에 동의합니다</label>
						</div>
					</div>
				</div>
				<button type="button" class="btn-result">
					PT 결과 보기
				</button>
			</div>
		</div>
		<div class="popup pt-result" id="pt-result">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<div class="title-block custom-border">
					<img src="./images/popup_title_img_medi.png" alt="">
					<div class="wrap">
						<h5>PT 결과</h5>
						<p>
							<span>Crème</span>
							<span>PP Baume</span>
							<span>Intensive Baume</span>
						</p>
					</div>
				</div>
				<div class="img-block">
					<img src="./images/popup_atoderm_img.png" alt="">
				</div>
				<div class="text-block custom-border">
					<p class="your-status">
						미디움 PT를 선택한 당신은 <b>만성 건성</b>입니다
					</p>
					<p class="need">
						아토덤 PP밤으로 피부 PT가 필요합니다
					</p>
					<div class="msg">(선택하신 PT에 맞는 샘플 키트는 다음주에 일괄 배송됩니다)</div>
				</div>
				<div class="caution-block">
					<p>- 부정한 방법으로 이벤트 참여시 당첨 선발에서 제외됩니다.</p>
					<p>- 입력하신 정보로 경품이 발송되오니 부정확한 정보 입력으로 <br><span>인한 경품 미발송은 책임지지 않습니다.</span></p>
					<p>- 개인정보취급 및 수집/위탁 약관에 미동의시 이벤트에 참여할 수<br><span>없습니다.</span></p>
					<p>- 이벤트 일정 및 경품은 사정에 따라 변경 될 수 있습니다.<br><span>변경 시 홈페이지에서 재공지됩니다.</span></p>
					<p>- 이벤트 및 경품 문의 dy.ahn@minivertising.kr</p>
					<p class="indent">070-4888-3804(평일 10:00~18:00/점심시간 제외 13:00~14:00)</p>
				</div>
			</div>
		</div>
		<div class="popup terms _1" id="terms1">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms1_cnt.png" alt="">
			</div>
		</div>
		<div class="popup terms _2" id="terms2">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms2_cnt.png" alt="">
			</div>
		</div>
<!--		<input type="button" id="sample-btn" data-popup="#terms2">-->
		<script type="text/javascript">
			$(window).on('load', function() {
				$('#sample-btn').trigger('click');
			});

			$('#pt-pass .check-block .check').on('click', function() {
				var $parent = $(this).parent();
				$parent.find('.check').not(this).removeClass('is-checked');
				$(this).addClass('is-checked');
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
							$('#gage').css('width', percentage+'%');
						}, 10);
					} else {
						alert("게임 클리어")
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