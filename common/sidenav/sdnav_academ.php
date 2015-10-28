<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<a href="<?php echo $siteurl;?>
			content/academics/labs.php"> <i></i>
			Academic &amp; Research
		</a>
	</h3>
	<ul>
		<li>
			<a href="<?php echo $siteurl;?>content/academics/labs.php">LABS &amp; Research Centers</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/academics/exchanges.php">Academic Exchanges</a>
			<dl>
				<dd>
					<a href="<?php echo $siteurl;?>
						content/academics/exchanges.php#interConf">International Conferences
					</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/academics/ex_interex.php">International Exchanges</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>
						content/academics/ex_overseas.php">Exchanges Between Hong Kong, Macau and Taiwan
					</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/academics/ex_luojia.php">Luojia Forum</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/academics/ex_other.php">Other Academic Exchanges</a>
				</dd>
			</dl>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/academics/journals.php">Academic Journals</a>
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
