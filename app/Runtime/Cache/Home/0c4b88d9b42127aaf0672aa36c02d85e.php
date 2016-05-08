<?php if (!defined('THINK_PATH')) exit();?>index.html<!DOCTYPE html>
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
					<a class="nav_link" href="http://localhost/ThinkPHP/home/index.html">网站首页</a>
				<!--
				<ul class="dropdown-menu">
					<li class="list"></li>
				</ul>
			-->
		</li>
		<?php if(is_array($bigClass_list)): $i = 0; $__LIST__ = $bigClass_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_b): $mod = ($i % 2 );++$i;?><li class="nav_item dropdown">
				<a class="nav_link dropdown" data-toggle="dropdown" href="#"><?php echo ($vo_b["bname"]); ?></a>
				<ul class="dropdown-menu">
					<?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_s): $mod = ($i % 2 );++$i; if($vo_s['bid']==$vo_b['bid']): ?><li class="list">
								<a href="./article.html?id=<?php echo ($vo_s['id']); ?>"><?php echo ($vo_s['title']); ?></a>
							</li>
							<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
</div>
	<!--div class="now_position">
		您的位置：
	</div-->
	<div class="container">
		<div class="row">
			<div class="col-xs-9 main-col">
				<div class="new-est">
					最新公告：<a href="./news.html?id=<?php echo ($new_est['id']); ?>"><?php echo ($new_est[title]); ?></a>
				</div>
				<div class="main_c">
					<div class="main_c_title"></div>
					<div class="main_c_content"></div>
				</div>
			</div>
			<div class="col-xs-3 side-col">
				<div class="side-1">
					<ul>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-msg">
		<ul class="clear">
			<?php if(is_array($config_list)): $i = 0; $__LIST__ = $config_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_con): $mod = ($i % 2 );++$i;?><li class="list">
						<a href="./config.html?id=<?php echo ($vo_con['id']); ?>"><?php echo ($vo_con['title']); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		Copyright © 光电技术实验示范中心. All Rights Reserved.
	</div>
</body>
<script>
	$(function(){
		function GetQueryString(str) {
			var href = String(window.document.location.href);
			var rs = new RegExp("([\?&])(" + str + ")=([^&]*)(&|$)", "gi").exec(href);
			if (rs) {
				return decodeURI(rs[3]);
			} else {
				return '';
			}
		}

		var id = GetQueryString("id");
		console.log(id);
		if (id) {
			$.post('/ThinkPHP/index.php/Home/Config/config',{id:id},function(data){
				var json_data = eval("("+data+")");
				var link = window.location.href;
				var _index = link.indexOf("=");
				console.log(json_data);
				$(".main_c_title").text(json_data.msg.title);
				$(".main_c_content").html(json_data.msg.content)
				var arr = json_data.arr;
				$(arr).each(function(index,item){
					if (item.id!=id) {
						var li = $("<li>");
						var a = $("<a>");
						a.attr("href",link.replace(link.substr(_index+1),item.id)).text(item.title)
						li.append(a);
						$(".side-1 ul").append(li);
					}
				})
			})
		}
	})
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
		$(".jxtp li").each(function(index,item){
			$(item).css("left",index*140+'px');
		})
		var img_lenght = $(".jxtp li").length;
		var i=0;
		var jxtp_timer = setInterval(function(){
			if (i<img_lenght) {
				$(".jxtp li").each(function(index,item){
					var now_l = parseInt($(item).css("left"),10)
					$(item).animate({left:now_l-140+'px'});
				})
				console.log(i)
				i++;
			}else{
				$(".jxtp li").each(function(index,item){
					$(item).animate({left:index*140+'px'});
				})
				i=0;
			}
		},2000)
	});
		  /**   
		  * 鼠标划过就展开子菜单，免得需要点击才能展开
		  **/  

		</script>
		</html>