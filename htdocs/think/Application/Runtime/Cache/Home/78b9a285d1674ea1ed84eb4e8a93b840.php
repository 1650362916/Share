<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>afga</title>
	</head>
	<body>
		<form action="/think/index.php/Home/Book/book_post" method="post">
			
			name:<input type="text" name="title" id="title" value="" />
			id:<input type="text" name="price" id="id" value="" />
			<input type="submit" value="提交"/>
		</form>
	</body>
</html>