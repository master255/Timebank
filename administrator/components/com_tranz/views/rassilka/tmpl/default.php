<?php 
 defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::_('behavior.multiselect');
$user = & JFactory::getUser ();																		//Объявляем основные переменные
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
$otpr = JRequest::getstring('save');
$soob = JRequest::getstring('soobch');
$limit = 10;
$limit_start = JRequest::getVar('limitstart', 0, '', 'int');

if ($otpr=='Начать рассылку') {
$nnn = JRequest::getfloat('centr');
if ($nnn==0) {echo '<script>alert ("Выберите рассылку");
</script>';} else {
if ($soob =='') {echo '<script>alert ("Введите сообщение");
</script>';} else {
$database->setQuery('SELECT * FROM `#__tranz_vstrechi` where id='.(round ($nnn)));
$rez22=$database->loadObjectList();
foreach ($rez22 as $wwe);
if ((($nnn-round ($nnn))<0.2) and (($nnn-round ($nnn))>0)) {
$database->setQuery('SELECT a.id, a.email, b.cb_telnum, a.name, a.dov FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$wwe->uch.')) and (a.dov=0))');
$rez87=$database->loadObjectList();
$kkk=0; $eml=''; $teln='';
foreach ($rez87 as $rrg) {
$kkk=$kkk+1;
$eml=$eml.$rrg->id.'='.$rrg->email;
$teln=$teln.$rrg->id.'='.$rrg->cb_telnum;
$soob=str_replace ('$dov', $rrg->dov , $soob );
$soob=str_replace ('$name', $rrg->name , $soob );
$soob=str_replace ('$cb_telnum', $rrg->cb_telnum , $soob );
$soob=str_replace ('$nazv', $wwe->name , $soob );
$soob=str_replace ('$date', $wwe->date , $soob );
$soob=str_replace ('$adres', $wwe->adres , $soob );
$soob=str_replace ('$priglash', $wwe->comment , $soob );
$rrr=JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$rrg->email,'Уведомление', $soob,1);
}
}

if ((($nnn-round ($nnn))<0.3) and (($nnn-round ($nnn))>0.11)) {
$database->setQuery('SELECT a.id, a.email, b.cb_telnum, a.name, a.dov FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$wwe->uch.')) and (a.dov=1))');
$rez87=$database->loadObjectList();
$kkk=0; $eml=''; $teln='';
foreach ($rez87 as $rrg) {
$kkk=$kkk+1;
$eml=$eml.$rrg->id.'='.$rrg->email;
$teln=$teln.$rrg->id.'='.$rrg->cb_telnum;
$soob=str_replace ('$dov', $rrg->dov , $soob );
$soob=str_replace ('$name', $rrg->name , $soob );
$soob=str_replace ('$cb_telnum', $rrg->cb_telnum , $soob );
$soob=str_replace ('$nazv', $wwe->name , $soob );
$soob=str_replace ('$date', $wwe->date , $soob );
$soob=str_replace ('$adres', $wwe->adres , $soob );
$soob=str_replace ('$priglash', $wwe->comment , $soob );
$rrr=JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$rrg->email,'Уведомление', $soob,1);
}
}
if ((($nnn-round ($nnn))<0.4) and (($nnn-round ($nnn))>0.21)) {
$database->setQuery('SELECT a.id, a.email, b.cb_telnum, a.name, a.dov FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$wwe->uch.')) and (a.dov=2))');
$rez87=$database->loadObjectList();
$kkk=0; $eml=''; $teln='';
foreach ($rez87 as $rrg) {
$kkk=$kkk+1;
$eml=$eml.$rrg->id.'='.$rrg->email;
$teln=$teln.$rrg->id.'='.$rrg->cb_telnum;
$soob=str_replace ('$dov', $rrg->dov , $soob );
$soob=str_replace ('$name', $rrg->name , $soob );
$soob=str_replace ('$cb_telnum', $rrg->cb_telnum , $soob );
$soob=str_replace ('$nazv', $wwe->name , $soob );
$soob=str_replace ('$date', $wwe->date , $soob );
$soob=str_replace ('$adres', $wwe->adres , $soob );
$soob=str_replace ('$priglash', $wwe->comment , $soob );
$rrr=JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$rrg->email,'Уведомление', $soob,1);
}}
echo '<script>alert ("Выполнена рассылка '.$kkk.' участникам. Адреса получатели: '.$eml.'. Номера их телефонов: '.$teln.'");
</script>';
}}}							// Конец проверок и начало вывода на экран
	
$all=JRequest::getint('all');
$gg='(dov=\'Проверено\')';
if ($all==1) {$gg='(dov=dov)';}

$database->setQuery('SELECT SQL_CALC_FOUND_ROWS * FROM `#__tranz_vstrechi` where ('.$gg.') and (uch!=\'\') order by id', $limit_start, $limit);
$rez2=$database->loadObjectList();
echo '<div align=center><h3>Откликнувшиеся участники:</h3></div>
<form method="post" id="adminForm" name="adminForm">';
 echo "<p><table border=1 class='adminlist'><tr><th width=10>№</th><th width=70>Название</th><th width=50>Дата</th><th width=90>Адрес</th><th width=80>Приглашение</th><th width=150>Кто пойдёт</th></tr>";
