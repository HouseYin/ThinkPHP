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
	<link rel="stylesheet" href="/ThinkPHP/Public/admin/css/index.css">
	<script src="/ThinkPHP/Public/js/jQuery.js"></script>
	<script src="/ThinkPHP/Public/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header clear">
		<h2>光电技术实验中心后台</h2>
		<div class="info-con">
			<ul class="clear">
				<li>222 |</li>
				<li>222 |</li>
				<li>222 </li>
			</ul>
		</div>
	</header>
	<div class="container main">
		<div class="row">
			<div class="col-xs-2 left-nav">
				<ul>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/index/" class="config_btn">基本信息</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/article/index/p/1.html" class="article_btn">所有文章</a></li>
					<li class="nav-on"><a href="javascript:void(0)" class="news_btn">所有新闻</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/edit/" class="add_btn">发表文章或新闻</a></li>
				</ul>
			</div>
			<div class="col-xs-10 right-con">
				<div class="news_con">
					<?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_c): $mod = ($i % 2 );++$i;?><div>
							<?php echo ($vo_c["nid"]); ?> <br>
							<?php echo ($vo_c["title"]); ?> <br>
							<?php echo ($vo_c["content"]); ?> <br>
							<?php echo ($vo_c["sendtime"]); ?> <br>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="page"><?php echo ($news_page); ?></div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		IP:0000000
	</footer>
	
</body>
<script>
	$(function(){
		$(document).on("click",".left-nav li",function(){
			if ($(this).hasClass("nav-on")) {
				return false;
			}else{
				$(this).addClass("nav-on").siblings("li").removeClass("nav-on");
				var child_class = $(this).find("a").attr("class").split("_btn");
				$("."+child_class[0]+"_con").show().siblings().hide();
			}
		})
	})
</script>
</html>