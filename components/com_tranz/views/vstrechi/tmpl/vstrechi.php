<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
$database =& JFactory::getDBO();
$nam=JRequest::getString('nam');
$dat=JRequest::getstring('dat');
$adress=JRequest::getString('adress');
$priglash=JRequest::getString('priglash');
$proc=JRequest::getint('proc');
foreach ($user->groups as $fg);

if ($proc==1) {
if(($fg>1) and ($fg<9)){
$lat1=JRequest::getString('gmap_lat');
$lng1=JRequest::getString('gmap_lng');
$tim1=(time()+32400);
$tod=date("Y-m-d H:i:s",$tim1);
$database->setQuery("INSERT INTO `#__tranz_vstrechi` (
`id` ,
`name` ,
`userid` ,
`date` ,
`date_create` ,
`adres` ,
`comment` ,
`dov` ,
`dateras` ,
`uch`,
`lat`,
`lng`
)
VALUES (
NULL , ".$database->Quote($nam).", ".$database->Quote($user->id).", ".$database->Quote($dat).", ".$database->Quote($tod).", ".$database->Quote($adress).", ".$database->Quote($priglash).", 'На рассмотрении', 0, NULL, ".$database->Quote($lat1).", ".$database->Quote($lng1).")");
$database->query();
$proc=0;
$nam='';
$dat='';
$adress='';
$priglash='';
echo '
<script type="text/javascript">
alert ("Мероприятие добавлено. Спасибо за информацию!");
</script>
';
$app = JFactory::getApplication();
$app->redirect( 'vstrechi'); 
 }else{
echo '<script type="text/javascript">
alert ("Нет доступа.");
</script>';
 }
}
																			//Закончились проверки
if (($fg>1) and ($fg<9)) {$dell34=''; $doc2 =& JFactory::getDocument();
$doc2->addScript('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js');
$doc2->addScript('/media/system/js/ui.datepicker-ru.js');
$doc2->addScript('/media/system/js/jquery-ui-timepicker-addon.js');
$doc2->addStyleSheet('/media/system/css/jquery.ui.datepicker.css');
 $doc2->addStyleSheet('/media/system/css/jquery.ui.theme.css'); 
echo '
<script type="text/javascript">
$(function(){
$(\'#datepicker\').datetimepicker($.extend($.datepicker.regional[\'ru\'],{
	timeOnlyTitle: \'Выберите время\',
	timeText: \'Время\',
	hourText: \'Часы\',
	minuteText: \'Минуты\',
	secondText: \'Секунды\',
	currentText: \'Сейчас\',
	closeText: \'Закрыть\',
timeFormat: \'hh:mm:ss\',
dateFormat: \'yy-mm-dd\'
    }));
  });
