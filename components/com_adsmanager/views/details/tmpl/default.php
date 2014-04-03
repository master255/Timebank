<?php
$conf= $this->conf;
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
	
	$pathway .= '<a href="'.$this->pathlist[0]->link.'">'.$this->pathlist[0]->text.'</a>';
echo $pathway;

if (function_exists('getContentClass')) 
	$classcontent = getContentClass($this->content);
else
	$classcontent = "";
?>   
</div>
<?php echo $this->content->event->onContentBeforeDisplay;
echo '
<script type="text/javascript">
function open_win(id) {
var features, w = 500, h = 230;
var top = (screen.height - h)/2, left = (screen.width - w)/2;
if(top < 0) top = 0;
if(left < 0) left = 0;
features = "top=" + top + ",left=" +left;
features += ",height=" + h + ",width=" + w + ",resizable=no";
window.open("?option=com_tranz&view=prodaja&layout=prodaja&no_html=1&id="+id,"Prodaja",features);}
						function open_win1(id) {
						var features, w = 500, h = 400;
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
function toggl() {
$(\'#karta\').slideToggle();
};
</script>';
?>
<div class="<?php echo $classcontent;?> adsmanager_ads">
	<div class="adsmanager_top_ads">	
		<h2 class="adsmanager_ads_title">	
		<?php if (@$this->positions[0]->title) {$strtitle = JText::_($this->positions[0]->title);} ?>
		<?php echo "<b>".@$strtitle."</b>";
		if (isset($this->fDisplay[1]))
		{
			foreach($this->fDisplay[1] as $field)
			{
				echo $this->field->showFieldValue($this->content,$field); 
			}
		} ?>
		</h2>
		<?php echo $this->content->event->onContentAfterTitle; ?>
		<div>
		<?php 
		if ($this->content->userid != 0)
		{
			echo JText::_('ADSMANAGER_SHOW_OTHERS'); 
			if ($conf->comprofiler == 2)
		    {
				$target = JRoute::_("index.php?option=com_comprofiler&task=userProfile&tab=AdsManagerTab&user=".$this->content->userid."&Itemid=".$this->Itemid);
			}
		    else
		    {
				$target = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$this->content->userid."&Itemid=".$this->Itemid);
		    }
		    
		    if ($conf->display_fullname == 1)
				echo "<a href='$target'><b>".$this->content->fullname."</b></a>";
			else
				echo "<a href='$target'><b>".$this->content->user."</b></a>";
			
			echo '<table><tr><td width="273">';
			if ($this->userid == $this->content->userid)	{
			?>
			<div>
			<?php
				$target = JRoute::_("index.php?option=com_adsmanager&Itemid=".$this->Itemid."&task=write&catid=".$this->content->category."&id=".$this->content->id."&Itemid=".$this->Itemid);
				echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_EDIT')."</a>";
				echo "&nbsp;";
				$target = JRoute::_("index.php?option=com_adsmanager&Itemid=$this->Itemid&task=delete&catid=".$this->content->category."&id=".$this->content->id."&Itemid=".$this->Itemid);
				echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_DELETE')."</a>";
				if ($this->content->root_cat==4) {echo '&nbsp;<button class="abutton" name="button" onclick="open_win('.$this->content->id.'); return false;">Продать</button><br />';}
			?>
			</div>
			<?php
			} else {if ($this->content->root_cat==4) {echo '<button class="abutton" name="button" onclick="open_win1('.$this->content->id.'); return false;">Купить</button><br />';} elseif ($this->content->root_cat==3) {echo '<div><button class="abutton" name="button" onclick="open_win2('.$this->content->id.'); return false;">Предложить купить у меня</button><br /></div>';}};
		}
		?>
		</td><td><?php echo 'Дата публикации: '.$this->reorderDate($this->content->date_created);
		if ($this->content->root_cat==4) {
		echo '&nbsp;&nbsp;&nbsp;&nbsp;Рейтинг:'.$this->content->ad_rating;}?></td></tr></table></div>
		<div class="adsmanager_ads_kindof">
		<?php if (@$this->positions[1]->title) {$strtitle = JText::_($this->positions[1]->title);} ?>
		<?php echo "<b>".@$strtitle."</b>"; 
		if (isset($this->fDisplay[2]))
		{
			foreach($this->fDisplay[2] as $field)
			{
				echo $this->field->showFieldValue($this->content,$field);
			}
		}
		$database =& JFactory::getDBO();
		$database->setQuery('SELECT dov FROM `#__users` where id='.$this->content->userid);
			$cvet=$database->loadResult();
			if ($cvet==2) {$cv='style = "background-color:#c8ffcd"';} elseif ($cvet==1) {$cv='style = "background-color:#f2fff3"';} else {$cv='style = "background-color:#FFFFF0"';}
			if ($this->content->ad_important==1) {$imp1='  <div class="imp">&nbsp;&nbsp;&nbsp;Обязательное</div>';} else {$imp1='';}
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
					echo $this->field->showFieldValue($this->content,$field);
				}
			} ?></div>
			<?php
			$database->setQuery('SELECT lat FROM `#__adsmanager_fieldgmap` where contentid='.$this->content->id);
			$iff=$database->loadResult();
			if ($iff!='') {   ?>
			<div class="adsmanager_ads_desc">
			<button class="abutton" name="kart" id="kart" onclick="toggl();  initialize<?php echo $this->content->id; ?>(); return false;">Показать\Скрыть карту</button>
			<div  id="karta" style="display:none">
			<?php  
			 if (@$this->positions[5]->title) {$strtitle = JText::_($this->positions[5]->title);}
			echo "<b>".@$strtitle."</b>"; 
			if (isset($this->fDisplay[6]))
			{	
				foreach($this->fDisplay[6] as $field)
				{
					echo $this->field->showFieldValue($this->content,$field);
				}
			}  ?></div></div>
			<?php   } ?>
			<div class="adsmanager_ads_price">
			<?php if (@$this->positions[3]->title) {$strtitle = JText::_($this->positions[3]->title); } ?>
			<?php echo "<table><td><b>".@$strtitle."</b>"; 
			if (isset($this->fDisplay[4]))
			{
				foreach($this->fDisplay[4] as $field)
				{
					echo $this->field->showFieldValue($this->content,$field);
					$cen=strip_tags($this->field->showFieldValue($this->content,$field));
				} 
			}
			echo '</td><td>'.$imp1.'</td></table>';?>
			</div>
			<div class="adsmanager_ads_contact">
			<?php if (@$this->positions[4]->title) {$strtitle = JText::_($this->positions[4]->title);} ?>
			<?php echo "<b>".@$strtitle."</b>"; 
			if (($this->userid != 0)||($conf->show_contact == 0)) {		
				if (isset($this->fDisplay[5]))
				{		
					foreach($this->fDisplay[5] as $field)
					{	
						echo $this->field->showFieldValue($this->content,$field);
					} 
				}
				if (($this->content->userid != 0)&&($conf->allow_contact_by_pms == 1))
				{
					if ($conf->display_fullname == 1)
						$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$this->content->fullname);
					else
						$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$this->content->user);
					$pmsForm = JRoute::_("index.php?option=com_uddeim&task=new&recip=".$this->content->userid);
					echo '<a href="'.$pmsForm.'">'.$pmsText.'</a><br />';
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
			$this->loadScriptImage($this->conf->image_display);
			$image_found =0;
			$nbimages = $this->conf->nb_images;
			if (function_exists("getMaxPaidSystemImages"))
			{
				$nbimages += getMaxPaidSystemImages();
			}
			for($i=1;$i < $nbimages + 1;$i++)
			{
				$ext_name = chr(ord('a')+$i-1);
				$pic = JPATH_BASE."/images/com_adsmanager/img/".$this->content->id.$ext_name."_t.jpg";
				$piclink 	= $this->baseurl."images/com_adsmanager/img/".$this->content->id.$ext_name.".jpg";
				if (file_exists($pic)) 
				{
				    switch($this->conf->image_display)
				    {
						case 'popup':
							echo "<a href=\"javascript:popup('$piclink');\"><img src='".$this->baseurl."images/com_adsmanager/img/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
							break;
						case 'lightbox':
						case 'lytebox':
							echo "<a href='".$piclink."' rel='lytebox[roadtrip".$this->content->id."]'><img src='".$this->baseurl."images/com_adsmanager/img/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>"; 
							break;
						case 'highslide':
							echo "<a id='thumb".$this->content->id."' class='highslide' onclick='return hs.expand (this)' href='".$piclink."'><img src='".$this->baseurl."images/com_adsmanager/img/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
							break;
						case 'default':	
						default:
							echo "<a href='".$piclink."' target='_blank'><img src='".$this->baseurl."images/com_adsmanager/img/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
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
<?php 
echo '<br/><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<table width=100%><tr><td width=400>
<div class="fb-like"  data-layout="button_count" data-width="180" data-show-faces="true"></div>
</td><td width=370>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="@timebanksvoboda '.$this->content->ad_headline.', цена:'.$cen.'" data-lang="ru" data-related="timebanksvoboda">Твитнуть</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td><td width=50>
<script type="text/javascript">
VK.init({apiId: ';
if ($_SERVER['HTTP_HOST']=='timebankspb.ru') {echo 2924047;} else {echo 2883988;}
echo ', onlyWidgets: true});
</script>
<div id="vk_like1"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like1", {type: "button", text: "'.$this->content->ad_headline.', цена:'.$cen.'"});
</script>
</td></tr></table>';
echo $this->content->event->onContentAfterDisplay; ?>
<div class="back_button">
<a href='javascript:history.go(-1)'>
<?php echo JText::_('ADSMANAGER_BACK_TEXT'); ?>
</a>
</div>
<?php

?>