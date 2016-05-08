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
	<style>
		.right-con{overflow-y:scroll;}
	</style>
</head>
<body>
	<header class="header clear">
		<h2>光电技术实验中心后台</h2>
		<div class="info-con">
			<ul class="clear">
				<li><?php echo ($name); ?> |</li>
				<li id="logout">退出 </li
				</ul>
			</div>
		</header>
		<div class="container main">
			<div class="row">
				<div class="col-xs-2 left-nav">
					<ul>
						<li><a href="http://localhost/ThinkPHP/index.php/Admin/index/" class="config_btn">基本信息</a></li>
						<li><a href="http://localhost/ThinkPHP/index.php/Admin/article/index/p/1.html" class="article_btn">所有文章</a></li>
						<li><a href="http://localhost/ThinkPHP/index.php/Admin/news/index/p/1" class="news_btn">所有新闻</a></li>
						<li class="nav-on"><a href="javascript:void(0)" class="add_btn">发表文章或新闻</a></li>
					</ul>
				</div>
				<div class="col-xs-10 right-con row">
					<div class="form_con clear">
						<div class="item">
							<div class="typeclass ml50">
								<label for="mytxt">请选择发文类型：</label>
								<select id="typeclass">
									<option value="文章">文章</option>
									<option value="新闻">新闻</option>
								</select>
							</div>
							<div class="tabclass ml50" id="tab_S">
								<label for="mytab">请选择所属TAB：</label>
								<select id="tabclass">
									<option value="教学队伍">教学队伍</option>
									<option value="教研改革">教研改革</option>
									<option value="课程教学">课程教学</option>
									<option value="方法手段">方法手段</option>
									<option value="教学条件">教学条件</option>
									<option value="教学效果">教学效果</option>
									<option value="创新教育">创新教育</option>
									<option value="教学录像">教学录像</option>
								</select>
							</div>
							<div class="newsclass ml50" id="news_S">
								<label for="mytab">请选择所属TAB：</label>
								<select id="newsclass">
									<option value="实验项目">实验项目</option>
									<option value="创新实践和成果">创新实践和成果</option>
									<option value="中心简介">中心简介</option>
									<option value="教学资源和设备">教学资源和设备</option>
								</select>
							</div>
							<div class="a_title_con ml50">
								<label for="a_title">请输入标题</label>
								<input type="text" name="a_title" id="a_title">
							</div>
						</div>
					</div>
					<div class="edit_con edui-default" id="content">

					</div>
					<div id="submit">发表</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			IP:0000000
		</footer>

	</body>
	<!-- 配置文件 -->
	<script type="text/javascript" src="/ThinkPHP/uedit/ueditor.config.js"></script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="/ThinkPHP/uedit/ueditor.all.js"></script>
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
		$(function(){
			var ue = UE.getEditor('content',{initialFrameHeight:300
			});
			function setTABClassID(str){
				var bid;
				switch(str){
					case '教学队伍': bid = 1;break;
					case '教研改革': bid = 2;break;
					case '课程教学': bid = 3;break;
					case '方法手段': bid = 4;break;
					case '教学条件': bid = 5;break;
					case '教学效果': bid = 6;break;
					case '创新教育': bid = 7;break;
					case '教学录像': bid = 8;break;
					default: return false;
				}
				return bid;
			}
			function setNEWSClassID(str){
				var bid;
				switch(str){
					case '实验项目': nid = 1;break;
					case '创新实践和成果': nid = 2;break;
					case '中心简介': nid = 3;break;
					case '教学资源和设备': nid = 4;break;
					default: return false;
				}
				return nid;
			}
			function checkPrama(){
				var typeclass , tabclass , a_title , html_con , Prama = {};
				typeclass = $("#typeclass").find("option:selected").val();
				a_title = $("#a_title").val();
				html_con = ue.getContent();	
				if (typeclass=='' || tabclass=='' || a_title=='') {
					alert("请将必要信息填写完整！")
				}else if(html_con==''){
					alert("正文不能为空！！")
				}else{
					var id = '';
					if (typeclass=="文章") {
						var tabclass = $("#tabclass").find("option:selected").val();
						id = setTABClassID(tabclass);
					}else{
						var newsclass = $("#newsclass").find("option:selected").val();
						id = setNEWSClassID(newsclass);
					}
				Prama = {
					"typeclass":typeclass,
					"id":id,
					"title":a_title,
					"content":html_con
				}
				return Prama;
			}
		}
		$("#submit").on("click",function(e){
			e.preventDefault();
			e.stopPropagation();
			var prama = checkPrama();
			console.log(prama);
			$.post('/ThinkPHP/index.php/Admin/Edit/edit',prama,function(data){
				var json_data = eval("("+data+")");
				alert(json_data.msg);
			});
			return false;
		})
		$("#typeclass").change(function(){
			if($(this).val()=='新闻'){
				$("#tab_S").hide();
				$("#news_S").show();
			}else{
				$("#news_S").hide();
				$("#tab_S").show();
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