<div class="m-sidenav m-sidenav-fixed">
	<h3> <i></i>
		Latest News
	</h3>
	<ul class="u-sdnavul">
		<li>
			<a href="<?php echo $siteurl;?>
				newslist/1.php">
				The national New Media and Broadcasting &amp; Television Doctoral Forum of WHU Inaugurated
			</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>
				newslist/2.php">Professor Mark Balnaves from “New Sinology Plan” had speeches about social media
			</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>newslist/3.php">
					LOVE IN SJC----the Welcome party for undergraduates holding favorably
			</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>newslist/4.php">Baidu EFE Talks About Internet and Data News</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>
				newslist/5.php">
			School of Journalism and Communication Welcomes New Students
			</a>
		</li>
	</ul>
</div>
<script type="text/javascript" src="<?php echo $siteurl;?>js/clamp.js"></script>
<script type="text/javascript">
	$(document).ready(function() { 
		var sidenavH = $(".m-sidenav").offset().top + $("m-sidenav").height() - 20 ; //获取最后一个元素距离浏览器顶部的距离，还要加上元素的高度
		$(window).scroll(function() {
		var scroH = $(this).scrollTop();

		if (scroH > sidenavH) {
			$(".m-sidenav-fixed").css({
			"position": "fixed",
			"top": "20px"
			});
		} else if (scroH < sidenavH) {
			$(".m-sidenav-fixed").css({
			"position": "static"
			});
			}
		})
	});

	var sdNavA =document.getElementById('g-main').getElementsByClassName('u-sdnavul')[0].getElementsByTagName('a');
	
	for (var i = 0; i < sdNavA.length; i++) {
		$clamp(sdNavA[i], {clamp: 3, useNativeClamp: false});//最近新闻，显示两行
	};
</script>