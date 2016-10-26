<html>
	<head>
		<meta charset='utf-8'>
		<title>抢票网站</title>
		<script type='text/javascript' src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
		<script type="text/javascript">
			function showTime() {
				var dateTime = new Date();
				var hh = dateTime.getHours();
				var mm = dateTime.getMinutes();
				var ss = dateTime.getSeconds();

				mm = extra(mm);
				ss = extra(ss);
				document.getElementById("time").innerHTML = "当前时间是 "hh + ":" + mm + ":" + ss;
				setTimeout("showTime()",1000);
			}
			function extra(num) {
				if (num < 10) {
					return "0" + x;
				}
				return x;
			}
		</script>
	</head>

	<body onload="showTime()">
		<center>
			<h1>抢票网站</h1>

			<h3>下一波抢票时间为 2016/10/30 19:00:00</h3>
			<div id="time">
			</div>

			<div class='button'>
				<button id="rush">立即抢票</button>
			</div>
		<center>
	</body>

	

	<script type='text/javascript'>
		$(function() {
			$("#rush").click(function() {
				console.info("抢票成功！");
			});
		});
	</script>

</html>