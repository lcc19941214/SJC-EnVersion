<?php include '../common/config.php';?>
<?php 
	// 获取id为特定值的文章  from academlist
	$news_id=$_GET["news_id"];
	$academ_sql = "SELECT * FROM academlist WHERE news_id=";//  获取全部内容
	$academ_sql = $academ_sql.$news_id;
	$academ_result = mysql_query($academ_sql,$lnk);
	$academ_info = mysql_fetch_array($academ_result);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>
	<?php echo $academ_info["news_title"] ?>
	 | Academics &amp; Research | School of Journalism and Communication of Wuhan University</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University"/>
	<link href="<?php echo $siteurl;?>favicon.ico" rel="icon" type="image/x-icon" />
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
			<!-- 获取最近新闻列表 -->
			<?php require_once '../common/sidenav/sdnav_academlist.php'; ?>
			<div class="m-content">
				<img class="fixed" src="<?php echo $siteurl;?>images/newslist.jpg" alt="About SJC" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>index.php">Home</a>
					&nbsp;-&nbsp;
					<a href="<?php echo $siteurl;?>newslist/index.php">News &amp; Information</a>
				</p>
				<h2>
					<?php echo $academ_info["news_title"] ?>
				</h2>
				<h3>
					<span>
						<?php echo "来自：".$academ_info["news_authoer"] ?>
					</span>
					<span>
						<?php echo "发布时间：".substr($academ_info["news_date"], 0,10) ?>
					</span>
				</h3>
				<div class="u-text">
					<?php echo $academ_info["news_content"] ?>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../common/footer.php"; ?></body>
</html>