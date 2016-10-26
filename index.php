<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<title>抢票网站</title>
		<script type='text/javascript' src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
		
	</head>

	<script type="text/javascript">  

	    function systemTime() {  
	        var dateTime = new Date();  
	        var year  = dateTime.getYear();
	        var month = dateTime.getMonth();
	        var day   = dateTime.getDay();
	        var hh=dateTime.getHours();  
	        var mm=dateTime.getMinutes();  
	        var ss=dateTime.getSeconds();  

	        mm = extra(mm);  
	        ss = extra(ss);  
	        document.getElementById("time").innerHTML=year + "/" + month + "/" + day + " " + hh+":"+mm+":"+ss;  
	        setTimeout("systemTime()",1000);  
	    }  
	      
	    function extra(x) {
	        if(x < 10) {  
	            return "0" + x;  
	        }  
	        return x;  
	    }  
	    function grabTicket() {
	    	var dateTime=new Date();  
	        var hh=dateTime.getHours();  
	        var mm=dateTime.getMinutes();  
	        var ss=dateTime.getSeconds();  

	        mm = extra(mm);  
	        ss = extra(ss);  
	    	
	    	//if (hh == )
	    }
	</script>  

	<body onload="systemTime()">
		<center>
			<h1>抢票网站</h1>

			<h3>下一波抢票时间为 <span style="color:red;">2016/10/30 19:00:00</span></h3>
			<div id="time">
			</div>
			<br>
			<div class='button'>
				<button id="rush" onload="grabTicket">立即抢票</button>
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