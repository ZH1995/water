<html>
	<head>
		<meta charset='utf-8'>
		<title>抢票网站</title>
		<script type='text/javascript' src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
	</head>
	<body>
		<center>
			<h1>抢票网站</h1>

			<div id="time">

			</div>

			<div class='button'>
				<button id="rush">立即抢票</button>
			</div>
		<center>
	</body>

	<script type="text/javascript">
		var dateTime = new Date();
		var hh = dateTime.getHours();
		var mm = dateTime.getMinutes();
		var ss = dateTime.getSeconds();
		document.getElementById("time").innerHTML = hh + ":" + mm + ":" + ss;
	</script>

	<script type='text/javascript'>
		$(function() {
			$("#rush").click(function() {
				console.info("抢票成功！");
			});
		});
	</script>

</html>