$database->setQuery('SELECT FOUND_ROWS();');
jimport('joomla.html.pagination');
$pageNav = new JPagination( $database->loadResult(), $limit_start, $limit );
 foreach ($rez2 as $usrs)
  {if ($usrs->uch!='') {
echo '<tr><td>'.$usrs->id.'</td><td>'.$usrs->name.'</td><td>'.$usrs->date.'</td><td>'.$usrs->adres.'</td><td>'.$usrs->comment.'</td><td>';
$tr=$usrs->uch;
$database->setQuery('SELECT a.username, a.name, a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr.')) and (a.dov=0)) order by name');
$rez87=$database->loadObjectList();
if (count ($rez87)>0) {echo 'Ступень 0<br/>';
foreach ($rez87 as $rrg) {
echo '<a href="/component/comprofiler/userprofile/'.$rrg->username.'">'.$rrg->name.'</a><br/>';
}}
$database->setQuery('SELECT a.username, a.name, a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr.')) and (a.dov=1)) order by name');
$rez87=$database->loadObjectList();
if (count ($rez87)>0) {echo 'Ступень 1<br/>';
foreach ($rez87 as $rrg) {
echo '<a href="/component/comprofiler/userprofile/'.$rrg->username.'">'.$rrg->name.'</a><br/>';
}}
$database->setQuery('SELECT a.username, a.name, a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr.')) and (a.dov=2)) order by name');
$rez87=$database->loadObjectList();
if (count ($rez87)>0) {echo 'Ступень 2<br/>';
foreach ($rez87 as $rrg) {
echo '<a href="/component/comprofiler/userprofile/'.$rrg->username.'">'.$rrg->name.'</a><br/>';
}}
$array = explode(",", $tr);
foreach ($array as $arr) {
if ($arr>0) {unset ($array[array_search($arr, $array)]);}	
if ($arr<0) {unset ($array[array_search($arr, $array)]); array_push($array, ($arr * (-1)));}
}
$tr11=implode (",", $array);
if ($tr11!='') {
$database->setQuery('SELECT a.username, a.name, a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where (a.id in ('.$tr11.')) order by name');
$rez87=$database->loadObjectList();
if (count ($rez87)>0) {echo 'Отказались<br/>';
foreach ($rez87 as $rrg) {
echo '<a href="/component/comprofiler/userprofile/'.$rrg->username.'">'.$rrg->name.'</a><br/>';
}}}
echo '</td>';
  }};
echo '</table>';
echo "<br/><table><tr><td></td><td width=45%>".$pageNav->getPagesLinks()."</td></tr></table><div align=center>". $pageNav->getResultsCounter()."</div>";
echo '
</p>';
$chh='';
if ($all==1) {$chh='checked="checked"';} else {$chh='';}
echo '
<input type="checkbox" onClick="this.form.submit()" name="all" value="1" '.$chh.'/> <b>Показать всех откликнувшихся</b><br/>
<a href="http://'.$_SERVER['HTTP_HOST'].'/index.php?option=com_tranz&view=rassilka1&layout=rassilka1&pass=7956743">Разослать письма по встречам всем участникам</a>
<div align=center><h3>Рассылка писем тем кто пойдёт</h3></div>
<div align=center><p><select name="centr"><option value=0>Номер | Название | Cтупень доверия | Количество</option>
';
$database->setQuery('SELECT * FROM `#__tranz_vstrechi` where '.$gg.' order by id');
$rez34=$database->loadObjectList();
foreach ($rez34 as $ffr) {
$tr1='0';
if ($ffr->uch!='') {$tr1=$ffr->uch;}
$database->setQuery('SELECT a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr1.')) and (a.dov=0))');
$rez87=$database->loadObjectList();
$kol=0;
foreach ($rez87 as $rrg) {
$kol=$kol+1;
} if ($kol>0) {echo '<option value="'.$ffr->id.'.1">'.$ffr->id.' | '.$ffr->name.' | Ступень 0 | '.$kol.'</option>';}
$database->setQuery('SELECT a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr1.')) and (a.dov=1))');
$rez87=$database->loadObjectList();
$kol=0;
foreach ($rez87 as $rrg) {
$kol=$kol+1;
} if ($kol>0) { echo '<option value="'.$ffr->id.'.2">'.$ffr->id.' | '.$ffr->name.' | Ступень 1 | '.$kol.'</option>';}
$database->setQuery('SELECT a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where ((a.id in ('.$tr1.')) and (a.dov=2))');
$rez87=$database->loadObjectList();
$kol=0;
foreach ($rez87 as $rrg) {
$kol=$kol+1;
} if ($kol>0) { echo '<option value="'.$ffr->id.'.3">'.$ffr->id.' | '.$ffr->name.' | Ступень 2 | '.$kol.'</option>';}
}
echo '</select></p>
<p>Подстановка: $name = Имя участника; $dov = Cтупень доверия; $cb_telnum = Телефонный номер участника; $nazv = Название мероприятия; $date = дата мероприятия; $adres = адрес мероприятия; $priglash = приглашение на мероприятие</p>
<p><textarea name="soobch" cols="70" rows="10">'.$soob.'</textarea></p><p><input  type="submit" name="save" value="Начать рассылку"/></p></div>
<INPUT TYPE=HIDDEN NAME=option VALUE=com_tranz>
<INPUT TYPE=HIDDEN NAME=view VALUE=rassilka>
<input type="hidden" name="limitstart" value='.$limit_start.'>
<input type="hidden" name="rass" value=0>
</form>
';
?>