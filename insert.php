<?php
	header("Content-type: text/html; charset=utf-8");
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'mydb';
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$conn) {
		# code...
		die("连接失败".mysqli_connect_error());
	}
/*
	$sql = "INSERT INTO think_config (tid, title, content)
		VALUES ('5', '课程特色', '光电技术实验作为光学和电子技术、计算机技术等光电类专业的重要专业技术课，主要培养学生面向光电应用的能力和实际工程开发的能力。')";

	if (mysqli_query($conn, $sql)) {
   	 	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
*/
	$timezone = "PRC";
	if(function_exists('date_default_timezone_set')){
	    date_default_timezone_set($timezone);
 	}
	$now = time();
	$time = date("Y-m-d H:m:s",$now);
	$sql = "INSERT INTO think_bigClass (bid, bname, addTime)
		VALUES ('9','呵呵','".$time."')";
	echo $time;

	if (mysqli_query($conn, $sql)) {
   	 	echo "新建成功";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}	
	mysqli_close($conn);