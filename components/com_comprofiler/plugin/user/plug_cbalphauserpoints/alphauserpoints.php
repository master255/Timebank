<?php

if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class getAlphaUserPointsTab extends cbTabHandler {

	function getGenderTab() {

		$this->cbTabHandler();

	}

	function getDisplayTab($tab,$user,$ui) {

		$params=$this->params;

		global $_CB_framework,$_CB_database;

		$livesite = JURI::base();

		$absolute_path = $_CB_framework->getCfg( 'absolute_path' );

		$lang =$_CB_framework->getCfg( 'lang' );

		$CBAUPlanguagePath=$absolute_path.'/components/com_comprofiler/plugin/user/plug_cbalphauserpoints';
$us1 = & JFactory::getUser ();
		$query2 = "SELECT id, points, rating, count1, dolg, idref, dov FROM `#__users` where id =".$user->id;
		$_CB_database->setQuery($query2);
		$gh = $_CB_database->loadObjectList();
		foreach ($gh as $usr);
		$menuitem = array();
		$menuitem["_UE_MENU_STATUS"]['Номер:']["User Points"]=null;
		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $usr->id,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "Номер счёта участника" ,

								"tooltip"	=> "") );
		$menuitem = array();

		$menuitem["_UE_MENU_STATUS"]['Часы:']["User Points"]=null;

		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $usr->points ,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "" ,

								"tooltip"	=> "") );		
		$menuitem = array();

		$menuitem["_UE_MENU_STATUS"]['Рейтинг:']["User Points"]=null;
		 if (($usr->rating!=0) and ($usr->count1!=0)) {$reit = round ($usr->rating/$usr->count1);} else {$reit = 0;}
		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $reit,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "" ,

								"tooltip"	=> "") );
		$menuitem = array();

		$menuitem["_UE_MENU_STATUS"]['Ступень регистрации:']["User Points"]=null;
		 if ($usr->dov==1) {$dv='Проверенный';} elseif ($usr->dov==2) {$dv='Доверенный';} else {$dv='Непроверенный';}
		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $dv,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "" ,

								"tooltip"	=> "") );
		if ($us1->id==$usr->id) {
		$menuitem = array();
		$menuitem["_UE_MENU_STATUS"]['Долг организации:']["User Points"]=null;
		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $usr->dolg,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "Долг организации перед участником в рублях" ,

								"tooltip"	=> "") );
								$menuitem = array();
		$menuitem["_UE_MENU_STATUS"]['Меня пригласил:']["User Points"]=null;
		$this->addMenu( array(	"position"	=> "menuList" ,

								"arrayPos"	=> $menuitem ,

								"caption"	=> $usr->idref,

								"url"		=> "",

								"target"	=> "" ,

								"img"		=> "" ,

								"alt"		=> "Ответственный за вас" ,

								"tooltip"	=> "") );
								}
		

  	}
}
?>