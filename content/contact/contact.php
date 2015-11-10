<?php include '../../common/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 使用过渡版本transitional解决兼容问题 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>Contact Us | School of Journalism and Communication of Wuhan University</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="School of Journalism and Communication of Wuhan University" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link href="<?php echo $siteurl;?>
	favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="../../css/reset.css" />
	<link rel="stylesheet" href="../../css/header.css" />
	<link rel="stylesheet" href="../../css/footer.css" />
	<link rel="stylesheet" href="../../css/main.css" />
	<style type="text/css">
	</style>
	<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=e8Q8E3DiIyxQesn3m5R3RFyX"></script>
</head>
<body>
	<div id="g-container">
		<?php require_once "../../common/header.php"; ?>
		<div id="g-main">
			<?php require_once '../../common/sidenav/sdnav_contact.php'; ?>
			<div class="m-content">
				<img  class="fixed" src="<?php echo $siteurl;?>
				images/contact.jpg" alt="Contact Us" />
				<p class="u-location">
					<a href="<?php echo $siteurl;?>index.php">Home</a>
					&nbsp;-&nbsp;
					<a href="<?php echo $siteurl;?>content/contact/contact.php">Contact Us</a>
				</p>
				<h2>Contact Us</h2>
				<div id="allmap" style="width:100%;height:400px;"></div>
				<script type="text/javascript">
					// 百度地图API功能
					var map = new BMap.Map("allmap");    // 创建Map实例
					// map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
					// map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
					// map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
					// map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
					var point = new BMap.Point(114.373766, 30.54611);
					map.centerAndZoom(point, 16);
					var marker = new BMap.Marker(point);  // 创建标注
					map.addOverlay(marker);               // 将标注添加到地图中
					marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
				</script>
			</div>
		</div>
	</div>
	<?php require_once "../../common/footer.php"; ?>
</body>
</html>