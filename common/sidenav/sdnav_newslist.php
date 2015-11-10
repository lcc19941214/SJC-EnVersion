<div class="m-sidenav m-sidenav-fixed">
	<h3> <i></i>
		Latest News
	</h3>
	<ul class="u-sdnavul">
	<!-- 获取最近新闻列表 -->
	<?php 
		// 获取最近新闻列表，limit id倒序 前五条
		$latest_sql = "SELECT news_id,news_title FROM newslist ";
		$latest_sql = $latest_sql."ORDER BY news_id DESC ";
		$latest_sql = $latest_sql."LIMIT 0,5";
		if ($latest_result = mysql_query($latest_sql,$lnk)) {
			while ($latest_list = mysql_fetch_array($latest_result)) 
			{
				echo "
					<li>
						<a href='".$siteurl."newslist/content.php?news_id=".$latest_list["news_id"]."' target='_blank' >".
							$latest_list["news_title"]."
						</a>
					</li>
				";
			}
		}
	?>
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