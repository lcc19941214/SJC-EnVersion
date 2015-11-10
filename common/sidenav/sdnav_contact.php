<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<a href="<?php echo $siteurl;?>
			content/departments/labs.php"> <i></i>
			Contact Us
		</a>
	</h3>
	<ul>
		<li>
			<a href="javascript:;"><strong>Tel:</strong> 0086 27 68752658</a>
		</li>
		<li>
			<a href="javascript:;"><strong>Fax:</strong> 0086 27 68754677</a>
		</li>
		<li>
			<a href="javascript:;"><strong>Post Code:</strong> 430072</a>
		</li>
		<li>
			<a href="javascript:;"><strong>E-mail:</strong> sjcweb@whu.edu.cn</a>
		</li>
		<li>
			<a href="javascript:;"><strong>Address:</strong> <br>Yingyuan Road, Luojia Hill, Hongshan District, Wuhan, Hubei Province, China</a>
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