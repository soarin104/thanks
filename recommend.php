<?
	include './include/head.php';
?>
	<title>추천인 | 땡스몰</title>
	<link rel="stylesheet" href="./include/css/recommend.css">
		<section class="topHeader">
			<div class="inner">
				<a href="#" class="backBtn" onclick="history.back();">
					<img src="./include/img/icon_back.png" alt="back">
					<h2>추천인</h2>
				</a>
				<ul>
					<li><a href="#"><img src="./include/img/icon_setting.png" alt="설정"></a></li>
					<li><a href="#"><img src="./include/img/icon_home.png" alt="홈"></a></li>
				</ul>
			</div>
		</section>

		<section class="content">
			<div class="inner">
				<form action="" name="">
					<article>
						<h3>추가 정보</h3>
						<ul>
							<li>
								<h5>성함</h5>
								<input type="text" name="" placeholder="성함을 입력하세요.">
							</li>
							<li>
								<h5>연락처</h5>
								<input type="text" name="" placeholder="“-”를 제외하고 입력하세요.">
							</li>
						</ul>
					</article>

					<a href="#" class="okBtn">추천인 등록</a>
				</form>
			</div>
		</section>
<?
	include './include/foot.php';
?>