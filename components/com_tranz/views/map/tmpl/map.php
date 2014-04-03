<?php
defined('_JEXEC') or die('Restricted access');
$user = & JFactory::getUser ();																	//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
$group=JRequest::getInt ('group', 0);
$idx=JRequest::getInt ('idx', 0);
$vstrechi=JRequest::getInt ('vstrechi', 0);
$htm=JRequest::getInt ('no_html', 0);
$document =& JFactory::getDocument();
if ($htm==0) {
$map_width = 667;
$map_height= 583;
$document->addScript('http://maps.google.com/maps/api/js?sensor=false');
echo '<script type="text/javascript">
var map;
var markersArray = [];
var tim=0;
function ob1(j)
{
if ($("#peopl").is(":checked")) {
$.ajax({
type: "POST",
url: "/map?idx=1&no_html=1&en=1&up="+j,
cache: false,
success: function (msg){
$("#upd").html(msg);
tim=0;
}});
setTimeout (function(){ob1(0);}, 10000);} else {
if (tim==0) {
tim=1;
$.ajax({
type: "POST",
url: "/map?idx=1&no_html=1&en=0",
cache: false,
success: function (msg){
$("#upd").html(msg);
}});
}}
}
function ob()
{
$.ajax({
type: "POST",
url: "/map?group="+$("#group").val()+"&no_html=1&idx=0&vstrechi="+(Number ($("#vstr").is(":checked"))),
cache: false,
success: function (msg){
$("#all4").slideUp (100, function () {$("#all4").html(msg);});
$("#all4").slideDown (300);
}});
}
function initialize() {';
$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET ("'.$user->id.'", users))');
$ej=$database->loadResultArray();
$database->setQuery('SELECT * FROM #__tranz_vstrechi where (dov="Проверено")');
$vst=$database->loadObjectList();
if ($group==0) {$usl=" and ((b.ad_group='') or (FIND_IN_SET ('0', b.ad_group)))) or ((a.fieldid = 16) AND ((a.lat!='') or (a.lng!='')) and (b.published=1) and (b.userid=".$user->id."))";} else {
if (in_array($group, $ej)==true) {$usl=" and (FIND_IN_SET (".$database->Quote($group).", b.ad_group)))";} else {$usl=' and FALSE)';
echo 'alert ("Ошибка доступа!");';
JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Перебор групп в карте. Строка 36 файл map.php. Пользователь - '.$user->id,0);}
}
$database->setQuery("SELECT a.lat, a.lng, a.contentid, b.ad_headline, b.ad_text, b.category, b.userid, b.root_cat FROM #__adsmanager_fieldgmap a inner join #__adsmanager_ads b on a.contentid=b.id WHERE (((a.fieldid = 16) AND ((a.lat!='') or (a.lng!='')) and (b.published=1))".$usl);
$all1=$database->LoadObjectList();
$key1=0;
foreach ($all1 as $key1 =>$all2) 
	{ echo 'var myLatlng'.$key1.' = new google.maps.LatLng('.$all2->lat.', '.$all2->lng.');';
	}
if ($vstrechi==1) {
foreach ($vst as $vst1) 
	{
	$key1=$key1+1;
	echo 'var myLatlng'.$key1.' = new google.maps.LatLng('.$vst1->lat.', '.$vst1->lng.');';
	}
}
echo '
var myLatlngg = new google.maps.LatLng(59.933362, 30.31075);
var myOptions = {zoom:10, center:myLatlngg, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}, zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL}};
map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);';
$key1=0;
foreach ($all1 as $key1 =>$all2) 
	{
	echo 'var content'.$key1.' = document.createElement(\'div\'); 
content'.$key1.'.innerHTML = "<strong><a target=\'_blank\' href=\'index.php?option=com_adsmanager&view=details&id='.$all2->contentid.'&catid='.$all2->category.'&Itemid='.$all2->contentid.'\'>'.htmlentities (str_replace("\r\n",'',$all2->ad_headline)).'</a></strong><br/>'.htmlentities (str_replace("\r\n",'', $all2->ad_text)).'";
var infowindow'.$key1.' = new google.maps.InfoWindow({content: content'.$key1.'});
var marker'.$key1.' = new google.maps.Marker({position:myLatlng'.$key1.', map:map, title:"'.$all2->ad_headline.'"'.(($all2->userid==$user->id)?', icon:"/images/my.png"':(($all2->root_cat==4)?', icon:"/images/symbol_plus.png"':', icon:"/images/symbol_minus.png"')).'});
markersArray.push(marker'.$key1.');
google.maps.event.addListener(marker'.$key1.', \'click\', function() { infowindow'.$key1.'.open(map, marker'.$key1.');});';
	}
if ($vstrechi==1) {
foreach ($vst as $vst1) 
	{
	$key1=$key1+1;
	echo 'var content'.$key1.' = document.createElement(\'div\'); 
content'.$key1.'.innerHTML = "<strong><a target=\'_blank\' href=\'/vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$vst1->id.'\'>'.htmlentities (str_replace("\r\n",'',$vst1->name)).'</a></strong><br/>'.htmlentities (str_replace("\r\n",'', $vst1->comment)).'";
var infowindow'.$key1.' = new google.maps.InfoWindow({content: content'.$key1.'});
var marker'.$key1.' = new google.maps.Marker({position:myLatlng'.$key1.', map:map, title:"'.$vst1->name.'"'.', icon:"/images/group.png"});
markersArray.push(marker'.$key1.');
google.maps.event.addListener(marker'.$key1.', \'click\', function() { infowindow'.$key1.'.open(map, marker'.$key1.');});';
	}
}
echo '};
$(document).ready(function(){initialize(); setTimeout (function(){ob1(0);}, 4000);});
</script>';
$database->setQuery('SELECT id, name FROM #__tranz_groups where (FIND_IN_SET (\''.$user->id.'\', users))');
$qws=$database->loadObjectList();
$database->setQuery("SELECT * FROM #__users_coord where time > '".date('Y-m-d H:i:s', (time()-10800))."'");
$peop = $database->loadObjectList();
if (count ($qws)>0)
	{
	if ($group==0) {$sel1='selected="selected"'; $sel2=false;} else {$sel2=true; $sel1='';}
	echo 'Фильтр по группе:<select id="group" size="1" onchange="ob()">
	<option value=0 '.$sel1.'>Все</option>';
	foreach ($qws as $erw) 
		{
		if (($sel2==true) and ($group==$erw->id)) {$sel3='selected="selected"';} else {$sel3='';}
		echo '<option value="'.$erw->id.'" '.$sel3.'>'.$erw->name.'</option>';
		}
	echo '</select>';
	}

if (count ($vst)>0) 
	{
	echo '&nbsp;&nbsp;&nbsp&nbsp;<input type="checkbox" value="1" id="vstr" onclick="ob()"/> Отображать встречи';
	}
if (count ($peop)>0)
	{
	echo '&nbsp;&nbsp;&nbsp&nbsp;<input type="checkbox" value="1" checked="checked" id="peopl" onclick="ob1(1)"/> Отображать участников';
	}
if ((count ($vst)>0) or (count ($qws)>0) or (count ($peop)>0)) {echo '<br/>&nbsp;&nbsp;';}
echo '<div id="map_canvas" style="width: '.$map_width.'px; height: '.$map_height.'px"></div><div id="all4"></div><div id="upd"></div>';} 

else {
if ($idx==0) {
echo '<script type="text/javascript">
  if (markersArray) {
    for (i in markersArray) {
      markersArray[i].setMap(null);
    }
    markersArray.length = 0;
  }
ob1(1);
';
$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET ("'.$user->id.'", users))');
$ej=$database->loadResultArray();
$database->setQuery('SELECT * FROM #__tranz_vstrechi where (dov="Проверено")');
$vst=$database->loadObjectList();
if ($group==0) {$usl=" and ((b.ad_group='') or (FIND_IN_SET ('0', b.ad_group)))) or ((a.fieldid = 16) AND ((a.lat!='') or (a.lng!='')) and (b.published=1) and (b.userid=".$user->id."))";} else {
if (in_array($group, $ej)==true) {$usl=" and (FIND_IN_SET (".$database->Quote($group).", b.ad_group)))";} else {$usl=' and FALSE)';
echo '
alert ("Ошибка доступа!");
';
JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Перебор групп в карте. Строка 120 файл map.php. Пользователь - '.$user->id,0);
}
}
$database->setQuery("SELECT a.lat, a.lng, a.contentid, b.ad_headline, b.ad_text, b.category, b.userid, b.root_cat FROM #__adsmanager_fieldgmap a inner join #__adsmanager_ads b on a.contentid=b.id WHERE (((a.fieldid = 16) AND ((a.lat!='') or (a.lng!='')) and (b.published=1))".$usl);
$all1=$database->LoadObjectList();
$key1=0;
foreach ($all1 as $key1 =>$all2) 
	{ echo 'var myLatlng'.$key1.' = new google.maps.LatLng('.$all2->lat.', '.$all2->lng.');';
	}
if ($vstrechi==1) {
foreach ($vst as $vst1) 
	{
	$key1=$key1+1;
	echo 'var myLatlng'.$key1.' = new google.maps.LatLng('.$vst1->lat.', '.$vst1->lng.');';
	}
}
$key1=0;
foreach ($all1 as $key1 =>$all2) 
	{
	echo 'var content'.$key1.' = document.createElement(\'div\');
content'.$key1.'.innerHTML = "<strong><a target=\'_blank\' href=\'index.php?option=com_adsmanager&view=details&id='.$all2->contentid.'&catid='.$all2->category.'&Itemid='.$all2->contentid.'\'>'.htmlentities (str_replace("\r\n",'',$all2->ad_headline)).'</a></strong><br/>'.htmlentities (str_replace("\r\n",'', $all2->ad_text)).'";
var infowindow'.$key1.' = new google.maps.InfoWindow({content: content'.$key1.'});
var marker'.$key1.' = new google.maps.Marker({position:myLatlng'.$key1.', map:map, title:"'.$all2->ad_headline.'"'.(($all2->userid==$user->id)?', icon:"/images/my.png"':(($all2->root_cat==4)?', icon:"/images/symbol_plus.png"':', icon:"/images/symbol_minus.png"')).'});
markersArray.push(marker'.$key1.');
google.maps.event.addListener(marker'.$key1.', \'click\', function() { infowindow'.$key1.'.open(map, marker'.$key1.');});';
	}
if ($vstrechi==1) {
foreach ($vst as $vst1) 
	{
	$key1=$key1+1;
	echo 'var content'.$key1.' = document.createElement(\'div\'); 
content'.$key1.'.innerHTML = "<strong><a target=\'_blank\' href=\'/vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$vst1->id.'\'>'.htmlentities (str_replace("\r\n",'',$vst1->name)).'</a></strong><br/>'.htmlentities (str_replace("\r\n",'', $vst1->comment)).'";
var infowindow'.$key1.' = new google.maps.InfoWindow({content: content'.$key1.'});
var marker'.$key1.' = new google.maps.Marker({position:myLatlng'.$key1.', map:map, title:"'.$vst1->name.'"'.', icon:"/images/group.png"});
markersArray.push(marker'.$key1.');
google.maps.event.addListener(marker'.$key1.', \'click\', function() { infowindow'.$key1.'.open(map, marker'.$key1.');});';
	}
}
echo '</script>';
}
if ($idx==1) {
$en=JRequest::getInt ('en', 0);
$database->setQuery("SELECT a.*, b.dov, b.name, b.rating, b.count1 FROM #__users_coord a inner join #__users b on a.userid=b.id where a.time > '".date('Y-m-d H:i:s', (time()-10800))."'");
$peop = $database->loadObjectList();
if ($en==1) {
$up=JRequest::getInt ('up', 0);
echo '<script type="text/javascript">';
foreach ($peop as $peop1)
	{
	echo '
if (typeof myLatlngp'.$peop1->userid.' ==="undefined") {
var myLatlngp'.$peop1->userid.' = new google.maps.LatLng('.$peop1->lat.', '.$peop1->lon.');
var contentp'.$peop1->userid.' = document.createElement(\'div\'); 
contentp'.$peop1->userid.'.innerHTML = "<strong><a href=\'/component/comprofiler/userprofile/'.$peop1->userid.'\'>'.$peop1->name.'</a></strong><br/>Рейтинг: '.round ($peop1->rating/$peop1->count1, 2).'";
var infowindowp'.$peop1->userid.' = new google.maps.InfoWindow({content: contentp'.$peop1->userid.'});
var markerp'.$peop1->userid.' = new google.maps.Marker({position:myLatlngp'.$peop1->userid.', map:map, title:"'.$peop1->name.'"'.', icon:"/images/user'.$peop1->dov.'.png"});
markerp'.$peop1->userid.'.setAnimation(google.maps.Animation.DROP);
markerp'.$peop1->userid.'.setZIndex (1000);
markersArray.push(markerp'.$peop1->userid.');
google.maps.event.addListener(markerp'.$peop1->userid.', \'click\', function() { infowindowp'.$peop1->userid.'.open(map, markerp'.$peop1->userid.');});} else {
var myLatlngp'.$peop1->userid.' = new google.maps.LatLng('.$peop1->lat.', '.$peop1->lon.');';
if ($up==1) {echo 'markerp'.$peop1->userid.'.setMap(map);';}
echo 'if (markerp'.$peop1->userid.'.getPosition().lat()!=myLatlngp'.$peop1->userid.'.lat()) {
markerp'.$peop1->userid.'.setMap(map);
markerp'.$peop1->userid.'.setAnimation(google.maps.Animation.DROP);
markerp'.$peop1->userid.'.setZIndex (1000);
markerp'.$peop1->userid.'.setPosition(myLatlngp'.$peop1->userid.')}}';
	}
echo '</script>';

} elseif ($en==0) 
{
echo '<script type="text/javascript">';
foreach ($peop as $peop1) 
	{
	echo 'markerp'.$peop1->userid.'.setMap(null);';
	}
echo '</script>';
}
}
}} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
?>