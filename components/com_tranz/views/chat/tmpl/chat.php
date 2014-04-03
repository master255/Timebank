<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$no=JRequest::getInt ('no', 0);
if ($no==1) {
$with=JRequest::getInt ('with', 0);
if ($with!=0) {
$no_html=JRequest::getInt ('no_html', 0);

if ($no_html==0) {
echo '<div align="center"><h2>Чат Банка времени</h2></div>';
echo '<script language="JavaScript" type="text/JavaScript">
var mes; var tmo;
function refresh (mes)
{if (mes==undefined) {mes=0;}
if (mes==1) {mss="&mess="+encodeURIComponent($("#mes").val()); } else {if (mes==0) {mss="";} else {if (mes==2) {mss="&first=1";}}}
if (!((mes==1) && ($("#mes").val()=="")))  {
$.ajax({
type: "POST",
url: "/index.php?option=com_tranz&view=chat&layout=chat&with='.$with.'&no_html=1&no=2"+mss,
cache: false,
success: function (otv){

if (otv!="") {$("#hist").append(otv); $("#hist").scrollTop(99999);}
if ((mes==0) || (mes==2)) {clearTimeout(tmo); tmo = setTimeout(refresh, 5000);}
if (mes==1) {clearTimeout(tmo); $("#mes").val(""); refresh (0);}
}});}

}
$(document).ready(function(){
refresh(2);
});
</script>';}

echo '<div id="chat"><div id="hist" style="height: 350px; overflow: auto;"></div>';
echo '<textarea style="margin-top: 10px;" cols="78" rows="8" id="mes" name="message" class="mess_area"></textarea>';
echo '<table  width=100% style="margin-top: 5px;" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td width="165px">
<div >
<button type="button" name="mes" class="btn4med btn4orange" onclick="refresh (1);" title="Отправить">
<div>
<span>Отправить</span>
</div>
</button>
</div>
</td>
<td valign="top">
<div id="status" class="status">
<div class="status_norm"> </div>
</div>
</td>
</tr>
</tbody>
</table>';
echo '</div>';
}
} elseif ($no==2) {
$with=JRequest::getInt ('with', 0);
if ($with!=0) {
$mess=JRequest::getString ('mess', '');
if ($mess!='') {
 $database->setQuery('INSERT INTO w96sn_uddeim (id, replyid, fromid, toid, message, datum, toread, totrash, totrashdate, totrashoutbox, totrashdateoutbox, expires, disablereply, systemflag, `delayed`, systemmessage, archived, cryptmode, flagged, crypthash, publicname, publicemail) VALUES (NULL, 0, '.$user->id.', '.$with.', '.$database->Quote($mess).', '.time().', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL);');
$rr=$database->Query(); } else {
$first=JRequest::getInt ('first', 0);
$session =& JFactory::getSession();
if ($first==1) {$time=0; $session->set ('time1', 1);} else {$time=$session->get ('time1', 0);}
$database->setQuery('SELECT a.*, b.name as name1, b.id as idd, c.name as name2
FROM
  w96sn_uddeim a inner join w96sn_users b on a.fromid=b.id inner join w96sn_users c on a.toid=c.id
WHERE
  (fromid = '.$user->id.'
  OR toid = '.$user->id.')
  AND (fromid = '.$database->Quote($with).'
  OR toid = '.$database->Quote($with).') and (datum>'.$database->Quote($time).') order by datum');
$rez=$database->loadObjectList();
if (count ($rez)>0) {
foreach ($rez as $rez1) {
echo '<div style = "font-size: 120%;"><strong ><a href="/profile/userprofile/'.$rez1->idd.'">'.$rez1->name1.'</a></strong>  '.date ('j.m.y - G:i:s', $rez1->datum).'</div><div>'.$rez1->message.'</div>';
if ($rez1->toid==$user->id) {
$database->setQuery('UPDATE w96sn_uddeim
SET
   toread = 1, totrash = 1, totrashdate = '.time().'
WHERE
  id ='.$rez1->id);
$database->Query ();
}
}
$session->set ('time1', $rez1->datum);
} else {if ($time==0) {echo '<div align="center"><h3>Нет сообщений</h3></div>';}}

}}}}  else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
?>