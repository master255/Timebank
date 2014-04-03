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
<title>Предложение:</title>
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
if (($noads=='' ) or ($noads==0)) {echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Запуск предложения без аргументов. predlojenie.php строка 35. Пользователь -'.$user->id,0); die();} else 											//Если нет никаких аргументов, то и нет доступа
{
	$database->setQuery('SELECT * FROM `#__adsmanager_ads` where id='.$database->Quote($noads));				//Общий запрос на получение информации о объявлении
	$res=$database->loadObjectList();
	$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET (\''.$user->id.'\', users))');
	$erg=$database->loadResultArray();
	foreach ($res as $ads);
	$fv=array_unique(array_diff(explode (',', $ads->ad_group), array('')));
	$aduid = $ads->userid;
	$uid = $user->id;
	if (($ads->root_cat !=3) or ($aduid == $uid) or (!(((count (array_intersect ($erg, $fv)))>0) or (count ($fv)==0) or ($fv[1]==0)))) {echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Нарушение условий предложения. predlojenie.php строка 45. Пользователь -'.$user->id,0); die();};
	$query = "SELECT * FROM `#__users` where id=".$uid;
	$database->setQuery($query);
	$usern=$database->loadObjectList();															//Общий запрос на получение информации о текущем пользователе
	foreach($usern as $pok1);
	$dost=0;
	
	$database->setQuery("SELECT * FROM `#__tranz_accept` where ((fromuserid=".$aduid.") and (fromuserapproved =0))");
	$zai2=$database->loadObjectList();
	$sum7=0;
	foreach($zai2 as $vich2)
	{
		$sum7=$sum7+$vich2->points;            													 //Вычисляем не ассептованую сумму покупателя
	}
	
	$database->setQuery("SELECT * FROM `#__tranz_accept` where ((touserid=".$uid.") and (fromuserapproved =0))");
	$zai3=$database->loadObjectList();
	$sum8=0;
	foreach ($zai3 as $vich4)
	{
		$sum8=$sum8+$vich4->points;            													 //Вычисляем не ассептованую сумму продавца
	}

    if (($aduid != '')&&($dost==0))	 															//Проверка, не нулевой ли хозяин у объявления и проверка переменной dost 
	{
		$database->setQuery("SELECT * FROM `#__users` where id=".$aduid);
		$usery=$database->loadObjectList();															//Общий запрос на получение информации о покупателе
		foreach($usery as $pok2);
		if ($proc==1)
		{	JRequest::checkToken('GET') or jexit('Invalid Token');
			$prov5 = JRequest::getInt ('point', 0);
			if ($prov5 >0)
			{
				$cena = $prov5;
				$max=($pok1->points)+$sum8+($cena);
				if ($pok1->max_points<$max)
				{																							//Проверка на максимум текущего пользователя
					echo "<script language='JavaScript' type='text/JavaScript'>
window.focus();
alert (\"Цена превышает Ваш возможный максимум на ".(($pok1->max_points-$max)*(-1)).".\\n Воспользуйтесь разделом 'Предложение', что бы потратить ваши накопления.\");
</script>";
				} else
				{
					$min=($pok2->points)-$sum7-($cena);
					if ($pok2->min_points>$min)																	//Проверка на минимум продавца
					{
						echo "<script language='JavaScript' type='text/JavaScript'>	
window.focus();
alert (\"Цена превышает возможный минимум покупателя на ".(($min-$pok2->min_points)*(-1)).".\\n Нужно, что бы покупатель заработал часы. Например купите у него что-нибудь в разделе предложение.\");
</script>";
					} else
					{
						$tim=(time()+32400);																//Сдвиг часового пояса
						$today=date("Y-m-d H:i:s",$tim);
						$database->setQuery("INSERT INTO `#__tranz_accept` (
`id` ,
`touserid` ,
`fromuserid` ,
`fromuserapproved` ,
`points` ,
`insert_date` ,
`rule` ,
`keyreference` ,
`namereference` ,
`datareference`
)
VALUES (
NULL , ".$database->Quote($uid).", ".$database->Quote($aduid).", 0, ".$database->Quote($cena).", ".$database->Quote($today).", '0', ".$database->Quote($ads->id).", ".$database->Quote($ads->ad_headline).", ".$database->Quote($ads->ad_text)."
);");
						$database->query();
						if ($pok2->sett6 == 1)
						{
							$database->setQuery("SELECT DISTINCT a.userid FROM #__session AS a, #__users AS u WHERE (a.userid = u.id) AND (a.guest = 0) AND (a.client_id = 0) AND (u.id = ".$pok2->id.")");
							$usern6=$database->loadresult();
							if ($usern6 !=$pok2->id)
							{
								JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$pok->email,'Уведомление','Уважаемый пользователь, на сайте: <a href= "http://'.$_SERVER['HTTP_HOST'].'/prishedshie-zayavki">'.$_SERVER['HTTP_HOST'].'</a> к вам пришла новая заявка на перевод часов. Отреагируйте пожалуйста.<p><h6>Отписаться от этого уведомления можно <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/settings">тут</a></h6></p>',1);
							}
						}
						if ($pok2->sett2 == 1)
						{
						$nach = strpos ($pok2->message, "t");
						if ($nach === false)
						{
							$query = "UPDATE `#__users` SET `message` = CONCAT (message, 't1t') WHERE `#__users`.`id` =".$pok2->id;
							$database->setQuery($query);
							$database->query();
						} else 
						{
							$kon = strrpos ($pok2->message, "t");															//Блок посылки поп-апа продавцу
							$len = strlen ($pok2->message);
							$re = substr ($pok2->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
							$re = $re+1;
							$rf = (substr ($pok2->message, 0, $nach+1)).$re.(substr ($pok2->message, $kon, ($len-$kon)));
							$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$pok2->id;
							$database->setQuery($query);
							$database->query();
						}
						}
						echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Отправлено на согласование.\");
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
		echo "<div align=center><p>Сведения о покупке товара/услуги:</p></div><form metod=\"post\"><p>Покупатель:&nbsp;".$pok2->name."&nbsp;(".$pok2->id.")</p><p>Продавец:&nbsp;".$user->name."&nbsp;(".$uid.")<p><b>Лимит покупателя:&nbsp;".(($pok2->min_points*(-1))+$pok2->points-$sum7)."</b></p><p><b>Ваш максимальный лимит:&nbsp;".($pok1->max_points)." (<a href='index.php?option=com_comprofiler&task=userslist' target=_blank>ваш максимум</a>) - ".$pok1->points." (часы) - ".$sum8." (<a href='index.php?option=com_tranz&view=second&layout=second' target=_blank>неутверждённые</a>) = ваш лимит: ".(($pok1->max_points)-$pok1->points-$sum8)."</b></p></p>Сумма сделки:<p><input name='textfield' type='text' id='textfield' value='".$po3."' size='5' maxlength='5' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/>X<input name='textfield2' type='text' id='textfield2' size='11' maxlength='11' value='".$po2."' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/>=<input name='point' type='text' id='textfield3' size='11' maxlength='11' value='".$po1."'/>&nbsp;часов</p><p>Название товара\услуги:&nbsp;".(JString::substr ($ads->ad_headline, 0,30))."</p><p>Описание:&nbsp;".(JString::substr ($ads->ad_text,0,40))."</p><p>".(JString::substr ($ads->ad_text,40,50))."..</p><div align=center><p><input type='submit'  value = 'Отправить на согласование'/></p></div><INPUT TYPE=HIDDEN NAME='proc' VALUE='1'><INPUT TYPE=HIDDEN NAME='option' VALUE='com_tranz'>".JHTML::_('form.token')."<INPUT TYPE=HIDDEN NAME='id' VALUE='".$ads->id."'><INPUT TYPE=HIDDEN NAME='view' VALUE='predlojenie'><INPUT TYPE=HIDDEN NAME='layout' VALUE='predlojenie'><INPUT TYPE=HIDDEN NAME='no_html' VALUE='1'></form>";
   }
} } else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
echo "</body></html>";
?>