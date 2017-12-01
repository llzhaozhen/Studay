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

		<h3>添加留言</h3>

		<form action="doAdd.php" method="post">
			<table>
				<tr>
					<td>标题：</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>留言者：</td>
					<td><input type="text" name="author"></td>
				</tr>
				<tr>
					<td>留言内容:</td>
					<td><textarea name="content"></textarea></td>

				</tr>
				<tr>
					<td align="right"><input type="submit" value="Submit"></td>
					<td align="left">
						<input type="reset" value="重置">
					</td>
				</tr>
			</table>
	    </form>
	</center>
</body>
</html>
