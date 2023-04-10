<?
	include './include/head.php';
?>
	<title>인증센터 | 땡스몰</title>
	<link rel="stylesheet" href="./include/css/certify.css">
		<section class="topHeader">
			<div class="inner">
				<a href="#" class="backBtn" onclick="history.back();">
					<img src="./include/img/icon_back.png" alt="back">
					<h2>인증센터</h2>
				</a>
				<ul>
					<li><a href="#"><img src="./include/img/icon_setting.png" alt="설정"></a></li>
					<li><a href="#"><img src="./include/img/icon_home.png" alt="홈"></a></li>
				</ul>
			</div>
		</section>

		<section class="content">
			<div class="inner">
				<article>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_level.png" alt="level" class="icon">
							<h4>인증레벨</h4>
							<p class="detail">3</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_phone.png" alt="phone" class="icon">
							<h4>휴대폰 본인 확인</h4>
							<p class="detail">인증</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_account.png" alt="account" class="icon">
							<h4>계좌 인증</h4>
							<p class="detail">미인증</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_email.png" alt="email" class="icon">
							<h4>이메일 인증</h4>
							<p class="detail">미인증</p>
						</a></li>
					</ul>
				</article>
				<article class="error">
					<p>
						<img src="./include/img/icon_error1.png" alt="error">
						<span>인증 오류 발생 시, 고객센터 문의 바랍니다.</span>
					</p>
				</article>
				<article class="error red">
					<p>
						<img src="./include/img/icon_error2.png" alt="error">
						<span>신분증 인증 서비스는 일시 중단 되었습니다.</span>
					</p>
				</article>
			</div>
		</section>
<?
	include './include/foot.php';
?>