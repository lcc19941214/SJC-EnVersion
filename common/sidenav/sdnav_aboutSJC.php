<div class="m-sidenav m-sidenav-fixed">
	<h3>
		<a href="<?php echo $siteurl;?>content/intro/welcome.php"> <i></i>
			ABOUT SJC
		</a>
	</h3>
	<ul>
		<li>
			<a href="<?php echo $siteurl;?>content/intro/welcome.php">Welcome Message</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/intro/info.php">General Information</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/intro/history.php">SJC in History</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/intro/admin.php">Administration</a>
			<dl>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/admin.php#admin">The Leaders of School Administration</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/admin.php#party">The Leaders of School Party Committee</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/admin.php#depart">The Leaders of Department</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/admin.php#resear">The Leaders of Research Institutes &amp; Centers</a>
				</dd>
			</dl>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>content/intro/faculty.php">Faculty</a>
			<dl>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/faculty.php#teachIns">Teaching Institutions</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/faculty.php#managIns">Management Institution</a>
				</dd>
				<dd>
					<a href="<?php echo $siteurl;?>content/intro/faculty.php#supportIns">Supporting Institution</a>
				</dd>
			</dl>
		</li>
		<!-- 点击加载子菜单项 -->
		<!-- 同页面内，点击加载内容，js生效 -->
		<script type="text/javascript">
			// (function(){
			// 	var subSdNavLi = document.getElementsByTagName('body')[0].getElementsByClassName('m-sidenav')[0].getElementsByTagName('li');
			// 	for (var i = 0; i < subSdNavLi.length; i++) {
			// 		subSdNavLi[i].onclick = function(){
			// 			var sdl = this.getElementsByTagName('dl')[0];
			// 			console.log(sdl);
			// 			sdl.style.display = "block";
			// 		};
			// 	}
			// })();
		</script>
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