<div class="m-left">
	<h2>
		<a href="<?php echo $siteurl;?>newslist/index.php">News &amp; Information</a>
		<span>
			<a href="<?php echo $siteurl;?>newslist/index.php">Read more &gt;</a>
		</span>
	</h2>
	<dl class="u-recomm">
		<?php 
			$sql = "SELECT DISTINCT new_id,news_title,news_content,news_date FROM newslist ORDER BY news_id DESC";
			$sql = $sql." LIMIT 0,1";//获取从第一条，做小推荐位
			$result = mysql_query($sql,$lnk);
		 ?>
		<a href="<?php echo $siteurl;?>newslist/1.php">
			<img src="<?php echo $siteurl ; ?>newslist/images/1.jpg" alt="news &amp; information" /></a>
		<a href="<?php echo $siteurl;?>newslist/1.php">
			<h3 class="u-recoomHd">
				The national New Media and Broadcasting &amp; Television Doctoral Forum of WHU Inaugurated
			</h3>
		</a>
		<p class="u-recoomText">
			On October 10, 2015, "The national New Media and Broadcasting &amp; Television Doctoral Forum of WHU" and "The 6th Central China’s Journalism and Communication Academic Forum of postgraduates" were inaugurated smoothly in Journalism and Communication , WHU.
		</p>
	</dl>
	<ul class="u-newslist">
		<?php 
			$sql = "SELECT DISTINCT news_id,news_title,news_date FROM newslist ORDER BY news_id DESC";
			$sql = $sql." LIMIT 1,5";//获取从第二条开始的一共五条  第一条做小推荐位
			$result = mysql_query($sql,$lnk);
			while ( $news_info = mysql_fetch_array($result)) {
			echo "
			<li>
				<a href=".$siteurl."newslist/2.php?id=".$news_info['news_id'].">"."
					<p>
						<i></i>".
						$news_info["news_title"]."
					</p>"."
					<span class='u-newsdate'>".substr($news_info["news_date"],0,10)."</span>
				</a>
			</li>
			";
			}
		?>
		<!-- <li>
			<a href="<?php echo $siteurl;?>
				newslist/3.php">
				<p> <i></i>
					LOVE IN SJC----the Welcome party for undergraduates holding favorably
				</p>
				<span class="u-newsdate">29 Sept. 2015</span>
			</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>
				newslist/4.php">
				<p>
					<i></i>
					Baidu EFE Talks About Internet and Data News
				</p>
				<span class="u-newsdate">18 Sept. 2015</span>
			</a>
		</li>
		<li>
			<a href="<?php echo $siteurl;?>
				newslist/5.php">
				<p>
					<i></i>
					School of Journalism and Communication Welcomes New Students
				</p>
				<span class="u-newsdate">12 Sept. 2015</span>
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<p>
					<i></i>
					Remote Sensing Research of Syria Conflict on UN’s Briefing Professor Xin Xu's Artical on Bird Analysis Published on
				</p>
				<span class="u-newsdate">12 Sept. 2015</span>
			</a>
		</li> -->
	</ul>
</div>