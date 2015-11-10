<?php include 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>404 NOT FOUND | School of Journalism and Communication of Wuhan University</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University" />
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo $siteurl;?>css/reset.css" />
	<link rel="stylesheet" href="<?php echo $siteurl;?>css/header.css" />
	<link rel="stylesheet" href="<?php echo $siteurl;?>css/footer.css" />
	<link rel="stylesheet" href="<?php echo $siteurl;?>/css/error.css" />
</head>
<body>
	<div id="g-container">
		<!-- HeaderBegins -->
		<?php require_once "header.php"; ?>
		<!-- HeaderEnds -->
		<div class="m-notfound">
			<img src="<?php echo $siteurl;?>images/slideshow/slide_option_1.jpg" alt="404 not found" />
			<div>
				<!-- <p><span>404</span></p> -->
				<p>We are sorry,<br />the page you requested<br />cannot be found.</p>
			</div>
		</div>
	</div>
	<!-- FooterBegins -->
	<?php require_once "footer.php"; ?>
	<!-- FooterEnds -->
</body>
</html>