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
	<script type="text/javascript" src="<?php echo $siteurl;?>js/jquery-1.3.2.min.js"></script>
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
				<div class="u-list">
					<ul class="u-academlist">
					<!-- 获取新闻列表 -->
					<?php 
						// 获取新闻列表
						$news_sql = "SELECT news_id,news_title,news_date FROM newslist ORDER BY news_id DESC";
						$news_result = mysql_query($news_sql,$lnk);
						while($news_list = mysql_fetch_array($news_result))
						{
							echo "
								<li> <i></i>
									<a href='".$siteurl."newslist/content.php?news_id=".$news_list["news_id"]."' target='_blacnk'>".$news_list["news_title"]."
										<span>".substr($news_list["news_date"], 0,10)."</span>
									</a>
								</li>
							";
						}
					?>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>newslist/content.php1.php" target="_blank">
								The national New Media and Broadcasting &amp; Television Doctoral Forum of WHU Inaugurated
								<span>2015-10-10</span>
							</a>
						</li>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>
								newslist/2.php" target="_blank">Professor Mark Balnaves from “New Sinology Plan” had speeches about social media
								<span>2015-10-15</span>
							</a>
						</li>
						<li>
							<i></i>
							<a href="<?php echo $siteurl;?>
								newslist/3.php" target="_blank">LOVE IN SJC----the Welcome party for undergraduates holding favorably
								<span>2015-09-29</span>
							</a>
						</li>
						<li>
							<i></i>
							<a href="<?php echo $siteurl;?>
								newslist/4.php" target="_blank">Baidu EFE Talks About Internet and Data News
								<span>2015-09-18</span>
							</a>
						</li>
						<li>
							<i></i>
							<a href="<?php echo $siteurl;?>
								newslist/5.php" target="_blank">School of Journalism and Communication Welcomes New Students
								<span>2015-09-12</span>
							</a>
						</li>
					</ul>
					<!-- php获取数据库新闻标题，通过id值获取标题
				设置每页显示20条
				设置翻页按钮 -->
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../common/footer.php"; ?></body>
</html>