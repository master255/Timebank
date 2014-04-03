<?php $link = JRoute::_("index.php?option=com_adsmanager&view=result&Itemid=".$itemid); ?>
<form action="<?php echo $link; ?>" method="post">
<input class="inputbox" type="text" name="tsearch" value="<?php echo $text_search; ?>" />
<?php if ($type != "horizontal") { ?>
<br/>
<?php } ?>
<?php if ($search_by_cat == 1)
{
	if ($type == "horizontal") { ?>
	<span class='mod_adsmanager_search_cats'>
<?php } else { ?>
	<div class='mod_adsmanager_search_cats'>
<?php }?>
	<select class="inputbox" name="catid" id="category">
    <option value="0" <?php if ($catid == -1) echo "selected='selected'"; ?>><?php echo JText::_('ADSMANAGER_MENU_ALL_ADS'); ?></option>
	<?php adsmanagerModuleSelectCategories(0,"",$cats,$catid); ?>
	</select>
<?php if ($type == "horizontal") { ?>	
	</span>
<?php } else { ?>
	</div>
<?php } 
}
if (isset($searchfields)) {
if ($type == "table")
	echo "<table width='100%' border='0'>";
foreach($searchfields as $fsearch) {
	if (($catid == 0)||(strpos($fsearch->catsid, ",$catid,") !== false)||(strpos($fsearch->catsid, ",-1,") !== false))
	{
		$currentvalue = JRequest::getVar($fsearch->name, "" );
		if ($type == "table")
			echo "<tr><td>";
		else if ($type == "div")
			echo "<div class='mod_adsmanager_search_field'>";
		else if ($type == "horizontal")
			echo "<span>";
			
		if (($fsearch->display_title & 2) == 2)
		{
			//echo getAdsManagerLangDefinition($fsearch->title);
			if ($type == "div")
				echo "&nbsp;";
			else if ($type == "horizontal")
				echo "</span>";
		}
		else if ($type == "table")
			echo "&nbsp;";
			
		if ($type == "table")
			echo "</td><td>";
			
		$field->showFieldSearch($fsearch,$catid,$defaultvalues);
			
		if ($type == "table")
			echo "</td></tr>";
		else if ($type == "div")
			echo "</div>";
		else if ($type == "horizontal")
			echo "</span>";
	}
}
if ($type == "table")
	echo "</table>";
}?>

<input type="hidden" value="1" name="new_search" />
<input type="submit" class="button" value="<?php echo JText::_('ADSMANAGER_SEARCH_TITLE'); ?>"/>

<?php if ($advanced_search == 1)
{
?>
<?php if ($type != "horizontal") { ?> <div> <?php } else { ?></span><?php } ?>
<a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=search&catid=$catid&Itemid=$itemid");?>"><?php echo JText::_('ADSMANAGER_ADVANCED_SEARCH'); ?></a>
<?php if ($type != "horizontal") { ?> </div> <?php } else { ?></span><?php } ?>
</form>
<?php
}