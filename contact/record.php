<?php
if(!isset($_POST['fullname'])) die(403);
$count = file_get_contents('count.txt')*1;
$f = $_POST['fullname'];
$e = $_POST['mail'];
$m = $_POST['message'];
$txt = "message from $f($e):\n\n$m\n";
$count++;
$name = "messages/message$count-$e.txt";
file_put_contents($name,$txt);
file_put_contents('count.txt',$count);
?>
<body style="font-size:24px;">
	<span style="font-size:1.2em">پیام شما با موفقیت ارسال  شد. حتما جواب میدهم</span><br>
	<a href="/contact/">بازگشت به صفحه  قبل</a>
</body>
