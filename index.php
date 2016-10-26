<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<title>抢票网站</title>
		<script type='text/javascript' src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
		
	</head>

	<script type="text/javascript">  
	    //获取系统时间，将时间以指定格式显示到页面。  
	    function systemTime()  
	    {  
	        //获取系统时间。  
	        var dateTime=new Date();  
	        var hh=dateTime.getHours();  
	        var mm=dateTime.getMinutes();  
	        var ss=dateTime.getSeconds();  
	          
	        //分秒时间是一位数字，在数字前补0。  
	        mm = extra(mm);  
	        ss = extra(ss);  
	          
	        //将时间显示到ID为time的位置，时间格式形如：19:18:02  
	        document.getElementById("time").innerHTML=hh+":"+mm+":"+ss;  
	          
	        //每隔1000ms执行方法systemTime()。  
	        setTimeout("systemTime()",1000);  
	    }  
	      
	    //补位函数。  
	    function extra(x)  
	    {  
	        //如果传入数字小于10，数字前补一位0。  
	        if(x < 10)  
	        {  
	            return "0" + x;  
	        }  
	        else  
	        {  
	            return x;  
	        }  
	    }  
	</script>  

	<body onload="systemTime()">
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