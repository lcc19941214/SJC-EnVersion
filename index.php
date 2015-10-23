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
	<?php include 'common/config.php';?>
	<div id="g-container">
		<!-- HeaderBegins -->
		<?php 
		require_once "common/header.php"; ?>
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
		<!-- ContentBegings -->
		<div id="g-content">
			<div class="m-left">
				<div class="u-news">
					News&amp;Information
					<span class="readmore1">Read more&gt;</span>
				</div>

				<div class="u-newsphoto">
					<img src="images/news01.jpg" alt="news01" width="234" height="155"></div>

				<div class="u-title">
					<p>The Speech about Learing from Xi</p>
					<p>Ended Successfully</p>
				</div>

				<div class="u-content">
					A team at Wuhan University won the championship at 2015 Modal APEC held from 24th to 27th August at Beijing International is opening up once ...
				</div>

				<div class="u-newslist">
					<ul>
						<li class="u-newslists">
							<img src="images/circle.png" />
							Professor Xin Xu's Artical on Bird Analysis Published on ..
							<span class="u-newsdate">12 October ,2015</span>
						</li>
						<li class="u-newslists">
							<img src="images/circle.png" />
							Academician Roger Owen Talks about Finite Element
							<span class="u-newsdate">12 October ,2015</span>
						</li>
						<li class="u-newslists">
							<img src="images/circle.png" />
							Professor Gong Jianya Leads Chinese First International...
							<span class="u-newsdate">12 October ,2015</span>
						</li>
						<li class="u-newslists">
							<img src="images/circle.png" />
							The Famous Chemist Yaghi Lectures on New Materials
							<span class="u-newsdate">12 October ,2015</span>
						</li>
						<li class="u-newslists">
							<img src="images/circle.png" />
							Remote Sensing Research of Syria Conflict on UN’s Briefing
							<span class="u-newsdate">12 October ,2015</span>
						</li>
					</ul>

				</div>
			</div>
			<div class="m-right">
				<div class="u-news">
					Acdemics&amp;Research
					<span class="readmore">Read more</span>
				</div>

				<div class="grey-square">
					<img src="images/grey square.jpg" />
				</div>

				<div class="month">Oct.</div>

				<div class="date">22</div>

				<div class="u-title">Lecture Notice</div>

				<div class="u-newscontent">
					Nowadays, China is opening up once more, sending young people abroad and...
				</div>

				<div class="grey-square">
					<img src="images/grey square.jpg" />
				</div>

				<div class="month2">Oct.</div>

				<div class="date2">21</div>

				<div class="u-title2">Meeting Notice</div>

				<div class="u-newscontent2">
					Nowadays, China is opening up once more, sending young people abroad and...
				</div>

				<div class="grey-square">
					<img src="images/grey square.jpg" />
				</div>

				<div class="month3">Oct.</div>

				<div class="date3">20</div>

				<div class="u-title3">Meeting Notice</div>

				<div class="u-newscontent3">
					Nowadays, China is opening up once more, sending young people abroad and...
				</div>

				<div class="grey-square">
					<img src="images/grey square.jpg" />
				</div>

				<div class="month4">Oct.</div>

				<div class="date4">18</div>

				<div class="u-title4">Meeting Notice</div>

				<div class="u-newscontent4">
					Nowadays, China is opening up once more, sending young people abroad and...
				</div>
			</div>

		</div>
		<!-- ContentEnds -->
	</div>
	<!-- FooterBegins footer在container之后-->
	<?php require_once "common/footer.php"; ?>
	<!-- FooterEnds -->
</body>
</html>