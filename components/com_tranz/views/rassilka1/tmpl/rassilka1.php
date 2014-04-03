<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
$eee = JRequest::getint('pass');
if ($eee!=7956743) {echo 'Нет доступа!';} else {
$tim1=time();
$today1=date("Y-m-d H:i:s", ($tim1+604800));
$today2=date("Y-m-d H:i:s", ($tim1));
$database->setQuery('SELECT raspred FROM `#__tranz_gen` where id=1');
$rez67=$database->loadResult();
if ($rez67==1) {
$database->setQuery('SELECT * FROM `#__tranz_vstrechi` where dov=\'Проверено\'');
$rez11=$database->loadObjectList();
foreach ($rez11 as $hg) {
if (($hg->dateras==0) and ($today1>$hg->date)) {
$array5 = explode(",", $hg->uch);
foreach ($array5 as $arr) {
$arr1[]= abs ($arr);
}
$array5=implode (",", $arr1);
$database->setQuery('SELECT a.name, a.email, a.id FROM `#__users` a inner join `#__comprofiler` b on a.id=b.id where (a.sett11=1) and (a.block=0) and (!(a.id in ('.$array5.')))');
$rez88=$database->loadObjectList();
foreach ($rez88 as $hg1) {
$codd=mt_rand(1000000,9999999);
$sob='<div align="center">Уважаемый участник '.$hg1->name.'!</div>
<p>'.$hg->comment.'</p>
<p><b>"'.$hg->name.'"</b> будет проходить '.substr ($hg->date, 8, 2).' ';
if (substr ($hg->date, 5, 2)=='01') {$sob.= 'января';}
if (substr ($hg->date, 5, 2)=='02') {$sob.= 'февраля';}
if (substr ($hg->date, 5, 2)=='03') {$sob.= 'марта';}
if (substr ($hg->date, 5, 2)=='04') {$sob.= 'апреля';}
if (substr ($hg->date, 5, 2)=='05') {$sob.= 'мая';}
if (substr ($hg->date, 5, 2)=='06') {$sob.= 'июня';}
if (substr ($hg->date, 5, 2)=='07') {$sob.= 'июля';}
if (substr ($hg->date, 5, 2)=='08') {$sob.= 'августа';}
if (substr ($hg->date, 5, 2)=='09') {$sob.= 'сентября';}
if (substr ($hg->date, 5, 2)=='10') {$sob.= 'октября';}
if (substr ($hg->date, 5, 2)=='11') {$sob.= 'ноября';}
if (substr ($hg->date, 5, 2)=='12') {$sob.= 'декабря';}
$sob.=' '.substr ($hg->date, 0, 4).' года в '.substr ($hg->date, 10, 6);
$sob.=' по адресу '.$hg->adres.'<br/><div align="center"><b>Пожалуйста, сообщите, сможете ли Вы принять участие в этой встрече?</b></p><p>Выберите из следующих вариантов:</p>
<p><a href="http://'.$_SERVER['HTTP_HOST'].'/index.php?option=com_tranz&view=rassilka&layout=rassilka&otvet=1&vst='.$hg->id.'&user='.$hg1->id.'&cod='.$codd.'">ДА</a> или <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php?option=com_tranz&view=rassilka&layout=rassilka&otvet=0&vst='.$hg->id.'&user='.$hg1->id.'&cod='.$codd.'">НЕТ</a>??</p>
<p><a href="http://'.$_SERVER['HTTP_HOST'].'/vstrechi?option=com_tranz&view=vstrecha&layout=vstrecha&id='.$hg->id.'">Ссылка на событие</a></p></div>
<p>Вы получили это письмо, т.к. зарегистрировались на сайте <a href="http://'.$_SERVER['HTTP_HOST'].'">'.$_SERVER['HTTP_HOST'].'</a></p>
<h6>Если Вы хотите отписаться от рассылки, то пройдите по <a href="http://'.$_SERVER['HTTP_HOST'].'/settings">ссылке</a> и снимите галочку с пункта рассылки</h6>

Это письмо сгенерировано автоматически, отвечать на него не надо.<br/>

<p>С уважением,<br/>
проект Банк Времени "Свобода" <a href="http://'.$_SERVER['HTTP_HOST'].'">'.$_SERVER['HTTP_HOST'].'</a></p>';
$rrr=0;
$rrr=JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$hg1->email,'Приглашение', $sob,1);
$database->setQuery("INSERT INTO `#__tranz_cod` (
`id` ,
`vst_id` ,
`user_id` ,
`cod` 
)
VALUES (
NULL , '".$hg->id."', '".$hg1->id."', '".$codd."'
)");
$database->query();
}
$database->setQuery("UPDATE `#__tranz_vstrechi` SET `dateras` = ".$tim1." WHERE `#__tranz_vstrechi`.`id` =".$hg->id);
$database->query();
echo 'Письма разосланы';
}
}
}
}
?>
