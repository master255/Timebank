<?php
/**
 * Core CB default template for user profiles rendering
 * @version $Id: default.php 1323 2010-12-02 18:21:41Z beat $
 * @package Community Builder
 * @subpackage Default CB template
 * @author Beat
 * @copyright (C) Beat, www.joomlapolis.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
 */

/** ensure this file is being included by a parent file */
if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) {
	die( 'Direct Access to this location is not allowed.' );
}

global $_PLUGINS;

// WARNING: THIS IS EXPERIMENTAL, INTRODUCED IN CB 1.2 AND THIS PART WILL EVOLVE IN FUTURE CB RELEASES.

/**
 * VIEW: User profile view class
 *
	-------------------------
	!          head         !
	!-----------------------!
	!      !        !       !
	! left ! middle ! right !
	!      !        !       !
	!-----------------------!
	!                       !
	!        tabmain        !
	!                       !
	!-----------------------!
	!        underall       !
	-------------------------
	!      !        !       !
	! L1C1 ! L1C2   ! L1C3  !   L1C1...C9
	!      !        !       !
	!-----------------------!
	!      !        !       !
	! L2C1 ! L2C4   ! L2C8  !   ...
	!      !        !       !
	!-----------------------!
	!                       !
	!        L4C7           !
	!                       !
	!-----------------------!
	!          !            !
	!   L8C3   !    L8C4    !   ...L9C9
	!          !            !
	!-----------------------!
    ! + not_on_profile_1..9
 */
class CBProfileView_html_default extends cbProfileView {
	var $wLeft;
	var $wMiddle;
	var $wRight;
	var $nCols;
	/**
	 * Draws the user profile
	 *
	 * @return string
	 */
	function draw( $part = '' ) {
		global $ueConfig;
		// $params					=	$this->params;
		
		if ( $part == '' ) {
			// Profile view:

			//positions: head left middle right tabmain underall
			$this->wLeft	=	isset( $this->userViewTabs['cb_left'] ) ? 100 : 0;
			$this->wMiddle	=	isset( $this->userViewTabs['cb_middle'] ) ? 100 : 0;
			$this->wRight	=	isset( $this->userViewTabs['cb_right'] ) ? 100 : 0;
			$this->nCols	=	intval( ( $this->wLeft + $this->wMiddle + $this->wRight ) / 100 );
			switch ( $this->nCols ) {
				case 0 :
				case 1 :
					break;
				case 2 :
					$this->wLeft	=	$this->wLeft ? intval( $ueConfig['left2colsWidth'] ) - 1 : 0;
					$this->wMiddle	=	$this->wMiddle ? ( $this->wLeft ? 100 - intval( $ueConfig['left2colsWidth'] ) - 1 : intval( $ueConfig['left2colsWidth'] ) - 1 ) : 0;
					$this->wRight	=	$this->wRight ? 100 - intval( $ueConfig['left2colsWidth'] ) - 1 : 0;
					break;
				case 3 :
					$this->wLeft	=	intval( $ueConfig['left3colsWidth'] ) - 1;
					$this->wMiddle	=	100 - intval( $ueConfig['left3colsWidth'] ) - intval( $ueConfig['right3colsWidth'] ) - 1;
					$this->wRight	=	intval( $ueConfig['right3colsWidth'] ) - 1;
					break;
			}
		}
		// else: Edit profile view: nothing to setup
		return parent::draw( $part );
	}
	/**
	 * Renders by ECHO the User Profile view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _render( ) {
/*
		// add any html in html head section:

		global $_CB_framework;
		$_CB_framework->document->addHeadStyleSheet( selectTemplate() . 'file.css' );
		$_CB_framework->document->addHeadStyleInline( 'input { border: red 1px solid; }');
*/
		// Display "head" tabs: (Menu + shortest connection path / Degree of relationship + Uname Profile Page)
		if ( isset( $this->userViewTabs['cb_head'] ) ) {
			echo '<div class="cbPosHead">';
			echo $this->userViewTabs['cb_head'];
			echo '</div><div class="cbClr"></div>';
		}
		if ( $this->nCols != 0 ) {
			echo "\n\t\t<div class=\"cbPosTop\">";
			
			// Display "Left" tabs
			if ( isset( $this->userViewTabs['cb_left'] ) ) {
				echo "\n\t\t\t<div class=\"cbPosLeft\" style=\"width:" . $this->wLeft . "%;\">";
				echo $this->userViewTabs['cb_left'];
				echo '</div>';
			}
			// Display "Middle" tabs (User Avatar/Image):
			if ( isset( $this->userViewTabs['cb_middle'] ) ) {
				echo "\n\t\t\t<div class=\"cbPosMiddle\" style=\"width:" . $this->wMiddle . "%;\">";
				echo $this->userViewTabs['cb_middle'];
				echo '</div>';
			}
			// Display "Right" tabs (User Status):
			if ( isset( $this->userViewTabs['cb_right'] ) ) {
				echo "\n\t\t\t<div class=\"cbPosRight\" style=\"width:" . $this->wRight . "%;\">";
				echo $this->userViewTabs['cb_right'];
				echo '</div>';
			}
			echo '<div class="cbClr"></div></div>';
		}
		if ( isset( $this->userViewTabs['cb_tabmain'] ) ) {
			echo "\n\t\t<div class=\"cbPosTabMain\">";
			echo $this->userViewTabs['cb_tabmain'];
			echo '</div><div class="cbClr"></div>';
		}
		if ( isset( $this->userViewTabs['cb_underall'] ) ) {
			echo "\n\t\t<div class=\"cbPosUnderAll\">";
			echo $this->userViewTabs['cb_underall'];
			echo '</div><div class="cbClr"></div>';
		}

