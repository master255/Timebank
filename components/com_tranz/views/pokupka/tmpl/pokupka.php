 <?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" slick-uniqueid="1">
<head>
<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php/predlojenie"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, follow"/>
<meta name="keywords" content="TimeBank"/>
<meta name="rights" content="Masters"/>
<meta name="description" content="Банк времени"/>
<title>Покупка:</title>
<script language='JavaScript' type='text/JavaScript'>
window.focus();
</script>
<style>
a {
color: rgb(46, 143, 212);
outline-color: currentColor; 
outline-style: none; 
outline-width: medium;
text-decoration: none;
}
a:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<?php
$user = & JFactory::getUser ();
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
$noads=JRequest::getInt ('id', 0);
$proc=JRequest::getInt ('proc', 0);
if (($noads=='' ) or ($noads==0)) {echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Запуск покупки без аргументов. pokupka.php строка 35. Пользователь -'.$user->id,0); die();} else 											//Если нет никаких аргументов, то и нет доступа
{
	$database->setQuery('SELECT * FROM `#__adsmanager_ads` where id='.$database->Quote($noads));				//Общий запрос на получение информации о объявлении
	$res=$database->loadObjectList();
	$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET (\''.$user->id.'\', users))');
	$erg=$database->loadResultArray();
	foreach ($res as $ads);
	$fv=array_unique(array_diff(explode (',', $ads->ad_group), array('')));
	$aduid = $ads->userid;
	$uid = $user->id;
	if (($ads->root_cat !=4) or ($aduid == $uid) or (!(((count (array_intersect ($erg, $fv)))>0) or (count ($fv)==0) or ($fv[1]==0)))) {echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Нарушение условий покупки! pokupka.php строка 45. Пользователь -'.$user->id,0); die();};
	$query = "SELECT * FROM `#__users` where id=".$uid;
	$database->setQuery($query);	
	$usern=$database->loadObjectList();															//Общий запрос на получение информации о текущем пользователе
	foreach($usern as $pok1);
	$dost=0;
	$database->setQuery("SELECT * FROM `#__tranz_accept` where ((fromuserid=".$uid.") and (fromuserapproved =0))");
	$zai2=$database->loadObjectList();
	$sum7=0;
	foreach($zai2 as $vich2)
	{
		$sum7=$sum7+$vich2->points;            													 //Вычисляем не ассептованую сумму
	};
    if (($aduid != '')&&($dost==0))	 															//Проверка, не нулевой ли хозяин у объявления и проверка переменной dost 
	{
		$database->setQuery("SELECT * FROM `#__users` where id=".$aduid);	
		$usery=$database->loadObjectList();															//Общий запрос на получение информации о продавце
		foreach($usery as $pok2); 
		if ($proc==1)
		{	JRequest::checkToken('GET') or jexit('Invalid Token');
			$prov5 = JRequest::getInt ('point', 0);
			if ($prov5 >0)
			{
				$cena = $prov5;
				$min=($pok1->points)-$sum7-($cena);
				if ($pok1->min_points>$min)
				{																							//Проверка на минимум текущего пользователя
					echo "<script language='JavaScript' type='text/JavaScript'>
window.focus();
alert (\"Цена превышает Ваш возможный минимум на ".(($min-$pok1->min_points)*(-1)).".\\n Воспользуйтесь разделом 'Спрос' для поиска заработка.\");
</script>";
				} else
				{
					$database->setQuery("SELECT * FROM `#__tranz_accept` where ((touserid=".$aduid.") and (fromuserapproved =0))");
					$zai3=$database->loadObjectList();
					$sum8=0;
					foreach($zai3 as $vich3) 
					{
						$sum8=$sum8+$vich3->points;        													     //Вычисляем его не ассептованую сумму
					};
					$max=($pok2->points)+$sum8+($cena);
					if ($pok2->max_points<$max)																	//Проверка на максимум продавца
					{
						echo "<script language='JavaScript' type='text/JavaScript'>	
window.focus();
alert (\"Цена превышает возможный максимум продавца на ".($max-$pok2->max_points).".\\n Нужно, что бы продавец потратил свои часы.\");
</script>";
					} else
					{
						$tim=(time()+32400);																//Сдвиг часового пояса
						$today=date("Y-m-d H:i:s",$tim);
						$database->setQuery("INSERT INTO `#__tranz_data` (
`id` ,
`touserid` ,
`fromuserid` ,
`fromuserapproved` ,
`points` ,
`rank` ,
`insert_date` ,
`accept_date` ,
`rule` ,
`keyreference` ,
`namereference` ,
`datareference` 
)
VALUES (
NULL , ".$database->Quote($aduid).", ".$database->Quote($uid).", 1, ".$database->Quote($cena).", '0' , ".$database->Quote($today).", ".$database->Quote($today).", '0', ".$database->Quote($ads->id).", ".$database->Quote($ads->ad_headline).", ".$database->Quote($ads->ad_text)."
);");
						$database->query();																		//Просчёт нового состояния счёта покупателя. 
						$database->setQuery('SELECT * FROM `#__tranz_data` where touserid='.$uid);
						$rez=$database->loadObjectList();
						$sum1=0;	 $sum2=0;	 $sum3=0;
						foreach ($rez as $ert)
						{
							$sum1=$sum1-$ert->points;
						};
						$database->setQuery('SELECT * FROM `#__tranz_data` where fromuserid='.$uid);
						$rez=$database->loadObjectList();	
						foreach ($rez as $ert)
						{
							$sum2=$sum2+$ert->points;
						};
						$sum3=($sum1+$sum2)*(-1);
						$database->setQuery("UPDATE `#__users` SET `points` = '".$sum3."', `message` = if ((LOCATE('u',message) !=0), message, CONCAT (message, 'uu'))  WHERE `#__users`.`id` =".$uid);
						$database->query();
						$database->setQuery('SELECT * FROM `#__tranz_data` where touserid='.$aduid);
						$rez=$database->loadObjectList();
						$sum1=0;	 $sum2=0;	 $sum3=0;
						foreach ($rez as $ert) 
						{
							$sum1=$sum1-$ert->points;
						};
						$database->setQuery('SELECT * FROM `#__tranz_data` where fromuserid='.$aduid);
						$rez=$database->loadObjectList();	
						foreach ($rez as $ert)
						{
							$sum2=$sum2+$ert->points;
						};
						$sum3=($sum1+$sum2)*(-1);
						if ($pok2->sett6 == 1)
						{
							$database->setQuery("SELECT DISTINCT a.userid FROM #__session AS a, #__users AS u WHERE (a.userid = u.id) AND (a.guest = 0) AND (a.client_id = 0) AND (u.id = ".$pok2->id.")");
							$usern6=$database->loadresult();
							if ($usern6 !=$pok2->id)
							{
								JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$pok2->email,'Уведомление','Уважаемый пользователь, на сайте: <a href= "http://'.$_SERVER['HTTP_HOST'].'/otchjot-o-platezhakh">'.$_SERVER['HTTP_HOST'].'</a> произошло начисление или снятие вам часов. Для просмотра зайдите на сайт и посмотрите отчёт о платежах.<p><font size=2>Отписаться от этого уведомления можно <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/settings">тут</a></font></p>',1);
							}
						}
						if ($pok2->sett2 == 1)
						{
						$nach = strpos ($pok2->message, "n");
						if ($nach === false)
						{
							$query = "UPDATE `#__users` SET `message` = CONCAT (message, 'n1n') WHERE `#__users`.`id` =".$pok2->id;
							$database->setQuery($query);
							$database->query();
						} else 
						{
							$kon = strrpos ($pok2->message, "n");															//Блок посылки поп-апа продавцу
							$len = strlen ($pok2->message);
							$re = substr ($pok2->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
							$re = $re+1;
							$rf = (substr ($pok2->message, 0, $nach+1)).$re.(substr ($pok2->message, $kon, ($len-$kon)));	 //тут опасное использование старого запроса, зато запросов меньше. ВНИМАНИЕ!
							$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$pok2->id;
							$database->setQuery($query);
							$database->query();
						};
						$database->setQuery("UPDATE `#__users` SET `points` = '".$sum3."', `message` = if ((LOCATE('u',message) !=0), message, CONCAT (message, 'uu')) WHERE `#__users`.`id` =".$aduid); 
						$database->query();
						}
						echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Оплата прошла успешно.\");
window.close();
</script>"); 
						die();
					}
				}
			} else
			{
				echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Введите цену\");
</script>");
			}
		}
		// Конец проверок
		$r1 = JRequest::getInt ('point', 0);
		if (( $r1 != 0) and ($r1 !=$ads->ad_price)) {$po1 = $r1;} else {$po1 = $ads->ad_price;}
		$r2 = JRequest::getInt ('textfield2', 0);
		if (( $r2 != 0) and ($r2 !=$ads->ad_price)) {$po2 = $r2;} else {$po2 = $ads->ad_price;}
		$r3 = JRequest::getInt ('textfield', 0);
		if (( $r3 != 0) and ($r3 !=1)) {$po3 = $r3;} else {$po3 = 1;}
		$r4 = JRequest::getInt ('usr', 0);
		if (( $r4 != 0) and ($r4 !=1)) {$po4 = $r4;} else {$po4 = 1;}
		echo "<div align=center><p>Сведения о покупке товара/услуги:</p></div><form metod=\"post\"><p>Покупатель:&nbsp;".$user->name."&nbsp;(".$uid.")"."</p><p>Продавец:&nbsp;".$pok2->name."&nbsp;(".$pok2->id.")<p>".($pok1->min_points*(-1))." (<a href='index.php?option=com_comprofiler&task=userslist' target=_blank>ваш минимум</a>) + ".$pok1->points." (часы) - ".$sum7." (<a href='index.php?option=com_tranz&view=second&layout=second' target=_blank>неутверждённые</a>) = ваш лимит: <b>".(($pok1->min_points*(-1))+$pok1->points-$sum7)."</b></p></p>Сумма сделки:<p><input name='textfield' type='text' id='textfield' value='".$po3."' size='5' maxlength='5' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/>X<input name='textfield2' type='text' id='textfield2' size='11' maxlength='11' value='".$po2."' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/>=<input name='point' type='text' id='textfield3' size='11' maxlength='11' value='".$po1."'/>&nbsp;часов</p><p>Название товара\услуги:&nbsp;".(JString::substr ($ads->ad_headline, 0,30))."</p><p>Описание:&nbsp;".(JString::substr ($ads->ad_text,0,40))."</p><p>".(JString::substr ($ads->ad_text,40,50))."..</p><div align=center><p><input type='submit'  value = 'Подтверждаю'/></p></div><INPUT TYPE=HIDDEN NAME='proc' VALUE='1'><INPUT TYPE=HIDDEN NAME='option' VALUE='com_tranz'>".JHTML::_('form.token')."<INPUT TYPE=HIDDEN NAME='id' VALUE='".$ads->id."'><INPUT TYPE=HIDDEN NAME='view' VALUE='pokupka'><INPUT TYPE=HIDDEN NAME='layout' VALUE='pokupka'><INPUT TYPE=HIDDEN NAME='no_html' VALUE='1'></form>";
   }
} } else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
echo "</body></html>";
?>