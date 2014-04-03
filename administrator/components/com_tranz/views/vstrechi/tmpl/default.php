<?php 
 defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::_('behavior.multiselect');
$user = & JFactory::getUser ();																		//Объявляем основные переменные
$database =& JFactory::getDBO();
$subb=0; $min=0; $max=0;
$subb= JRequest::getVar ('save');
$calc= JRequest::getint ('dell');
$ins= JRequest::getint ('ins');
$sav='';
$sav1='';
$limit = 10;
$limit_start = JRequest::getVar('limitstart', 0, '', 'int');
if ($ins==1) {
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
`dov`,
`dateras`,
`uch`
)
VALUES (
NULL , '', '".$user->id."', '0000-00-00 00:00:00', '".$tod."', '', '', 'Не достоверно', 0, ''
)");
$database->query();
$app = JFactory::getApplication();
$app->redirect( 'index.php?option=com_tranz&view=vstrechi'); 
}
if ($calc==1) {
$database->setQuery('SELECT * FROM `#__tranz_vstrechi`');
$rez1=$database->loadObjectList();
foreach ($rez1 as $usrs1) {
$dell = JRequest::getint('del'.$usrs1->id);
if (($dell ==1)) {
$database->setQuery('DELETE FROM `#__tranz_vstrechi` WHERE id ='.$usrs1->id);
$database->query();
$database->setQuery('DELETE FROM `#__tranz_cod` WHERE vst_id ='.$usrs1->id);
$database->query();
$database->setQuery('DELETE FROM `#__jcomments` WHERE object_group=\'com_tranz\' and object_id ='.$usrs1->id);
$database->query();
}
}
$sav1="Удалено";
}

if ($subb=='Сохранить') {
	$sav="Сохранено";
	$database->setQuery('SELECT * FROM `#__tranz_vstrechi` order by id desc', $limit_start, $limit);
$rez1=$database->loadObjectList();
	foreach ($rez1 as $usrs1) {
		$che = JRequest::getstring('che'.$usrs1->id);
		$nam = JRequest::getstring('nam'.$usrs1->id);
		$dat = JRequest::getstring('dat'.$usrs1->id);
		$adr = JRequest::getstring('adr'.$usrs1->id);
		$cont = JRequest::getstring('cont'.$usrs1->id);
		$rass = JRequest::getint('rass'.$usrs1->id, 0);
		if ($rass!=0) {if ($usrs1->dateras==0) {$rass=(time()+32400);} else {$rass=$usrs1->dateras;}}
		if (($che != $usrs1->dov) or ($nam != $usrs1->name) or ($dat != $usrs1->date) or ($adr != $usrs1->adres) or ($cont != $usrs1->comment) or ($rass != $usrs1->dateras)) {
		
		$database->setQuery("UPDATE `#__tranz_vstrechi` SET `dov` = '$che', `name` = ".$database->Quote($nam).", `date` = ".$database->Quote($dat).", `adres` = ".$database->Quote($adr).", `comment` = ".$database->Quote($cont).", `dateras` = ".$database->Quote($rass)." WHERE `#__tranz_vstrechi`.`id` =".$usrs1->id);
		$database->query();
		}
	}
/* $app = JFactory::getApplication();
$app->redirect( 'index.php?option=com_tranz&view=vstrechi');  */
}

$database->setQuery('SELECT SQL_CALC_FOUND_ROWS * FROM `#__tranz_vstrechi` order by id desc', $limit_start, $limit);
$rez2=$database->loadObjectList();
echo '<div align=center><h3>Таблица встреч и мероприятий:</h3></div>
<form method="post" id="adminForm" name="adminForm">
<table><tr><td><input  type="submit" name="save" value="Сохранить"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav.'</font></td><td><input  type="button" name="but5" value="Добавить" onclick="document.adminForm.ins.value=1; Joomla.submitform();return false;"/></td><td align=right><input  type="button" name="but" value="Удалить" onclick="document.adminForm.dell.value=1; Joomla.submitform();return false;"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav1.'</font></td></tr></table>';
 echo "<div align='right'><a href='http://".$_SERVER['HTTP_HOST']."/index.php?option=com_tranz&view=rassilka1&layout=rassilka1&pass=7956743'>Разослать письма по встречам всем участникам</a></div><p><table border=1 class='adminlist'><tr><th>Вкл\Выкл</th><th>Удалить?</th><th>Рассылка</th><th>№</th><th>Название</th><th>Дата</th><th>Адрес</th><th>Автор</th><th>Приглашение</th></tr>";
 $database->setQuery('SELECT FOUND_ROWS();');
jimport('joomla.html.pagination');
$pageNav = new JPagination( $database->loadResult(), $limit_start, $limit );
 foreach ($rez2 as $usrs)
  {
  $ch=''; $ch1=''; $ch2=''; $ch3=''; $ses='';
  if ($usrs->dateras!=0) {$ses='checked="checked"';}
  if ($usrs->dov=='На рассмотрении') {$ch="selected";} elseif ($usrs->dov=='Проверено') {$ch1='selected';} elseif ($usrs->dov=='Не достоверно') {$ch2='selected';} elseif ($usrs->dov=='В архиве') {$ch3='selected';}
  echo "<tr><td align=center><select size=4 name='che".$usrs->id."'>
  <option $ch value='На рассмотрении'>На рассмотрении</option>
  <option $ch1 value='Проверено'>Проверено</option>
  <option $ch2 value='Не достоверно'>Не достоверно</option>
  <option $ch3 value='В архиве'>В архиве</option>
</select></td><td align=center><input type='checkbox'  value=1 name='del".$usrs->id."'/></td><td align=center><input type='checkbox' $ses value=1 name='rass".$usrs->id."'/></td><td><b>".$usrs->id."</b></td><td><textarea name='nam".$usrs->id."' cols='30' rows='4'>".$usrs->name."</textarea></td><td align=center><textarea name='dat".$usrs->id."' cols='9' rows='4'>".$usrs->date."</textarea></td><td><textarea name='adr".$usrs->id."' cols='20' rows='4'>".$usrs->adres."</textarea></td><td><a href='/profile/userprofile/".$usrs->userid."'>".$usrs->userid."</a></td><td><textarea name='cont".$usrs->id."' cols='40' rows='4'>".$usrs->comment."</textarea></td></tr>";
};
echo '</table>';
echo "<br/><table><tr><td></td><td width=45%>".$pageNav->getPagesLinks()."</td></tr></table><div align=center>". $pageNav->getResultsCounter()."</div>";
echo '
</p>
<table><tr><td><input  type="submit" name="save" value="Сохранить"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav.'</font></td><td><input  type="button" name="but5" value="Добавить" onclick="document.adminForm.ins.value=1; Joomla.submitform();return false;"/></td><td align=right><input  type="button" name="but" value="Удалить" onclick="document.adminForm.dell.value=1; Joomla.submitform();return false;"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav1.'</font></td></tr></table>
<INPUT TYPE=HIDDEN NAME=option VALUE=com_tranz>
<INPUT TYPE=HIDDEN NAME=view VALUE=vstrechi>
<input type="hidden" name="limitstart" value='.$limit_start.'>
<input type="hidden" name="dell" value=0>
<input type="hidden" name="ins" value=0>
</form>
';
?>