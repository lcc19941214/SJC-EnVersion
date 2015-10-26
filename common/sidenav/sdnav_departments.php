<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<a href="<?php echo $siteurl;?>content/departments/journalism.php"> <i></i>
			Departments
		</a>
	</h3>
	<ul>
		<li>
			<a href="<?php echo $siteurl;?>content/departments/journalism.php">Journalism</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/departments/broadcastingTele.php">Broadcasting and Telecommunications</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/departments/advertising.php">Advertising (including Advertising Design direction)</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/departments/communication.php">Communication</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/departments/broadcastingHost.php">Broadcasting and Hosting Art</a>
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