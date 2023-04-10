<?
	include './include/head.php';
?>
	<title>설정 | 땡스몰</title>
	<link rel="stylesheet" href="./include/css/setting.css">
		<section class="topHeader">
			<div class="inner">
				<a href="#" class="backBtn" onclick="history.back();">
					<img src="./include/img/icon_back.png" alt="back">
					<h2>설정</h2>
				</a>
				<ul>
					<li><a href="#"><img src="./include/img/icon_setting.png" alt="설정"></a></li>
					<li><a href="#"><img src="./include/img/icon_home.png" alt="홈"></a></li>
				</ul>
			</div>
		</section>

		<section class="content">
			<div class="inner">
				<!-- 앱설정 -->
				<article>
					<h3>앱 설정</h3>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_alert.png" alt="" class="icon">
							<h4>알림</h4>
							<p class="detail">거부</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_language.png" alt="" class="icon">
							<h4>언어</h4>
							<p class="detail">한국어</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_distance.png" alt="" class="icon">
							<h4>거리</h4>
							<p class="detail">5km</p>
						</a></li>
					</ul>
				</article>
				<!-- //앱설정 -->
				<!-- 내정보 -->
				<article>
					<h3>내 정보</h3>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_info.png" alt="" class="icon">
							<h4>정보수정</h4>
							<p class="detail"></p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_level.png" alt="" class="icon">
							<h4>인증레벨</h4>
							<p class="detail">3</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_class.png" alt="" class="icon">
							<h4>등급</h4>
							<p class="detail">Premium</p>
						</a></li>
					</ul>
				</article>
				<!-- //내정보 -->
				<!-- 결제정보 -->
				<article>
					<h3>결제정보</h3>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_limit.png" alt="" class="icon">
							<h4>이체한도</h4>
							<p class="detail">10,000</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_recommend.png" alt="" class="icon">
							<h4>추천인</h4>
							<p class="detail">3</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_pay.png" alt="" class="icon">
							<h4>결제</h4>
							<p class="detail">페이</p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_coin.png" alt="" class="icon">
							<h4>코인내역</h4>
						</a></li>
					</ul>
				</article>
				<!-- //결제정보 -->
				<!-- 이용약관 -->
				<article>
					<h3>이용약관</h3>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_agree.png" alt="" class="icon">
							<h4>이용약관</h4>
							<p class="detail"></p>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_personal.png" alt="" class="icon">
							<h4>개인정보처리방침</h4>
							<p class="detail"></p>
						</a></li>
					</ul>
				</article>
				<!-- //이용약관 -->
				<!-- 계정관리 -->
				<article>
					<h3>계정관리</h3>
					<ul>
						<li><a href="#">
							<img src="./include/img/icon_logout.png" alt="" class="icon">
							<h4>로그아웃</h4>
						</a></li>
						<li><a href="#">
							<img src="./include/img/icon_withdraw.png" alt="" class="icon">
							<h4>탈퇴하기</h4>
						</a></li>
					</ul>
				</article>
				<!-- //계정관리 -->
			</div>
		</section>
<?
	include './include/foot.php';
?>