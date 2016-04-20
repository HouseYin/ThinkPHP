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
				<li><?php echo ($name); ?> |</li>
				<li id="logout">退出 </li>
			</ul>
		</div>
	</header>
	<div class="container main">
		<div class="row">
			<div class="col-xs-2 left-nav">
				<ul>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/index" class="config_btn">基本信息</a></li>
					<li class="nav-on"><a href="javascript:void(0)" class="article_btn">所有文章</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/news/index/p/1" class="news_btn">所有新闻</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/edit" class="add_btn">发表文章或新闻</a></li>
				</ul>
			</div>
			<div class="col-xs-10 right-con">
				<div class="article_con">
				<!--div class="search_div">
					<input type="text" value="" placeholder="请输入文章标题">
					<span id="search">搜索</span>
				</div-->
				<?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_b): $mod = ($i % 2 );++$i;?><div class="article_div">
						<div class="article_h_msg">
							<span class="article_id">ID:<?php echo ($vo_b["id"]); ?></span>
							<span class="article_title">文章标题:<?php echo ($vo_b["title"]); ?>
							</span>
							<span class="delete_article">
								删除
							</span>
						</div>
						<div class="article_content"><?php echo ($vo_b["content"]); ?>
						</div>
						<div class="sendtime"><?php echo ($vo_b["sendtime"]); ?>
						</div> 

					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="page"><?php echo ($article_page); ?></div>
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
		$(document).on("click",'.delete_article',function(){
			var r = confirm("确定删除文章？")
			if (r) {
				var id = $(this).parent().find(".article_id").text().replace("ID:",'').trim();
				$.post('/ThinkPHP/index.php/Admin/Article/delete',{"id":id},function(data){
					var dt = eval("("+data+")");
					console.log(dt)
					alert(dt.msg);
					location.reload();
				})

			}
		})

		$(document).on("click",'#logout',function(){
			var r = confirm("确定退出？");
			if (r) {
				$.post('/ThinkPHP/Admin/Index/logout',{},function(data){
					var dt = eval("("+data+")");
					if (dt.code===0) {
						console.log(dt)
						window.location = '/ThinkPHP/Admin/login'
					}
				})
			}
		})
	})
</script>
</html>