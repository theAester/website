<?php
	$roo = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
	<head>
	<link rel="stylesheet" href="/style/main.css" />
	<link rel="stylesheet" href="/style/nav.css" />
	<link rel="stylesheet" href="/style/resume.css" />
	<link rel="stylesheet" href="/style/footer.css" />
<style>

</style>
	</head>
	<body dir="rtl">
		<header class="mheader">
			<?php
				echo file_get_contents($roo."/res/header.dat"); // code resuability
			?>
		</header>
		<div class="container" id="holder">
			<main class="mmain">
				<div style="position:relative; top:-7em;" id="resume"></div>
				<h2>رزومه</h2>
				<div class="art">
					<h3>سابقه تحصیلات</h3>
					<ul class="art-ul">
						<li class="art-li">دانشجوی لیسانس مهدسی کامپیونر دانشگاه شریف</li>
						<li class="art-li">مدرک کار با پایگاه داده (SQL databases, design and implementation) با نمره ۹۰</li>
						<li class="art-li">دوره برنامه نویسی C# برای توسعه نرم افزار های ویندوزی و بازی سازی</li>
						<li class="art-li">دوره طراجی وبسایت و پیاده سازسی فزانت</li>
					</ul>
					<h3>سابقه کار</h3>
					<ul class="art-ul">
						<li class="art-li">دوره کار آموزی در شرکت ایده سیستم پرداز برای برنامه نویسی fullstack و طراحی سیستم</li>
					</ul>
				</div>	
				<div style="position:relative; top:-7em;" id="abilities"></div>
				<h2>توانمندی ها</h2>
				<div class="art">
					<p>&bull; ۷ سال برنامه نویس فعال و مسلط به ۷ زبان برنامه نویسی</p>
					<div class="card-holder">
						<div class="card">
							<div class="card-icon"><span class="ghost" dir="ltr">C++</span></div>
							<div class="card-desc">مسلط به استاندارد های ۱۱ و ۱۷ هستم و میتوانم نرم افزار برای ویندوز و لینوکس توسعه دهم<hr>مهارت:۷/۱۰</div>
						</div>
						<div class="card">
							<div class="card-icon"><span class="ghost" dir="ltr">C#</span></div>
							<div class="card-desc">میتوانم با استفاده از سی شارپ دات  نت نرم اقزار های گرافیکی و کاربردی برای ویندوز توسعه دهم<hr>مهارت:۵/۱۰</div>
						</div>
						<div class="card">
							<div class="card-icon"><span class="ghost" dir="ltr">WEB</span></div>
							<div class="card-desc">مسلط  به html, css, javascript خالص برای توسعه front-end و php برای back-end همچنین میتوانم از پایگاه داده های sql استفاده کنم<hr>مهارت:۹/۱۰</div>
						</div>
						<div class="card">
							<div class="card-icon"><span class="ghost" dir="ltr">pyhton</span></div>
							<div class="card-desc">میتوانم اپلیکیشن های محاسبانی ساده با پایتون بنویسم و اطلاعات را دربه طرق مختلف نمایش دهم<hr>مهارت:۶/۱۰</div>
						</div>	
					</div>
					<p>&bull; توانایی مکالمه  به زبان انگلیسی: برآورد نمره ۷/۵ تا ۸ از آزمون غیر رسمی IELTS</p>
					<p>&bull; مهارت اجتماعی خوب: میتوانم در یک محیط جدید با آدم های جدید ارتباط برقرار کنم</p>
				</div>	
				<div style="position:relative; top:-7em;" id="works"></div>
				<h2>دستآورد ها</h2>
				<div class="art">
					<ul class="art-ul">
						<li class="art-li">کار به عنوان برنامه نویس وبسایت و ایجاد وبسایت کامل برای مشتری خصوصی</li>
						<li class="art-li">انجام چند پروژه شخصی(یکی از آنها را میتوانید درگیتهاب ببینید)</li>
					</ul>
				</div>
				<br><br><br>
			</main>
		</div>
		<footer class="mfooter">
			<?php
				echo file_get_contents($roo."/res/footer.dat"); // code reusability
			?>
		</footer>
		<script type="text/javascript" src="/js/main.js"></script>
		<script type="text/javascript">
		document.body.onload=function(){
			C('resume')[0].classList.add('current');
			D('holder').style.marginTop = C('mheader')[0].clientHeight;
			}
		</script>
		<script type="text/javascript" src="/js/nav.js"></script>
	</body>
</html>