		// New CB 1.2 grid layout:

		$line = null;
		$tabsIdxes = array_keys( $this->userViewTabs );
		foreach ( $tabsIdxes as $k => $v ) {
			if ( $v && $v[0] == 'L' ) {
				$L = $v[1];
				if ( $line === null ) {
					// new line: mark begin:
					$line = $k;
				}
				if ( ! ( isset( $tabsIdxes[$k + 1] ) && ( $tabsIdxes[$k + 1][1] == $L ) ) ) {
					// line is now complete, next entry, if exists, is another line: generate line:
					$cols = $k - $line + 1;
					$width = 100;
					$step = floor( $width / $cols );
					echo "\n\t\t" . '<div class="cbPosGridLine" id="cbPosLine' . substr( $v, 0, 2 ) . '">';
					for ( $i = $line ; $i <= $k ; $i++ ) {
						if ( $i == $k ) {
							$step = $width - ( ( $cols - 1 ) * $step );
						}
						echo "\n\t\t" . '<div class="cbPosGrid" id="cbPos' . $v . '_' . $i . '" style="width:' . $step . '%;"><div class="cbPosGridE">';
						echo $this->userViewTabs[$tabsIdxes[$i]];
						echo '</div></div>';
					}
					echo '</div><div class="cbClr" id="cbPosSep' . substr( $v, 0, 2 ) . '"> </div>';
					
					$line = null;
				}
			}
		}
	}
	/**
	 * Renders by ECHO the user profile edit view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderEdit( ) {
		echo $this->tabcontent;
?>

		<span class="cb_button_wrapper"><input class="button cbProfileEditSubmit" type="submit" id="cbbtneditsubmit" value="<?php echo $this->submitValue; ?>" /></span>
		<span class="cb_button_wrapper"><input class="button cbProfileEditCancel" type="button" id="cbbtncancel" name="btncancel" value="<?php echo $this->cancelValue; ?>" /></span>
		<div id="cbIconsBottom">
			<?php echo $this->bottomIcons; ?>

		</div>

<?php
	}
} // class CBProfileView_default

/**
 * VIEW: User registration view class
 */
