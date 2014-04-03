 <?php 
 defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$htm=JRequest::getInt ('no_html', 0);
$limit = 20;
$limit_start = JRequest::getVar('limitstart', 0, '', 'int');																			
				$query2 = "SELECT SQL_CALC_FOUND_ROWS a.id as id, b.name as name1, a.touserid as touserid, a.fromuserid as fromuserid , c.name as name2, a.points as points, a.insert_date as insert_date, a.keyreference as keyreference, a.datareference as datareference, a.rank as rank, a.accept_date as accept_date, a.namereference as namereference, d.category as category, e.name as delname1, f.name as delname2, d.published as publ FROM `#__tranz_data` a left join `#__users` b on a.fromuserid = b.id left join `#__users` c on a.touserid = c.id left join `#__adsmanager_ads` d on a.keyreference = d.id left join `#__users_del` e on a.fromuserid = e.id left join `#__users_del` f on a.touserid = f.id where (a.touserid = ".$user->id." or a.fromuserid = ".$user->id.")    ORDER BY a.id DESC";
				$database->setQuery($query2, $limit_start, $limit);
				$res=$database->loadObjectList();					//Запрос формирующий основную таблицу	
if ($htm==1) {
if (count ($res)>0) {
foreach ($res as $trn) 
{
if ((($trn->category =='') and ($trn->keyreference !=0) ) or ($trn->publ==0)) {$del=$trn->namereference." (".$trn->keyreference.") Удалено";} 
	elseif (($trn->category !='') and ($trn->keyreference !=0)) {$del=$trn->namereference." (".$trn->keyreference.")"; }
	elseif ($trn->keyreference ==0) {$del=" bgcolor='#f7f7f7'>".$trn->namereference." (".$trn->keyreference.")";}; 
	if ($trn->name1 !='') {$del1 =$trn->name1." ($trn->fromuserid)";} else {$del1=$trn->delname1." ($trn->fromuserid) Удалён";};
	if ($trn->name2 !='') {$del2 =$trn->name2." ($trn->touserid)";} else {$del2=$trn->delname2." ($trn->touserid) Удалён";};
 if ($user->id==$trn->touserid) {$del3="+".round ($trn->points);} else {$del3="-".round ($trn->points);}
 echo '>'.$trn->id.'|'.$del1.'|'.$del2.'|'.$del3.'|'.$trn->rank.'|'.$trn->insert_date.'|'.$trn->accept_date.'|'.$del.'<';
}} else {echo '>'.$trn->id.'|'.$del1.'|'.$del2.'|'.$del3.'|'.$trn->rank.'|'.$trn->insert_date.'|'.$trn->accept_date.'|'.$del.'<';}
} else {
if (empty($res)) {
echo "<div align=center><p><h2>Мои подтверждённые платежи</h2></p><p><h3>Нет платежей </h3></p></div>";
} else {
 echo ("
  <table border='3' >
  <caption>
 <p><h2>Мои подтверждённые платежи</h2> <div align='right'><a href='index.php?option=com_tranz&view=xls&layout=xls&no_html=1&table=2'>Скачать таблицу</a></div></p>
  </caption>
  <tr>
    <th width = '10' scope=\"col\">№</th>
    <th width = '100' scope=\"col\">От участника</th>
    <th width = '100' scope=\"col\">Участнику</th>
    <th width = '50' scope=\"col\">Часов&nbsp;</th>
	<th width = '29' scope=\"col\">Рейт&nbsp;</th>
    <th width = '60' scope=\"col\">Дата создания</th>
	<th width = '60' scope=\"col\">Дата подтверждения</th>
    <th scope=\"col\">Объявление</th>
  </tr>");
$database->setQuery('SELECT FOUND_ROWS();');
jimport('joomla.html.pagination');
$pageNav = new JPagination( $database->loadResult(), $limit_start, $limit );
 foreach ($res as $trn) {
  $del='';
  $del1='';
  $del2='';//При изменении дублировать в мобильную версию выше.
	if ((($trn->category =='') and ($trn->keyreference !=0) ) or ($trn->publ==0)) {$del=" bgcolor='#f7f7f7'>".$trn->namereference." (".$trn->keyreference.") Удалено";} 
	elseif (($trn->category !='') and ($trn->keyreference !=0)) {$del="><a href = 'index.php?option=com_adsmanager&view=details&id=".$trn->keyreference."&catid=".$trn->category."&Itemid=".$trn->keyreference."'>".$trn->namereference." (".$trn->keyreference.")</a>"; }
	elseif ($trn->keyreference ==0) {$del=" bgcolor='#f7f7f7'>".$trn->namereference." (".$trn->keyreference.")";}; 
	if ($trn->name1 !='') {$del1 ="><a href ='index.php/profile/userprofile/".$trn->fromuserid."'>".$trn->name1."&nbsp;($trn->fromuserid)</a>";} else {$del1=" bgcolor='#f7f7f7'>".$trn->delname1."&nbsp;($trn->fromuserid) Удалён";};
	if ($trn->name2 !='') {$del2 ="><a href ='index.php/profile/userprofile/".$trn->touserid."'>".$trn->name2."&nbsp;($trn->touserid)</a>";} else {$del2=" bgcolor='#f7f7f7'>".$trn->delname2."&nbsp;($trn->touserid) Удалён";};
 if ($user->id==$trn->touserid) {$del3=" bgcolor='#e0ffdf'>+".$trn->points;} else {$del3=" bgcolor='#ffdfdf'>-".$trn->points;}
 $del4='';
 if ($trn->insert_date==$trn->accept_date) {$del4=" bgcolor='#e0ffdf'";}
  echo ("
  <tr>
    <td align=center>$trn->id</td>
    <td align=center$del1</td>
    <td align=center$del2</td>
    <td align=center$del3</td>
	<td align=center>$trn->rank</td>
    <td align=center$del4>$trn->insert_date</td>
    <td align=center$del4>$trn->accept_date</td>
    <td align=center$del</td>
  </tr>
  ");
  };
    echo ("</table>");
  echo "<p><div align='center'>".$pageNav->getPagesLinks(), $pageNav->getResultsCounter()."</div></p>";
}; }} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
  ?>