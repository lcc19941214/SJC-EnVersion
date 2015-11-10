<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>后台管理系统登陆</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css"></head>
<body>
	<div class="g-container">
		<div class="m-logOn">
			<div class="u-l-logo">
				<ul class="u-title">
					<li>
						<a href="http://www.whu.edu.cn/" target="_blank"></a>
						<a href="http://journal.whu.edu.cn/" target="_blank"></a>
					</li>
					<li>
						<h1>Wuhan University</h1>
						<br />
						<h2>School of Journalism and Communication</h2>
					</li>
				</ul>
				<ul class="u-version">
					<li>
						<a href="http://journal.whu.edu.cn/" target="_blank">
							<span></span>
							<p>中文版</p>
						</a>
					</li>
					<li>
						<a href="http://journal.whu.edu.cn/en/index.php" target="_blank">
							<span></span>
							<p>English Version</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="u-r-log">
				<form id="u-logOn" name="u-logOn" method="post" action="common/user_verify.php" >
					<h1>后台管理系统登陆</h1>
					<div class="u-div-h-35px u-log-error" style="height:35px;"></div>
					<ul>
						<li> <i></i>
							<span>/</span>
							<input type="text" name="user_name" placeholder="用户名" />
						</li>
						<li> <i></i>
							<span>/</span>
							<input type="password" name="user_pwd" placeholder="密码"/>
						</li>
						<input type="submit" value="登陆" />
					</ul>
				</form>
				<script type="text/javascript">
					var iptLi = document.getElementById('u-logOn').getElementsByTagName('li');
					for (var i = 0; i < iptLi.length; i++) {
					 	var oipt = iptLi[i].getElementsByTagName('input')[0];
					 	oipt.onfocus= function(){
					 		this.style.background = "url('images/input_line_current.png') bottom no-repeat";
					 	};
					 	oipt.onblur= function(){
					 		this.style.background = "url('images/input_line.png') bottom no-repeat";
					 	}
					 }; 
				</script>
			</div>
		</div>
	</div>

</body>
</html>