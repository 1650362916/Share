<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>增加页</title>
		<link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.css" />
	</head>
	<body>
		<h1>nihao </h1>
		
		<div class="container">
			
			
			<form action="/Shop/shop_post" method="post">
				<input type="hidden" name="id" value="<?php echo ($id); ?>" />
				<input type="hidden" name="url"  value="<?php echo ($url); ?>" />
			<table class="table table-hover">
				<tr>
					<th>标题:<input type="text" name="title"  value="<?php echo ($list["title"]); ?>" /></th>
				</tr>
				<tr>
					<th>价格:<input type="text" name="price"  value="<?php echo ($list["price"]); ?>" /></th>
				</tr>
				
			</table>
				<input class="btn btn-success" type="submit" value="提交"/>
				<input class="btn btn-info" type="button" value="返回" onclick="history.go(-1)"/>
			</form>
			
		</div>
		
	</body>
</html>