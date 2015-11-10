<?php 
	header("content-type:text/html;charset=utf8");
	require_once '../init.php';
	$news_id = $_GET["news_id"];//获取新闻id	
	$table_name = $_GET["table_name"];//获取插入列表的表名

	$delete_sql = "DELETE FROM ".$table_name;
	$delete_sql = $delete_sql." WHERE news_id=".$news_id;
	$delete_rst = mysql_query($delete_sql,$lnk);
	if ($delete_rst) {
		header("Location:../../admin.php");
	}else{
		echo "删除失败".mysql_error();
	}
 ?>