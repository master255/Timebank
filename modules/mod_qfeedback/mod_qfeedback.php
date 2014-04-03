<?php
defined('_JEXEC') or die('Restricted access');
$user = & JFactory::getUser (); 
$database =& JFactory::getDBO();
$document =& JFactory::getDocument();
$document->addStyleSheet('/modules/mod_qfeedback/css/styles.css');
if ($user->get('guest') != 1) {$nam = $user->name.' ('.$user->id.')';} else {$nam='';}
echo '
<div id="contactable"><!-- contactable html placeholder --></div>
<script type="text/javascript" src="/modules/mod_qfeedback/jquery.validate.min.js"></script>
<script type="text/javascript" src="/modules/mod_qfeedback/qfeedback.js"></script>
<script type="text/javascript">$(function(){$(\'#contactable\').contactable("'.$nam.'", "'.$user->email.'");});</script>
';
?>