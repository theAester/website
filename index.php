<?php
	$roo = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
	<head>
	<link rel="stylesheet" href="/style/main.css" />
	<link rel="stylesheet" href="/style/nav.css" />
	<link rel="stylesheet" href="/style/index.css" />
	<link rel="stylesheet" href="/style/footer.css" />
<style>

</style>
	</head>
	<body dir="rtl">
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript">
document.body.onload=function(){
	C('intro')[0].classList.add('current');
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
				<div class="hero">
					<div class="hero-pic-holder">
						<div class="hero-pic">
						</div>
					</div>
					<div class="hero-desc">
						<div class="hero-desc-head vcenter">سلام!</div>
						<div class="hero-desc-space"></div>
						<div class="hero-desc-caption vcenter">اندکی درباره من</div>
						<div class="hero-desc-space"></div>
						<div class="hero-desc-space"></div>
						<div class="hero-desc-circle center"><a style="background-color:#72c0ed; color:#e8430c;" href="/aboutme/#resume"><span class="ghost">رزومه</span></a></div>
						<div class="hero-desc-circle center"><a style="background-color:#36e392; color:#640a80;" href="/aboutme/#abilities"><span class="ghost">توانایی ها</span></a></div>
						<div class="hero-desc-circle center"><a style="background-color:#de4747; color:#082c87;" href="/aboutme/#works"><span class="ghost">دستآورد ها</span></a></div>
						<div class="hero-desc-bio vcenter">&emsp;&emsp;&emsp;<?php echo file_get_contents($roo."/res/bio.dat"); ?><div>
					</div>
				</div>
			</main>
		</div>
		<footer class="mfooter">
			<?php
				echo file_get_contents($roo."/res/footer.dat"); // code reusability
			?>
		</footer>
		<script type="text/javascript" src="js/nav.js"></script>
	</body>
</html>
