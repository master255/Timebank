<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$config =& JFactory::getConfig();
  $sub=JRequest::getint('proc');
  $uid=$user->id;
  if ($sub==1) {																			//Если есть параметр субмит то...
  $ocenka=JRequest::getInt ('Ocenka');
  if ($ocenka !='') {
  JRequest::checkToken('POST') or jexit('Invalid Token');
  $query2 = 'SELECT * FROM `#__tranz_accept` where fromuserid='.$uid;
						$database->setQuery($query2);
						$res=$database->loadObjectList();   //Получаем данные, которые должны были быть в таблице на экране.
$query444 = "INSERT INTO `#__tranz_data` (
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
VALUES ";																			//Начало запроса - неизменно
$query445 = "DELETE FROM `#__tranz_accept` WHERE `#__tranz_accept`.`id` in ("; //Этот запрос тоже начинается одинаково
 $tim1=(time()+32400);																			//Сдвиг часового пояса
  $today1=date("Y-m-d H:i:s",$tim1);
 $prov=0;
 foreach ($res as $trn) {																		//Это основной цикл в котором из адреса страницы беруться только те параметры, которые там могут быть. И в зависимости от параметров добавляются строки в переменные или нет.
  $ids[($trn->id)]= JRequest::getint ('s'.$trn->id);
  if ($ids[($trn->id)] == 1) {
  $query444 = $query444."(
'NULL' , '$trn->touserid', '$trn->fromuserid', '1', '$trn->points', $ocenka, '$trn->insert_date', '$today1', '$trn->rule', '$trn->keyreference', '$trn->namereference', '$trn->datareference'),";
$query445=$query445.$trn->id.", ";
$database->setQuery('select rating, count1 from `#__adsmanager_ads` where id='.$trn->keyreference);
$ren=$database->loadObjectList();
foreach ($ren as $tn);
$rating=$tn->rating+$ocenka;
$count=$tn->count1+1;
$rat= round ($rating/$count,2);
$database->setQuery("UPDATE `#__adsmanager_ads` SET `rating` = '$rating',`count1` = '$count', `ad_rating`='$rat' WHERE `#__adsmanager_ads`.`id` =".$trn->keyreference);
$database->query();
			$database->setQuery("SELECT * FROM `#__users` where id=".$trn->touserid);	
			$usern1=$database->loadObjectList();										//Запрос на получение информации о текущем пользователе
			foreach($usern1 as $us);
			if ($us->sett6 == 1) {
			$database->setQuery("SELECT DISTINCT a.userid FROM #__session AS a, #__users AS u WHERE (a.userid = u.id) AND (a.guest = 0) AND (a.client_id = 0) AND (u.id = ".$us->id.")");
			$usern6=$database->loadresult();
			if ($usern6 !=$us->id)
			{
			JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$us->email,'Уведомление','Уважаемый пользователь, на сайте: <a href= "http://'.$_SERVER['HTTP_HOST'].'/otchjot-o-platezhakh">'.$_SERVER['HTTP_HOST'].'</a> произошло начисление или снятие вам часов. Для просмотра зайдите на сайт и посмотрите отчёт о платежах.<p><font size=2>Отписаться от этого уведомления можно <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/settings">тут</a></font></p>',1);
			}}
			if ($us->sett2 == 1) {
			$nach = strpos ($us->message, "n");
			if ($nach === false) {
			$query = "UPDATE `#__users` SET `message` = '".$us->message."n1n' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);
			$database->query();
			} else {
			$kon = strrpos ($us->message, "n");																		//Блок посылки поп-апа
			$len = strlen ($us->message);
			$re = substr ($us->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
			$re = $re+1;
			$rf = (substr ($us->message, 0, $nach+1)).$re.(substr ($us->message, $kon, ($len-$kon)));
			$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);
			$database->query();
			};
			}
			$prov=1;
};
  };
 if ($prov==1) {
 $length=strlen($query444);															//Обрезаем запятые в конце и проставляем - ;
 $query444=substr($query444,0,$length-1).";";
  $length1=strlen($query445);
 $query445=substr($query445,0, $length1-2).");";
 
  $database->setQuery($query444);
  $database->query();																					//Выполнение запросов	перенос и удаление	
  $database->setQuery($query445);
  $database->query();

 foreach ($res as $trn) {							//Просчёт нового состояния счёта продавцов. 
  if ($ids[($trn->id)] == 1) {
  $query1 = 'SELECT * FROM `#__tranz_data` where touserid='.$trn->touserid;
  $database->setQuery($query1);
  $rez=$database->loadObjectList();															//Подсчёт пришедших часов
  $sum1=0;	 $sum2=0;	 $sum3=0;	
  foreach ($rez as $ert) {
   $sum1=$sum1+$ert->points;
   };
   $query1 = 'SELECT * FROM `#__tranz_data` where fromuserid='.$trn->touserid;
  $database->setQuery($query1);
  $rez=$database->loadObjectList();																	//Подсчёт ушедших часов
  foreach ($rez as $ert) {
   $sum2=$sum2-$ert->points;
   };
   $sum3=$sum1+$sum2;
   $query1 = "UPDATE `#__users` SET `points` = '".$sum3."', `message` = if ((LOCATE('u',message) !=0), message, CONCAT (message, 'uu'))  WHERE `#__users`.`id` =".$trn->touserid;			//Обновление данных по состоянию счёта
   $database->setQuery($query1);
   $database->query();
  $database->setQuery('SELECT * FROM `#__adsmanager_ads` where (userid='.$trn->touserid.') and (published=1) and (root_cat=4)');
  $rez=$database->loadObjectList();															//Суммирование рейтинга
  $sum1=0;	 $sum2=0;		
  foreach ($rez as $ert) {
   $sum1=$sum1+$ert->rating;
   $sum2=$sum2+$ert->count1;
   };
   $database->setQuery("UPDATE `#__users` SET `rating` = '".$sum1."',
`count1` = '".$sum2."' WHERE `#__users`.`id` =".$trn->touserid);//Обновление данных по рейтингу
   $database->query();
   };
   };
   
    $query1 = 'SELECT * FROM `#__tranz_data` where touserid='.$uid; //Просчёт нового состояния счёта покупателя. 
  $database->setQuery($query1);
  $rez=$database->loadObjectList();
   $sum1=0;	 $sum2=0;	 $sum3=0;
  foreach ($rez as $ert) {
   $sum1=$sum1-$ert->points;
   };
   
   $query1 = 'SELECT * FROM `#__tranz_data` where fromuserid='.$uid;
  $database->setQuery($query1);
  $rez=$database->loadObjectList();	
  foreach ($rez as $ert) {
   $sum2=$sum2+$ert->points;
   };
  $sum3=($sum1+$sum2)*(-1);
   
   $query1 = "UPDATE `#__users` SET `points` = '".$sum3."' WHERE `#__users`.`id` =".$uid;
   $database->setQuery($query1);
   $database->query();
echo ("<script language='JavaScript' type='text/JavaScript'>
alert (\"Сделка успешно завершена. Спасибо!\");
location.href = \"/prishedshie-zayavki\";
</script>");
  } else {
echo ("<script language='JavaScript' type='text/JavaScript'>
window.focus();
alert (\"Ничего не выбрано. Выберите заявку галочкой\");
</script>");
  }
  } else {																			//Пользователь выбрал отказ
  $message=JRequest::getString('message');
  if ($message !='') {
  $timer=(time()+32400);
  $database->setQuery("INSERT INTO #__uddeim (fromid, toid, message, datum) VALUES (".$uid.", 42, ".$database->Quote($message).", ".$timer.")");
  $database->query();
  }
		$database->setQuery('SELECT * FROM `#__tranz_accept` where fromuserid='.$uid);
		$res=$database->loadObjectList();   //Получаем данные, которые должны были быть в таблице на экране.
		$query3 = "UPDATE `#__tranz_accept` SET `fromuserapproved` = '-1' WHERE `#__tranz_accept`.`id` in (";
		$prov=0;
		 foreach ($res as $trn) {																		//Это основной цикл в котором из адреса страницы беруться только те параметры, которые там могут быть. И в зависимости от параметров добавляются строки в переменные или нет.
  $ids1[($trn->id)]= JRequest::getint('s'.$trn->id);
  if ($ids1[($trn->id)] == 1) {
  $query3=$query3.$trn->id.", ";
  
  $database->setQuery("SELECT * FROM `#__users` where id=".$trn->touserid);	
			$usern1=$database->loadObjectList();										//Запрос на получение информации о текущем пользователе
			foreach($usern1 as $us);
			if ($us->sett9 == 1) {
			$database->setQuery("SELECT DISTINCT a.userid FROM #__session AS a, #__users AS u WHERE (a.userid = u.id) AND (a.guest = 0) AND (a.client_id = 0) AND (u.id = ".$us->id.")");
			$usern6=$database->loadresult();										//Запрос на получение информации о текущем пользователе
			if ($usern6 !=$us->id) {
			JUtility::sendMail($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ),$us->email,'Уведомление','Уважаемый пользователь, на сайте: <a href= "http://'.$_SERVER['HTTP_HOST'].'/otpravlennye-zayavki">'.$_SERVER['HTTP_HOST'].'</a> вам отказали в переводе часов.<p><font size=2>Отписаться от этого уведомления можно <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/settings">тут</a></font></p>',1); }}
			if ($us->sett8==1) {
			$nach = strpos ($us->message, "j");
			if ($nach === false) {
			$query = "UPDATE `#__users` SET `message` = '".$us->message."j1j' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);
			$database->query();
			} else {
			$kon = strrpos ($us->message, "j");																		//Блок посылки поп-апа
			$len = strlen ($us->message);
			$re = substr ($us->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
			$re = $re+1;
			$rf = (substr ($us->message, 0, $nach+1)).$re.(substr ($us->message, $kon, ($len-$kon)));
			$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);
			$database->query();
			}}
  
  $prov=1;
}
  };
  if ($prov==1) {
    $length3=strlen($query3);
	$query3=substr($query3,0, $length3-2).");";
	$database->setQuery($query3);
	$database->query();
 }};}; 
  $query2 = "SELECT a.id as id, b.name as name1, a.touserid as touserid, a.fromuserid as fromuserid , c.name as name2, a.points as points, a.insert_date as insert_date, a.keyreference as keyreference, d.ad_headline as ad_headline, a.datareference as datareference, d.category as category, c.rating as rating, c.count1 as count1, d.ad_rating as ad_rating FROM `#__tranz_accept` a inner join `#__users` b 
				on a.fromuserid = b.id 
				inner join `#__users` c 
				on a.touserid = c.id
				inner join `#__adsmanager_ads` d
				on a.keyreference = d.id
				where ((a.fromuserid = ".$user->id.") and (a.fromuserapproved = 0))    ORDER BY a.id ASC";
				$database->setQuery($query2);
				$res=$database->loadObjectList();	
if (count ($res) !=0) {
  echo ("
  <script type=\"text/javascript\">
 function setChecked() 
    {
	 var i;
  for(i=0; i<document.form1.elements.length; i++)
  {
    if(document.form1.c1.checked==true)
    {if (document.form1.elements[i].type=='checkbox') {document.form1.elements[i].checked=true;}}
    else {document.form1.elements[i].checked=false;}
  }
    }
 </script>
 <form name='form1' method='post' action='index.php?option=com_tranz&view=third&layout=third'>
  <table width='100%' border='3' >
  <caption>
 <p><h2>  Заявки ожидающие одобрения </h2></p>
  </caption>
  <tr>
	<th  scope=\"col\"><span id='text'>Все&nbsp;</span><input type='checkbox' onclick='setChecked()' name='c1' /></th>
    <th scope=\"col\">№</th>
    <th scope=\"col\">От участника</th>
    <th scope=\"col\">Участнику</th>
	<th scope=\"col\">Рейт уч.</th>
    <th scope=\"col\">Часов</th>
    <th scope=\"col\">Дата</th>
    <th scope=\"col\">Объявление</th>
	<th scope=\"col\">Рейт объяв.</th>
  </tr>");
    $tn=1;
$document =& JFactory::getDocument();
$document->addStyleSheet('/media/system/js/jquery.rating.css');
echo '<script type="text/javascript" src="/media/system/js/jquery.rating.pack.js"></script>
<script type="text/javascript" src="/media/system/js/jquery.MetaData.js"></script>';

  foreach ($res as $trn) {
  $su = JString::substr ($trn->ad_headline, 0, 60);
  $lnk = JRoute::_( "index.php?option=com_adsmanager&view=details&id=".$trn->keyreference."&catid=".$trn->category."&Itemid=".$trn->keyreference);
  if (($trn->rating!=0) and ($trn->count1!=0)) {$reit = round ($trn->rating/$trn->count1);} else {$reit = 0;}
  if ($trn->name1 !='') {$del1 ="><a href ='index.php/profile/userprofile/".$trn->fromuserid."'>".$trn->name1."&nbsp;($trn->fromuserid)</a>";}
	if ($trn->name2 !='') {$del2 ="><a href ='index.php/profile/userprofile/".$trn->touserid."'>".$trn->name2."&nbsp;($trn->touserid)</a>";}
  echo (" 
  <tr>
  <th width = '40' align=center scope=\"col\"><input type='checkbox' name='s$trn->id' value='1'/></th>
	<td width = '10' align=center>$tn</td>
    <td width = '100' align=center$del1</td>
    <td width = '100' align=center$del2</td>
    <td width = '57' align=center>$reit</td>	
    <td width = '60' align=center>$trn->points</td>
    <td width = '80' align=center>$trn->insert_date</td>
    <td align=center><a href ='$lnk'>$su ($trn->keyreference)</a></td>
	<td width = '60' align=center>$trn->ad_rating</td>
  </tr>
  ");
  $tn=$tn+1;
  };
  echo ("</table>");
  echo ("<br /> <table width=100% > <tr> <td>
  <p><input type='submit'  value = 'Отклонить и отправить сообщение организатору:' /></p>
<p><textarea name='message' cols='40' rows='4' wrap='physical'>
</textarea></p> </td> <td align=left>
");
?>

<div align=left class='rating-criterium'><b>Одобрить</b> и оценить на:<span class="hover-text" style="margin:0 0 0 10px;"></span><p>
    <input type='radio' name='Ocenka' value='1' id='RadioGroup1_1' class='hover-star' title='1'/>
    <input type='radio' name='Ocenka' value='2' id='RadioGroup1_2' class='hover-star' title='2'/>
	<input type='radio' name='Ocenka' value='3' id='RadioGroup1_3' class='hover-star' title='3'/>
    <input type='radio' name='Ocenka' value='4' id='RadioGroup1_4' class='hover-star' title='4'/>
    <input type='radio' name='Ocenka' value='5' id='RadioGroup1_5' class='hover-star' title='5'/>
	<input type='radio' name='Ocenka' value='6' id='RadioGroup1_6' class='hover-star' title='6'/>
    <input type='radio' name='Ocenka' value='7' id='RadioGroup1_7' class='hover-star' title='7'/>
    <input type='radio' name='Ocenka' value='8' id='RadioGroup1_8' class='hover-star' title='8'/>
	<input type='radio' name='Ocenka' value='9' id='RadioGroup1_9' class='hover-star' title='9'/>
    <input type='radio' name='Ocenka' value='10' id='RadioGroup1_10' class='hover-star' title='10'/>
	</p>
</div>

<?php 
echo JHTML::_('form.token');
echo ("	
	</td> </tr> </table><INPUT TYPE=HIDDEN NAME='proc' VALUE='1'>   
		</form>
");
echo "<script>
$('.hover-star').rating(
{
focus: function(value, link)
{
var tip = $(this).parents('.rating-criterium').find('.hover-text');
tip[0].data = tip[0].data || tip.html();
tip.html(link.title || 'value: '+value);
},
blur: function(value, link)
{
$(this).parents('.rating-criterium').find('.hover-text').html('');
},
callback: function(value, link)
{
this.form.submit();
}});
</script>";

} else {echo "<div align=center><p><h2>Заявки ожидающие одобрения</h2></p><p><h3>Нет заявок на перевод часов</h3></p><p>Заявки на перевод часов появляются после фактически оказанной вам услуги или продаже товара. Для того, что бы у вас появились заявки пройдите в меню предложение. Выберите объявление и свяжитесь с продавцом объявления с целью покупки. После того, как услуга\товар вам будет предоставлен вы получите от продавца заявку.</p></div>";}
} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
  ?>