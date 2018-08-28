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
	</head>
	<body>
		<div id="container">
			<div class="content sub find">
<?
	include_once "header.php";
?>
				<div class="scroll-content">
					<div class="title-group">
						<div class="object">
							<img src="./images/find_title_obj.png" alt="">
						</div>
						<div class="text">
							<h3>나에게 맞는 <b>PT</b> 찾기</h3>
							<p>당신의 건성 유형에 대해서 알고 있나요?</p>
							<span>
								체크리스트로 당신의 건성을 확인하고<br>
								건성 유형에 맞는 PT크림을 확인해보세요<i>!</i>
							</span>
						</div>
					</div>
					<div class="checklist">
						<button type="button" class="season">
							<img src="./images/find_btn_season.png" alt="">
						</button>
						<button type="button" class="chronic">
							<img src="./images/find_btn_chronic.png" alt="">
						</button>
						<button type="button" class="problem">
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
		</script>
	</body>
</html>