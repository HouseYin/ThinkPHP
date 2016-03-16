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
	<link rel="stylesheet" href="/ThinkPHP/Public/home/css/index.css">
	<script src="/ThinkPHP/Public/js/jQuery.js"></script>
	<script src="/ThinkPHP/Public/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
	</header>
	<div class="nav_con navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
			<li class="nav_item active">
				<a class="nav_link" data-toggle="dropdown" href="">网站首页</a>
				<!--
				<ul class="dropdown-menu">
					<li class="list"></li>
				</ul>
			-->
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">教学队伍</a>
				<ul class="dropdown-menu">
					<li class="list">
						<a href="http://www.baidu.com">中心成员简表</a>
					</li>
					<li class="list">
						<a href="">实验教学中心队伍</a>
					</li>
					<li class="list">
						<a href="">实验教学中心队伍教学、科研、技术状况</a>
					</li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">教研改革</a>
				<ul class="dropdown-menu">
					<li class=""><a href="">申报书</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">课程教学</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">实验教学或实践教学特色</a></li>
					<li class=""><a href="info.asp?articleid=73">课程大纲</a></li>
					<li class=""><a href="info.asp?articleid=73">专业实验 大 纲</a></li>
					<li class=""><a href="info.asp?articleid=73">实 训</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学理念与改革思路</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学方法与手段</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学方法与手段</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">方法手段</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">体制与管理</a></li>
					<li class=""><a href="info.asp?articleid=73">信息平台</a></li>
					<li class=""><a href="info.asp?articleid=73">运行机制</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">教学条件</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">设备与环境</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">教学效果</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">应用情况</a></li>
					<li class=""><a href="info.asp?articleid=73">成果主要内容</a></li>
					<li class=""><a href="info.asp?articleid=73">学生创新作品</a></li>
					<li class=""><a href="info.asp?articleid=73">老师获奖证书</a></li>
					<li class=""><a href="info.asp?articleid=73">近五年中心人员教学科研主要成果</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学总体情况</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">创新教育</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">实验教学效果与成果</a></li>
					<li class=""><a href="info.asp?articleid=73">辐射作用</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学中心今后建设发展思路与规划</a></li>
				</ul>
			</li>
			<li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="">教学录像</a>
				<ul class="dropdown-menu">
					<li class=""><a href="info.asp?articleid=73">实验教学1</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学2</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学2</a></li>
					<li class=""><a href="info.asp?articleid=73">实验教学4</a></li>
				</ul>
			</li>
		</ul>
		</div>
	</div>
		<div class="now_position">
		您的位置：
	</div>
	<div class="container">
		<div class="row">
			
		</div>
	</div>
	<div class="footer">
		IP:0000000
	</div>
</body>
<script>
		$(document).ready(function(){ 
			function resize(){
				var innerW = window.innerWidth;
				if (innerW > 960) {
					$(".header").css("height",'136px');
				}else{
					var nowH = innerW*136/960 +"px"; 
					$(".header").css("height",nowH);
				}	
			}
			resize();
			dropdownOpen();
			function dropdownOpen() {    	
				var $dropdownLi = $('li.dropdown');
				$dropdownLi.mouseover(function() {
			   		$(this).addClass('open');
				}).mouseout(function() {
			  		$(this).removeClass('open');  	
			  	}); 
			};
			window.onresize = function resize(){
			var innerW = window.innerWidth;
			if (innerW > 960) {
				$(".header").css("height",'136px');
			}else{
				var nowH = innerW*136/960 +"px"; 
				$(".header").css("height",nowH);
			}	
		} 
		});
		  /**   
		  * 鼠标划过就展开子菜单，免得需要点击才能展开
		  **/  
		
</script>
</html>