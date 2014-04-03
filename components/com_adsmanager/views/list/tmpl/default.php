<div id="all8">
<script language="javascript" type="text/javascript">
function tableOrdering( order, dir, task )
{
        var form = document.adminForm;
        form.filter_order.value = order;
        form.filter_order_Dir.value = dir;
        document.adminForm.submit( task );
}
</script>
<?php
$conf= $this->conf;
$database =& JFactory::getDBO();
?>
<div class="adsmanager_pathway">
<?php 
	$pathway ="";
	$nb = count($this->pathlist);
	for ($i = $nb - 1 ; $i >0;$i--)
	{	
	
		$pathway .= '<a href="'.$this->pathlist[$i]->link.'">'.$this->pathlist[$i]->text.'</a>';
		
		$pathway .= ' <img src="'.$this->baseurl.'components/com_adsmanager/images/arrow.png" alt="arrow" /> ';
		
	}
	if (isset($this->pathlist[0]))
		$pathway .= '<a href="'.$this->pathlist[0]->link.'">'.$this->pathlist[0]->text.'</a>';
echo $pathway;
		if (!isset ($this->itemid)) {$this->itemid = '';}
		if ($this->catid == 0) 
				$link_write_ad = JRoute::_("index.php?option=com_adsmanager&task=write&Itemid=".$this->itemid);
			else
				$link_write_ad = JRoute::_("index.php?option=com_adsmanager&task=write&catid=$this->catid&Itemid=".$this->itemid);
							
			if (!isset ($this->comprofiler)) {$this->comprofiler = '';}
			if (!isset ($this->user->id)) {$idus =  & JFactory::getUser ();	$this->user->id = $idus;}
			switch($this->comprofiler)
			{
				case 2: 
					$link_show_profile = JRoute::_("index.php?option=com_comprofiler&task=userDetails&Itemid=".$this->itemid);
					$link_show_user = JRoute::_("index.php?option=com_comprofiler&task=showProfile&tab=AdsManagerTab&Itemid=".$this->itemid);
					break;
				case 1:
					$link_show_profile = JRoute::_("index.php?option=com_comprofiler&task=profile&Itemid=".$this->itemid);
					$link_show_user = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$this->user->id."&Itemid=".$this->itemid);
					break;
				default:
					$link_show_profile = JRoute::_("index.php?option=com_adsmanager&view=profile&Itemid=".$this->itemid);
					$link_show_user = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$this->user->id."&Itemid=".$this->itemid);
					break;
			}
		
			$link_show_rules = JRoute::_("index.php?option=com_adsmanager&view=rules&Itemid=".$this->itemid);
			$link_show_all = JRoute::_("index.php?option=com_adsmanager&view=list&Itemid=".$this->itemid);
			echo '<div align=right><a href="'.$link_write_ad.'">'.JText::_('ADSMANAGER_MENU_WRITE').'</a> | ';
			echo '<a href="'.$link_show_user.'">'.JText::_('ADSMANAGER_MENU_USER_ADS').'</a></div>';
?>
</div>
<h1 class="contentheading">
<?php
if (isset ($this->list_img)) {
	echo '<img  class="imgheading" src="'.$this->list_img.'" alt="'.$this->catid.'" />';}
	echo JText::_($this->list_name);
	if ($this->conf->show_rss == 1)
	{
		if (isset($this->listuser))
			$linkrss = JRoute::_("index.php?option=com_adsmanager&view=list&format=feed&user=".$this->listuser);
		else
			$linkrss = JRoute::_("index.php?option=com_adsmanager&view=list&format=feed&catid=".$this->catid);
		echo '<a href="'.$linkrss.'" target="_blank"><img align="right" class="imgheading" src="'.$this->baseurl.'components/com_adsmanager/images/rss.png" alt="rss" /></a>';
	}

?>
</h1>
<div class="adsmanager_subcats">

