<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<title>BIODERMA - Atoderm</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/snap.svg-min.js"></script>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/jquery-ui.min.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="content sub gate">
<?
	include_once "header.php";
?>
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
								<img src="./images/gate_obj_choice.png" alt="">
							</div>
							<div class="text">
								당신에게 <b>필요한 PT</b>를 선택하세요
								<span>PT에 성공하면 당신에게 맞는 PT크림을 드립니다</span>
							</div>
						</div>
						<div class="btn-group">
							<a href="game1.php">
								<div class="go-wrap">
									<div class="go-area">
										<img src="./images/gate_btn_face2.png" alt="">
									</div>
								</div>
							</a>
							<a href="game2.php">
								<div class="go-wrap">
									<div class="go-area">
										<img src="./images/gate_btn_body2.png" alt="">
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
<?
	include_once "./footer.php";
?>
			</div>
		</div>
		<script type="text/javascript">
		</script>
	</body>
</html>