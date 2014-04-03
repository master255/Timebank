<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" slick-uniqueid="1">
<head>
<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php/predlojenie"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, follow"/>
<meta name="keywords" content="TimeBank"/>
<meta name="rights" content="Masters"/>
<meta name="description" content="Банк времени"/>
<title>Продажа:</title>
<script language='JavaScript' type='text/JavaScript'>
window.focus();
</script>
</head>
<body>
<?php
$user = & JFactory::getUser ();
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
$noads=JRequest::getInt ('id');
$selusr =JRequest::getInt ('usr');
if (($noads=='') and ($selusr=='') ) {echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Запуск продажи без аргументов. prodaja.php строка 23. Пользователь -'.$user->id,0); die();} else							//Если нет никаких аргументов, то и нет доступа
{
	if ($noads != '') 
	{
		$query = 'SELECT * FROM `#__adsmanager_ads` where id='.$database->Quote($noads);
		$database->setQuery($query);															//Общий запрос на получение информации о объявлении
		$res=$database->loadObjectList();
		foreach ($res as $ads);
		$dost=0;
		if (($ads->root_cat !=4) or (!(($user->id == $ads->userid)&&($ads->userid != '')&&($dost==0))))						//Проверка, хозяин ли это объявления, не нулевой ли хозяин у объявления и проверка переменной dost 
		{
			echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Нарушение условий продажи. prodaja.php строка 34. Пользователь -'.$user->id,0); $dost=1; die();						//Проверка на каталог предложение
		} else
		{
			$query = "SELECT * FROM `#__users` where block=0 order by name";								//Выполнение общего запроса на список пользователей. Должен быть тут!
			$database->setQuery($query);
			$users=$database->loadObjectList();
			if ($selusr == 1)
			{
				echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Выберите участника\");												
</script>");};
			if (($selusr != '')&&($selusr != 1))
			{
				JRequest::checkToken('GET') or jexit('Invalid Token');
				$prov5 = JRequest::getInt ('point', 0);
				if ($prov5 >0)
				{
					$cena = $prov5;
					$query = "SELECT * FROM `#__users` where id=".$user->id;
					$database->setQuery($query);	
					$usern=$database->loadObjectList();										//Общий запрос на получение информации о текущем пользователе
					foreach($usern as $pok1);
					$database->setQuery("SELECT * FROM `#__tranz_accept` where (touserid=".$user->id.") and (fromuserapproved=0)");
					$zai2=$database->loadObjectList();
					$sum7=0;
					foreach($zai2 as $vich2) 
					{
						$sum7=$sum7+$vich2->points;											//Вычисляем его не ассептованую сумму
					};
					$maxs=(($pok1->points)+($cena)+$sum7);
					if ($maxs>($pok1->max_points))											//Проверка на максимум текущего пользователя
					{
						echo ("<script language='JavaScript' type='text/JavaScript'>	
window.focus();
alert (\"Цена превышает Ваш возможный максимум на ".($maxs-$pok1->max_points).".\\n Хороший повод начать тратить!\");
</script>"); 

					} else 
					{
						$prov=0;
						foreach($users as $ur)
						{
							if ($ur->id != $user->id) 
							{
								if ($selusr==$ur->id) {$prov=1;};							//Проверка, а реальный ли это пользователь и не текущий ли.
							}
						};
						if ($prov==1) 
						{
							$query = "SELECT * FROM `#__users` where id=".$selusr;
							$database->setQuery($query);
							$usert=$database->loadObjectList();   							//Достаём данные о выбранном пользователе
							foreach($usert as $pok);
							$database->setQuery("SELECT * FROM `#__tranz_accept` where (fromuserid=".$selusr.") and (fromuserapproved=0)");
							$zai1=$database->loadObjectList();
							$sum6=0;
							foreach($zai1 as $vich1) 
							{
								$sum6=$sum6+$vich1->points;									//Вычисляем его не ассептованую сумму
							};
							$max=$pok->points-$pok->min_points - $sum6;
							if ($cena > $max)												//Проверка, а хватает ли у пользователя денег
							{
								echo ("<script language='JavaScript' type='text/JavaScript'>   
alert (\"У покупателя не хватает ".(($max-$cena)*(-1))." часов.\");
</script>"); 				} else 
							{      															//Процедура создания новой строчки в ассепт
								$pri=str_replace(",", ".", ($cena));
								$tim=(time()+32400);										//Сдвиг часового пояса
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
NULL , '$pok1->id', '$pok->id', 0, '$pri', '$today', '0', '$ads->id', ".$database->Quote($ads->ad_headline).", ".$database->Quote($ads->ad_text)."
)");
								$database->query();
								if ($pok->sett6 == 1)
								{
									$database->setQuery("SELECT DISTINCT a.userid FROM #__session AS a, #__users AS u WHERE (a.userid = u.id) AND (a.guest = 0) AND (a.client_id = 0) AND (u.id = ".$pok->id.")");
									$usern6=$database->loadresult();
									if ($usern6 !=$pok->id)
									{
										JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$pok->email,'Уведомление','Уважаемый пользователь, на сайте: <a href= "http://'.$_SERVER['HTTP_HOST'].'/prishedshie-zayavki">'.$_SERVER['HTTP_HOST'].'</a> к вам пришла новая заявка на перевод часов. Отреагируйте пожалуйста.<p><h6>Отписаться от этого уведомления можно <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/settings">тут</a></h6></p>',1);
									}
								}
								if ($pok->sett2 == 1)
								{
								$nach = strpos ($pok->message, "t");
								if ($nach === false) 
								{
									$query = "UPDATE `#__users` SET `message` = '".$pok->message."t1t' WHERE `#__users`.`id` =".$pok->id;
									$database->setQuery($query);	
									$database->query();
								} else 
								{
									$kon = strrpos ($pok->message, "t");
									$len = strlen ($pok->message);											//Блок уведомления
									$re = substr ($pok->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
									$re = $re+1;
									$rf = (substr ($pok->message, 0, $nach+1)).$re.(substr ($pok->message, $kon, ($len-$kon)));
									$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$pok->id;
									$database->setQuery($query);	
									$database->query();
								};
								}
								echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Отправлено на согласование.\");		
window.close();
</script>");
								die(); 
							}
						} else 
						{
							echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Не правильный id пользователя\");
window.close();
</script>"); JUtility::sendMail($config->getValue('config.mailfrom'), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Не прошёл проверку пользователя при продаже. prodaja.php строка 160. Пользователь -'.$user->id,0); die();
						};
					}																
				} else 
				{
					echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Введите цену\");
</script>");
				}
			}
//Конец подпрограммы обрабатывающей submit и если не было выхода, то опять отображение содержимого окна.
			echo "<div align=center><p>Товар/Услуга была продана:</p></div><form metod=\"post\">
Участнику:&nbsp; <select class='input' type=text name=usr >
<option value='1'>№&nbsp;&nbsp;&nbsp;&nbsp;Участник↓&nbsp;&nbsp;&nbsp;&nbsp;Платёжеспособность</option>";
			$r1 = JRequest::getInt ('point', 0);
			if (( $r1 != 0) and ($r1 !=$ads->ad_price)) {$po1 = $r1;} else {$po1 = $ads->ad_price;}
			$r2 = JRequest::getInt ('textfield2', 0);
			if (( $r2 != 0) and ($r2 !=$ads->ad_price)) {$po2 = $r2;} else {$po2 = $ads->ad_price;}
			$r3 = JRequest::getInt ('textfield', 0);
			if (( $r3 != 0) and ($r3 !=1)) {$po3 = $r3;} else {$po3 = 1;}
			$r4 = JRequest::getInt ('usr', 0);
			if (( $r4 != 0) and ($r4 !=1)) {$po4 = $r4;} else {$po4 = 1;}
			foreach($users as $ur)
			{
				if ($ur->id != $user->id) 
				{
					$database->setQuery("SELECT * FROM `#__tranz_accept` where (fromuserid=".$ur->id.") and (fromuserapproved=0)");
					$zai=$database->loadObjectList();
					$sum5=0;
					foreach($zai as $vich) 
					{
						$sum5=$sum5+$vich->points;
					};
					$rez1=$ur->points - $ur->min_points - $sum5;
					if ($po4==$ur->id) {$sel1 = "selected=\"selected\"";} else {$sel1 = "";}
					echo "<option value=".$ur->id." ".$sel1.">".$ur->id."&nbsp;&nbsp;".$ur->name."&nbsp;&nbsp;".$rez1."</option>";
				};
			};
			echo "
</select>
<p>За:&nbsp;<input name='textfield' type='text' id='textfield' value='".$po3."' size='5' maxlength='10' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/>
X
<input name='textfield2' type='text' id='textfield2' size='11' maxlength='11' value='".$po2."' onkeyup=\"document.getElementById('textfield3').value=document.getElementById('textfield2').value*document.getElementById('textfield').value;\"/> 
=
<input name='point' type='text' id='textfield3' size='11' maxlength='11' value='".$po1."'/>";
			echo JHTML::_('form.token');
			echo "
 &nbsp;Часов</p>
 <br />
 <br />
 <div align=center><input type='submit'  value = 'Продать' /> <INPUT TYPE=HIDDEN NAME=id VALUE=\"".$noads."\"> <INPUT TYPE=HIDDEN NAME='option' VALUE='com_tranz'> <INPUT TYPE=HIDDEN NAME='view' VALUE='prodaja'><INPUT TYPE=HIDDEN NAME='layout' VALUE='prodaja'><INPUT TYPE=HIDDEN NAME='no_html' VALUE='1'>
 </form></div>";
		}
	} else 
	{
		echo "Нет доступа!"; JUtility::sendMail($config->getValue( 'config.mailfrom' ), 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Нет номера объявления при продаже. prodaja.php строка 215. Пользователь -'.$user->id,0); die();
	} 
}} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
?>
</body></html>