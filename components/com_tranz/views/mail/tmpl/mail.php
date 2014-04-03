 <?php
defined('_JEXEC') or die('Restricted access');
	//declare our assets 
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['message']);
	$subject = stripcslashes($_POST['subject']);
        $page = stripcslashes($_POST['page']);
        $headers = "From: \"$name\" <$emailAddr>\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$tim1=(time()+32400);
	$today1=date("Y-m-d H:i:s",$tim1);
	$user = & JFactory::getUser ();
	if (!$user->guest) {$pam = "Имя пользователя: $user->name ($user->id)
Логин: $user->username";} else {$pam = "Имя пользователя: гость";}
	
	$contactMessage =  
"Имя отправителя: $name <$emailAddr>
        
$comment

Письмо отправлено со страницы: $page
IP отправителя: $_SERVER[REMOTE_ADDR]
Дата отправления: $today1
$pam";
		
		//send the email
		if ((JUtility::sendMail($emailAddr, $name, 'файл mail.php', 'Обратная связь',$contactMessage,0))==true) {
		echo('success');} //return success callback
 ?>