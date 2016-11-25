<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城管理后台</title>
	<link rel="stylesheet" href="/Public/css/reset.css">
	<link rel="stylesheet" href="/Public/css/admin/init.css">
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/admin_menu.js"></script>
</head>
<body>
	<ul class="menu">
		<li class="p">栏目管理</li>
		<ul class="menu-list">
			<li><a href="/Admin/Cate/cateList" target="right">栏目列表</a></li>
			<li><a href="/Admin/Cate/addCate" target="right">添加栏目</a></li>
		</ul>
		<li class="p">文章管理</li>
		<ul class="menu-list">
			<li><a href="/Admin/Article/index" target="right">文章列表</a></li>
			<li><a href="/Admin/Article/addArticle" target="right">添加文章</a></li>
		</ul>

	</ul>

</body>
</html>