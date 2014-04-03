<table class="adsmanager_table">
	<tr>
		<th><?php echo JText::_('ADSMANAGER_CONTENT'); ?></th>
		<?php 
		foreach($columns as $col)
		{
			echo "<th>".JText::_($col->name)."</th>";
		}
		?>
		<th><?php echo JText::_('ADSMANAGER_DATE'); ?></th>
	</tr>
<?php
	foreach($contents as $content) 
	{
		$linkTarget = JRoute::_( "index.php?option=com_adsmanager&view=details&id=".$content->id."&catid=".$content->catid."&Itemid=".$itemid);
		if (function_exists('getContentClass')) 
			$classcontent = getContentClass($content);
  	    else
			$classcontent = "adsmanager_table_description";
		?>   
	<tr class="<?php echo $classcontent;?>"> 
		<td>
			<?php
			$ok = 0;$i=1;
			$nbimages = $conf->nb_images;
			if (function_exists("getMaxPaidSystemImages"))
			{
				$nbimages += getMaxPaidSystemImages();
			}
			while(!$ok)
			{
				if ($i < $nbimages + 1)
				{
					$ext_name = chr(ord('a')+$i-1);
					$pic = JPATH_BASE."/images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg";
					if (file_exists( $pic)) 
					{
						echo "<a href='".$linkTarget."'><img class='adimage' name='adimage".$content->id."' src='".$baseurl."/images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>";
						$ok = 1;
					}
				}
				else if ($nbimages != 0)
				{
					if ((JText::_('ADSMANAGER_NOPIC') != "")&&(file_exists(JPATH_BASE."/components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC'))))
						echo "<a href='".$linkTarget."'><img class='adimage' src='".$baseurl."/components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC')."' alt='nopic' /></a>"; 
					else
						echo "<a href='".$linkTarget."'><img class='adimage' src='".$baseurl."/components/com_adsmanager/images/nopic.gif' alt='nopic' /></a>"; 
					$ok = 1;
				}   
				else
				{
					$ok = 1;
				}
				$i++;   	
			}
			?>
			<div>
			<h2>
				<?php echo '<a href="'.$linkTarget.'">'.$content->ad_headline.'</a>'; ?>
				<span class="adsmanager_cat"><?php echo "(".$content->parent." / ".$content->cat.")"; ?></span>
			</h2>
			<?php 
				$content->ad_text = str_replace ('<br />'," ",$content->ad_text);
				$af_text = JString::substr($content->ad_text, 0, 100)."...";
				echo $af_text;
			?>
			</div>
			
			<?php 
			if (($userid == $content->userid)&&($content->userid != 0))	{
			?>
			<div>
			<?php
				$target = JRoute::_("index.php?option=com_adsmanager&task=write&catid=".$content->catid."&id=$content->id"."&Itemid=".$itemid);
				echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_EDIT')."</a>";
				echo "&nbsp;";
				$target = JRoute::_("index.php?option=com_adsmanager&task=delete&catid=".$content->catid."&id=$content->id"."&Itemid=".$itemid);
				echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_DELETE')."</a>";
			?>
			</div>
			<?php
			}
			?>			
		</td>
		<?php 
			foreach($columns as $col) {
				echo '<td class="center">';
				if (isset($fColumns[$col->id]))
					foreach($fColumns[$col->id] as $f)
					{
						echo $field->showFieldValue($content,$f); 
					}
				echo "</td>";
			}
		?>
		<td class="center">
			<?php 
			$iconflag = false;
			if (($conf->show_new == true)&&(isNewcontent($content->date_created,$conf->nbdays_new))) {
				echo "<div class='center'><img align='center' src='".$baseurl."/components/com_adsmanager/images/new.gif' /> ";
				$iconflag = true;
			}
			if (($conf->show_hot == true)&&($content->views >= $conf->nbhits)) {
				if ($iconflag == false)
					echo "<div class='center'>";
				echo "<img align='center' src='".$baseurl."/components/com_adsmanager/images/hot.gif' />";
				$iconflag = true;
			}
			if ($iconflag == true)
				echo "</div>";
			echo reorderDate($content->date_created); 
			?>
			<br />
			<?php
			if ($content->userid != 0)
			{
			   echo JText::_('ADSMANAGER_FROM')." "; 

			   if ($conf->comprofiler == 2)
			   {
				$target = JRoute::_("index.php?option=com_comprofiler&task=userProfile&tab=adsmanagerTab&user=".$content->userid."&Itemid=".$itemid);
			   }
			   else
			   {
				$target = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$content->userid."&Itemid=".$itemid);
			   }
			   
			   echo "<a href='".$target."'>".$content->user."</a><br/>";
			}
			?>
			<?php echo sprintf(JText::_('ADSMANAGER_VIEWS'),$content->views); ?>
		</td>
	</tr>
<?php	
}
?>
</table>