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
					<a class="nav_link" data-toggle="dropdown" href="http://localhost/ThinkPHP/home/index">网站首页</a>
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
					<?php echo ($new_est[title]); ?>：<?php echo ($new_est[content]); ?>
				</div>
				<div class="main_c">
					<div class="main_c_title">课程简介</div>
					<div class="main_c_content"><?php echo ($kcjj[content]); ?></div>
				</div>
				<div class="project clear">
					<div class="syxm">
						<div class="syxm_title">
							实验项目
						</div>
						<div class="syxm_content">
							<ul>
							<?php if(is_array($news_1)): $i = 0; $__LIST__ = $news_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_1): $mod = ($i % 2 );++$i;?><li class="list">
											<a href="./news.html?id=<?php echo ($vo_1['id']); ?>"><?php echo ($vo_1['title']); ?></a>
											<span class="fr"><?php echo ($vo_1['sendtime']); ?></span>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<div class="cxcg">
						<div class="cxcg_title">创新实践和成果</div>
						<div class="cxcg_content">
							<ul>
							<?php if(is_array($news_2)): $i = 0; $__LIST__ = $news_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_2): $mod = ($i % 2 );++$i;?><li class="list">
											<a href="./news.html?id=<?php echo ($vo_2['id']); ?>"><?php echo ($vo_2['title']); ?></a>
											<span class="fr"><?php echo ($vo_2['sendtime']); ?></span>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="jxtp">
					<div class="jxtp_title">教学图片</div>
					<div class="jxtp_content">
						<ul class="clear">
							<li><img src="/ThinkPHP/Public/img/0.jpg" alt=""></li>
							<li><img src="/ThinkPHP/Public/img/1.jpg" alt=""></li>
							<li><img src="/ThinkPHP/Public/img/2.jpg" alt=""></li>
							<li><img src="/ThinkPHP/Public/img/3.jpg" alt=""></li>
							<li><img src="/ThinkPHP/Public/img/4.jpg" alt=""></li>
							<li><img src="/ThinkPHP/Public/img/5.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="project clear">
					<div class="zxjj">
						<div class="zxjj_title">中心简介</div>
						<div class="zxjj_content">
							<ul class="clear">
							<?php if(is_array($news_3)): $i = 0; $__LIST__ = $news_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_3): $mod = ($i % 2 );++$i;?><li class="list">
											<a href="./news.html?id=<?php echo ($vo_3['id']); ?>"><?php echo ($vo_3['title']); ?></a>
											<span class="fr"><?php echo ($vo_3['sendtime']); ?></span>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<div class="jxzy">
						<div class="jxzy_title">教学资源和设备</div>
						<div class="jxzy_content">
							<ul>
							<?php if(is_array($news_4)): $i = 0; $__LIST__ = $news_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_4): $mod = ($i % 2 );++$i;?><li class="list">
											<a href="./news.html?id=<?php echo ($vo_4['id']); ?>"><?php echo ($vo_4['title']); ?></a>
											<span class="fr"><?php echo ($vo_4['sendtime']); ?></span>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-3 side-col">
				<div class="side-1">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="side-2">
					<ul>
						<li></li>
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
					var now_l = parseInt($(item).css("left"),10);
					$(item).animate({left:now_l-140+'px'});
				})
				//console.log(i)
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