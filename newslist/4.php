<?php include '../common/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>News &amp; Information | School of Journalism and Communication of Wuhan University</title> 
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
			<?php require_once '../common/sidenav/sdnav_newslist.php'; ?>
			<div class="m-content">
				<img class="fixed" src="<?php echo $siteurl;?>
				images/newslist.jpg" alt="About SJC" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>index.php">Home</a>
					&nbsp;-&nbsp;
					<a href="<?php echo $siteurl;?>newslist/index.php">News &amp; Information</a>
				</p>
				<h2>Baidu EFE Talks About Internet and Data News</h2>
				<div class="u-text">
					<p>
						At 9 on Sep. 18th, team EFE from Baidu gave a lecture about technoloy in transformation of media and data news to the students and faculty of SJC.
					</p>

					<p>
						One of the team leaders, Zu Ming firstly talked about different ways of transimitting information in different phases of human histoty.Then he used different cases to introduce the innovation brought by information technology and visualization. The engineer of Echarts, Li Deqing, talked about visualization of data through “what is visualization?”, “why we should do visualization?”, “the principals of visualization” and “application of visualization”.
					</p>
					<p>
						Echarts is a visualization tool produced by Baidu EFE. It helps people to understand and analyze data. And it is the most popular tool for visualization among media in China.
					</p>
					<div class="u-img">
						<img src="images/10.jpg"></div>
					<p>
						At the end, students asked questions actively and interacted with guests friendly. And itaccepted positive reviews from all the audience.
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../common/footer.php"; ?></body>
</html>