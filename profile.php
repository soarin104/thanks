<?
	include './include/head.php';
?>
	<title>프로필 | 땡스몰</title>
	<link rel="stylesheet" href="./include/css/profile.css">
		<section class="topHeader">
			<div class="inner">
				<a href="#" class="backBtn" onclick="history.back();">
					<img src="./include/img/icon_back.png" alt="back">
					<h2>프로필</h2>
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
					<article class="profile">
						<div class="imgBox">
							<img src="./include/img/icon_profile.png" alt="">
						</div>
						<div class="txtBox">
							<h3><input type="text" name="" value="땡스몰"></h3>
							<img src="./include/img/icon_fix.png" alt="">
						</div>
					</article>

					<article class="infoBox">
						<h4>기본정보</h4>
						<ul>
							<li>
								<h5>이름</h5>
								<input type="text" name="" value="땡스몰"></input>
							</li>
							<li>
								<h5>생년월일</h5>
								<input type="tel" name="" value="19921012"></input><!-- ios 숫자 키패드를 위해 tel type 사용 -->
							</li>
							<li>
								<h5>연락처</h5>
								<input type="tel" name="" value="010-1234-5678"></input>
							</li>
						</ul>
					</article>

					<article class="infoBox">
						<h4>집정보</h4>
						<ul>
							<li>
								<h5>주소</h5>
								<input type="text" name="" value="충남 아산시 신창면 행목로 202"></input>
							</li>
							<li>
								<h5>상세주소</h5>
								<input type="text" name="" value="302호"></input>
							</li>
						</ul>
					</article>

					<article class="infoBox">
						<h4>가입정보</h4>
						<ul>
							<li>
								<h5>추천인</h5>
								<input type="tel" name="" value="010-1234-5678"></input>
							</li>
						</ul>
					</article>

					<a href="#" class="okBtn">저장</a>
				</form>
			</div>
		</section>
<?
	include './include/foot.php';
?>