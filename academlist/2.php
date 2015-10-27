<?php include '../common/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>Academics &amp; Research | School of Journalism and Communication of Wuhan University</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University" />
	<link href="<?php echo $siteurl;?>
	favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../css/header.css" />
	<link rel="stylesheet" href="../css/footer.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
</head>
<body>
	<div id="g-container">
		<?php require_once "../common/header.php"; ?>
		<div id="g-main">
			<?php require_once '../common/sidenav/sdnav_academlist.php'; ?>
			<div class="m-content">
				<img src="<?php echo $siteurl;?>
				images/academlist.jpg" alt="About SJC" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>content/intro/welcome.php">Academics &amp; Research</a>
					<!-- &nbsp;-&nbsp; -->
					<!-- <a href="<?php echo $siteurl;?>content/intro/welcome.php">List</a>
				-->
			</p>
			<h2>WHU, Journalism and Communication forum</h2>
			<div class="u-text">
				<h4>The latest forecast of 2015’s symposium in autumn:</h4>
				<ul class="forum">
					<p>Time: 9:50 a.m.-12:00 a.m.24th ,Sept.</p>
					<p>Location: Auditorium 233</p>
					<p>Main speaker：Prof. Mark Balnaves ,University of Newcastle</p>
				</ul>
				<ul class="forum">
					<p>Time: 3:00 p.m.-5:00 p.m.25th ,Sept.</p>
					<p>Location: Auditorium 233</p>
					<p>
						Theme: Digital Personality: human and non-human research on Internet
					</p>
					<p>Main speaker：Prof.ZhengZhenming, Taiwan Culture University</p>
				</ul>
				<ul class="forum">
					<p>Time: 9:50 a.m.-12:00 a.m.28th ,Sept.</p>
					<p>Location: Auditorium 233</p>
					<p>Theme: An event, two stories: the role of Wechat and new media in the era of intercultural communication </p>
					<p>Main speaker：Prof.Mark Balnaves,University of Newcastle</p>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php require_once "../common/footer.php"; ?></body>
</html>