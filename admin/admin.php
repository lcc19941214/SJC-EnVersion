<?php 
	include 'common/init.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>后台管理系统</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<!--kindeditor start -->
	<link rel="stylesheet" href="common/kindeditor/themes/default/default.css" />
	<script charset="utf-8" src="common/kindeditor/kindeditor-min.js"></script>
	<script charset="utf-8" src="common/kindeditor/lang/zh_CN.js"></script>	
	<!--kindeditor end -->		
</head>
<body>
	<div class="g-top-header">
		<div class="u-logo">
			<a href=""></a>
		</div>
		<div class="u-state">
			<span>管理员，你好！</span>
			<form action="javascript:;">
				<input type="submit" class="u-logout" value="注销" />
			</form>
		</div>
	</div>
	<div class="g-sdnav">
		<ul class="m-sdnav">
			<li class="current">
				<div class="u-nav-icon"></div>
				<p class="u-nav-title">新闻列表</p>
			</li>
			<li>
				<div class="u-nav-icon"></div>
				<p class="u-nav-title">学术信息</p>
			</li>
			<li>
				<div class="u-nav-icon"></div>
				<p class="u-nav-title">发布内容</p>
			</li>
		</ul>
	</div>
	<div class="g-content">
		<div class="m-content m-newslist">
			<h2>新闻列表</h2>
			<ul class="u-list">
				<?php 
					$sql = "SELECT * FROM newslist ORDER BY news_id DESC";
					$result = mysql_query($sql,$lnk);
					$newslist = mysql_fetch_array($result);
					while ($newslist = mysql_fetch_array($result)) 
					{	
						echo "
						<li>
							<ul class='u-l-news'>
								<a href='"."../newslist/content.php?news_id=".$newslist['news_id']."' target='_blank' >
									<i></i>
									<li class='u-newstitle'>".$newslist['news_title']."</li>
									<li class='u-newsdate'>".substr($newslist['news_date'],0,10)."
									</li>
								</a>
							</ul>
							<ul class='u-r-tool'>
								<li>|</li>
								<li><a href='common/edit/articleUpdate.php?table_name=newslist&news_id=".$newslist['news_id']."'><span></span>编辑</a></li>
								<li><a href='common/edit/articleDelete.php?table_name=newslist&news_id=".$newslist['news_id']."'><span></span>删除</a></li>
								<li>
									<span></span>
									<b>";
						if ($newslist["news_recomm"] === "off") {
							$recomm = "置顶";
							echo $recomm;
						}else{
							$recomm = "取消置顶";
							echo $recomm;
						}	
						echo "
									</b>
									<div class='u-confirm'>
										<p>是否执行操作?</p>
										<a href='common/edit/articleRecomm.php
										?table_name=newslist&news_id=".$newslist['news_id']."&news_recomm=".$newslist['news_recomm']."'>确定</a>
										<b >取消</b>
									</div>
								</li>
							</ul>
						</li>
						";
					}
			 	?>
			</ul>
			<script type="text/javascript">
				var oBtn = document.getElementsByClassName("m-newslist")[0].getElementsByClassName("u-r-tool")[0].getElementsByTagName('Li');//获取编辑栏的按钮
				for (var i = 0; i < oBtn.length; i++) {
					oBtn[i].onclick = function(){
						var oCfm = this.getElementsByClassName("u-confirm")[0];//获取到验证框
						oCfm.style.display = "block";
					}
				};
				var oCfm = document.getElementsByClassName("m-newslist")[0].getElementsByClassName("u-confirm");
				for (var i = 0; i < oCfm.length; i++) {
					var oCel = oCfm[i].getElementsByTagName("a")[1];
						console.log(oCel);
						var oCfm2 = oCel.parentNode;
					oCel.oclick = function(){
						this.style.display = "none";
					}
				};
			</script>
		</div>
		<div class="m-content m-academlist">
			<h2>学术信息</h2>
			<ul class="u-list">
				<?php 
				$academ_sql = "SELECT * FROM academlist ORDER BY news_id DESC";
				if ($academ_result = mysql_query($academ_sql,$lnk)) {
					while ($academlist = mysql_fetch_array($academ_result)) 
					{
						echo "
						<li>
							<ul class='u-l-news'>
								<a href='../academlist/content.php?news_id=".$academlist['news_id']."' target='_blank' >
									<i></i>
									<li class='u-newstitle'>".$academlist['news_title']."</li>
									<li class='u-newsdate'>".substr($academlist['news_date'],0,10)."
									</li>
								</a>
							</ul>
							<ul class='u-r-tool'>
								<li>|</li>
								<li>
									<a href='common/edit/articalUpdate.php?table_name=academlist&news_id="
									.$academlist['news_id']."'>
										<span></span>
										编辑
									</a>
								</li>
								<li>
									<a href='common/edit/articleDelete.php?table_name=academlist&news_id="
									.$academlist['news_id']."'>
										<span></span>
										删除
									</a>
								</li>
								<li>
									<a href='common/edit/articleRecomm.php?table_name=academlist&news_id="
									.$academlist['news_id']."&news_recomm="
									.$academlist['news_recomm']."'>
										<span></span>";
						if ($academlist["news_recomm"] === "off") {
							$recomm = "置顶";
							echo $recomm;
						}else{
							$recomm = "取消置顶";
							echo $recomm;
						}	
						echo "
									</a>
								</li>
							</ul>
						</li>
						";
						}
					};
			 	?>
			</ul>
		</div>
		<div class="m-content m-edit">
			<!--kindeditor编辑器启用-->
			<!-- 发布内容  insert -->
			 <h2>发布内容</h2>
			<form action="common/edit/articleInsert.php" method="post">
			<!--  提交到insert页面，判断类别，依照次序插入，然后返回  -->
				<ul class="u-edit">
					<li class="u-edit-1">
						<span>选择类别</span>
						<select name="table_name" id="table_name" class="u-tablename">
							<option value="newslist">学院新闻</option>
							<option value="academlist">学术信息</option>
						</select>
					</li>
					<li class="u-edit-1">
						<span>标题</span>
						<input type="text" name="news_title" class="z-edit-input" placeholder="请输入标题"/>					
					</li>
					<li class="u-edit-1">
						<span>作者</span>
						<input type="text" name="news_authoer" class="z-edit-input" value="本科生办公室"/>					
					</li>
					<li class="u-edit-2">
						<span>封面图片</span>
						<i>封面图建议尺寸：605像素 * 360像素</i>
					</li>
					<li class="u-edit-2">
						<input type="file" name="news_cover"/>
					</li>
					<li>
						<textarea id="content_edit" name="news_content"></textarea>
					</li>
					<li class="u-edit-1">
						<span>设置置顶</span>
						<input type="radio" name="news_recomm" value="on" class="z-edit-radio"/>是
						<i></i>			
						<input type="radio" name="news_recomm" value="off" class="z-edit-radio" checked="" />否				
					</li>
					<li class="u-edit-3">
						<input type="submit" name="submit" value="提交" /><input type="reset" value="重写" />					
					</li>
				</ul>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var navLi = document.getElementsByTagName('body')[0].getElementsByClassName('m-sdnav')[0].getElementsByTagName('li');
		for (var i = 0; i < navLi.length; i++) {
			navLi[i].onclick = function(){
				for (var i = 0; i < navLi.length; i++) {
					navLi[i].className = "";
				};
				this.className = "current";
			}
		};
	</script>
	<script type="text/javascript">
		var oIpt  = document.getElementsByTagName('body')[0].getElementsByClassName('z-edit-input');
		for (var i = 0; i < oIpt.length; i++) {
			oIpt[i].onfocus = function(){
				this.className += " current";
			}
			oIpt[i].onblur = function(){
				this.className = this.className.slice(0,-8);
			}
		};
	</script>
	<script>
		KindEditor.ready(function(K) {
			K.create('#content_edit', {
				allowFileManager : true
			});
			// K.create('#upload', {
			// 	allowFileManager : true
			// });
		});
	</script>
</body>
</html>