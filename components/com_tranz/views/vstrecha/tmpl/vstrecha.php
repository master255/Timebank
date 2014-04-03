<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = &JFactory::getUser();
$database =& JFactory::getDBO();
$id = JRequest::getint('id', 0);
$database->setQuery('SELECT * from `#__tranz_vstrechi` where (id='.$id.') and (dov=\'На рассмотрении\' or dov=\'Проверено\' or dov=\'В архиве\')');
$rez1=$database->loadObjectList();
if (count ($rez1)<1) {echo 'Извините. У нас нет такой встречи.';} else {
foreach ($rez1 as $vst);
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
<div class="fb-like"  data-layout="button_count" data-width="300" data-show-faces="true"></div>
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
VK.Widgets.Like("vk_like1", {type: "button", text: "'.$vst->name.' '.$datt.'"});
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
<input type="button" class="abutton" id="kart" onclick="toggl(); initialize();" value="Показать\Скрыть карту" />
<div id="karta" style="display:none">
<div id="map_canvas" style="width: 660px; height: 400px"></div>
</div>
';
}
$comments = JPATH_SITE . '/components/com_jcomments/jcomments.php';
if (file_exists($comments)) {
require_once($comments);
echo JComments::show($id, 'com_tranz', $id);
}
}
?>