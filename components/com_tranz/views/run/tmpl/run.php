 <?php
defined('_JEXEC') or die();
  $user = & JFactory::getUser (); 
if (!$user->guest) {
 $database =& JFactory::getDBO();
    $uid=$user->id;
	$database->setQuery("SELECT message, points, sett1, sett2, sett3, sett4, sett5, sett8 FROM `#__users` where id=".$uid);	
	$usern=$database->loadObjectList();										//Общий запрос на получение информации о текущем пользователе
	foreach($usern as $us);
$mess = $us->message;
$upd=0;
  if ($mess !='') {
  $nach = strpos ($mess, "u");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "u");
  $len = strlen ($mess);
  echo "u".$us->points."u";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
 $upd = 1;
  };
  };
if ($us->sett1==1)	{
  if ($mess !='') {
  $nach = strpos ($mess, "s");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "s");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "s".$re."s";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
 $upd = 1;
  };
  };
  };
  if ($us->sett2==1)	{
  if ($mess !='') {
  $nach = strpos ($mess, "t");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "t");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "t".$re."t";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
 $upd=1;
  };
  };
  };
   if ($us->sett3==1)	{
 if ($mess !='') {
  $nach = strpos ($mess, "n");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "n");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "n".$re."n";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
  $upd=1;
  };
  };
  };
     if ($us->sett4==1)	{
  if ($mess !='') {
  $nach = strpos ($mess, "o");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "o");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "o".$re."o";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
$upd=1;
  };
  };
  };
     if ($us->sett5==1)	{
  if ($mess !='') {
  $nach = strpos ($mess, "k");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "k");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "k".$re."k";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
$upd=1;
  };
  };
  }
       if ($us->sett8==1)	{
  if ($mess !='') {
  $nach = strpos ($mess, "j");
  if ($nach === false) {} else {
  $kon = strrpos ($mess, "j");
  $len = strlen ($mess);
  $re = substr ($mess, $nach+1, ((($len-$nach)-($len-$kon))-1));
  echo "j".$re."j";
  $mess = (substr ($mess, 0, $nach)).(substr ($mess, $kon+1, ($len-$kon)));
$upd=1;
  };
  };
  }
  if ($upd=1) {
  $query = "UPDATE `#__users` SET `message` = '".$mess."' WHERE `#__users`.`id` =".$uid;
  $database->setQuery($query);	
  $database->query();
  };
  }
 ?>