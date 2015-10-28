<?php include '../../common/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>Academics &amp; Research | School of Journalism and Communication of Wuhan University</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University" />
	<link href="<?php echo $siteurl;?>
	favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="../../css/reset.css" />
	<link rel="stylesheet" href="../../css/header.css" />
	<link rel="stylesheet" href="../../css/footer.css" />
	<link rel="stylesheet" href="../../css/main.css" />
	<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
</head>
<body>
	<div id="g-container">
		<?php require_once "../../common/header.php"; ?>
		<div id="g-main">
			<?php require_once '../../common/sidenav/sdnav_academ.php'; ?>
			<div class="m-content">
				<img  class="fixed"  src="<?php echo $siteurl;?>
				images/academics.jpg" alt="Academics &amp; Research" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>content/intro/welcome.php">Departments</a>
					&nbsp;-&nbsp;
					<a href="<?php echo $siteurl;?>content/intro/welcome.php">Academic Exchanges</a>
				</p>
				<h2>Academic Exchanges</h2>
				<div class="u-text">
					<h3 id="interEx">International Exchanges</h3>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../../common/footer.php"; ?></body>
</html>