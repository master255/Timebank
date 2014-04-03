  <?php 
 defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$uid=$user->id;
$ikran="";
$proc=JRequest::getInt ('proc');
if ($proc==1) {
$s1=JRequest::getInt ('s1');
$s2=JRequest::getInt ('s2');
$s3=JRequest::getInt ('s3');
$s4=JRequest::getInt ('s4');
$s5=JRequest::getInt ('s5');
$s6=JRequest::getInt ('s6');
$s7=JRequest::getInt ('s7');
$s8=JRequest::getInt ('s8');
$s9=JRequest::getInt ('s9');
$s10=JRequest::getInt ('s10');
$s11=JRequest::getInt ('s11');
$qw="UPDATE `#__users` SET `sett1` = '$s1', `sett2` = '$s2', `sett3` = '$s3', `sett4` = '$s4', `sett5` = '$s5', `sett6` = '$s6', `sett7` = '$s7', `sett8` = '$s8', `sett9` = '$s9', `sett10` = '$s10', `sett11` = '$s11' WHERE `#__users`.`id` =".$uid;
$database->setQuery($qw);
$database->query();
$ikran="Сохранено";
};
	$database->setQuery("SELECT * FROM `#__users` where id=".$uid);	
	$usern=$database->loadObjectList();										//Общий запрос на получение информации о текущем пользователе
	foreach($usern as $us);	
if ($us->sett1==1) {$uss1="checked";} else {$uss1="";};
if ($us->sett2==1) {$uss2="checked";} else {$uss2="";};
if ($us->sett3==1) {$uss3="checked";} else {$uss3="";};
if ($us->sett4==1) {$uss4="checked";} else {$uss4="";};
if ($us->sett5==1) {$uss5="checked";} else {$uss5="";};
if ($us->sett6==1) {$uss6="checked";} else {$uss6="";};
if ($us->sett7==1) {$uss7="checked";} else {$uss7="";};
if ($us->sett8==1) {$uss8="checked";} else {$uss8="";};
if ($us->sett9==1) {$uss9="checked";} else {$uss9="";};
if ($us->sett10==1) {$uss10="checked";} else {$uss10="";};
if ($us->sett11==1) {$uss11="checked";} else {$uss11="";};
echo "<div align=center><h2>Настройки всплывающих сообщений:</h2></div>
<form name='form1' metod=\"post\">
<p>
  <input type='checkbox' name='s1' id='1' value='1' $uss1/>
  Уведомлять о новых сообщениях
</p>
<p>
  <input type='checkbox' name='s2' id='2' value='1' $uss2/>
  Уведомлять о новых заявках на перевод от меня часов
</p>
<p>
  <input type='checkbox' name='s3' id='3' value='1' $uss3/>
  Уведомлять о новых переводах часов связанных с моим счётом
</p>
<p>
  <input type='checkbox' name='s8' id='8' value='1' $uss8/>
  Уведомлять об отказах мне в переводе часов
</p>
<p>
  <input type='checkbox' name='s4' id='4' value='1' $uss4/> 
  Уведомлять о новых объявлениях
</p>
<p>
  <input type='checkbox' name='s5' id='5' value='1' $uss5/>
Уведомлять о новых сообщениях на форуме</p>
<div align=center><h2>Настройки уведомлений на почту:</h2></div>
<p>
  <input type='checkbox' name='s6' id='6' value='1' $uss6/>
Уведомлять по почте о новых переводах часов связанных с моим счётом</p>
<p>
  <input type='checkbox' name='s7' id='7' value='1' $uss7/>
Уведомлять по почте о заявках на перевод от меня часов</p>
<p>
  <input type='checkbox' name='s9' id='9' value='1' $uss9/>
Уведомлять по почте об отказах в переводе часов</p>
<p>
  <input type='checkbox' name='s11' id='11' value='1' $uss11/>
Получать приглашения на мероприятия по почте</p>
<div align=center><h2>Настройки интерфейса:</h2></div>
<p>
  <input type='checkbox' name='s10' id='10' value='1' $uss10/>
Включить автопрокрутку к главному на странице</p>
 <p><input type='submit'  value = 'Сохранить' />&nbsp;&nbsp;<font color='#4cdd20'>".$ikran."</font></p><INPUT TYPE=HIDDEN NAME='proc' VALUE='1'>
 </form>
 ";
} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
?>