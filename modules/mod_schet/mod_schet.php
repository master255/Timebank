<?php
defined('_JEXEC') or die('Restricted access');
$user = & JFactory::getUser ();
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$database->setQuery('SELECT points, min_points, max_points FROM `#__users` where id='.$user->id);
$res=$database->loadObject();
$er=''; $er1='';
if ($res->points!=0) {$er='<a href="/otchjot-o-platezhakh">'; $er1='</a>';}
if ($res->min_points<0) {$min='  +('.($res->min_points)*(-1).')='.($res->points-$res->min_points);} else {$min='';}
echo "<center><h2><table><tr><td><div id='poin' align = 'center'>".$er.$res->points.$er1."</div></td><td>".$min."</td></tr></table></h2></center><table width=100%><tr><td align='left'><a href='/predlozhenie'>Заработать</a></td><td align='right'><a href='/component/tranz/?view=donation&layout=donation'>Купить</a></td></tr></table>";}
?>