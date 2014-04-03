<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$sub=JRequest::getInt ('proc', 0);
$uid=$user->id;
if ($sub==1) {																			//Если есть параметр субмит то...
 $query2 = 'SELECT * FROM `#__tranz_accept` where touserid='.$uid;
						$database->setQuery($query2);
						$res=$database->loadObjectList();   //Получаем данные, которые должны были быть в таблице на экране.
												
$query445 = "DELETE FROM `#__tranz_accept` WHERE `#__tranz_accept`.`id` in ("; //Этот запрос начинается одинаково

$query444 = "INSERT INTO `#__tranz_data_archive` (
`id` ,
`touserid` ,
`fromuserid` ,
`fromuserapproved` ,
`points` ,
`insert_date` ,
`accept_date` ,
`delete_date` ,
`rule` ,
`keyreference` ,
`namereference`,
`datareference` 
)
VALUES ";							

 $tim1=(time()+32400);																			//Сдвиг часового пояса
  $today1=date("Y-m-d H:i:s",$tim1);
$prov=0;
 foreach ($res as $trn) {																		//Это основной цикл в котором из адреса страницы беруться только те параметры, которые там могут быть. И в зависимости от параметров добавляются строки в переменные или нет.
  $ids[($trn->id)]= JRequest::getInt ('s'.$trn->id);
  if ($ids[($trn->id)] == 1) {
$query445=$query445.$trn->id.", ";
$query444 = $query444."(
'$trn->id', '$trn->touserid', '$trn->fromuserid', '$trn->fromuserapproved', '$trn->points', '$trn->insert_date', '$trn->accept_date', '$today1', '$trn->rule', '$trn->keyreference', '$trn->namereference', '$trn->datareference'
),";
$prov=1;
}
  };
  if ($prov==1) {
   $length=strlen($query444);															//Обрезаем запятые в конце и проставляем - ;
 $query444=substr($query444,0,$length-1).";";
  $length1=strlen($query445);
 $query445=substr($query445,0, $length1-2).");";
  $database->setQuery($query444);
  $database->query();																				//Выполнение запроса		
  $database->setQuery($query445);
  $database->query();
  } else {
echo ("<script language='JavaScript' type='text/JavaScript'>	
window.focus();
alert (\"Ничего не выбрано. Выберите заявку галочкой\");
</script>");
  }};																//Кончился субмит!
  $query2 = "SELECT a.id as id, b.name as name1, a.touserid as touserid, a.fromuserid as fromuserid , c.name as name2, a.points as points, a.insert_date as insert_date, a.keyreference as keyreference, a.datareference as datareference, a.fromuserapproved as fromuserapproved, d.category as category, a.namereference as namereference FROM `#__tranz_accept` a inner join `#__users` b on a.fromuserid = b.id inner join `#__users` c on a.touserid = c.id left join `#__adsmanager_ads` d on a.keyreference = d.id where (a.touserid = ".$uid.") ORDER BY a.id ASC";
	$database->setQuery($query2);
	$res=$database->loadObjectList();
 if (count ($res) !=0) { 
 echo ("
<script type=\"text/javascript\">
function setChecked() 
{var i;
for(i=0; i<document.form.elements.length; i++)
{
if(document.form.c1.checked==true)
{document.form.elements[i].checked=true;}
else {document.form.elements[i].checked=false;}}}
</script>
<form name='form' method='post'>
<table width='100%' border='3'>
<caption>
<p><h2> Заявки, которые мне ещё не подтвердили </h2></p>
</caption>");
  echo ("<tr>
  <th scope=\"col\"><span id='text'>Все&nbsp;</span><input type='checkbox' onclick='setChecked()' name='c1' /></th>
    <th scope=\"col\">№</th>
    <th scope=\"col\">От участника</th>
    <th scope=\"col\">Участнику</th>
    <th scope=\"col\">Часов</th>
    <th scope=\"col\">Дата</th>
	<th scope=\"col\">Состояние</th>
	<th scope=\"col\">Объявление</th>
  </tr>");	
	$te1=1;			
  foreach ($res as $trn) {
$lnk = JRoute::_( "index.php?option=com_adsmanager&view=details&id=".$trn->keyreference."&catid=".$trn->category."&Itemid=".$trn->keyreference);
  if ($trn->category =='') {$del="$trn->namereference ($trn->keyreference) Удалено"; $rd="bgcolor='#ee9999'";} else {$del="<a href = '$lnk'>$trn->namereference ($trn->keyreference)</a>"; $rd="";} 
 echo ("
  <tr $rd>
  <th width = '40' scope=\"col\"><input type='checkbox' name='s$trn->id' value='1'/></th>
    <td width = '10' align=center>$te1</td>
    <td width = '100' align=center><a href='index.php/profile/userprofile/$trn->fromuserid'>$trn->name1&nbsp;($trn->fromuserid)</a></td>
    <td width = '100' align=center><a href='index.php/profile/userprofile/$trn->touserid'>$trn->name2&nbsp;($trn->touserid)</a></td>
    <td width = '50' align=center>$trn->points</td>
    <td width = '70' align=center>$trn->insert_date</td>
	");
	if ($trn->fromuserapproved == (-1)) {echo ("<td width = '72' align=center bgcolor='#ee9999'>Отказ</td>");} else {echo ("<td width = '72' align=center>Отправлено</td>");};
	
	echo ("<td align=center>$del</td>
</tr>
  ");
  $te1=$te1+1;
  };
    echo ("</table><p>&nbsp;</p> <p><input type='submit'  value = 'Удалить' /></p><INPUT TYPE=HIDDEN NAME='proc' VALUE='1'> </form>");}  else {echo "<div align=center><p><h2>  Заявки, которые мне ещё не подтвердили </h2></p><p><h3>Нет заявок на перевод часов</h3></p><p>Для того что бы отправить заявку на перевод вам часов от другого участника за оказанную услугу или проданный товар, нужно перейти в меню \"Предложение\". Найти своё объявление. Нажать кнопку продать. В открывшемся окне выбрать участника, количество и цену, после чего нажать кнопку продать.</p></div>";};
} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
	?>