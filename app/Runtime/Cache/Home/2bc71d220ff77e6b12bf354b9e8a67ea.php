<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				<a class="nav_link" data-toggle="dropdown" href="#">网站首页</a>
				<!--
				<ul class="dropdown-menu">
					<li class="list"></li>
				</ul>
			-->
			</li>
			<?php if(is_array($bigClass_list)): $i = 0; $__LIST__ = $bigClass_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_b): $mod = ($i % 2 );++$i;?><li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="#"><?php echo ($vo_b["bname"]); ?></a>
				<ul class="dropdown-menu">
					<?php if(is_array($smallClass_list)): $i = 0; $__LIST__ = $smallClass_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_s): $mod = ($i % 2 );++$i; if($vo_s['bid']==$vo_b['bid']): ?><li class="list">
								<a href="./articleid.html?aid=".<?php echo ($vo_s['aid']); ?>><?php echo ($vo_s['sname']); ?></a>
							</li>
						<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
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