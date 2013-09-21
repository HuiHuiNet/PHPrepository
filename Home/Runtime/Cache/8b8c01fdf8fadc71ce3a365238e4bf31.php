<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>所有用户</title>
<script>
	function jump(){
		window.location="/thinkphp/index.php/User/add";
	}
</script>
</head>
<body>
	<table border='1' width="500" align='center'>
		<tr>
			<td>用户ID</td>
			<td>用户名</td>
			<td>性别</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($user["id"]); ?></td>
				<td><?php echo ($user["username"]); ?></td>
				<td><?php echo ($user["sex"]); ?></td>
				<td>
					<a href = "/thinkphp/index.php/User/showModify/id/<?php echo ($user["id"]); ?>">修改</a>
				   |&nbsp;<a href = "/thinkphp/index.php/User/delete/id/<?php echo ($user["id"]); ?>">删除</a>
			    </td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<center>
		<button onclick="jump()">添加用户</button>
	</center>
</body>
</html>