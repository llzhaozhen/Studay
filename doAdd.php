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

		<?php 
			//执行留言信息添加操作
			//获取要添加的留言信息，并加入其它辅助信息
			$title=$_POST["title"];
			$author=$_POST["author"];
			$content=$_POST["content"];
			$addtime=time();

			//拼装留言信息
			$ly="{$title}##{$author}##{$content}##{$addtime}@@@";
			//将留言板添加到liuyan.文件中
			echo $ly;
			$info=file_get_contents("liuyan.txt");//直接输出会覆盖上一条留言
			file_put_contents("liuyan.txt",$info.$ly);
			echo("<br>");
			echo("留言成功！");
		 ?>
	</center>
</body>
</html>
