<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();
$database =& JFactory::getDBO();
$subb=0; $min=0; $max=0;
$subb= (integer) JRequest::getVar ('submitr');
$calc= (integer) JRequest::getVar ('calc');
$sav='';
$sav1='';

if ($calc==1) {
$database->setQuery('SELECT * FROM `#__adsmanager_ads`');
$ob1=$database->loadObjectList();
foreach ($ob1 as $ob2) {
$database->setQuery('SELECT * FROM `#__tranz_data` where (keyreference='.$ob2->id.') and (namereference='.$ob2->ad_headline.') and (datareference='.$ob2->ad_text.')');
$sum1=0;	 $sum2=0;
$tr1=$database->loadObjectList();
if (count ($tr1)>0) {
foreach ($tr1 as $tr2) {
$sum1=$sum1+$tr2->rank;
$sum2=$sum2+1;
}}
$database->setQuery('UPDATE `#__adsmanager_ads` SET `rating`='.$sum1.',`count1`='.$sum2.' where id='.$ob2->id);
$database->query();

}
$database->setQuery('SELECT * FROM `#__users`');
$res1=$database->loadObjectList();

$database->setQuery('UPDATE `#__adsmanager_ads` SET `ad_rating`=`rating`/`count1`');
$database->query();
foreach ($res1 as $trn1) {							//Просчёт нового состояния счёта продавцов. 
 
  $query1 = 'SELECT * FROM `#__tranz_data` where touserid='.$trn1->id;
  $database->setQuery($query1);
  $rez=$database->loadObjectList();															//Подсчёт пришедших часов
  $sum1=0;	 $sum2=0;	 $sum3=0;	
  foreach ($rez as $ert) {
   $sum1=$sum1+$ert->points;
   };
   
   $query1 = 'SELECT * FROM `#__tranz_data` where fromuserid='.$trn1->id;
  $database->setQuery($query1);
  $rez=$database->loadObjectList();																	//Подсчёт ушедших часов
  foreach ($rez as $ert) {
   $sum2=$sum2-$ert->points;
   };
   $sum3=$sum1+$sum2;
   $database->setQuery('SELECT * FROM `#__tranz_gen` where id=1');
$res=$database->loadObjectList();
foreach ($res as $trn);
  if ((((count ($res1)*100)*(-1))!=$trn->min_points) or (((count ($res1)*1000))!=$trn1->max_points)) {
  $database->setQuery("UPDATE `#__tranz_gen` SET `min_points` = '".((count ($res1)*100)*(-1))."', `max_points` = '".((count ($res1)*1000))."' WHERE `#__tranz_gen`.`id` =1;");
$database->query();
  }
  if (((count ($res1)*100)*(-1))>$trn1->min_points) {$mmin=',`min_points`='.(((count ($res1)*100)*(-1)));} else {$mmin='';}
  if (((count ($res1)*1000))<$trn1->max_points) {$mmax=',`max_points`='.(((count ($res1)*1000)));} else {$mmax='';}
   $query1 = "UPDATE `#__users` SET `points` = '".$sum3."', `message` = if ((LOCATE('u',message) !=0), message, CONCAT (message, 'uu')) ".$mmin.$mmax." WHERE `#__users`.`id` =".$trn1->id;			//Обновление данных по состоянию счёта
   $database->setQuery($query1);
   $database->query();
  $database->setQuery('SELECT * FROM `#__adsmanager_ads` where (userid='.$trn1->id.') and (published=1) and (root_cat=4)');
  $rez=$database->loadObjectList();															//Суммирование рейтинга
  $sum1=0;	 $sum2=0;		
  foreach ($rez as $ert) {
   $sum1=$sum1+$ert->rating;
   $sum2=$sum2+$ert->count1;
   };

   $database->setQuery("UPDATE `#__users` SET `rating` = '".$sum1."',
`count1` = '".$sum2."' WHERE `#__users`.`id` =".$trn1->id);							//Обновление данных по рейтингу
   $database->query();
   };
$sav1="Сохранено";
}

if ($subb==1) {
$min=JRequest::getint('min');
$max=JRequest::getint ('max');
$rasp=JRequest::getint ('rsp');
$rassilka1=JRequest::getint ('rassilka');
$database->setQuery("UPDATE `#__tranz_gen` SET `min_points` = '".$min."', `max_points` = '".$max."', `raspred` = '".$rasp."', `rassilka` = '".$rassilka1."' WHERE `#__tranz_gen`.`id` =1;");
$database->query();					
	$database->setQuery("ALTER TABLE `#__users` CHANGE `max_points` `max_points` FLOAT( 10, 2 ) NOT NULL DEFAULT '".$max."'");
	$database->query();
	$sav="Сохранено";
	$database->setQuery('SELECT * FROM `#__users`');
$rez1=$database->loadObjectList();
	foreach ($rez1 as $usrs1) {
		$minn = JRequest::getint('sn'.$usrs1->id);
		$maxx = JRequest::getint('sx'.$usrs1->id);
		$otv = JRequest::getint('ot'.$usrs1->id);
		$dov = JRequest::getint('do'.$usrs1->id);
		if (($minn != $usrs1->min_points) or ($maxx != $usrs1->max_points) or ($otv != $usrs1->idref) or ($dov != $usrs1->dov)) {
		$database->setQuery("UPDATE `#__users` SET `min_points` = '$minn', `max_points` = '$maxx', `idref` = '$otv', `dov` = '$dov' WHERE `#__users`.`id` =".$usrs1->id);
		$database->query();
		}
	}
};
$database->setQuery('SELECT * FROM `#__tranz_gen` where id=1');
$res=$database->loadObjectList();
foreach ($res as $trn);
  $sel='';
  $database->setQuery('SELECT * FROM `#__users` where block=0');
$rez2=$database->loadObjectList();
if ($trn->raspred == 1) {$sel='checked="checked"';}
if ($trn->rassilka == 1) {$sel11='checked="checked"';}
echo '<h3>Установка общего минимума и максимума:</h3>
<form method="post">
<p>Минимум: &nbsp;<input type="text" name="min" value="'.$trn->min_points.'" /> часов</p>
<p>Максимум: <input type="text" name="max" value="'.$trn->max_points.'" /> часов (по умолчанию для всех одобренных участников)</p>
<p><input type="checkbox" name="rsp" value="1" '.$sel.'/> <B>Распределять на всех часы при удалении пользователя или не распределять и отнять только у пригласившего?</B></p>
<p><input type="checkbox" name="rassilka" value="1" '.$sel11.'/> <B>Включить рассылку</B></p>';
 echo "<p><table border=1><tr><th>№</th><th>Ф.И.О.</th><th>Ответственный</th><th>Доверенный</th><th>Минимум</th><th>Максимум</th></tr>";
 $ssm=0; $ssx=0;
 foreach ($rez2 as $usrs)
  {echo "<tr><td>".$usrs->id."</td><td>".$usrs->name."</td><td><input type='text' name='ot".$usrs->id."' value='".$usrs->idref."'/></td><td><input type='text' name='do".$usrs->id."' value='".$usrs->dov."'/></td><td><input type='text' name='sn".$usrs->id."' value='".$usrs->min_points."'/></td><td><input type='text' name='sx".$usrs->id."' value='".$usrs->max_points."'/></td></tr>";
  $ssm=$ssm+$usrs->min_points;
  $ssx=$ssx+$usrs->max_points;
  };
echo '</table></p>
<p>Всего зарегистрированных: '.count ($rez2).' Всего выдано кредитов: '.$ssm.'. Сумма максимальных пределов: '.$ssx.'</p>
<p><input  type="submit" value="Сохранить"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav.'</font>
<INPUT TYPE=HIDDEN NAME=submitr VALUE=1>
<INPUT TYPE=HIDDEN NAME=option VALUE=com_tranz><INPUT TYPE=HIDDEN NAME=view VALUE=uprav></p>
</form><form  method="post"><input  type="submit" value="Пересчитать ВСЁ"/>&nbsp;&nbsp;<font color="#4cdd20">'.$sav1.'</font><INPUT TYPE=HIDDEN NAME="calc" VALUE=1><INPUT TYPE=HIDDEN NAME=option VALUE=com_tranz><INPUT TYPE=HIDDEN NAME=view VALUE=uprav></form>
';

 ?>