<div class="adsmanager_subcats">
<?php if ($this->subcats != 0) {
$st = 1;
$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET (\''.$this->userid.'\', users))');
$erg=$database->loadResultArray();
echo '<table class="adsmanager_table1" cellspacing="5" cellpadding="0"> <tr><td width="50%"><table class="adsmanager_table1" width="100%" border="0">';
for ($i = 0; $i < ceil((count($this->subcats)/$st)/2); $i++) {
	echo '<tr>';
				if (isset($this->subcats[(($i*$st)+$j)])) {
					$this->subcats[(($i*$st)+$j)]->link = JRoute::_('index.php?option=com_adsmanager&view=list&catid='.$this->subcats[(($i*$st)+$j)]->id."&Itemid=".$this->Itemid);
					if (($this->subcats[(($i*$st)+$j)]->id >6)) {
					$database->setQuery("SELECT id, ad_group, userid FROM `#__adsmanager_ads` where category='".$this->subcats[(($i*$st)+$j)]->id."' and published=1");
					$num1=$database->loadObjectList();
					if (count ($num1)>0) {
					$cou4=0;
					foreach ($num1 as $num) {$fvv=array_unique(array_diff(explode (',', $num->ad_group), array('')));
					if (($this->userid==$num->userid) or ((count (array_intersect ($erg, $fvv)))>0) or (count ($fvv)==0) or ($fvv[1]==0)) {$cou4=$cou4+1;}
					}
					if ($cou4>0)
					 {echo '<td align="left" width="25%" valign="top"><a href="'.$this->subcats[(($i*$st)+$j)]->link.'">'.$this->subcats[(($i*$st)+$j)]->name.' ('.$cou4.')'.'</a>&nbsp;&nbsp;</td>';} }} else {
					echo '<td align="center" width="25%" valign="top">';
					echo '<FONT class="bascat"><a href="'.$this->subcats[(($i*$st)+$j)]->link.'">'.$this->subcats[(($i*$st)+$j)]->name.'</a>&nbsp;&nbsp;</font></td>';
					};
				} else {
					echo '<td>&nbsp;</td>';
				}
	echo '</tr>'; }
echo '</table></td>';
echo '<td width="50%"><table class="adsmanager_table1" width="100%" border="0">';
for ($i = ceil((count($this->subcats)/$st)/2); $i < ceil((count($this->subcats)/$st)); $i++) {
	echo '<tr>';
				if (isset($this->subcats[(($i*$st)+$j)])) {
					$this->subcats[(($i*$st)+$j)]->link = JRoute::_('index.php?option=com_adsmanager&view=list&catid='.$this->subcats[(($i*$st)+$j)]->id."&Itemid=".$this->Itemid);
					if (($this->subcats[(($i*$st)+$j)]->id >6)) {
					$database->setQuery("SELECT id, ad_group, userid FROM `#__adsmanager_ads` where category='".$this->subcats[(($i*$st)+$j)]->id."' and published=1");
					$num1=$database->loadObjectList();
					if (count ($num1)>0) {
					$cou4=0;
					foreach ($num1 as $num){ $fvv=array_unique(array_diff(explode (',', $num->ad_group), array('')));
					if (($this->userid==$num->userid) or ((count (array_intersect ($erg, $fvv)))>0) or (count ($fvv)==0) or ($fvv[1]==0)) {$cou4=$cou4+1;}
					}
					if ($cou4>0)
					{echo '<td align="left" width="25%" valign="top"><a href="'.$this->subcats[(($i*$st)+$j)]->link.'">'.$this->subcats[(($i*$st)+$j)]->name.' ('.count ($num1).')'.'</a>&nbsp;&nbsp;</td>';}
					}} else {
					echo '<td align="center" width="25%" valign="top">';
					echo '<FONT class="bascat"><a href="'.$this->subcats[(($i*$st)+$j)]->link.'">'.$this->subcats[(($i*$st)+$j)]->name.'</a>&nbsp;&nbsp;</font></td>';
					};
				} else {
					echo '<td>&nbsp;</td>';
				}
	echo '</tr>'; }
echo '</table></td> </table>';



}
?>
</div>
</div>
<div class="adsmanager_description">
<?php echo $this->list_description;?>
</div>
<script language="JavaScript" type="text/JavaScript">
function jumpmenu(obj){
<?php if (isset($this->listuser)) {echo 'hre=\'/index.php?option=com_adsmanager&view=list&user='.$this->listuser.'&order=\';';} else {
echo 'target=\''.($_SERVER['REQUEST_URI']).'\';
nou=target.indexOf (\'?\');
if (nou != -1) {hre=target.substring (0, nou)} else {hre=target};
hre=hre+\'?order=\';';}?>
$.ajax({
type: "POST",
url: hre+obj.options[obj.selectedIndex].value+'&no_html=1',
cache: false,
success: function (otv){$('#all8').slideUp (100, function () {$("#all8").html(otv);});
$('#all8').slideDown (300);},
error: function () {
eval("parent.location='"+hre+obj.options[obj.selectedIndex].value+"'");}});
obj.options[obj.selectedIndex].innerHTML="Пожалуйста, подождите ...";}
function jumpmenu1(obj1){
<?php if (isset($this->listuser)) {echo 'hre1=\'/index.php?option=com_adsmanager&view=list&user='.$this->listuser.'&group=\';';} else {
echo 'target1=\''.($_SERVER['REQUEST_URI']).'\';
nou1=target1.indexOf (\'?\');
if (nou1 != -1) {hre1=target1.substring (0, nou1)} else {hre1=target1};
hre1=hre1+\'?group=\';';}?>
$.ajax({
type: "POST",
url: hre1+obj1.options[obj1.selectedIndex].value+'&no_html=1',
cache: false,
success: function (otv){
$('#all8').slideUp (100, function () {$("#all8").html(otv);});
$('#all8').slideDown (300);},
error: function () {
eval("parent.location='"+hre1+obj1.options[obj1.selectedIndex].value+"'");
}});
obj1.options[obj1.selectedIndex].innerHTML="Пожалуйста, подождите ...";			
}
</script>

<div class="adsmanager_search_box">
<div class="adsmanager_inner_box">
<?php
$database->setQuery('SELECT id, name FROM #__tranz_groups where (FIND_IN_SET (\''.$this->userid.'\', users))');
$qws=$database->loadObjectList();
if (count ($qws)>0) {
if ($this->group==0) {$sel1='selected="selected"'; $sel2=false;} else {$sel2=true;  $sel1='';}
echo 'Фильтр по группе:<select name="group" size="1" onchange="jumpmenu1(this)">
<option value=0 '.$sel1.'>Все</option>';
foreach ($qws as $erw) {
if (($sel2==true) and ($this->group==$erw->id)) {$sel3='selected="selected"';} else {$sel3='';}
echo '<option value="'.$erw->id.'" '.$sel3.'>'.$erw->name.'</option>';
}
echo '
</select>&nbsp;&nbsp;';
}
?>
	<?php if (isset($this->orders)) { ?>
	<?php echo JText::_('ADSMANAGER_ORDER_BY_TEXT'); ?>
	<select name="order" size="1" onchange="jumpmenu(this)">
			<option value="" <?php if ($this->order == "0") { echo "selected='selected'"; } ?>><?php echo JText::_('ADSMANAGER_DATE'); ?></option>
		   <?php foreach($this->orders as $o)
		   {?>
			<option value="<?php echo $o->fieldid;?>" <?php if ($this->order == $o->fieldid) {echo "selected='selected'";} ?>><?php echo JText::_($o->title); ?></option>
			<?php
		   }
		 ?>
	</select>	
	<?php } ?>
</div>
</div>
<?php $this->general->showGeneralLink() ?>
<?php if ($this->pagination->total == 0 )
{
	echo '<div align="center">'.JText::_('ADSMANAGER_NOENTRIES').'</div>'; 
}
else
{
	?>
	<?php echo $this->pagination->getResultsCounter()?>
	<br/>
	<form name="adminForm" id="adminForm" method="post" action="<?php echo $this->requestURL; ?>" >
	<input type="hidden" id="mode" name="mode" value="<?php echo $this->mode?>"/>
	<?php if ($this->conf->display_expand == 2) { ?>
<script type="text/javascript">
function changeMode(mode)
{
element = document.getElementById("mode");
element.value = mode;
form = document.getElementById("adminForm");
form.submit();
}
function open_win(id) {
var features, w = 500, h = 260;
var top = (screen.height - h)/2, left = (screen.width - w)/2;
if(top < 0) top = 0;
if(left < 0) left = 0;
features = "top=" + top + ",left=" +left;
features += ",height=" + h + ",width=" + w + ",resizable=no";
window.open("?option=com_tranz&view=prodaja&layout=prodaja&no_html=1&id="+id,"Prodaja",features);}
function open_win1(id) {
var features, w = 500, h = 490;
var top = (screen.height - h)/2, left = (screen.width - w)/2;
if(top < 0) top = 0;
if(left < 0) left = 0;
features = "top=" + top + ",left=" +left;
features += ",height=" + h + ",width=" + w + ",resizable=no";
window.open("?option=com_tranz&view=pokupka&layout=pokupka&no_html=1&id="+id,"Pokupka",features);}
function open_win2(id) {
var features, w = 500, h = 490;
var top = (screen.height - h)/2, left = (screen.width - w)/2;
if(top < 0) top = 0;
if(left < 0) left = 0;
features = "top=" + top + ",left=" +left;
features += ",height=" + h + ",width=" + w + ",resizable=no";
window.open("?option=com_tranz&view=predlojenie&layout=predlojenie&no_html=1&id="+id,"Predlojenie",features);}
function toggl(idd) {
$('#karta'+idd).slideToggle();
};
		</script>
		<div class="adsmanager_subtitle">
		<?php 
		/* Display SubTitle */
			echo '<a href="javascript:changeMode(0)">'.JText::_('ADSMANAGER_MODE_TEXT')." ".JText::_('ADSMANAGER_SHORT_TEXT').'</a>';
		    echo " / ";
		    echo '<a href="javascript:changeMode(1)">'.JText::_('ADSMANAGER_EXPAND_TEXT').'</a>';
			if (isset ($this->listuser)==true) {if ($this->listuser!='') {$uss='&user='.$this->listuser;}} else {$uss='';}
			echo ' / <a href="/component/tranz/?view=xls&layout=xls&no_html=1&table=4&vid='.$this->catid.$uss.'">Скачать xls</a>';
		?>
		</div>
	<?php } ?>
	<?php if ($this->mode != 1) { ?>
		<table class="adsmanager_table">
			<tr>
			  <th><?php echo JText::_('ADSMANAGER_CONTENT'); ?>
			  <?php /*<a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=5&orderdir=ASC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_asc.png" alt="+" /></a>
			  <a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=5&orderdir=DESC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_desc.png" alt="-" /></a>
			   */?>
			  </th>
			  <?php 
			  	  foreach($this->columns as $col)
				  {
				  if ($col->name == 'Рейтинг') {echo "<th width=47>".JText::_($col->name);} elseif ($col->name == 'Цена') {
				  echo "<th width=57>".JText::_($col->name);
				  } else {echo "<th>".JText::_($col->name);}
					/*$order = @$this->fColumns[$col->id][0]->fieldid;
					?>
					<a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=$order&orderdir=ASC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_asc.png" alt="+" /></a>
				    <a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=$order&orderdir=DESC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_desc.png" alt="-" /></a>
				    */?>
                    <?php echo "</th>";
				  }
			  ?>
			  <th><?php echo JText::_('ADSMANAGER_DATE'); ?>
			  <?php /*<a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=&orderdir=ASC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_asc.png" alt="+" /></a>
			  <a href="<?php echo JRoute::_("index.php?option=com_adsmanager&view=list".$urloptions."&order=&orderdir=DESC&Itemid=".$this->Itemid);?>"><img src="<?php echo $this->baseurl ?>administrator/images/sort_desc.png" alt="-" /></a>
			  */?>
              </th>
			</tr>
		<?php

		foreach($this->contents as $content)
		{
			$linkTarget = JRoute::_( "index.php?option=com_adsmanager&view=details&id=".$content->id."&catid=".$content->catid."&Itemid=".$this->Itemid);
			if (function_exists('getContentClass')) 
				$classcontent = getContentClass($content);
	  	    else
				$classcontent = "adsmanager_table_description";
			$cv='';
			$database->setQuery('SELECT dov FROM `#__users` where id='.$content->userid);
			$cvet=$database->loadResult();
			if ($cvet==2) {$cv='bgcolor="#c8ffcd"';} elseif ($cvet==1) {$cv='bgcolor="#f2fff3"';} else {$cv='bgcolor="#FFFFF0"';}
			if ($content->ad_important==1) {$imp='<br/> <div class="imp">Обязательное</div>';} else {$imp='';}
			?>
			<tr  class="<?php echo $classcontent;?> trcategory_<?php echo $content->catid?>"  <?php echo $cv?>> 
				<td><table class="ads_ad"><tr><td rowspan="3">
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
								echo "<a href='".$linkTarget."'><img class='adimage' name='adimage".$content->id."' src='".$this->baseurl."images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>";
								$ok = 1;
							}
						}
						else if ($nbimages != 0)
						{
							if ((JText::_('ADSMANAGER_NOPIC') != "")&&(file_exists(JPATH_BASE."/components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC'))))
								echo "<a href='".$linkTarget."'><img class='adimage' src='".$this->baseurl."components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC')."' alt='nopic' /></a>"; 
							else
								echo "<a href='".$linkTarget."'><img class='adimage' src='".$this->baseurl."components/com_adsmanager/images/nopic.gif' alt='nopic' /></a>"; 
							$ok = 1;
						}   
						else
						{
							$ok = 1;
						}
						$i++;   	
					}
					?>
					</td><td>
					<div>
					<h2>
						<?php
						if (strlen ($content->ad_headline) > 41) {$head = JString::substr ($content->ad_headline, 0, 41).'..';} else {$head = $content->ad_headline;}
						echo '<a href="'.$linkTarget.'">'.$head.'</a>'; ?>
						<span class="adsmanager_cat"><?php 
						if (isset($this->listuser)) {
						if ($content->root_cat==4) {$opr='<b>Предложение</b>/';} else {$opr='<b>Спрос</b>/';} } else {$opr='';}
						echo "(".$opr.$content->parent." / ".$content->cat.")"; ?></span>
					</h2>
					<?php 
						$content->ad_text = str_replace ('<br />'," ",$content->ad_text);
						$af_text = JString::substr($content->ad_text, 0, 65)."..";
						echo $af_text;
					?>
					</div>
					</td></tr><tr><td>
					<?php 
					if (($this->userid == $content->userid)&&($content->userid != 0))	{
					?>
					<div>
					<?php					
						$target = JRoute::_("index.php?option=com_adsmanager&task=write&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_EDIT')."</a>";
						echo "&nbsp;";
						$target = JRoute::_("index.php?option=com_adsmanager&task=delete&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_DELETE')."</a>";
						if ($content->root_cat==4) {
						echo '&nbsp;<button class="abutton" name="button" onclick="open_win('.$content->id.'); return false;">Продать</button><br />';}
					if ($this->conf->expiration == 1) {
					?>
					<br/>
					<?php echo JText::_('ADSMANAGER_EXPIRATION_DATE') ?>: <?php echo $this->reorderDate($content->expiration_date) ?>
					<br/>
					<?php
						$target = JROUTE::_("index.php?option=com_adsmanager&view=expiration&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_RENEW_CONTENT')."</a>";
					?>
					</div>
					<?php
					}
					} else {if ($content->root_cat==4) {echo '&nbsp;<div><button class="abutton" name="button" onclick="open_win1('.$content->id.'); return false;">Купить</button><br /></div>';} elseif ($content->root_cat==3) {echo '&nbsp;<div><button class="abutton" name="button" onclick="open_win2('.$content->id.'); return false;">Предложить купить у меня</button><br /></div>';}
					};
					?>	
						</td></tr></table>
				</td>
				<?php 
					foreach($this->columns as $col) {
						echo '<td class="center">';
						if (isset($this->fColumns[$col->id]))
							foreach($this->fColumns[$col->id] as $field)
							{
								echo $this->field->showFieldValue($content,$field); 
							}
						echo "</td>";
					}
				?>
				<td class="center">
					<?php 
					$iconflag = false;
					if (($conf->show_new == true)&&($this->isNewcontent($content->date_created,$conf->nbdays_new))) {
						echo "<div class='center'><img align='center' src='".$this->baseurl."components/com_adsmanager/images/new.gif' /> ";
						$iconflag = true;
					}
					if (($conf->show_hot == true)&&($content->views >= $conf->nbhits)) {
						if ($iconflag == false)
							echo "<div class='center'>";
						echo "<img align='center' src='".$this->baseurl."components/com_adsmanager/images/hot.gif' />";
						$iconflag = true;
					}
					if ($iconflag == true)
						echo "</div>";
					echo $this->reorderDate($content->date_created); 
					?>
					<br />
					<?php
					if ($content->userid != 0)
					{
					   echo JText::_('ADSMANAGER_FROM')." "; 
	
					   if ($conf->comprofiler == 2)
					   {
						$target = JRoute::_("index.php?option=com_comprofiler&task=userProfile&tab=adsmanagerTab&user=".$content->userid."&Itemid=".$this->Itemid);
					   }
					   else
					   {
						$target = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$content->userid."&Itemid=".$this->Itemid);
					   }
					   
					   if ($conf->display_fullname == 1)
					   		echo "<a href='".$target."'>".$content->fullname."</a><br/>";
					   else
					   		echo "<a href='".$target."'>".$content->user."</a><br/>";
					}
					?>
					<?php echo sprintf(JText::_('ADSMANAGER_VIEWS'),$content->views); 
					echo $imp;?>
				</td>
			</tr>
		<?php	
		}
		?>
		</table>
	<?php } else { ?>
		<?php foreach($this->contents as $key => $content) 
		{ 			if ($key == 0)
				$this->loadScriptImage($this->conf->image_display);
			if (function_exists('getContentClass')) 
				$classcontent = getContentClass($content);
	  	    else
				$classcontent = "";
			$database->setQuery('SELECT dov FROM `#__users` where id='.$content->userid);
			$cvet=$database->loadResult();
			if ($cvet==2) {$cv='style = "background-color:#c8ffcd"';} elseif ($cvet==1) {$cv='style = "background-color:#f2fff3"';} else {$cv='style = "background-color:#FFFFF0"';}
			if ($content->ad_important==1) {$imp1='  <div class="imp">&nbsp;&nbsp;&nbsp;Обязательное</div>';} else {$imp1='';}
			?>
			<br/>
			<div class="<?php echo $classcontent?> adsmanager_ads" align="left">
			<div class="adsmanager_top_ads">
				<h2 class="adsmanager_ads_title">
				<?php if (@$this->positions[0]->title) {$strtitle = JText::_($this->positions[0]->title);} ?>
				<?php 
				if (isset($this->listuser)) {
						if ($content->root_cat==4) {$opr='<b>Предложение</b>/';} else {$opr='<b>Спрос</b>/';} } else {$opr='';}
				echo "<b>".@$strtitle."</b>";
				if (isset($this->fDisplay[1]))
				{
					foreach($this->fDisplay[1] as $field)
					{
						echo $this->field->showFieldValue($content,$field); 
					}
				}
				echo " (".$opr.$content->parent." / ".$content->cat.")";?>
				</h2>
				<div>
				<?php 
				if ($content->userid != 0)
				{
					echo JText::_('ADSMANAGER_SHOW_OTHERS'); 
					if ($this->conf->comprofiler == 2)
				    {
						$target = JROUTE::_("index.php?option=com_comprofiler&task=userProfile&tab=AdsManagerTab&user=".$content->userid."&Itemid=".$this->Itemid);
					}
				    else
				    {
						$target = JROUTE::_("index.php?option=com_adsmanager&view=list&user=".$content->userid."&Itemid=".$this->Itemid);
				    }
				    
				    if ($conf->display_fullname == 1)
						echo "<a href='$target'><b>".$content->fullname."</b></a>";
					else
						echo "<a href='$target'><b>".$content->user."</b></a>";
					
					echo '<table><tr><td width="273">';
					if ($this->userid == $content->userid)	{
					?>
					<div>
					<?php
						$target = JROUTE::_("index.php?option=com_adsmanager&task=write&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_EDIT')."</a>";
						echo "&nbsp;";
						$target = JROUTE::_("index.php?option=com_adsmanager&task=delete&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_DELETE')."</a>";
						if ($content->root_cat==4) {
						echo '&nbsp;<button class="abutton" name="button" onclick="open_win('.$content->id.'); return false;">Продать</button><br />'; }
					if ($this->conf->expiration == 1) { 
					?>
					<br/>
					<?php echo JText::_('ADSMANAGER_EXPIRATION_DATE') ?>: <?php echo $this->reorderDate($content->expiration_date) ?>
					<br/>
					<?php
						$target = JROUTE::_("index.php?option=com_adsmanager&view=expiration&catid=".$content->catid."&id=$content->id"."&Itemid=".$this->Itemid);
						echo "<a href='".$target."'>".JText::_('ADSMANAGER_RENEW_CONTENT')."</a>";
					?>
					
					<?php
					};
					echo "</div>";
					} 
					else {if ($content->root_cat==4) {echo '<div><button class="abutton" name="button" onclick="open_win1('.$content->id.'); return false;">Купить</button><br /></div>';} elseif ($content->root_cat==3) {echo '<div><button class="abutton" name="button" onclick="open_win2('.$content->id.'); return false;">Предложить купить у меня</button><br /></div>';}
					}
				}
				?>
				</td><td><?php echo 'Дата публикации: '.$this->reorderDate($content->date_created).'&nbsp;&nbsp;&nbsp;&nbsp;Рейтинг:'.$content->ad_rating;?></td></tr></table></div>
				<div class="adsmanager_ads_kindof">
				<?php if (@$this->positions[1]->title) {$strtitle = JText::_($this->positions[1]->title);} ?>
				<?php echo "<b>".@$strtitle."</b>"; 
				if (isset($this->fDisplay[2]))
				{
					foreach($this->fDisplay[2] as $field)
					{
						echo $this->field->showFieldValue($content,$field);
					}
				}
				?>
				</div>
			</div>
			<div class="adsmanager_ads_main" <?php echo $cv?>>
				<div class="adsmanager_ads_body">
					<div class="adsmanager_ads_desc">
					<?php if (@$this->positions[2]->title) {$strtitle = JText::_($this->positions[2]->title);} ?>
					<?php echo "<b>".@$strtitle."</b>"; 
					if (isset($this->fDisplay[3]))
					{
						foreach($this->fDisplay[3] as $field)
						{
							echo $this->field->showFieldValue($content,$field);
						}
					} ?>
					</div>
					<?php 
					$database->setQuery('SELECT lat FROM `#__adsmanager_fieldgmap` where contentid='.$content->id);
					$iff=$database->loadResult();
					if ($iff!='') {   ?>
					<div class="adsmanager_ads_desc">
					<button class="abutton" name="kart" id="kart" onclick="toggl(<?php echo $content->id ?>); initialize<?php echo $content->id; ?>(); return false;">Показать\Скрыть карту</button>
					<?php echo JText::_($this->positions[5]->title);  ?>
					<div  id="karta<?php echo $content->id ?>" style="display:none">
					<?php 
					if (@$this->positions[5]->title) {$strtitle = JText::_($this->positions[5]->title);} 
					echo "<b>".@$strtitle."</b>";
					if (isset($this->fDisplay[6]))
					{	
						foreach($this->fDisplay[6] as $field)
						{
							echo $this->field->showFieldValue($content,$field);
						}
					} 
					?></div></div>
					<?php   } ?>
					<div class="adsmanager_ads_price">
					<?php if (@$this->positions[3]->title) {$strtitle = JText::_($this->positions[3]->title); } ?>
					<?php echo "<table><td><b>".@$strtitle."</b>"; 
					
					if (isset($this->fDisplay[4]))
					{
						foreach($this->fDisplay[4] as $field)
						{
							echo $this->field->showFieldValue($content,$field);
						} 
					}
					echo '</td><td>'.$imp1.'</td></table>';
					?>
					</div>
					<div class="adsmanager_ads_contact">
					<?php if (@$this->positions[4]->title) {$strtitle = JText::_($this->positions[4]->title);} ?>
					<?php echo "<b>".@$strtitle."</b>"; 
					if (($this->userid != 0)||($conf->show_contact == 0)) {		
						if (isset($this->fDisplay[5]))
						{		
							foreach($this->fDisplay[5] as $field)
							{	
								echo $this->field->showFieldValue($content,$field);
							} 
						}
						if (($content->userid != 0)&&($this->conf->allow_contact_by_pms == 1))
						{
						if ($conf->display_fullname == 1)
						{$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$content->fullname);}
					else
							{$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$content->user);}
							$pmsForm = JROUTE::_("index.php?option=com_uddeim&task=new&recip=".$content->userid);
							echo '&nbsp;<a href="'.$pmsForm.'">'.$pmsText.'</a><br />';
						}
						
					}
					else
					{
						echo JText::_('ADSMANAGER_CONTACT_NOT_LOGGED');
					}
					?>
					</div>
			    </div>
				<div class="adsmanager_ads_image">
					<?php
					$image_found =0;
					$nbimages = $this->conf->nb_images;
					if (function_exists("getMaxPaidSystemImages"))
					{
						$nbimages += getMaxPaidSystemImages();
					}
					for($i=1;$i < $nbimages + 1;$i++)
					{
						$ext_name = chr(ord('a')+$i-1);
						$pic = JPATH_BASE."/images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg";
						$piclink 	= $this->baseurl."/images/com_adsmanager/img/".$content->id.$ext_name.".jpg";
						if (file_exists($pic)) 
						{
						    switch($this->conf->image_display)
						    {
								case 'popup':
									echo "<a href=\"javascript:popup('$piclink');\"><img src='".$this->baseurl."images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>";
									break;
								case 'lightbox':
								case 'lytebox':
									echo "<a href='".$piclink."' rel='lytebox[roadtrip".$content->id."]'><img src='".$this->baseurl."images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>"; 
									break;
								case 'highslide':
									echo "<a id='thumb".$content->id."' class='highslide' onclick='return hs.expand (this)' href='".$piclink."'><img src='".$this->baseurl."/images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>";
									break;
								case 'default':	
								default:
									echo "<a href='".$piclink."' target='_blank'><img src='".$this->baseurl."images/com_adsmanager/img/".$content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($content->ad_headline)."' /></a>";
									break;
							}
							$image_found = 1;
						}   
					}
					if (($image_found == 0)&&($conf->nb_images >  0))
					{
						if ((JText::_('ADSMANAGER_NOPIC') != "")&&(file_exists(JPATH_BASE."/components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC'))))
							echo '<img align="center" src="'.$this->baseurl.'components/com_adsmanager/images/'.JText::_('ADSMANAGER_NOPIC').'" alt="nopic" /></a>'; 
						else
							echo '<img align="center" src="'.$this->baseurl.'components/com_adsmanager/images/nopic.gif" alt="nopic" />'; 
					}
					?>
				</div>
				<div class="adsmanager_spacer"></div>
			</div>
			</div>
		<?php } ?>
	<?php } ?>
	<div class="pagelinks"><?php echo str_ireplace("no_html=1", "", $this->pagination->getPagesLinks()); ?></div>
	</form>
<?php 
} $this->general->endTemplate(); ?>
</div>