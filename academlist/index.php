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
				<img  class="fixed" src="<?php echo $siteurl;?>
				images/academlist.jpg" alt="About SJC" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>content/intro/welcome.php">Academics &amp; Research</a>
					&nbsp;-&nbsp;
					<a href="<?php echo $siteurl;?>content/intro/welcome.php">List</a>
				</p>
				<div class="u-list">
					<ul class="u-academlist">
					<!-- 获取学术信息列表 -->
					<?php 
						// 获取学术信息列表
						$academ_sql = "SELECT news_id,news_title,news_date FROM academlist ORDER BY news_id DESC";
						$academ_result = mysql_query($academ_sql,$lnk);
						while($academ_list = mysql_fetch_array($academ_result))
						{
							echo "
								<li> <i></i>
									<a href='".$siteurl."academlist/content.php?news_id=".$academ_list["news_id"]."' target='_blacnk'>".$academ_list["news_title"]."
										<span>".substr($academ_list["news_date"], 0,10)."</span>
									</a>
								</li>
							";
						}
					?>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>academlist/1.php" target="_blank">WHU, Media academic salon in autumn
								<span>2015-10-26</span>
							</a>
						</li>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>academlist/2.php" target="_blank">WHU, Journalism and Communication forum
								<span>2015-09-22</span>
							</a>
						</li>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>academlist/3.php" target="_blank">The forecast of the Marxism Journalism Lecture
								<span>2015-05-28</span>
							</a>
						</li>
						<li> <i></i>
							<a href="<?php echo $siteurl;?>academlist/4.php" target="_blank">WHU, Journalism and Communication forum
								<span>2015-05-27</span>
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