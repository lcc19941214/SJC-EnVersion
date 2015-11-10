<?php include 'common/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>School of Journalism and Communication of Wuhan University</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University" />
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/header.css" />
	<link rel="stylesheet" href="css/slide.css" />
	<link rel="stylesheet" href="css/content.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</head>
<body>
	<div id="g-container">
		<?php 
		require_once "common/header.php"; ?>
		<div id="g-slide">
			<div id="g-slide" class="webwidget_slideshow_dot">
				<ul>
					<li>
						<a href="<?php echo $siteurl;?>
							newslist/1.php" title="The national New Media and Broadcasting &amp; Television Doctoral Forum of WHU Inaugurated">
							<img src="images/slideshow/slide_1.jpg" alt="slideshow/slide"/>
						</a>
					</li>
					<li>
						<a href="<?php echo $siteurl;?>
							newslist/2.php" title="Professor Mark Balnaves from “New Sinology Plan” had speeches about social media">
							<img src="newslist/images/2.jpg" alt="slideshow/slide"/>
						</a>
					</li>
					<li>
						<a href="<?php echo $siteurl;?>
							newslist/3.php" title="LOVE IN SJC----the Welcome party for undergraduates holding favorably">
							<img src="newslist/images/3_1.jpg" alt="slideshow/slide"/>
						</a>
					</li>
					<li>
						<a href="<?php echo $siteurl;?>
							newslist/4.php" title="Baidu EFE Talks About Internet and Data News">
							<img src="newslist/images/10.jpg" alt="slideshow/slide"/>
						</a>
					</li>
				</ul>
				<div style="clear: both"></div>
			</div>
			<!-- 引用轮播图 -->
			<script type="text/javascript" src="js/webwidget_slideshow_dot.js"></script>
			<script language="javascript" type="text/javascript">
			        $(function() {
			            $("#g-slide").webwidget_slideshow_dot({
			                slideshow_time_interval: '3500',
			                slideshow_window_width: '605',
			                slideshow_window_height: '360',
			                slideshow_title_color: '#fff',
			                soldeshow_foreColor: '#287ea6',
			                directory: 'images/'
			            });
			        });
			</script>
		</div>
		<div id="g-content">
			<?php require_once 'common/u_academlist.php'; ?>
			<?php require_once 'common/u_newslist.php'; ?>
			<script type="text/javascript" src="js/clamp.js"></script>
			<script type="text/javascript">
				var recoomHd =	document.getElementById('g-content').getElementsByClassName('u-recoomHd')[0],
					recoomText = document.getElementById('g-content').getElementsByClassName('u-recoomText')[0],
            		academText = document.getElementsByTagName('body')[0].getElementsByClassName('u-academlist')[0].getElementsByTagName('dd');
        		
        		$clamp(recoomHd, {clamp: 2, useNativeClamp: false});
        		$clamp(recoomText, {clamp: 4, useNativeClamp: false});
        		// for (var i = 0; i < academText.length; i++) {
        		// 	$clamp(academText[i], {clamp: 1, useNativeClamp: false});
        		// };
			</script></div>
	</div>
	<?php require_once "common/footer.php"; ?></body>
</html>