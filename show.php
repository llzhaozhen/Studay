<!DOCTYPE html>
<html>
<head>
	<title>我的留言板</title>
	<script>
		function dodel(id){
			if (confirm("确定要删除么?")) {
				window.location='del.php?id='+id;
			}
		}
	</script>
</head>
<body>
	<center>
		<h2>我的留言板</h2>
		<a href="index.php">添加留言</a>
		<a href="show.php">查看留言</a>
		<hr width="90%">

		<h3>查看留言</h3>
		<table width="800" border="1px" >
			<tr>
				<th>留言标题</th>
				<th>留言人</th>
				<th>留言内容</th>
				<th>留言时间</th>
				<th>操作</th>
			</tr>
			<?php 

				//获取留言信息，解析后输出到表格中
				//从liuyan.txt中获取信息
				date_default_timezone_set("Asia/Shanghai");
				$info=file_get_contents("liuyan.txt");

				//去除留言内容最后的三个@符号

				$info=rtrim($info,"@");
				
				if (strlen($info)>=8) {
					//以@符号拆分留言为一条一条的（将留言以@@@符号拆分成数组）
					$lylist=explode("@@@",$info);
					//遍历数组信息，对每条留言在做解析

					foreach ($lylist as $k => $v) {
						$ly=explode("##", $v); 
						echo("<tr>");
						echo "<td>{$ly[0]}</td>";
						echo "<td>{$ly[1]}</td>";
						echo "<td>{$ly[2]}</td>";
						echo "<td>".date("Y-m-d")." ".date("h:i:sa")."</td>";
						echo "<td><a href='javascript:dodel({$k})'> 删除</a></td>";
						
					}
				}

			 ?>
		</table>
	</center>
</body>
</html>
