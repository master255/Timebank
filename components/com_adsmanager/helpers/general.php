<?php
/**
 * @package		AdsManager
 * @copyright	Copyright (C) 2010-2011 JoomPROD.com. All rights reserved.
 * @license		GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Content Component HTML Helper
 *
 * @static
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class JHTMLAdsmanagerGeneral
{
	var $catid;
	var $comprofiler;
	var $itemid;
	var $user;
	
	function __construct($catid,$comprofiler,$user,$itemid)
	{
		$this->catid = $catid;
		$this->comprofiler = $comprofiler;
		$this->itemid = $itemid;
		$this->user = $user;
	}
	
	function showGeneralLink()
	{	
	?>

		<br/>
	<?php
	}
	function endTemplate() {
		/*TAGecho '<div style="text-align:center !important;"></div>';*/	
	}
	
}