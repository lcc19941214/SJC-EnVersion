<?php 
	header("content-type:text/html;charset=utf8");
	require_once '../init.php';
	if(isset($_REQUEST['submit']))
	{
		$table_name = $_POST["table_name"];//获取插入列表的表名
		$news_title = $_POST["news_title"];//获取新闻标题
		$news_authoer = $_POST["news_authoer"];//获取作者名
		$news_content = $_POST["news_content"];//获取内容
		$news_recomm = $_POST["news_recomm"];//获取置顶信息

		$insert_sql = "INSERT INTO ".$table_name." SET";
		$insert_sql = $insert_sql." news_title='".$news_title."',";
		$insert_sql = $insert_sql." news_authoer='".$news_authoer."',";
		$insert_sql = $insert_sql." news_content='".$news_content."',";
		$insert_sql = $insert_sql." news_recomm='".$news_recomm."'";
		$insert_rst = mysql_query($insert_sql,$lnk);
		if ($insert_rst) {
			header("Location:../../admin.php");
		}else{
			echo "发布信息失败".mysql_error();
		}
	// elseif(isset($_REQUEST['no'])){
	//         echo '取消';}
	}else{
	        header("Location:../../admin.php");
	}
 ?>