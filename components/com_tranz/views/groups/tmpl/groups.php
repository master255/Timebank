<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$user = & JFactory::getUser ();																		//Объявляем основные переменные
if ($user->get('guest') != 1) {
$database =& JFactory::getDBO();
$no=JRequest::getInt ('no', 0);
$database->setQuery('SELECT id FROM #__tranz_groups WHERE prigl like (\'%-'.$user->id.'%\') order by name');
$tmm=$database->loadObjectList();
if (count ($tmm)>0) {$priglst=' ('.count ($tmm).')';} else {$priglst='';}
$database->setQuery('SELECT id from #__tranz_groups where ((FIND_IN_SET (\''.$user->id.'\', admusers)) and (zaiav!=\'\'))');
$tm8=$database->loadObjectList();
if (count ($tm8)>0) {$zaiavk=' ('.count ($tm8).')';} else {$zaiavk='';}
if (($no==1) or ($no==0)) {
$vih=JRequest::getInt ('vih', 0);
if ($vih==1) {
$group=JRequest::getInt ('group', 0);
if ($group!=0) {
$database->setQuery('SELECT users, admusers, prigl FROM #__tranz_groups where id='.$group);
$th=$database->loadObjectList ();
foreach ($th as $th1);
$uid=$user->id;
$user4=JRequest::getInt ('user4', 0);
if (((in_array ($uid, explode (',', $th1->users)) )==true) or ((in_array ($user4.'-'.$uid, explode (',', $th1->prigl)))==true)) {
if ((in_array ($user4.'-'.$uid, explode (',', $th1->prigl)))==true) {
$tmt=explode (',', $th1->prigl);
unset ($tmt [array_search($user4.'-'.$uid, $tmt)]);
$tmt1=implode (',', array_unique(array_diff($tmt, array(''))));
$dop2=' , prigl=\''.$tmt1.'\'';} else {$dop2='';}
$admu=explode (',', $th1->admusers);
$uu=explode (',', $th1->users);
if ((in_array ($uid, explode (',', $th1->admusers)) )==true) {unset ($admu [array_search($uid, $admu)]);}
if ((in_array ($uid, explode (',', $th1->users)) )==true) {unset ($uu [array_search($uid, $uu)]);}
$admu=implode (',', array_unique(array_diff($admu, array(''))));
$uu=implode (',', array_unique(array_diff($uu, array(''))));
$database->setQuery('UPDATE #__tranz_groups
SET
admusers = \''.$admu.'\', users = \''.$uu.'\''.$dop2.'
WHERE
  id ='.$group);
$database->Query();
}
}} elseif ($vih==2) {
$group=JRequest::getInt ('group', 0);
if ($group!=0) {
$database->setQuery('SELECT users, admusers, dov, creator, prigl FROM #__tranz_groups where id='.$group);
$th=$database->loadObjectList ();
foreach ($th as $th1);
$uid=$user->id;
$user4=JRequest::getInt ('user4', 0);
if ((((in_array ($uid, explode (',', $th1->users)) )==false) and ($th1->dov==0)) or ($uid==$th1->creator) or ((in_array ($user4.'-'.$uid, explode (',', $th1->prigl)))==true)) {
if ($uid==$th1->creator) {
$svp=explode (',', $th1->admusers);
$svp[]=$uid;
$svp=implode (',', array_unique(array_diff($svp, array(''))));
$dop1=' , admusers=\''.$svp.'\'';} else {$dop1='';}
if ((in_array ($user4.'-'.$uid, explode (',', $th1->prigl)))==true) {
$tmt=explode (',', $th1->prigl);
unset ($tmt [array_search($user4.'-'.$uid, $tmt)]);
$tmt1=implode (',', array_unique(array_diff($tmt, array(''))));
$dop2=' , prigl=\''.$tmt1.'\'';} else {$dop2='';}
$uu=explode (',', $th1->users);
$uu[]=$uid;
$uu=implode (',', array_unique(array_diff($uu, array(''))));
$database->setQuery('UPDATE #__tranz_groups
SET
 users = \''.$uu.'\''.$dop1.$dop2.'
WHERE
  id ='.$group);
$database->Query();
}
}
}
}
echo '<script language="JavaScript" type="text/JavaScript">
var ii; var gh; var nn; var back;
function check() {
$("#result").click(function() {
        var valid = $("#formval1").valid();
        if(valid)
        {
		showall (2,1,0,0);
        }
    });
$("#result1").click(function() {
        var valid = $("#formval1").valid();
        if(valid)
        {
		showall (4,3,0,0);
        }
    });
$("#formval1").validate({

errorPlacement: function(error,element) { return true; }});
}
function showall(no,kl,nomm,group)
{
st="";
noy=0;
if (kl==8) {
if (group==2) {st=st+"&zaiav=2&group="+nomm;} 
if (group==1) {st=st+"&zaiav=1&group="+nomm;}
}
if (kl==9) {
if (nomm==1) {
st=st+"&vih=1&group="+group;
}
if (nomm==2) {
st=st+"&vih=2&group="+group;
}
}
if (kl==10) {st=st+"&vih=2&group="+group+"&user4="+nomm;}
if (kl==11) {st=st+"&vih=1&group="+group+"&user4="+nomm;}
if (no==2) {
if (kl==1) {
st=st+"&proc=1&nam1="+$("input[name=\'nam\']").val()+"&opis="+$("#opis").val()+"&site="+$("input[name=\'site\']").val()+"&typeg="+$("#typeg option:selected").val()+"&types="+$("#types option:selected").val()+"&user="+$("input[name=\'user\']").val();
}
if (kl==2) {
if ((gh==0) || (nn!=nomm)) {gh=1; nn=nomm; alert ("Подтвердите удаление группы.\\n Нажмите удалить ещё раз."); st=st+"&nom="+nomm; noy=1;} else {
st=st+"&del=1&nom="+nomm; gh=0;}
}}
if (no==4) {
if (kl==2) {
st=st+"&id="+nomm;}
if (kl==3) {
if (($("input[name=\'coll1\']").val())>0) {
mass=$("input[name=\'usse\']").val().split (\',\');
for (var i=0; i<($("input[name=\'coll1\']").val()); i++)
{
if (($(\':radio[name=\'+"odobr"+mass[i]+\']\').filter(":checked").val())>0) {
if (st.indexOf("&odb=1")==-1) {st=st+"&odb=1";}
st=st+"&odobr"+mass[i]+"="+($(\':radio[name=\'+"odobr"+mass[i]+\']\').filter(":checked").val());
}}
}
if (($("input[name=\'upr\']").val())>0) {
mask=$("input[name=\'al\']").val().split (\',\');
for (var i=0; i<($("input[name=\'upr\']").val()); i++)
{
if (($(\':radio[name=\'+"vib1"+mask[i]+\']\').filter(":checked").val())>0) {
if (st.indexOf("&uprr=1")==-1) {st=st+"&uprr=1";}
st=st+"&upp"+mask[i]+"="+($(\':radio[name=\'+"vib1"+mask[i]+\']\').filter(":checked").val());
}}
}
st=st+"&save=1&nam="+encodeURIComponent($("input[name=\'nam\']").val())+"&opis="+encodeURIComponent($("#opis").val())+"&site="+encodeURIComponent($("input[name=\'site\']").val())+"&typeg="+$("#typeg option:selected").val()+"&types="+$("#types option:selected").val()+"&user="+$("input[name=\'user\']").val()+"&id="+$("input[name=\'id\']").val();
}
}
if (no==5) {
st=st+"&group="+kl;
}
if (no==6) {
if (group==0) {st=st+"&group="+kl;}
if ((group==1) || (group==2)) {st=st+"&user="+nomm+"&group="+kl+"&proc="+group;}
}
if (no==7) {
st=st+"&group="+kl;
}
if (noy==0) {
$.ajax({
type: "POST",
url: "/index.php?option=com_tranz&view=groups&layout=groups&no="+no+"&no_html=1"+st,
cache: false,
success: function (otv){
$(\'#all7\').slideUp (100, function () {$("#all7").html(otv);
if ((no==3)||(no==4)) {check ();}
});
$(\'#all7\').slideDown (300);
}});};};
</script><div id="all7">';
if ($no==0) {
echo '

<div align="center"><h2>Мои группы</h2></div>';
$database->setQuery('SELECT *
FROM
  #__tranz_groups
WHERE
  FIND_IN_SET (\''.$user->id.'\', users)
ORDER BY
  name');
$res=$database->loadObjectList();
echo '
<table align="left"><tr><td><input type="button" disabled value = "Мои группы"/></td><td><input type="button"  onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;<table width=100% border=1 style="margin: 7px 0px 0px 0px;"><tr><th>№</th><th>Название</th><th>Количество участников</th><th width=55>Тип</th><th>Управление</th></tr>';
if (count ($res)>0) {
foreach ($res as $rez) {
$col=count (array_diff(explode (',', $rez->users), array('')));
if ((in_array ($user->id, explode (',', $rez->users)) )==true) {$tyt='<input type="button" onClick="showall(0,9,1,'.$rez->id.')" value = "Выйти"/>';} else {$tyt='<input type="button" onClick="showall(0,9,2,'.$rez->id.')" value = "Вступить"/>';}
if ($rez->dov==0) {$typ='Открытая';} elseif ($rez->dov==1) {$typ='Закрытая';} elseif ($rez->dov==2) {$typ='Частная';}
echo '<tr><td align="center">'.$rez->id.'</td><td align="center"><a href="/groups?no=5&group='.$rez->id.'">'.$rez->name.'</a></td><td align="center">'.$col.'</td><td align="center">'.$typ.'</td><td align="center">'.$tyt.'</td></tr>';
}} else {echo '<tr><td colspan=5 align="center">У вас ещё нет групп. Попробуйте создать свою группу или вступить в чужую на вкладке "Все группы"</td></tr>';}
echo '</table>';
}
elseif ($no==1) { //-------------------------------1-----------------------------
$zaiav=JRequest::getInt('zaiav',0);
if ($zaiav==1) {
$uid=$user->id;
$group=JRequest::getInt('group',0);
if ($group!=0) {
$database->setQuery('SELECT *
FROM
  #__tranz_groups
where id='.$database->Quote($group));
$rrt=$database->loadObjectList();
foreach ($rrt as $rrt1);
if (($rrt1->dov==1) and ((in_array ($uid, explode (',', $rrt1->zaiav)) )==true)) {
$zai=explode (',', $rrt1->zaiav);
unset ($zai [array_search($uid, $zai)]);
$zai=implode (',', array_unique(array_diff($zai, array (''))));
$database->setQuery('UPDATE #__tranz_groups
SET
zaiav = \''.$zai.'\'
WHERE
  id ='.$database->Quote($group));
$database->Query();
}
}
} elseif ($zaiav==2) {
$uid=$user->id;
$group=JRequest::getInt('group',0);
if ($group!=0) {
$database->setQuery('SELECT *
FROM
  #__tranz_groups
where id='.$database->Quote($group));
$rrt=$database->loadObjectList();
foreach ($rrt as $rrt1);
if (($rrt1->dov==1) and ((in_array ($uid, explode (',', $rrt1->users)) )==false) and ((in_array ($uid, explode (',', $rrt1->admusers)) )==false) and ((in_array ($uid, explode (',', $rrt1->zaiav)) )==false)) {
$zai=explode (',', $rrt1->zaiav);
$zai[]=$uid;
$zai=implode (',', array_unique(array_diff($zai, array(''))));
$database->setQuery('UPDATE #__tranz_groups
SET
zaiav = \''.$zai.'\'
WHERE
  id ='.$database->Quote($group));
$database->Query();
}}}
echo '<div align="center"><h2>Все группы</h2></div>';
$database->setQuery('SELECT *
FROM
  #__tranz_groups
ORDER BY
  name');
$res=$database->loadObjectList();
echo '
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" disabled value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;<table width=100% border=1 style="margin: 7px 0px 0px 0px;"><tr><th>№</th><th>Название</th><th>Количество участников</th><th width=55>Тип</th><th>Управление</th></tr>';
if (count ($res)>0) {
foreach ($res as $rez) {
$col=count (array_diff(explode (',', $rez->users), array('')));
if ($rez->dov==0) {$typ='Открытая';} elseif ($rez->dov==1) {$typ='Закрытая';} elseif ($rez->dov==2) {$typ='Частная';}

if ((in_array ($user->id, explode (',', $rez->users)) )==true) {$tyt='<input type="button" onClick="showall(1,9,1,'.$rez->id.')" value = "Выйти"/>';} else {
if ($rez->creator!=$user->id) {
if ($rez->dov==2) {$tyt='<input type="button" disabled value = "Вступить"/>';} elseif ($rez->dov==1) {if ((in_array ($user->id, explode (',', $rez->zaiav)))==true) {$tyt='<input type="button" disabled value = "Подать заявку"/><input type="button" onClick="showall(1,8,'.$rez->id.',1)" value = "Отменить"/>';} else {$tyt='<input type="button" onClick="showall(1,8,'.$rez->id.',2)" value = "Подать заявку"/><input type="button" disabled value = "Отменить"/>';}}
elseif ($rez->dov==0) {$tyt='<input type="button" onClick="showall(1,9,2,'.$rez->id.')" value = "Вступить"/>';}
} else {$tyt='<input type="button" onClick="showall(1,9,2,'.$rez->id.')" value = "Вступить"/>';}}
echo '<tr><td align="center">'.$rez->id.'</td><td align="center"><a href="/groups?no=5&group='.$rez->id.'">'.$rez->name.'</a></td><td align="center">'.$col.'</td><td align="center">'.$typ.'</td><td align="center">'.$tyt.'</td></tr>';
}} else {echo '<tr><td colspan=5 align="center">Уникальный момент! Когда ещё не одной группы не создано! В этом разделе можно всегда просмотреть весь список групп. Кроме этого тут будут появляться приглашения от других пользователей на вступление в группы.</td></tr>';}
echo '</table>';
$database->setQuery('SELECT * FROM #__tranz_groups WHERE prigl like (\'%-'.$user->id.'%\') order by name');
$prigl=$database->loadObjectList();
if (count ($prigl)>0) {
echo '<div align="center"><h2>Вас приглашают:</h2></div>
<form id="formval5">
<table width=100% border=1 style="margin: 7px 0px 0px 0px;"><tr><th>№</th><th>От кого</th><th>Группа</th><th>Количество участников</th><th width=55>Тип</th><th>Управление</th></tr>';
foreach ($prigl as $prigl1)
{
if ($prigl1->dov==0) {$tpe='Открытая';} elseif ($prigl1->dov==1) {$tpe='Закрытая';} elseif ($prigl1->dov==2) {$tpe='Частная';}
$col3=count (array_diff(explode (',', $prigl1->users), array('')));
$rh=explode (',', $prigl1->prigl);
foreach ($rh as $rh1) {
if ((strpos($rh1, '-'.$user->id))>-1) {
$database->setQuery('SELECT id, name FROM #__users WHERE id='.substr($rh1, 0, strpos($rh1, '-')));
$us7=$database->loadObjectList();
foreach ($us7 as $us8);
echo '<tr><td align="center">'.$prigl1->id.'</td><td align="center"><a href="/profile/userprofile/'.$us8->id.'">'.$us8->name.'</a></td><td align="center"><a href="/groups?no=5&group='.$prigl1->id.'">'.$prigl1->name.'</a></td><td align="center">'.$col3.'</td><td align="center">'.$tpe.'</td><td  align="center"><input type="button" onClick="showall(1,10,'.$us8->id.','.$prigl1->id.')" value = "Вступить"/><input type="button" onClick="showall(1,11,'.$us8->id.','.$prigl1->id.')" value = "Удалить"/></td></tr>';
}}}
echo '</table><br/><div align="center"><input type="button" id="result1" value = "Сохранить"/></div></form>';
}
}
elseif ($no==2) {//-------------------------------2-----------------------------
$proc=JRequest::getInt('proc',0);
if ($proc==1) {
$nam=JRequest::getString('nam1');
$opis1=JRequest::getString('opis');
$site=JRequest::getString('site');
$typeg=JRequest::getInt('typeg');
$types=JRequest::getInt('types');
$user1=JRequest::getInt('user');
$database->setQuery('
INSERT INTO `#__tranz_groups` (
`id` ,
`name` ,
`opisanie` ,
`dov` ,
`creator`,
`admusers` ,
`users` ,
`web` ,
`stena` ,
`type_stena` 
)
VALUES (
NULL , '.$database->Quote($nam).', '.$database->Quote($opis1).', '.$database->Quote($typeg).', '.$database->Quote($user1).', '.$database->Quote($user1).', '.$database->Quote($user1).', '.$database->Quote($site).', \'\', '.$database->Quote($types).'
);
');
$database->Query();
}
$dell=JRequest::getInt('del',0);
if ($dell==1) {
$id2=JRequest::getInt('nom',0);
$database->setQuery('SELECT creator FROM #__tranz_groups where id='.$id2);
$th=$database->loadResult();
if ($user->id==$th) {
$database->setQuery('DELETE FROM #__tranz_groups WHERE id ='.$id2);
$database->Query();
} else {echo ('Нет доступа!');}
}

echo '<div align="center"><h2>Управление группами</h2></div>';

$database->setQuery('SELECT *
FROM
  #__tranz_groups
WHERE
  FIND_IN_SET (\''.$user->id.'\', admusers)
ORDER BY
  name');
$res=$database->loadObjectList();
echo '
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" disabled value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;<table width=100% border=1 style="margin: 7px 0px 0px 0px;"><tr><th>№</th><th>Название</th><th>Количество участников</th><th width=55>Тип</th><th>Управление</th><th>Удаление</th><th>Заявки</th></tr>';
if (count ($res)>0) {
foreach ($res as $rez) {
$col=count (array_diff(explode (',', $rez->users), array('')));
$col1=count (array_diff(explode (',', $rez->zaiav), array('')));
if ($rez->dov==0) {$typ='Открытая';} elseif ($rez->dov==1) {$typ='Закрытая';} elseif ($rez->dov==2) {$typ='Частная';}
if ($rez->creator==$user->id) {$vb='onClick="showall(2,2,'.$rez->id.',0)"';} else {$vb='disabled';}
echo '<tr><td align="center">'.$rez->id.'</td><td align="center"><a href="/groups?no=5&group='.$rez->id.'">'.$rez->name.'</a></td><td align="center">'.$col.'</td><td align="center">'.$typ.'</td><td align="center"><input type="button" onClick="showall(4,2,'.$rez->id.',0)" value = "Редактировать"/></td><td align="center"><input type="button" '.$vb.' value = "Удалить"/></td><td align="center">'.$col1.'</td></tr>';
}} else {echo '<tr><td colspan=7 align="center">Этот раздел для управления группами. Тут вы можете либо редактировать группу, либо удалить. Редактировать группу могут только администраторы группы. Удалить группу может только тот участник, который её создал. Участник, который создал группу, всегда может восстановить свой статус администратора группы. Для этого нужно выйти из группы и зайти снова.</td></tr>';}
echo '</table>';
}
elseif ($no==3) {//-------------------------------3-----------------------------
echo '<div align="center"><h2>Новая группа</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" disabled value = "Создать группу"/></td></tr></table>&nbsp;<form id="formval1"><table width=100% border=0 style="margin: 7px 0px 0px 0px;">
<tr><td>Название:</td><td><input type="text" name="nam" size="70" class="inputbox required texx1" value="" maxlength="255"/></td></tr>
<tr><td>Описание:</td><td><textarea name="opis" cols="130" rows="7" id="opis" class="inputbox required texx"></textarea></td></tr>
<tr><td>Сайт группы:</td><td><input type="text" name="site" size="70" class="inputbox required texx1" value="" maxlength="255"/></td></tr>
<tr><td>Тип группы:</td><td><select name="typeg" id="typeg" class="inputbox required" size="1" aria-required="true" required="required">
<option value="0" selected="selected">Открытая</option>
<option value="1">Закрытая</option>
<option value="2">Частная</option>
</select></td></tr>
<tr><td>Тип стены:</td><td><select name="types" id="types" class="inputbox required" size="1" aria-required="true" required="required">
<option value="0">Выключена</option>
<option value="1" selected="selected">Открытая</option>

</select></td></tr>
</table>
<div align="center"><input type="button" id="result" value = "Создать"/></div>
<INPUT TYPE=HIDDEN NAME="user" VALUE="'.$user->id.'">
</form>
';/* <option value="2">Ограниченная</option>
<option value="3">Закрытая</option> */
}
elseif ($no==4) {
$save=JRequest::getInt('save',0);
$shr='';
if ($save==1) {
$id2=JRequest::getInt('id',0);
$database->setQuery('SELECT admusers, zaiav, users FROM #__tranz_groups where id='.$id2);
$th9=$database->loadObjectList();
foreach ($th9 as $th);
if ((in_array ($user->id, explode (',', $th->admusers)) )==true) {
$nam=JRequest::getString('nam');
$opis1=JRequest::getString('opis');
$site=JRequest::getString('site');
$typeg=JRequest::getInt('typeg');
$types=JRequest::getInt('types');
$user1=JRequest::getInt('user');
$odb=JRequest::getInt('odb');
$uprr=JRequest::getInt('uprr');
$extt='';
if (($odb==1) or ($uprr==1)) {
$admus=explode (',', $th->admusers);
$zusers=explode (',', $th->users);
$zav5=explode (',', $th->zaiav);
if ($uprr==1) {
foreach ($zusers as $zvet) {
$up7=JRequest::getInt('upp'.$zvet);
if ($up7==1) {$admus[]=$zvet;}
if ($up7==2) {
if (in_array ($zvet, $admus)==true) {
unset ($admus [array_search($zvet, $admus)]);}
unset ($zusers [array_search($zvet, $zusers)]);
}
if ($up7==3) {unset ($admus [array_search($zvet, $admus)]);}
}}
if ($odb==1) {
foreach ($zav5 as $zav6) {
$odobr4=JRequest::getInt('odobr'.$zav6);
if ($odobr4==1) {unset ($zav5 [array_search($zav6, $zav5)]);}
if ($odobr4==2) {unset ($zav5 [array_search($zav6, $zav5)]);
$zusers[]=$zav6;
}}}

$extt=', users = \''.implode (',', array_unique(array_diff($zusers, array('')))).'\', zaiav = \''.implode (',', array_unique(array_diff($zav5, array('')))).'\', admusers = \''.implode (',', array_unique(array_diff($admus, array('')))).'\' ';
}
$database->setQuery('UPDATE #__tranz_groups
SET
  name = '.$database->Quote($nam).', opisanie = '.$database->Quote($opis1).', dov = '.$database->Quote($typeg).', web = '.$database->Quote($site).', type_stena = '.$database->Quote($types).$extt.'
WHERE
  id ='.$id2);
$database->Query();
$shr='&nbsp;&nbsp;<font color="#4cdd20">Сохранено</font>';
} else {echo ('Нет доступа!');}
}
$nom=JRequest::getInt('id',0);
$database->setQuery('SELECT admusers FROM #__tranz_groups where id='.$nom);
$th=$database->loadResult();
if ((in_array ($user->id, explode (',', $th)) )==true) {
$database->setQuery('SELECT * FROM #__tranz_groups where id='.$nom);
$th4=$database->loadObjectList();
foreach ($th4 as $th5);
echo '<div align="center"><h2>Редактировать</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;<form id="formval1"><table width=100% border=0 style="margin: 7px 0px 0px 0px;">
<tr><td>Название:</td><td><input type="text" name="nam" size="70" class="inputbox required texx1" value="'.$th5->name.'" maxlength="255"/></td></tr>
<tr><td>Описание:</td><td><textarea name="opis" cols="130" rows="7" id="opis" class="inputbox required texx">'.$th5->opisanie.'</textarea></td></tr>
<tr><td>Сайт группы:</td><td><input type="text" name="site" size="70" class="inputbox required texx1" value="'.$th5->web.'" maxlength="255"/></td></tr>';
$tp=''; $tp1=''; $tp2=''; 
if ($th5->dov==0) {$tp='selected="selected"';} elseif ($th5->dov==1) {$tp1='selected="selected"';} elseif ($th5->dov==2) {$tp2='selected="selected"';}
echo '
<tr><td>Тип группы:</td><td><select name="typeg" id="typeg" class="inputbox required" size="1" aria-required="true" required="required">
<option value="0" '.$tp.'>Открытая</option>
<option value="1" '.$tp1.'>Закрытая</option>
<option value="2" '.$tp2.'>Частная</option>
</select></td></tr>';
$tz=''; $tz1=''; $tz2=''; $tz3='';
if ($th5->type_stena==0) {$tz='selected="selected"';} elseif ($th5->type_stena==1) {$tz1='selected="selected"';} elseif ($th5->type_stena==2) {$tz2='selected="selected"';} elseif ($th5->type_stena==3) {$tz3='selected="selected"';}
echo '
<tr><td>Тип стены:</td><td><select name="types" id="types" class="inputbox required" size="1" aria-required="true" required="required">
<option value="0" '.$tz.'>Выключена</option>
<option value="1" '.$tz1.'>Открытая</option>
</select></td></tr>
</table>
<INPUT TYPE=HIDDEN NAME="user" VALUE="'.$user->id.'">
<INPUT TYPE=HIDDEN NAME="id" VALUE="'.$th5->id.'">';
/* <option value="2" '.$tz2.'>Ограниченная</option>
<option value="3" '.$tz3.'>Закрытая</option> */
if ($th5->zaiav!='') {
$database->setQuery('SELECT * FROM #__users where (id in ('.$th5->zaiav.')) and (block=0)');
$thw4=$database->loadObjectList();
if (count ($thw4)>0) {
echo '<div align="center"><h2>Заявки на добавление в группу</h2></div><table width=100% align="center" border=1><tr><th >№</th><th >Ф.И.О.</th><th>Управление</th></tr>';
foreach ($thw4 as $sd) {
echo '<tr><td align="center">'.$sd->id.'</td><td align="center"><a href="/profile/userprofile/'.$sd->id.'">'.$sd->name.'</a></td><td align=left>
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odobr'.$sd->id.'" value="2"  />Одобрить</label>
<br />
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odobr'.$sd->id.'" value="1" />Отказать</label><label><input type="radio" name="odobr'.$sd->id.'" value="0" />Отмена</label></td></tr>';
}
echo '</table><INPUT TYPE=HIDDEN NAME="coll1" VALUE="'.count ($thw4).'"><INPUT TYPE=HIDDEN NAME="usse" VALUE="'.$th5->zaiav.'">';}
}
if ($th5->users!='') {
$database->setQuery('SELECT * FROM #__users where (id in ('.$th5->users.')) and (block=0)');
$thn8=$database->loadObjectList();
if (count ($thn8)>0) {
echo '<div align="center"><h2>Участники группы</h2></div><table width=100% align="center" border=1><tr><th >№</th><th >Ф.И.О.</th><th>Управление</th></tr>';
foreach ($thn8 as $sa) {
echo '<tr><td align="center">'.$sa->id.'</td><td align="center"><a href="/profile/userprofile/'.$sa->id.'">'.$sa->name.'</a></td><td align="left">
<label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="vib1'.$sa->id.'" value="2"/>Исключить</label>';
if ((in_array ($sa->id, explode (',', $th5->admusers)))==true) {echo '<label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="vib1'.$sa->id.'" value="3"/>Разжаловать администратора</label>';} else {echo '<label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="vib1'.$sa->id.'" value="1"/>Назначить администратором</label>';}
echo '

<label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="vib1'.$sa->id.'" value="0"/>Отмена</label></td></tr>';
}
echo '</table><INPUT TYPE=HIDDEN NAME="upr" VALUE="'.count ($thn8).'"><INPUT TYPE=HIDDEN NAME="al" VALUE="'.$th5->users.'">';
}}
echo '<br/><div align="center"><input type="button" id="result1" value = "Сохранить"/>'.$shr.'</div></form>';
} else {echo 'Нет доступа!';}
}
elseif ($no==5) {
$group=JRequest::getInt('group',0);
$database->setQuery('SELECT * FROM #__tranz_groups where ((id = '.$group.') and ((FIND_IN_SET (\''.$user->id.'\', prigl)) or (FIND_IN_SET (\''.$user->id.'\', users)) or (FIND_IN_SET (\''.$user->id.'\', admusers))))');
$gg=$database->loadObjectList();
if (count ($gg)>0) {
foreach ($gg as $gr);
echo '<div align="center"><h2>'.$gr->name.'</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" style="width:94px" value = "Мои группы"/></td><td><input type="button" style="width:91px" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" style="width:93px" value = "Управление'.$zaiavk.'"/></td><td><input type="button" onClick="showall(7,'.$gr->id.',0,0)" value = "Список участников" /></td><td><input type="button" onClick="showall(6,'.$gr->id.',0,0)" value = "Пригласить друзей"/></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;
<br/>
<table>
<tr><td width=70>Описание:</td><td>'.$gr->opisanie.'</td></tr>
<tr><td>Веб-сайт:</td><td><a href="'.$gr->web.'">'.$gr->web.'</a></td></tr>
</table>';
if ($gr->type_stena>0) {
$comments = JPATH_SITE . '/components/com_jcomments/jcomments.php';
if (file_exists($comments)) {
require_once($comments);
echo JComments::show($group, 'com_tranz_group', $group);
}
}
} else {echo '<div align="center"><h2>Вы не в группе</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" style="width:94px" value = "Мои группы"/></td><td><input type="button" style="width:91px" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" style="width:93px" value = "Управление'.$zaiavk.'"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;
<br/>
<table width=100%>
<tr><td align="center"><h3>У вас нет доступа</h3></td></tr>
</table>';}
} elseif ($no==6) {
$group=JRequest::getInt('group',0);
$database->setQuery('SELECT * FROM #__tranz_groups where ((id = '.$group.') and ((FIND_IN_SET (\''.$user->id.'\', users)) or (FIND_IN_SET (\''.$user->id.'\', admusers))))');
$gg2=$database->loadObjectList();
if (count ($gg2)>0) {
foreach ($gg2 as $gg3);
$uid=$user->id;
echo '<div align="center"><h2>Все друзья (кто не в группе)</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td><input type="button" onClick="$(\'#all7\').animate({marginLeft : \'800px\'},500,function(){window.location=\'/groups?no=5&group='.$group.'\';});" value = "Назад в группу"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;&nbsp;';
$database->setQuery('SELECT * FROM #__users a inner join #__comprofiler_members b ON a.id=b.memberid where (((referenceid='.$uid.') and (accepted=1)) and (memberid in (SELECT referenceid from #__comprofiler_members where (memberid='.$uid.') and (accepted=1))) and (((FIND_IN_SET (a.id, \''.$gg3->users.'\')) or (FIND_IN_SET ( a.id, \''.$gg3->admusers.'\')))=false))');
$gg1=$database->loadObjectList();
if (count ($gg1)>0) {
$proc=JRequest::getInt('proc',0);
if ($proc>0) {
$user2=JRequest::getInt('user',0);
if ($proc==1) {
$pr=explode (',', $gg3->prigl);
unset ($pr [array_search($uid.'-'.$user2, $pr)]);
$pr=implode (',', array_unique(array_diff($pr, array(''))));
$database->setQuery('UPDATE #__tranz_groups
SET prigl=\''.$pr.'\' WHERE id ='.$group);
$database->Query();
$gg3->prigl=$pr;
}
if ($proc==2) {$pr=explode (',', $gg3->prigl);
$pr[]=$uid.'-'.$user2;
$pr=implode (',', array_unique(array_diff($pr, array(''))));
$database->setQuery('UPDATE #__tranz_groups
SET prigl=\''.$pr.'\' WHERE id ='.$group);
$database->Query();
$gg3->prigl=$pr;
}
}
echo '<table border=1 width=100%><tr><th>№</th><th>Имя</th><th>Управление</th></tr>';
foreach ($gg1 as $gr1) {
echo '<tr><td align="center">'.$gr1->id.'</td><td align="center"><a href="/profile/userprofile/'.$gr1->id.'">'.$gr1->name.'</a></td><td align="center">';
if ((in_array ($uid.'-'.$gr1->id, explode (',', $gg3->prigl)) )==false) {echo '<input type="button" onClick="showall(6,'.$group.','.$gr1->id.',2)" value = "Пригласить"/>';} else {echo '<input type="button" onClick="showall(6,'.$group.','.$gr1->id.',1)" value = "Отменить приглашение"/>';}
echo '</td></tr>';
}
echo '</table>';
} else {echo '<div align="center"><h3>Нет подходящих участников. Добавляйте друзей ещё и они появятся в этом списке.</h3></div>';}
}} elseif ($no==7) {
$group=JRequest::getInt('group',0);
$database->setQuery('SELECT * FROM #__tranz_groups where ((id = '.$group.') and ((FIND_IN_SET (\''.$user->id.'\', users)) or (FIND_IN_SET (\''.$user->id.'\', admusers))))');
$gg2=$database->loadObjectList();
if (count ($gg2)>0) {
foreach ($gg2 as $gg3);
$uid=$user->id;
echo '<div align="center"><h2>Участники группы</h2></div>
<table align="left"><tr><td><input type="button" onClick="showall(0,0,0,0)" value = "Мои группы"/></td><td><input type="button" onClick="showall(1,0,0,0)" value = "Все группы'.$priglst.'"/></td><td><input type="button" onClick="showall(2,0,0,0)" value = "Управление'.$zaiavk.'"/></td><td><input type="button" onClick="$(\'#all7\').animate({marginLeft : \'800px\'},500, function(){window.location=\'/groups?no=5&group='.$group.'\';});" value = "Назад в группу"/></td><td width=70%></td><td><input type="button" onClick="showall(3,0,0,0)" value = "Создать группу"/></td></tr></table>&nbsp;&nbsp;';
$database->setQuery('SELECT  id, name FROM #__users where id in ('.$gg3->users.') order by name');
$gg1=$database->loadObjectList();
if (count ($gg1)>0) {
echo '<table border=1 width=100%><tr><th>№</th><th>Имя ↓</th><th>Информация</th></tr>';
$admm=explode (',', $gg3->admusers);
foreach ($gg1 as $gr1) {
if ((in_array ($gr1->id, $admm))==true) {$add='Администратор';} else {$add='';}
echo '<tr><td align="center">'.$gr1->id.'</td><td align="center"><a href="/profile/userprofile/'.$gr1->id.'">'.$gr1->name.'</a></td><td align="center">'.$add.'</td></tr>';
}
echo '</table>';
} else {echo '<div align="center"><h3>В этой группе пока нет участников.</h3></div>';}
}
}
echo '</div>';
} else {echo '<script type="text/javascript">window.location="/component/comprofiler/login";</script>';}
?>