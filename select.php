<?php
	header("Content-type: text/html; charset=utf-8");
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'mydb';

	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {
		# code...
		die("连接失败".$conn->connect_error);
	}

	$sql = "SELECT id,tid,title,content FROM think_config";
	$result = $conn->query($sql);
	if ($result->num_rows>0) {
		while ($row = $result->fetch_assoc()) {
			echo "<br> id:".$row["id"]."-tid:".$row["tid"]."-title:".$row["title"]."-content".$row["content"];
		}
	}else{
		echo "0 results";
	}

	$conn->close();