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
				<li id="logout">退出</li>
			</ul>
		</div>
	</header>
	<div class="container main">
		<div class="row">
			<div class="col-xs-2 left-nav">
				<ul>
					<li class="nav-on"><a href="javascript:void(0)" class="config_btn">基本信息</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/article/index/p/1.html" class="article_btn">所有文章</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/news/index/p/1" class="news_btn">所有新闻</a></li>
					<li><a href="http://localhost/ThinkPHP/index.php/Admin/edit/" class="add_btn">发表文章或新闻</a></li>
				</ul>
			</div>
			<div class="col-xs-10 right-con">
				<div class="config_con">
					<div class="config_e_div">
						<div id="config_e">添加</div>
					</div>
					<table>
						<?php if(is_array($config_list)): $i = 0; $__LIST__ = $config_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_a): $mod = ($i % 2 );++$i;?><tr id=<?php echo ($vo_a[id]); ?>>
								<td class="title"><?php echo ($vo_a[title]); ?></td>
								<td class="des"><?php echo ($vo_a[content]); ?></td>
								<td><span class="config_delete">删除</span></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	IP:0000000
</footer>
<div class="alert">
	<div class="alert_c">
		<div class="config_title">标题:<input type="text" placeholder="请输入title"></div>
		<div class="config_content">内容:<div contenteditable="true" class="con_e"></div>

		<div class="config_button">
			<div class="config_sure">确定</div>
			<div class="config_cancle">取消</div>
		</div>
	</div>
</div>
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
		$("#config_e").on("click",function(){
			$(".alert").show();
		})
		$(".config_cancle").on("click",function(){
			$(".alert").hide();
		})
		$(".config_sure").on("click",function(){
			var title = $(".config_title input").val();
			var content = $(".config_content .con_e").html();
			if (title==''||content=='') {
				alert("请将必要信息填写完整！");
			}else{
				$.post("/ThinkPHP/index.php/Admin/Index/addConfig",{"title":title,"content":content},function(data){
					console.log(data);
					var dt = eval("("+data+")");
					if (dt.code==0) {
						alert(dt.msg);
						location.reload();
					}else{
						alert("dt.msg"+',请重新添加！');

					}
				})
			}
		})
		$(document).on("click",'.config_delete',function(){
			var r = confirm("确定删除？");
			if (r) {
				var id = parseInt($(this).parent().parent().attr("id"),10);
				console.log(id)
				$.post('/ThinkPHP/index.php/Admin/Index/delConfig',{"id":id},function(data){
					console.log(data);
					var dt = eval("("+data+")");
					if (dt.code==0) {
						alert(dt.msg);
						location.reload();
					}else{
						alert("dt.msg"+',请重试！');

					}
				})
			}
		})
		$(document).on("click",'#logout',function(){
			var r = confirm("确定退出？");
			if (r) {
				$.post('/ThinkPHP/index.php/Admin/Index/logout',{},function(data){
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