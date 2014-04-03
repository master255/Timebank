 <?php
defined('_JEXEC') or die();
$user = & JFactory::getUser (); 
if (!$user->guest) {
$pat=strtolower(urldecode (JRequest::getstring('pat')));
$rez=0;
if (((@imagecreatefromjpeg ($pat)==true) and (strpos ($pat, ".jpg") !==false)) or ((@imagecreatefromjpeg ($pat)==true) and (strpos ($pat, ".jpeg") !==false)) or ((@imagecreatefromgif ($pat)==true) and (strpos ($pat, ".gif") !==false)) or ((@imagecreatefrompng ($pat)==true) and (strpos ($pat, ".png") !==false))) {$rez=1;} else {$rez=0;}
if ($rez==1) {echo 1;} else {echo 0;}
}
 ?>