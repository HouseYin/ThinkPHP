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

	$sql = "CREATE TABLE think_news(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nid INT(6) NOT NULL,
			title VARCHAR(30) NOT NULL,
			content TEXT NOT NULL
	)";
	 if (mysqli_query($conn,$sql)) {
	 	# code...
	 	echo "成功创建表";
	 }else{
	 	echo "创建失败".mysqli_error($conn);
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
	mysqli_close($conn);