</script>';} else {$dell34='style="display: none"';}
$limit = 15;
$limit_start = JRequest::getVar('limitstart', 0, '', 'int');
$database->setQuery("SELECT SQL_CALC_FOUND_ROWS * FROM `#__tranz_vstrechi` where (dov='На рассмотрении' or dov='Проверено') order by dov desc, date asc", $limit_start, $limit);
$table1=$database->loadObjectList();
if (count ($table1)<1) {
echo '<div align=center><h2>Список встреч и мероприятий Банка Времени "Свобода"</h2></div>';
echo '<div align=center>Встреч пока нет.</div>';
} elseif ((count ($table1)==1) and ($fg<1)) {
														//файл vstrecha.php c малость измененным началом.
foreach ($table1 as $vst);
$datt=substr ($vst->date, 8, 2).' ';
if (substr ($vst->date, 5, 2)=='01') {$datt.= 'января';}
if (substr ($vst->date, 5, 2)=='02') {$datt.= 'февраля';}
if (substr ($vst->date, 5, 2)=='03') {$datt.= 'марта';}
if (substr ($vst->date, 5, 2)=='04') {$datt.= 'апреля';}
if (substr ($vst->date, 5, 2)=='05') {$datt.= 'мая';}
if (substr ($vst->date, 5, 2)=='06') {$datt.= 'июня';}
if (substr ($vst->date, 5, 2)=='07') {$datt.= 'июля';}
if (substr ($vst->date, 5, 2)=='08') {$datt.= 'августа';}
if (substr ($vst->date, 5, 2)=='09') {$datt.= 'сентября';}
if (substr ($vst->date, 5, 2)=='10') {$datt.= 'октября';}
if (substr ($vst->date, 5, 2)=='11') {$datt.= 'ноября';}
if (substr ($vst->date, 5, 2)=='12') {$datt.= 'декабря';}
$datt.=' '.substr ($vst->date, 0, 4).' года в '.substr ($vst->date, 10, 6);
echo '<div align=center><h2>'.$vst->name.'</h2></div>
<b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$vst->comment.'</p>
<p>Мероприятие будет проходить '.$datt.' по адресу: '.$vst->adres.'</p></b>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<table width=100%><tr><td width=400>
<div class="fb-like" data-href="http://'.$_SERVER['HTTP_HOST'].'/vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$vst->id.'"  data-send="false" data-layout="button_count" data-width="130" data-show-faces="true"></div>
</td><td width=300>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="@timebanksvoboda '.$vst->name.' '.$datt.'" data-lang="ru" data-related="timebanksvoboda">Твитнуть</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td><td width=100>
<script type="text/javascript">
VK.init({apiId: ';
if ($_SERVER['HTTP_HOST']=='timebankspb.ru') {echo 2924047;} else {echo 2883988;}
echo ', onlyWidgets: true});
</script>
<div id="vk_like1"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like1", {type: "button", text: "'.$vst->name.' '.$datt.'", pageUrl:"'.$_SERVER['HTTP_HOST'].'/vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$vst->id.'"});
</script>
</td></tr></table><br/>';
if ($vst->lat!='') {
echo '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var isCall = false; 
function initialize() {
if (!isCall) { isCall = true; 
var myLatlng = new google.maps.LatLng('.$vst->lat.', '.$vst->lng.');
var myOptions = {zoom:16, center:myLatlng, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}, zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL}};
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
var marker = new google.maps.Marker({position:myLatlng, map:map});};};
function toggl() {
$("#karta").slideToggle();
};
</script>
<button class="abutton" id="kart" onclick="toggl(); initialize(); return false;">Показать\Скрыть карту</button>
<div id="karta" style="display:none">
<div id="map_canvas" style="width: 660px; height: 400px"></div>
</div>
';
}
$comments = JPATH_SITE . '/components/com_jcomments/jcomments.php';
if (file_exists($comments)) {
require_once($comments);
echo JComments::show($vst->id, 'com_tranz', $vst->id);
}
} else {
echo '<div align=center><h2>Список встреч и мероприятий Банка Времени "Свобода"</h2></div>';
echo '
<div id="section">
<table border=1 align=center width=100%><tr><th width=15>№</th><th width=70>Название</th><th width=70>Дата</th><th width=120>Адрес</th><th >Приглашение</th></tr>';
$database->setQuery('SELECT FOUND_ROWS();');
jimport('joomla.html.pagination');
$pageNav = new JPagination( $database->loadResult(), $limit_start, $limit );
foreach ($table1 as $rez) {
$bor6='';
/* if ($rez->dov=='Проверено') {$bor6='style="background-color: #D4FFB5;"';} elseif ($rez->dov=='На рассмотрении') {$bor6='style="background-color: #fcf8a2;"';} */
echo '
<tr align=center '.$bor6.'><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez->id.'">'.$rez->id.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez->id.'">'.$rez->name.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez->id.'">'.$rez->date.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez->id.'">';
if (strlen ($rez->adres)>70) {echo JString::substr($rez->adres, 0, 70).'...';} else {echo $rez->adres;}
echo '</td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez->id.'">';
if (strlen ($rez->comment)>130) {echo JString::substr($rez->comment, 0, 130).'...';} else {echo $rez->comment;}
echo '</a></td></tr>';
}
echo '</table>';
echo "<p><div align='center'>".$pageNav->getPagesLinks(), $pageNav->getResultsCounter()."</div></p>";
/* echo '<table align=center><tr><td bgcolor="#fcf8a2">Жёлтый - ещё не проверена</td><td bgcolor="#D4FFB5">Зелёный - проверена</td></tr></table></div>'; */
echo '<div align=right><a href="index.php?option=com_tranz&view=xls&layout=xls&no_html=1&table=1">Скачать таблицу</a></div></div>';
}
if (($fg>1) and ($fg<9)) {
$database->setQuery("SELECT lat, lng FROM `#__adsmanager_fieldgmap_conf` where (fieldid=16)");
$latlng=$database->loadObject();
echo "
<div align=center $dell34><h3>Добавить мероприятие\встречу</h3></div> 
<div $dell34>
<script src='http://maps.google.com/maps/api/js?v=3.5&sensor=false' type='text/javascript'></script>
<script>
$(document).ready(function(){
$('#formval').validate({
errorPlacement: function(error,element) { return true; }});});
var geocoder; var map; var marker; var isCall=false;
function initialize() {
if (!isCall) {isCall = true; geocoder = new google.maps.Geocoder();
var LatLng = new google.maps.LatLng(".$latlng->lat.", ".$latlng->lng.");
var myOptions = {zoom:13, center:LatLng, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}, zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL}};
map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
marker = new google.maps.Marker({position:LatLng, map:map, draggable:true});
google.maps.event.addListener(marker, 'dragend', function() {
LatLng=marker.getPosition();
document.getElementById('gmap_lat').value = LatLng.lat();
document.getElementById('gmap_lng').value = LatLng.lng();
geocoder.geocode({'latlng': LatLng}, function (results, status) {
if (status == google.maps.GeocoderStatus.OK) {
document.getElementById('gmap_address').value = results[0].formatted_address; }});});}}
function showAddress() {
var addr = document.getElementById('gmap_address').value;
geocoder.geocode({'address': addr}, function (results, status) {
if (status == google.maps.GeocoderStatus.OK) {
map.setCenter(results[0].geometry.location);
marker.setPosition(results[0].geometry.location);
document.getElementById('gmap_lat').value = marker.getPosition().lat();
document.getElementById('gmap_lng').value = marker.getPosition().lng();
}else{
alert('Не удалось найти адрес!');
}});}
function toggl() {
$('#karta').slideToggle('slow', togg2());
$('#but').slideToggle('slow');}
function togg2() {
if ($('#karta').is(':visible')) {
document.getElementById('gmap_lat').value = '';
document.getElementById('gmap_lng').value = '';
};};
</script>";
echo '
<form method="Post" id="formval">
<table align=center width=100%>
<tr><td width=90>Название:</td><td><input type="text" name="nam" size="70" class="inputbox required texx1" value="'.$nam.'" maxlength="255"/></td></tr>
<tr><td>Дата и время:</td><td><input type="text" id="datepicker" name="dat" size="25" class="inputbox required texx1" maxlength="25" value="'.$dat.'"/></td></tr>
<tr><td valign="center">Адрес и место:</td><td><textarea name="adress" id="gmap_address" cols="130" rows="4" class="inputbox required texx">'.$adress.'</textarea><br/><table width=100%><tr><td><button class="abutton" onclick="toggl(); initialize(); return false;">Добавить\Удалить карту</button></td><td><div align="center" id="but" style="display:none"><input type="button" id="finder" value="Найти адрес" onClick="showAddress()" /></div></td></tr></table>
<div id="karta" style="display:none">
<div id="map_canvas" style="width: 520px; height: 400px;"></div>
<input type="hidden" id="gmap_lat" name="gmap_lat" value=""/>
<input type="hidden" id="gmap_lng" name="gmap_lng" value=""/>
Если система не находит Ваш адрес поставьте маркер сами.
</div></td></tr>
<tr><td>Текст приглашения:</td><td><textarea name="priglash" cols="130" rows="10" class="inputbox required texx">'.$priglash.'</textarea></td></tr>
<tr><td align=center colspan="2"><input type="submit" value="Отправить" /></td></tr>
<tr><td align=left colspan="2">Для дальнейших изменений отправленного мероприятия\встречи свяжитесь с организатором. Например, воспользуйтесь формой слева.</td></tr></table>
<INPUT TYPE=HIDDEN NAME="proc" VALUE="1">
</form></div>';}
$limit1 = 15;
$limit_start1 = JRequest::getVar('limitstart1', 0, '', 'int');
jimport('joomla.html.pagination');
if ($limit_start1>0) {$sho='';} else {$sho='style="display: none"';}
echo "<script>
function showArch() {
$('#section2').slideToggle('slow');}
</script>";
echo '<div align=center><h2><button id="tog" class="adbutton1" onClick="showArch(); return false;">Архив встреч</button></h2></div>
<div id="section2" '.$sho.'>
<table border=1 align=center width=100%><tr><th width=15>№</th><th width=70>Название</th><th width=70>Дата</th><th width=120>Адрес</th><th >Приглашение</th></tr>';
$database->setQuery("SELECT SQL_CALC_FOUND_ROWS * FROM `#__tranz_vstrechi` where dov='В архиве' order by dov desc, date desc", $limit_start1, $limit1);
$table11=$database->loadObjectList();
$database->setQuery('SELECT FOUND_ROWS();');
$pageNav1 = new JPagination( $database->loadResult(), $limit_start1, $limit1 );
foreach ($table11 as $rez2) {
echo '
<tr align=center><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez2->id.'">'.$rez2->id.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez2->id.'">'.$rez2->name.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez2->id.'">'.$rez2->date.'</a></td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez2->id.'">';
if (strlen ($rez2->adres)>70) {echo JString::substr($rez2->adres, 0, 70).'...';} else {echo $rez2->adres;}
echo '</td><td><a href="vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$rez2->id.'">';
if (strlen ($rez2->comment)>130) {echo JString::substr($rez2->comment, 0, 130).'...';} else {echo $rez2->comment;}
echo '</a></td></tr>';
}
echo '</table>';
echo "<p><div align='center'>".$pageNav1->getPagesLinks(), $pageNav1->getResultsCounter()."</div></p>";
echo '</div>';

?>