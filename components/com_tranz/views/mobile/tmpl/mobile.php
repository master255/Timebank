<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$database =& JFactory::getDBO();
$user = & JFactory::getUser ();
$idx=JRequest::getint('idx');
if ($user->get('guest') != 1) {
if ($idx==1) {
$database =& JFactory::getDBO();
$database->setQuery('SELECT points, min_points
FROM
 #__users
WHERE id='.$user->id);
$ren=$database->loadObject();
echo round ($ren->points).'|qqw234|'.(round ($ren->min_points)*(-1));//подтверждение того что вошёл
}
elseif ($idx==2) {
$gr=JRequest::getint('group', 0);
$usl='';
$database->setQuery('SELECT id, name FROM #__tranz_groups where (FIND_IN_SET ("'.$user->id.'", users))');
$ren=$database->loadObjectList();
echo '>0, Все';
$prov=false;
if (count ($ren)>0) {
echo '|';
foreach ($ren as $key => $ren1) {
echo $ren1->id.', '.((strlen ($ren1->name)>25)?(JString::substr($ren1->name, 0, 25).'..'):($ren1->name)).(($key==(count ($ren))-1)?'':'|');
if ($ren1->id==$gr) $prov=true;
}}
echo '<';
if ($gr==0) {$usl=" and ((a.ad_group='') or (FIND_IN_SET ('0', a.ad_group)))) or ((a.root_cat = 3) and (a.published=1) and (a.userid=".$user->id."))";} else {
if ($prov==true) {$usl=" and (FIND_IN_SET (".$database->Quote($gr).", a.ad_group)))";} else {$usl=' and FALSE)';}
}
$database->setQuery('SELECT a.*, b.name as name1, b.dov FROM #__adsmanager_ads a inner join #__users b on a.userid=b.id WHERE ((a.root_cat = 3) and (a.published=1) '.$usl.' order by a.id');
$qw=$database->loadObjectList();
foreach ($qw as $spros) {
echo '>'.$spros->id.'|'.$spros->dov.'|'.$spros->ad_headline.'|'.((strlen ($spros->ad_text)>65)?(JString::substr($spros->ad_text, 0, 65).'..'):(JString::substr($spros->ad_text, 0, 65))).'|'.round ($spros->ad_price).'|'.$spros->name1.' ('.$spros->userid.')<';
}}
elseif ($idx==3) {
$gr=JRequest::getint('group', 0);
$usl='';
$database->setQuery('SELECT id, name FROM #__tranz_groups where (FIND_IN_SET ("'.$user->id.'", users))');
$ren=$database->loadObjectList();
echo '>0, Все';
$prov=false;
if (count ($ren)>0) {
echo '|';
foreach ($ren as $key => $ren1) {
echo $ren1->id.', '.((strlen ($ren1->name)>25)?(JString::substr($ren1->name, 0, 25).'..'):($ren1->name)).(($key==(count ($ren))-1)?'':'|');
if ($ren1->id==$gr) $prov=true;
}}
echo '<';
if ($gr==0) {$usl=" and ((a.ad_group='') or (FIND_IN_SET ('0', a.ad_group)))) or ((a.root_cat = 4) and (a.published=1) and (a.userid=".$user->id."))";} else {
if ($prov==true) {$usl=" and (FIND_IN_SET (".$database->Quote($gr).", a.ad_group)))";} else {$usl=' and FALSE)';}
}
$database->setQuery('SELECT a.*, b.name as name1, b.dov FROM #__adsmanager_ads a inner join #__users b on a.userid=b.id WHERE ((a.root_cat = 4) and (a.published=1) '.$usl.' order by a.id');
$qw=$database->loadObjectList();
foreach ($qw as $spros) {
echo '>'.$spros->id.'|'.$spros->dov.'|'.$spros->ad_headline.' Рейт:'.$spros->ad_rating.'|'.((strlen ($spros->ad_text)>65)?(JString::substr($spros->ad_text, 0, 65).'..'):(JString::substr($spros->ad_text, 0, 65))).'|'.round ($spros->ad_price).'|'.$spros->name1.' ('.$spros->userid.')<';
}}
elseif ($idx==4) {
$database->setQuery('SELECT * from #__users where block=0');
$qw=$database->loadObjectList();
foreach ($qw as $userr) {
echo '>'.$userr->id.'|'.$userr->dov.'|'.$userr->name.'|'.round ($userr->rating/$userr->count1).'|'.round ($userr->min_points).'|'.round ($userr->max_points).'|'.round ($userr->points).'<';
}}
elseif ($idx==5) {
$idd=JRequest::getint('no',0);
if ($idd!=0) {
	function reorderDate( $date ){
		$format = JText::_('%d-%m-%Y');
		if ($date && (preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/",$date,$regs))) {
			$date = mktime( 0, 0, 0, $regs[2], $regs[3], $regs[1] );
			$date = $date > -1 ? strftime( $format, $date) : '-';
		}
		return $date;
	}
$database->setQuery('SELECT a.*, b.name as name1 from #__adsmanager_ads a inner join #__users b on a.userid=b.id where a.root_cat=3 and a.published=1 and a.id='.$idd);
$qw=$database->loadObjectList();
foreach ($qw as $obj) {
echo '>'.$obj->id.'|'.$obj->ad_headline.'|'.$obj->ad_text.'|Цена: '.$obj->ad_price.' часов|Продавец: '.$obj->name1.' ('.$obj->userid.')|Контакты: '.$obj->ad_phone.((($obj->ad_datestart!="") or ($obj->ad_dateend!=""))?' Желательно звонить с '.$obj->ad_datestart.' до '.$obj->ad_dateend:"").'|Дата публикации: '.reorderDate ($obj->date_created).'<';
}}}
elseif ($idx==5) {
$idd=JRequest::getint('no',0);
if ($idd!=0) {
	function reorderDate( $date ){
		$format = JText::_('%d-%m-%Y');
		if ($date && (preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/",$date,$regs))) {
			$date = mktime( 0, 0, 0, $regs[2], $regs[3], $regs[1] );
			$date = $date > -1 ? strftime( $format, $date) : '-';
		}
		return $date;
	}
$database->setQuery('SELECT a.*, b.name as name1 from #__adsmanager_ads a inner join #__users b on a.userid=b.id where a.root_cat=3 and a.published=1 and a.id='.$idd);
$qw=$database->loadObjectList();
foreach ($qw as $obj) {
echo '>'.$obj->id.'|'.$obj->ad_headline.'|'.$obj->ad_text.'|Цена: '.$obj->ad_price.' часов|Продавец: '.$obj->name1.' ('.$obj->userid.')|Контакты: '.$obj->ad_phone.((($obj->ad_datestart!="") or ($obj->ad_dateend!=""))?' Желательно звонить с '.$obj->ad_datestart.' до '.$obj->ad_dateend:"").'|Дата публикации: '.reorderDate ($obj->date_created).'<';
}}}
elseif ($idx==6) {
$idd=JRequest::getint('no',0);
if ($idd!=0) {
	function reorderDate( $date ){
		$format = JText::_('%d-%m-%Y');
		if ($date && (preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/",$date,$regs))) {
			$date = mktime( 0, 0, 0, $regs[2], $regs[3], $regs[1] );
			$date = $date > -1 ? strftime( $format, $date) : '-';
		}
		return $date;
	}
$database->setQuery('SELECT a.*, b.name as name1 from #__adsmanager_ads a inner join #__users b on a.userid=b.id where a.root_cat=4 and a.published=1 and a.id='.$idd);
$qw=$database->loadObjectList();
foreach ($qw as $obj) {
echo '>'.$obj->id.'|'.$obj->ad_headline.'|'.$obj->ad_text.'|Цена: '.$obj->ad_price.' часов|Продавец: '.$obj->name1.' ('.$obj->userid.')|'.$obj->ad_important.'|Рейтинг: '.round (($obj->rating/$obj->count1), 2).'|Контакты: '.$obj->ad_phone.((($obj->ad_datestart!="") or ($obj->ad_dateend!=""))?' Желательно звонить с '.$obj->ad_datestart.' до '.$obj->ad_dateend:"").'|Дата публикации: '.reorderDate ($obj->date_created).'<';
}}}
elseif ($idx==7) {
$lat=JRequest::getFloat('lat',0);
$lon=JRequest::getFloat('lon',0);
if (($lat!=0) and ($lon!=0)) {
$database->setQuery('UPDATE `#__users_coord` SET `lat`='.$database->Quote($lat).',`lon`='.$database->Quote($lon).',`time`=\''.date('Y-m-d H:i:s').'\' WHERE `userid`='.$user->id);
$database->query();
if ($database->getAffectedRows ()==0) {
$database->setQuery('INSERT INTO `#__users_coord`(`userid`, `lat`, `lon`, `time`) VALUES ('.$user->id.','.$database->Quote($lat).','.$database->Quote($lon).', \''.date('Y-m-d H:i:s').'\')');
$database->query();
}
}
}
elseif ($idx==8) {
$database->setQuery('DELETE FROM #__users_coord WHERE userid='.$user->id);
$database->query();
}
} else {echo 'Нет доступа';}
?>