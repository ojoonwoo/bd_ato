<?
    include_once "../include/autoload.php";

    $mnv_f 			= new mnv_function();
//    $my_db         = $mnv_f->Connect_MySQL();
    $mobileYN      = $mnv_f->MobileCheck();
    // $obYN          = $mnv_f->BrowserCheck();
    $IEYN          = $mnv_f->IECheck();
    $SafariYN          = $mnv_f->SafariCheck();
    // print_r($_SERVER["HTTP_USER_AGENT"]);
    if ($mobileYN == "PC")
    {
        echo "<script>location.href='../index.php?media=".$_REQUEST["media"]."';</script>";
    }else{
        $saveMedia     = $mnv_f->SaveMedia();
        $rs_tracking   = $mnv_f->InsertTrackingInfo($mobileYN);
    }

    // include_once "./head.php";
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<!-- <meta name="viewport" content="width=device-width, user-scalable=no"> -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
			<div class="content main">
<?
	include_once "header_area.php";
?>				
				<div class="wrapper">
					<div class="balls"></div>
					<div class="visual-wrap">
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 id="svg-shape1" viewBox="0 0 795 795">
							<path id="svg-path1" fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M361.517,18.875 C361.517,18.875 375.855,29.088 407.057,24.133 C438.258,19.178 467.084,5.964 505.143,32.020 C543.203,58.075 600.988,71.025 622.497,87.227 C644.006,103.429 660.438,146.584 690.807,173.982 C721.176,201.380 728.716,202.702 746.856,241.458 C764.997,280.213 778.605,285.972 765.247,355.378 C751.890,424.784 766.117,467.738 766.123,503.475 C766.132,558.186 721.845,620.209 706.571,640.179 C641.212,725.633 557.729,760.449 478.763,763.054 C405.035,765.487 407.201,736.655 308.970,754.976 C210.740,773.296 148.950,719.955 118.052,696.263 C73.927,662.427 59.340,591.415 22.798,506.629 C-18.696,410.351 11.194,331.732 22.593,280.892 C33.248,233.370 47.471,191.177 66.382,149.445 C89.350,98.760 153.737,71.409 181.108,62.691 C211.852,52.897 251.063,30.459 272.188,14.494 C293.313,-1.472 316.308,-7.106 361.517,18.875 Z"/>
						</svg>
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 id="svg-shape2" viewBox="0 0 795 795">
							<path id="svg-path2" fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M306.399,10.323 C306.399,10.323 354.098,-4.481 406.666,2.263 C459.233,9.007 495.074,22.195 534.685,30.919 C574.296,39.643 623.842,69.430 653.753,98.082 C683.663,126.735 699.193,122.107 723.581,171.514 C747.970,220.921 762.454,282.309 774.610,320.168 C786.766,358.028 793.001,454.512 776.401,510.911 C759.800,567.311 748.769,594.315 707.467,638.073 C665.479,682.560 656.519,717.693 615.257,743.743 C573.996,769.794 488.790,797.531 417.409,792.996 C336.480,787.855 278.045,776.296 229.408,765.236 C180.771,754.175 144.993,713.680 121.979,690.013 C113.967,681.773 73.346,648.692 51.255,602.253 C32.447,562.715 6.818,523.669 2.017,485.837 C-2.784,448.005 5.675,380.590 2.017,358.675 C-1.641,336.760 4.287,260.365 56.627,200.170 C108.967,139.975 130.732,109.364 160.475,87.336 C190.217,65.309 271.939,13.576 306.399,10.323 Z"/>
						</svg>
						<div class="title back wave" data-wave="0.8">
							<img src="./images/main_title_back.png" alt="">
						</div>
						<div class="people wave" data-wave="0.5">
							<img src="./images/main_body.png" alt="">
						</div>
						<div class="title front wave" data-wave="0.8">
							<img src="./images/main_title_front.png" alt="">
						</div>
						<div class="text-group wave" data-wave="0.2">
							<div class="desc">
								<p>당신의 스킨도<br>이제는 체력 관리가 필요합니다</p>
								<p>바이오더마 PT클럽에서는<br>당신의 스킨에<br>가장 알맞은 PT를 제공합니다</p>
							</div>
						</div>
					</div>
					<div class="btn-group">
						<button type="button" onclick="location.href='gate.php'"><span>스킨 PT 시작</span></button>
						<button type="button" onclick="location.href='find_pt.php'"><span>나에게 맞는 PT 찾기</span></button>
					</div>
<?
	include_once "footer_area.php";
?>				
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var svg1 = document.getElementById("svg-shape1");
			var svg2 = document.getElementById("svg-shape2");
			var s1 = Snap(svg1);
			var s2 = Snap(svg2);

			var svgPath1 = Snap.select('#svg-path1');
			var svgPath2 = Snap.select('#svg-path2');

			var svg1Points = svgPath1.node.getAttribute('d');
			var svg2Points = svgPath2.node.getAttribute('d');

			svgPath1.animate({ d: svg2Points }, 1600, mina.easeinout, svgChange(svgPath1, svg2Points));  
			svgPath2.animate({ d: svg1Points }, 1600, mina.easeinout, svgChange(svgPath2, svg1Points));  


			function svgChange(el, currentPoints) {
				var targetPoints = '';
				if(currentPoints == svg1Points) {
					targetPoints = svg2Points;
				} else {
					targetPoints = svg1Points;
				}
				setTimeout(function() {
					el.animate({ d: targetPoints }, 1600, mina.easeinout, svgChange(el, targetPoints));
				}, 1600);
			}

			(function($){
				var x;
				var y;
				var waves = $('.wave').each(function(){
					this.np = 0;
					this.ep = 0;
					this.yp = 0;
					this.lv = this.getAttribute('data-wave')*1;
				});
				function move(){
					this.ep = this.lv*x;
					this.yp = this.lv*y;
				}
				function loop() {
					this.np = this.np + (this.ep - this.np)*0.1;
					this.yp = this.yp + (this.yp - this.yp)*0.1;
					this.style.transform = "translate("+this.np+'px'+", "+this.yp+'px'+")";
					//			this.style.transform = "translate("+this.np+'px'+")";
				}
				$(window).on('mousemove', function(e){
					x = (e.clientX - $(window).width()/2) / 50;
					y = (e.clientY - $(window).height()/2) / 50;
					waves.each(move);
				});

				setInterval(function(){
					waves.each(loop);
				},33);
			})(jQuery);

			
			$('.burger').on('click', function() {
				$('html').addClass('menu-opened');
			});
			$('#menu-layer .btn-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>