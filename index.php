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
	<link rel="stylesheet" href="css/footer.css" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</head>
<body>
	<div id="g-container">
		<!-- HeaderBegins -->
		<?php require_once "header.php"; ?>
		<!-- HeaderEnds -->
		<!-- SlideBegins -->
		<div id="g-slide">
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
			<div id="g-slide" class="webwidget_slideshow_dot">
			    <ul>
			        <li>
			            <a href="javascript:;" title="Deng Kaiyuan: A Rocking Dream Chaser">
			                <img src="images/slideshow/slide_1.jpg" alt="slideshow/slide"/>
			            </a>
			        </li>
			        <li>
			            <a href="javascript:;" title="We Now Get A Wonderful Achievement">
			                <img src="images/slideshow/slide_2.jpg" alt="slideshow/slide"/>
			            </a>
			        </li>
			        <li>
			            <a href="javascript:;" title="A Rocking Dream Chaseeng Kaiyuan">
			                <img src="images/slideshow/slide_3.jpg" alt="slideshow/slide"/>
			            </a>
			        </li>
			        <li>
			            <a href="javascript:;" title="A Wonderful Achievement We Now Get A Wonderful Achievement We Now Get ">
			                <img src="images/slideshow/slide_4.jpg" alt="slideshow/slide"/>
			            </a>
			        </li>
			    </ul>
			    <div style="clear: both"></div>
			</div>
		</div>
		<!-- SlideEnds -->
		<div id="g-content"></div>
	</div>
	<!-- FooterBegins footer在container之后-->
	<?php require_once "footer.php"; ?>
	<!-- FooterEnds -->
</body>
</html>