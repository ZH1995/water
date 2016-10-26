<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<title>抢票网站</title>
		<script type='text/javascript' src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
		
	</head>

	<script type="text/javascript">

	    function systemTime() {  
	        var dateTime = new Date();  
	        var hour   = dateTime.getHours();
	        var minute = dateTime.getMinutes();
	        var second = dateTime.getSeconds();  	

	        minute = extra(minute);  
	        second = extra(second);  
	        document.getElementById("time").innerHTML = hour+":"+minute+":"+second;  
	        setTimeout("systemTime()",1000);  
	        checkTime();
	        getNextStartTime();
	    }  
	      
	    function extra(x) {
	        if(x < 10) {  
	            return "0" + x;  
	        }  
	        return x;  
	    }  
	    function checkTime() {
			document.getElementById("rush").disabled = false;
	    	/*
	    	var timeStamp = Date.parse(new Date()) / 1000;
	    	if (timeStamp >= 1477479000 && timeStamp <= (1477479000 + 600)) {
	    		document.getElementById("rush").disabled = false;
	    	} else {
	    		document.getElementById("rush").disabled = true;
	    	}
			*/
	    }
	    function goRob() {
	    	window.location.href="./core/rob.php";
	    }

	    function getNextStartTime() {
	    	var xmlhttp;
	    	if (window.XMLHttpRequest) {
		  		xmlhttp = new XMLHttpRequest();
		  	} else {
		  		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		  	}
		  	xmlhttp.onreadystatechange=function() {
		  		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		  			document.getElementById("nextStartTime").innerHTML = xmlhttp.responseText;
		  		}
		  	}
		  	xmlhttp.open("POST", "./core/getNextTime.php", true);
		  	xmlhttp.send();
	    }


	</script>  

	<body onload="systemTime()">
		<center>
			<h1>抢票网站</h1>

			<h3>下一波抢票时间为 <span style="color:red;" id="nextStartTime"></span></h3>
			<div id="time">
			</div>
			<br>
			<div class='button'>
				<button id="rush" onclick="goRob()">立即抢票</button>
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