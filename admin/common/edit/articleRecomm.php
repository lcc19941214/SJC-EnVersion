<!-- 置顶与取消置顶判断 -->

<?php 
	header("content-type:text/html;charset=utf8");
	require_once '../init.php';
	$news_id = $_GET["news_id"];//获取新闻id	
	$table_name = $_GET["table_name"];//获取插入列表的表名
	$new_recomm = $_GET["news_recomm"];//获取新闻推荐状态

	$recomm_sql = "UPDATE ".$table_name;

	if ($new_recomm === "off") {//判断推荐状态
		$recomm_sql = $recomm_sql." SET news_recomm = 'on'";
	}else{
		$recomm_sql = $recomm_sql." SET news_recomm = 'off'";
	}
		$recomm_sql = $recomm_sql." WHERE news_id=".$news_id;
		$recomm_rst = mysql_query($recomm_sql,$lnk);
		if ($recomm_rst) {
			header("Location:../../admin.php");
		}else{
			echo "更新失败".mysql_error();
		}
 ?>