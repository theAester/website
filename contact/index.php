<?php
	$roo = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
	<head>
	<link rel="stylesheet" href="/style/main.css" />
	<link rel="stylesheet" href="/style/nav.css" />
	<link rel="stylesheet" href="/style/contact.css" />
	<link rel="stylesheet" href="/style/footer.css" />
<style>

</style>
	</head>
	<body dir="rtl">
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript">
document.body.onload=function(){
	C('contact')[0].classList.add('current');
	D('holder').style.marginTop = C('mheader')[0].clientHeight;
	}
</script>
		<header class="mheader">
			<?php
				echo file_get_contents($roo."/res/header.dat"); // code resuability
			?>
		</header>
		<div class="container" id="holder">
			<main class="mmain">
				<h2>تماس با من</h2>
				<span class="bigtxt">لطفا اطلاعات خود را به همراه متن پیامتان وارد کنید. حتما از ایمیل خودتان استفاده کنید تا من بتوانم جوابتان را بدهم :)</span>
				<form action="record.php" method="POST">
				<div class="form-holder">
					<div style="border:solid black 1px; padding:1em;">
						<label for="fullname" class="form-label">نام و نام خانوادگی</label>
						<input type="text" name="fullname" required />
						<label for="mail" class="form-label">آدرس ایمیل</label>
						<input type="email" name="mail" required />
						<!--<input type="submit" onclick="verify()" value="ارسال">-->
						<button type="button" class="mybutt" onclick="verify()">ارسال</button>
					</div>
					<div>
					<textarea name="message" class="form-ta" placeholder="متن پیام شما"></textarea>
					</div>
				</div>
				</form>
				<div class="modal hide">
					<h4 style="margin-bottom:10%;">آیا مطمئنید که میخواهید این پیام را بفرستید؟</h4>
					<button class="mybutt" onclick="send()">بله</button>
					<button class="mybutt" onclick="closee()" style="float:left;";>خیر</button>
				</div>
			</main>
		</div>
		<footer class="mfooter">
			<?php
				echo file_get_contents($roo."/res/footer.dat"); // code reusability
			?>
		</footer>
		<script type="text/javascript" src="/js/nav.js"></script>
		<script type="text/javascript">
			function verify(){
				C('modal')[0].classList.remove('hide');
			}
			function closee(){
				C('modal')[0].classList.add('hide');
			}
			function send(){
				if(document.getElementsByName('fullname')[0].validity.valid && document.getElementsByName('mail')[0].validity.valid && document.getElementsByTagName('textarea')[0].value.length >0)
					document.getElementsByTagName('form')[0].submit();
				else{alert("اطلاعات ناقص است!");}
				closee();
			}
		</script>
	</body>
</html>
