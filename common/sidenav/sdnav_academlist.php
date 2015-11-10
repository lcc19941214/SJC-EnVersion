<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<i></i>
			Latest
	</h3>
	<ul>
		<?php 
			$latest_sql = "SELECT news_id,news_title FROM academlist ORDER BY news_id DESC LIMIT 0,5";
			$latest_result = mysql_query($latest_sql,$lnk);
			while ($latest_list = mysql_fetch_array($latest_result)) {
				echo "
				<li>
					<a href='".$siteurl."academlist/content.php?news_id=".$latest_list["news_id"]."' target='_blank'>".
					$latest_list["news_title"]."</a>
				</li>
				";
			}
		 ?>
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