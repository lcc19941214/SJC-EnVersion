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
				<h2>School of Journalism and Communication Welcomes New Students</h2>
				<div class="u-text">
					<p>
						At 10 on Sep. 14th, the opening ceremony for new students of SJC was held in the Hall of Literature. Many famous people attended this ceremony, including Professor Luo Yicheng, Secretary of the Party Wu Aijun, Dean Shi Yibin and other brilliant falculty.
					</p>

					<p>
						Before the beginning, a foreign student from Pakistan, wearing his national coustume, presented the hall with a national song, which aroused the atmosphere. After the anthem of China, Dean Shi Yibin made a speech to encourage students to think independently and to pursue the truth through difficult situations. Then the representative of faculty, Chen Ming, made a lecture to help students position themselves through “who am I?”, “where am I from?”, “what am I for?”.
					</p>
					<div class="u-img">
						<img src="images/100.jpg"></div>
					<p>
						At last, the representative of undergraduates, Chen Yue, and the representative of postgraduates, Wu Zhanyong, talked about their expectations for college life. Wu, who once graduated from Wuhan University and then came back to campus for study, appealed to students that they needed to cherish their time in campus. Chen expressed her passion and promise for college life.
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../common/footer.php"; ?></body>
</html>