<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<i></i>
			Latest
	</h3>
	<ul>
		<li>
			<a href="<?php echo $siteurl;?>academlist/1.php">Academic Salon</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>academlist/2.php">Forum</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>academlist/3.php">Marxism Journalism Lecture</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>academlist/4.php">Forum</a>
		</li>
	</ul>
</div>
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
</script>