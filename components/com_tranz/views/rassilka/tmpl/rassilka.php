<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();
$database =& JFactory::getDBO();
$otvet = JRequest::getint('otvet');
$vst = JRequest::getint('vst');
$user1 = JRequest::getint('user');
$cod = JRequest::getint('cod');
$database->setQuery('SELECT id FROM `#__tranz_cod` where ((vst_id='.$vst.') and (user_id='.$user1.') and (cod='.$cod.'))');
$rez67=$database->loadObjectList();
if (count ($rez67)>0) {
if ($otvet==1) {
$database->setQuery('SELECT uch FROM `#__tranz_vstrechi` where id='.$vst);
$rez67=$database->loadResult();
$array = explode(",", $rez67);
if ((in_array($user1, $array))) {echo "Спасибо, увидимся на встрече! Ваш голос учтён.";} elseif (in_array(($user1*(-1)), $array)) {
unset ($array[array_search(($user1*(-1)), $array)]); 
array_push($array, $user1);
$inn=implode (",", $array);
$database->setQuery ("UPDATE `#__tranz_vstrechi` SET `uch` = '".$inn."' WHERE `#__tranz_vstrechi`.`id` = '".$vst."'");
$database->query();
echo "Спасибо, увидимся на встрече! Ваш голос учтён.";
} else {
if ($rez67!='') {$inn=$rez67.','.$user1;} else {$inn=$user1;}
$database->setQuery ("UPDATE `#__tranz_vstrechi` SET `uch` = '".$inn."' WHERE `#__tranz_vstrechi`.`id` = '".$vst."'");
$database->query();
echo "Спасибо, увидимся на встрече! Ваш голос учтён.";}
} else {

$database->setQuery('SELECT uch FROM `#__tranz_vstrechi` where id='.$vst);
$rez67=$database->loadResult();
$array = explode(",", $rez67);
if ((in_array(($user1*(-1)), $array))) {echo "Очень жаль. На встрече будет интересно. Вы можете переголосовать позже.";} elseif (in_array($user1, $array)) {
unset ($array[array_search($user1, $array)]); 
array_push($array, ($user1*(-1)));
$inn=implode (",", $array);
$database->setQuery ("UPDATE `#__tranz_vstrechi` SET `uch` = '".$inn."' WHERE `#__tranz_vstrechi`.`id` = '".$vst."'");
$database->query();
echo "Очень жаль. На встрече будет интересно. Вы можете переголосовать позже.";
} else {
if ($rez67!='') {$inn=$rez67.','.($user1*(-1));} else {$inn=($user1*(-1));}
$database->setQuery ("UPDATE `#__tranz_vstrechi` SET `uch` = '".$inn."' WHERE `#__tranz_vstrechi`.`id` = '".$vst."'");
$database->query();
echo "Очень жаль. На встрече будет интересно. Вы можете переголосовать позже.";}}} else {
echo 'Извините, что-то пошло не так. Возможно мероприятие уже прошло. Вы не смогли проголосовать. По всем вопросам можете воспользоваться формой обратной связи слева.';
JUtility::sendMail('info@timebankspb.ru', 'Безопасность!', 'masters@inbox.ru', 'Попытка взлома сайта', 'Пользователь не смог проголосовать за встречу. Одно из 3 условий не выполнилось. Условия:vst_id='.$vst.', user='.$user1.', cod='.$cod.' Файл rassilka.php строка 46.',0);
}
?>
