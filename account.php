<?
	include './include/head.php';
?>
<title>계좌이체 | 땡스몰</title>
<link rel="stylesheet" href="./include/css/account.css">

		<section class="topHeader">
			<div class="inner">
				<a href="#" class="backBtn" onclick="history.back();">
					<img src="./include/img/icon_back.png" alt="back">
					<h2>계좌이체</h2>
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
					<ul>
						<li>
							<input type="tel" name=""><!-- 아이폰 숫자 패드 설정으로 인해 tel type 사용 -->
							<span>“-”를 제외하고 입력하세요.</span>
						</li>
						<li>
							<select name="" id="">
								<option value="">은행선택</option>
								<option value="">하나은행</option>
								<option value="">국민은행</option>
								<option value="">신한은행</option>
								<option value="">농협은행</option>
								<option value="">기업은행</option>
							</select>
						</li>
						<li>
							<input type="tel" name="" class="point"><!-- 아이폰 숫자 패드 설정으로 인해 tel type 사용 -->
							<span>최소 이체금액 1000원 / 1일 남은 이체한도 : <strong>300,000원</strong></span>
						</li>
						<li>
							<input type="password" class="point">
							<span>비밀번호를 입력해주세요.</span>
						</li>
					</ul>
					<a href="#" class="okBtn">이체하기</a>
				</form>
			</div>
		</section>

<?
	include './include/foot.php';
?>