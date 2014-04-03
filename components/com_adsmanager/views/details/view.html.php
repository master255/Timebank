<?php
/**
 * @package		AdsManager
 * @copyright	Copyright (C) 2010-2011 JoomPROD.com. All rights reserved.
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.view');

require_once(JPATH_BASE."/components/com_adsmanager/helpers/field.php");
require_once(JPATH_BASE."/components/com_adsmanager/helpers/general.php");

/**
 * @package		Joomla
 * @subpackage	Contacts
 */
class AdsmanagerViewDetails extends JView
{
	function display($tpl = null)
	{
		$app = &JFactory::getApplication();

		$user		= JFactory::getUser();
		$pathway	= $app->getPathway();
		$document	= JFactory::getDocument();
		
		$contentmodel	= &$this->getModel( "content" );
		$catmodel		= &$this->getModel( "category" );
		$positionmodel	= &$this->getModel( "position" );
		$fieldmodel	    = &$this->getModel( "field" );
		$configurationmodel	= &$this->getModel( "configuration" );

		// Get the parameters of the active menu item
		$menus	= JSite::getMenu();
		$menu    = $menus->getActive();
		
		$conf = $configurationmodel->getConfiguration();
		
		$catid = JRequest::getInt( 'catid',	0 );
		if ($catid != "0") {
			$category = $catmodel->getCategory($catid);
			$category->img = $this->get("baseurl").'/images/com_adsmanager/categories/'.$catid.'cat_t.jpg';
		}
		else
		{
			$category->name = JText::_("ADSMANAGER_ALL_ADS");
			$category->description = "";
			$category->img = "";
		}
		
		$pathlist = $catmodel->getPathList($catid,$this->get("Itemid"));
		$this->assignRef('pathlist',$pathlist);
		
		$positions = $positionmodel->getPositions();
		$fDisplay = $fieldmodel->getFieldsbyPositions();
		
		$field_values = $fieldmodel->getFieldValues();
		
		$contentid = JRequest::getInt( 'id',	0 );
		$content = $contentmodel->getContent($contentid);
		
		$this->assignRef('list_name',$category->name);
		$this->assignRef('list_img',$category->img);
		$this->assignRef('list_description',$category->description);
		$this->assignRef('positions',$positions);	
		$this->assignRef('fDisplay',$fDisplay);	
		$this->assignRef('conf',$conf);
		$this->assignRef('userid',$user->id);
		
		$fields = $fieldmodel->getFields();
		$this->assignRef('fields',$fields);
		
		$document->setTitle( JText::_('ADSMANAGER_PAGE_TITLE')." ".$category->name." - ".$content->ad_headline);

		//set breadcrumbs 
		$pathlist = $catmodel->getPathList($catid,$this->get("Itemid"));
		$nb = count($pathlist);
		for ($i = $nb - 1 ; $i >=0;$i--)
		{
			$pathway->addItem($pathlist[$i]->text, $pathlist[$i]->link);
		}
		$pathway->addItem($content->ad_headline, "#");
		
		$plugins = $fieldmodel->getPlugins();
		$field = new JHTMLAdsmanagerField($conf,$field_values,'1',$plugins,$this->get("Itemid"),$this->get("baseurl"));
		
		$this->assignRef('field',$field);
		
		$general = new JHTMLAdsmanagerGeneral($catid,$conf->comprofiler,$user,$this->get("Itemid"));
		$this->assignRef('general',$general);
		
		//
		// Process the content plugins.
		//
		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('adsmanagercontent');
		
		
		$results = $dispatcher->trigger('onContentPrepare', array ($content));

		$event = new stdClass();
		$results = $dispatcher->trigger('onContentAfterTitle', array ($content));
		$event->onContentAfterTitle = trim(implode("\n", $results));

		$results = $dispatcher->trigger('onContentBeforeDisplay', array ($content));
		$event->onContentBeforeDisplay = trim(implode("\n", $results));

		$results = $dispatcher->trigger('onContentAfterDisplay', array ($content));
		$event->onContentAfterDisplay = trim(implode("\n", $results));
		
		$content->event = $event;
		$this->assignRef('content',$content);
		
		parent::display($tpl);
	}
	function reorderDate( $date ){
		$format = JText::_('ADSMANAGER_DATE_FORMAT_LC');
		
		if ($date && (preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/",$date,$regs))) {
			$date = mktime( 0, 0, 0, $regs[2], $regs[3], $regs[1] );
			$date = $date > -1 ? strftime( $format, $date) : '-';
		}
		return $date;
	}
	function loadScriptImage($image_display)
	{
		$document =& JFactory::getDocument();
		
		switch($image_display)
		{
			case 'popup':
				$document->addCustomTag('
				<script language="JavaScript" type="text/javascript">
				<!--
				function popup(img) {
				titre="Popup Image";
				titre="Agrandissement"; 
				w=open("","image","width=400,height=400,toolbar=no,scrollbars=no,resizable=no"); 
				w.document.write("<html><head><title>"+titre+"</title></head>"); 
				w.document.write("<script language=\"javascript\">function checksize() { if	(document.images[0].complete) {	window.resizeTo(document.images[0].width+10,document.images[0].height+50); window.focus();} else { setTimeout(\'checksize()\',250) }}</"+"script>"); 
				w.document.write("<body onload=\"checksize()\" leftMargin=0 topMargin=0 marginwidth=0 marginheight=0>");
				w.document.write("<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"100%\"><tr>");
				w.document.write("<td valign=\"middle\" align=\"center\"><img src=\""+img+"\" border=0 alt=\"Mon image\">"); 
				w.document.write("</td></tr></table>");
				w.document.write("</body></html>"); 
				w.document.close(); 
				} 
				
				-->
				</script>');
				break;
			case 'lightbox':
			case 'lytebox': 
 				$document->addCustomTag('<script type="text/javascript" src="'.$this->get("baseurl").'/components/com_adsmanager/lytebox/js/lytebox_322cmod1.3.js"></script>'); 
 				$document->addCustomTag('<link rel="stylesheet" href="'.$this->get("baseurl").'/components/com_adsmanager/lytebox/css/lytebox_322cmod1.3.css" type="text/css" media="screen" />');
 				break; 
			case 'highslide': 
				$document->addCustomTag('<script type="text/javascript" src="'.$this->get("baseurl").'/components/com_adsmanager/highslide/js/highslide-full.js"></script>'); 
				$document->addCustomTag('<script type="text/javascript">hs.graphicsDir = "'.$this->get("baseurl").'" + hs.graphicsDir;</script>'); 
				$document->addCustomTag('<link rel="stylesheet" href="'.$this->get("baseurl").'/components/com_adsmanager/highslide/css/highslide-styles.css" type="text/css" media="screen" />'); 
				break; 
			default:
				break;
		}
	}
}
