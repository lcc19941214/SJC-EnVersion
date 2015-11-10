<?php 
	// init.php 登陆设置
	include 'init.php';

	@ $user_name = trim($_POST['user_name']);//获取用户名、密码
	@ $user_pwd = trim($_POST['user_pwd']);

	@ $user_sql = "SELECT user_name,user_pwd FROM userlist WHERE user_name=";//  选择数据库中的用户信息;
	@ $user_sql = $user_sql."'".$user_name."'";//  匹配用户名 注意字符串引号
	@ $result = mysql_query($user_sql, $lnk);
	if ($result)
	{
		//查询语句执行成功，获取用户名和密码
		$user_info = mysql_fetch_array($result);
		if ($user_info) 
		{
			if ($user_name === $user_info["user_name"]) 
			{
				//判断用户名
				echo "用户名输入正确<br>";
				if ($user_pwd === $user_info["user_pwd"]) 
				{
					//判断密码
					echo "密码输入正确<br>";
					//引导到正确页面
					header("Location: ../admin.php?user_name=$user_name&user_pwd=$user_pwd");
					// 用session存储帐号密码，避免url栏泄密
				}
				else
				{
					echo "密码错误";
				}
			}
			// if ($user_name === $user_info["user_name"] && $user_pwd === $user_info["user_pwd"]) 
			// {
			// 	//判断用户名.密码
			// 	echo "用户名输入正确<br>"."密码输入正确<br>";
			// 	// header("Location: ../admin.php");
			// }
			// else
			// {
			// 	echo "用户名或密码密码错误";
			// }
		}
		else //找不到user_name
		{
			 if ($user_name ==="") {
					echo "请输入用户名";
				}
			else
				{
					echo "用户名不存在";
				}
		}
	}
	else
	{
		echo "!";
	}