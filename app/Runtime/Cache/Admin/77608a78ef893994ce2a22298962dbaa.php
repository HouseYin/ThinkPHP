<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="广工光电技术实验教学示范中心">
	<meta name="keywords" content="广东工业大学，物理与光电工程学院,光电技术实验,教学">
	<title>光电技术示范中心后台登陆界面</title>
	<link rel="stylesheet" href="/ThinkPHP/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/ThinkPHP/Public/admin/css/login.css">
	<script src="/ThinkPHP/Public/js/jQuery.js"></script>
	<script src="/ThinkPHP/Public/js/bootstrap.min.js"></script>
</head>
<body>
	<!--
	<header class="header">
		<img src="/ThinkPHP/Public/img/banner.jpg" alt="">
	</header>
-->
	<div class="container login_con">
		<div class="row">
			<div class="form_com col-md-12">
				<form action="/ThinkPHP/index.php/Admin/Login/login" method="POST">
				<label for="name">账号</label><input type="text" id="name" name="name" placeholder="请输入账号"><br>
				<label for="pwd">密码</label><input type="password" id="pwd" name="password" placeholder="请输入密码"><br>
				<input class="button" type="submit" value="登录" />
			</form>
			</div>
		</div>
	</div>
	<!--
	<footer class="footer">
		IP:0000000
	</footer>
-->
</body>
</html>