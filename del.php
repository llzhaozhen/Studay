<!DOCTYPE html>
<html>
<head>
	<title>我的留言板</title>
</head>
<body>
	<center>
	<h2>我的留言板</h2>
	<a href="index.php">添加留言</a>
	<a href="show.php">查看留言</a>
	<hr width="90%">
	<h3>删除</h3>

	<?php 

		//获取要删除的留言号

		$id=$_GET["id"];
		//从liuyan.txt中获取信息

		$info=file_get_contents("liuyan.txt");

		//将留言信息已@@@符号拆分成数组

		$lylist=explode("@@@",$info);
		//使用unset删除留言

		unset($lylist[$id]);

		//还原留言信息为字符串,写回文件中

		$newinfo=implode("@@@",$lylist);
		file_put_contents("liuyan.txt",$newinfo);
		echo("删除成功")

	 ?>
	 </center>
</body>
</html>