class CBRegisterFormView_html_default extends cbRegistrationView {
	/**
	 * Renders by ECHO the Registration form view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderRegistrationHead( ) {
		if ( $this->moduleContent ) {
			if ( $this->introMessage ) {
?>
				<div class="componentheading" id="cb_comp_login_register_head"><?php echo $this->loginOrRegisterTitle; ?></div><div class="cb_comp_outer"><div class="cb_comp_inner">
				<div class="contentpaneopen" id="cb_comp_login_register_content"><?php echo $this->introMessage; ?></div>
				</div></div>
<?php
			}
			echo '<div class="cbclearboth"><div id="cb_comp_login"><div class="componentheading">' . _LOGIN_TITLE . '</div><div class="cb_comp_outer"><div class="cb_comp_inner">';
			echo $this->moduleContent;
			echo '</div></div></div><div id="cb_comp_register">';
		}
?>
<div class="componentheading"><?php echo $this->registerTitle; ?></div><div class="contentpaneopen"><div class="cb_comp_outer"><div class="cb_comp_inner cbHtmlEdit cbRegistration">
<?php
		if ( $this->topIcons ) {
			echo '<div id="cbIconsTop">';
			echo $this->topIcons;
			echo '</div>';
		}
		echo $this->regFormTag;		// '<form...>'
	}
	/**
	 * Renders by ECHO the Registration form view NEW DIVs view:
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderdivs( ) {
		$this->_renderRegistrationHead();
?>
<div class="contentpane" id="registrationTable">
<?php
		if ( $this->introMessage && ( ! $this->moduleContent ) ) {
?>
    <div class="contentpaneopen"><?php echo $this->introMessage; ?></div>
<?php
		}
		// outputs all tabs, including contact tab and Terms & Conditions:
		echo $this->tabcontent;
		
		// outputs conclusion text and different default values:
?>
    <div class="contentpaneopen"><?php
   	  if ( $this->conclusionMessage ) {
 		echo $this->conclusionMessage;
   	  } else {
   	  	echo "&nbsp;";
   	  }
   	  ?></div>
    <div class="contentpaneopen">
		<span class="cb_button_wrapper"><input type="submit" value="<?php echo $this->registerButton; ?>" class="button" /></span>
    </div>
</div>
<?php
		$this->_renderRegistrationFooter();
	}
	/**
	 * Renders by ECHO the Registration form view OLD TABLE view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _render( ) {
		$this->_renderRegistrationHead();
?>
<table class="contentpane" id="registrationTable">
<?php
		if ( $this->introMessage && ( ! $this->moduleContent ) ) {
?>
    <tr>
      <td colspan="2" class="contentpaneopen"><?php echo $this->introMessage; ?></td>
    </tr>
<?php
		}
		// outputs all tabs, including contact tab and Terms & Conditions:
		echo $this->tabcontent;
		
		// outputs conclusion text and different default values:
?>
    <tr>
      <td colspan="2" class="contentpaneopen"><?php
   	  if ( $this->conclusionMessage ) {
 		echo $this->conclusionMessage;
   	  } else {
   	  	echo "&nbsp;";
   	  }
   	  ?></td>
    </tr>
    <tr>
      <td colspan="2">
		<span class="cb_button_wrapper"><input type="submit" value="<?php echo $this->registerButton; ?>" class="button" /></span>
      </td>
    </tr>
</table>
<?php
		$this->_renderRegistrationFooter();
	}
	/**
	 * Renders by ECHO the Registration form view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderRegistrationFooter( ) {
		echo '</form>';
		if ( $this->bottomIcons ) {
			echo '<div id="cbIconsBottom">';
			echo $this->bottomIcons;
			echo '</div>';
		}
		echo '</div></div></div>';
		if ( $this->moduleContent ) {
			echo '</div></div>';
		}
		echo "<div class=\"cbClr\"></div>";
	}
} // class CBProfileView_default

/**
 * VIEW: User profile view class
 *
 */
class CBListView_html_default extends cbListView {
	/**
	 * Renders by ECHO the list header view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderHead( ) {
		global $_CB_framework;
?>

	<div class="cbUserListHeadTitle">
<?php
		if ( ( count( $this->lists ) > 0 ) || $this->searchTabContent ) {
?>

		<div class="cbUserListChanger">
<?php
			// selector for user-list:
			if ( count( $this->lists ) > 0 ) {
				foreach ( $this->lists as $kname => $ncontent ) {
?>

			<div class="cbUserListChangeItem cbUserList<?php echo $kname; ?>"><?php
				echo $ncontent;
			?></div>

<?php
				}
			}
			if ( $this->searchTabContent ) {
				if ( ! $this->searchResultDisplaying ) {
?>
			<div class="cbUserListSearchButtons" id="cbUserListsSearchTrigger"><a class="pagenav" href="#"><?php echo _UE_SEARCH_USERS; ?></a></div>
<?php
				} else {
					echo '<div id="cbUserListListAll"><a class="pagenav" href="' . cbSef($this->ue_base_url) . '">' . _UE_LIST_ALL . '</a></div>';
				}
			}
?>
		</div>
<?php
		}
		// List title:
?>

		<div class="contentheading cbUserListTitle"><?php echo $this->listTitleHtml; ?></div>
<?php
		if ( TRUE && trim( $this->listDescription ) ) {		// to remove description from front-end display as was before CB 1.2: change TRUE to FALSE.

		// List description:
?>

   		<div class="contentdescription cbUserListDescription"><?php echo $this->listDescription; ?></div>
<?php
		}
		
		// users-count:
?>

	<div class="contentdescription cbUserListResultCount"><table width=100%><tr><td><?php
		if ( $this->totalIsAllUsers ) {
			echo $_CB_framework->getCfg( 'sitename' ) . " " . _UE_HAS . " <strong>" . $this->total . "</strong> " . _UE_USERS;
		} else {
			echo "<strong>" . $this->total . "</strong> " . _UE_USERPENDAPPRACTION . ":";
		}
	  ?></td><td align="right"><a href="index.php?option=com_tranz&view=xls&layout=xls&no_html=1&table=3">Скачать таблицу</a></td></tr></table></div>
		<div class="cbClr"></div>
<?php
		if ( $this->searchTabContent ) {
?>
		<div class="contentdescription cbUserListSearch" id="cbUserListsSearcher">
			<div class="componentheading"><?php echo $this->searchCriteriaTitleHtml; ?></div>
			<div class="cbUserListSearchFields">
<?php
			echo $this->searchTabContent;
?>
				<div class="cbClr"></div>
				<div class="cb_form_buttons_line">
					<input type="submit" class="button" id="cbsearchlist" value="<?php echo _UE_FIND_USERS; ?>" />
				</div>
				<div class="cbClr"></div>
			</div>
<?php
			if ( $this->searchResultsTitleHtml ) {
?>
			<div class="componentheading"><?php echo $this->searchResultsTitleHtml; ?></div>
<?php
			}
?>

		</div>
<?php
		}
?>

	</div>
<?php
	}
	/**
	 * Renders by ECHO the list body view
	 * here typically if you prefer to include a view-type php-html file you would include it.
	 */
	function _renderBody( ) {
?>
	<hr class="cbUserListHrTop" size="1" />
	<table border="1" id="cbUserTable" width="100%" class="cbUserListTable cbUserListT_<?php echo $this->listid ?>">
	  <thead>
		<tr class="sectiontableheader">
<?php
		// table headers:
	echo "<th>
  <b>Номер</b>
</th>";
			$colsNbr = count( $this->columns );
			foreach ( $this->columns as $column ) {
				echo "\t\t\t<th><b>" . $column->titleRendered . "</b></th>\n";
			}
echo " <th>
				<b>Рейтинг</b>
				</th><th>
				<b>Минимум</b>
				</th><th>
				<b>Максимум</b>
				</th><th>
				<b>Часы</b>
				</th>"
?>

		</tr>
	  </thead>
	  <tbody>
<?php

		// table content:

		$i = 0;
$sum=0;
		$db6 =& JFactory::getDBO();
		if ( is_array( $this->users ) && count( $this->users ) > 0 ) {
			foreach ( $this->users as $userIdx => $user) {
				$class = "sectiontableentry" . ( 1 + ( $i % 2 ) );		// evenodd class
				$query = "SELECT * FROM `#__users` where id='{$user->id}'";
				$db6->setQuery($query);
				$res=$db6->loadObjectList();
				foreach ($res as $ur1);
				$bor="bgcolor='#FFFFF0'";
				if ($ur1->dov==1) {$bor="bgcolor='#f2fff3'";} elseif ($ur1->dov==2) {$bor="bgcolor='#c8ffcd'";}
				if ( $this->allow_profilelink ) {
					$style = "style=\"cursor:hand;cursor:pointer;\"";
					$style .= " id=\"cbU".$i."\"" ;
				} else {
					$style = "";
				}
				if ( $user->banned ) {
					echo "\t\t<tr class=\"$class\" $bor><td colspan=\"".$colsNbr."\"><span class=\"error\" style=\"color:red;\">"._UE_BANNEDUSER." ("._UE_VISIBLE_ONLY_MODERATOR.") :</span></td></tr>\n";
				}
				echo "\t\t<tr class=\"$class\" ".$style." $bor>\n";
	echo "<td valign=\"top\" class=\"cbUserListCol5\">
  <div class=\"cbUserListFieldLine\">
    <span class=\"cbListFieldCont cbUserListFC_onlinestatus\">
      <span >
        <span><div align=center>". $user->id  ."</div></span>
      </span>
    </span>
  </div>
</td>";
				foreach ( array_keys( $this->columns ) as $colIdx ) {
					echo "\t\t\t<td valign=\"top\" class=\"cbUserListCol" . $colIdx . "\">" . $this->_getUserListCell( $this->tableContent[$userIdx][$colIdx] ) . "\t\t\t</td>\n";
				}
$query1 = "SELECT * FROM `#__tranz_gen` where id=1";
$db6->setQuery($query1);
$res1=$db6->loadObjectList();
foreach ($res1 as $ur2);
				if (($ur1->rating !=0) && ($ur1->count1 !=0)) {$rat=round($ur1->rating/$ur1->count1);} else {$rat=0;};
				
				echo "
				<td valign=\"top\" class=\"cbUserListCol5\">
  <div class=\"cbUserListFieldLine\">
    <span class=\"cbListFieldCont cbUserListFC_onlinestatus\">
      <span >
	  <span><div align=center>". $rat."</div></span>
      </span>
    </span>
  </div>
</td>
				<td valign=\"top\" class=\"cbUserListCol5\">
  <div class=\"cbUserListFieldLine\">
    <span class=\"cbListFieldCont cbUserListFC_onlinestatus\">
      <span >
	  <span><div align=center>". $ur1->min_points  ."</div></span>
      </span>
    </span>
  </div>
</td>
<td valign=\"top\" class=\"cbUserListCol5\">
  <div class=\"cbUserListFieldLine\">
    <span class=\"cbListFieldCont cbUserListFC_onlinestatus\">
      <span >
	  <span><div align=center>". $ur1->max_points  ."</div></span>
      </span>
    </span>
  </div>
</td>
<td valign=\"top\" class=\"cbUserListCol5\">
  <div class=\"cbUserListFieldLine\">
    <span class=\"cbListFieldCont cbUserListFC_onlinestatus\">
      <span >
        <span><div align=center>". $ur1->points  ."</div></span>
      </span>
    </span>
  </div>
</td>";
				echo "\t\t</tr>\n";
				$i++;
			}
		} else {
			echo "\t\t<tr class=\"sectiontableentry1\"><td colspan=\"".$colsNbr."\">"._UE_NO_USERS_IN_LIST."</td></tr>\n";
		}
?>
	  </tbody>
	</table>	

	<hr class="cbUserListHrBottom" size="1" />
<?php
$db6->setQuery('SELECT points FROM `#__users`');
$res3=$db6->loadObjectList();
foreach ($res3 as $ur3) {
$sum=$sum+$ur3->points;
}
echo "<table width=100%> <tr><td><b>Общий минимум: ".$ur2->min_points."</b></td> <td><b>Общий максимум: ".$ur2->max_points."</b></td> <td>Сумма всех часов:&nbsp;".$sum."</td></tr>
<tr><td bgcolor='#FFFFF0'>Жёлтые - не активированные</td><td bgcolor='#f2fff3'>Светло зелёные активированные</td><td bgcolor='#c8ffcd'>Зелёные - доверенные, активированные</td></tr></table>";
?>
<?php
	}
	function _getUserListCell( &$cellFields ) {
		$html				=	array();		
		foreach ( $cellFields as $fieldView ) {
			if ( $fieldView->value !== null ) {
				if  ( $fieldView->title ) {
					$title	=	'<span class="cbUserListFieldTitle cbUserListFT_' . $fieldView->name . '">'
							.	$fieldView->title
							.	':'
							.	'</span> ';
				} else {
					$title	=	'';
				}
				$html[]		=	'<div class="cbUserListFieldLine">'
							.	$title
							.	'<span class="cbListFieldCont cbUserListFC_' . $fieldView->name . '">'
							.	$fieldView->value
							.	'</span>'
							.	'</div>';
			}
		}
		return "\n\t\t\t\t" . implode( "\n\t\t\t\t", $html ) . "\n";
	}
}
?>