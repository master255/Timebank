<?php
/**
 * @package		AdsManager
 * @copyright	Copyright (C) 2010-2011 JoomPROD.com. All rights reserved.
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'tables');
jimport('joomla.application.component.controller');

/**
 * Content Component Controller
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class AdsmanagerControllerContents extends JController
{
	function init()
	{
		// Set the default view name from the Request
		$this->_view = $this->getView("admin",'html');

		// Push a model into the view
		$this->_model = $this->getModel( "content");
		if (!JError::isError( $this->_model )) {
			$this->_view->setModel( $this->_model, true );
		}
		
		$uri =& JFactory::getURI();
		$baseurl = JURI::base()."../";

		$this->_view->assign("baseurl",$baseurl);
		$this->_view->assignRef("baseurl",$baseurl);
	}
	
	function display()
	{
		$this->init();
		
		$confmodel	  = $this->getModel("configuration");
		$catmodel	  = $this->getModel("category");
		$this->_view->setModel( $confmodel );
		$this->_view->setModel( $catmodel );
		
		$this->_view->setLayout("listcontents");
		$this->_view->display();
	}
	
	function edit()
	{
		$this->init();
		$confmodel	  = $this->getModel("configuration");
		$catmodel	  = $this->getModel("category");
		$usermodel	  = $this->getModel("user");
		$fieldmodel	  = $this->getModel("field");

		$this->_view->setModel( $confmodel );
		$this->_view->setModel( $catmodel );
		$this->_view->setModel( $usermodel );
		$this->_view->setModel( $fieldmodel );

		$this->_view->setLayout("editcontent");
		$this->_view->display();
	}
	
	function add()
	{
		$this->init();
		
		$confmodel	  = $this->getModel("configuration");
		$catmodel	  = $this->getModel("category");
		$usermodel	  = $this->getModel("user");
		$fieldmodel	  = $this->getModel("field");
		
		$this->_view->setModel( $confmodel );
		$this->_view->setModel( $catmodel );
		$this->_view->setModel( $usermodel );
		$this->_view->setModel( $fieldmodel );

		$this->_view->setLayout("editcontent");
		$this->_view->display();
	}
	
	function remove()
	{
		$app = &JFactory::getApplication();
		
		$content =& JTable::getInstance('contents', 'AdsmanagerTable');
		
		$ids = JRequest::getVar( 'cid', array(0));
		if (!is_array($ids)) {
			$table = array();
			$table[0] = $ids;
			$ids = $table;
		}
		
		$model = $this->getModel( "configuration");
		$conf = $model->getConfiguration();
		
		$model = $this->getModel( "field");
		$plugins = $model->getPlugins();
		$database =& JFactory::getDBO();
		
		foreach($ids as $id){
			
		$database->setQuery('SELECT userid FROM `#__adsmanager_ads` where id='.$id);
		$rrez=$database->loadResult();															//Суммирование рейтинга
		$content->delete($id,$conf,$plugins);
		$database->setQuery('SELECT rating, count1 FROM `#__adsmanager_ads` where (userid='.$rrez.') and (published=1) and (root_cat=4)');
		$rez6=$database->loadObjectList();
		$sum1=0;	 $sum2=0;		
		foreach ($rez6 as $ert) {
		$sum1=$sum1+$ert->rating;
		$sum2=$sum2+$ert->count1;
		};
   $database->setQuery("UPDATE `#__users` SET `rating` = '".$sum1."',
`count1` = '".$sum2."' WHERE `#__users`.`id` =".$rrez);//Обновление данных по рейтингу
		$database->query();}
		
		$cache =& JFactory::getCache( 'com_adsmanager');
		$cache->clean();
		
		$app->redirect( 'index.php?option=com_adsmanager&c=contents', JText::_('ADSMANAGER_CONTENT_REMOVED') );
	}
	
	function unpublish()
	{
		$this->_changeState();
	}
	
	function publish()
	{
		$this->_changeState();
	}
	
	function save()
	{
		$app = &JFactory::getApplication();
		
		$content =& JTable::getInstance('contents', 'AdsmanagerTable');

		// bind it to the table
		if (!$content -> bind(JRequest::get( 'post' ))) {
			return JError::raiseWarning( 500, $content->getError() );
		}
		
		$conf =& JTable::getInstance('adsconfiguration', 'AdsmanagerTable');
		$conf->load(1);
		
		if ($content->id != "")
			$isUpdateMode = 1;
		else
			$isUpdateMode = 0;
	
		/* if ($isUpdateMode == 0)
		{ */
			$content->date_created = date("Y-m-d H:i:s");
			$delta = $conf->ad_duration;  
			$content->expiration_date = date("Y-m-d",mktime()+($delta*24*3600)); 
		/* } */
		$database =& JFactory::getDBO();
		
		$res=$content->category; $e=0; $rez=0;
		for ($e; $e<50; $e++) {
		$database->setQuery('SELECT parent FROM `#__adsmanager_categories` where id='.$res);
		$res=$database->loadresult();
			if ($res==0)	break;
			$rez=$res;
		};
		$content->root_cat = $rez;
		if ($content->root_cat==4) {
		if ($content->ad_important=='') {$content->ad_important=0;}
		$database->setQuery('SELECT COUNT(*) FROM `#__adsmanager_ads` WHERE `userid`= '.$content->userid.' and `ad_important`=1');
		$countt=$database->loadResult();
		if ((($countt<1) and ($content->ad_important==false)) or (($countt==1) and ($content->ad_important==false) and ($isUpdateMode == 1))) {
		echo "<script language='JavaScript' type='text/JavaScript'>
		history.back();
alert (\"Уважаемый участник, по нашим правилам Вы должны иметь хотябы одно обязательное объявление в разделе 'Предложение', что бы мы знали какая у Вас профессия. Поэтому первое (это) объявление должно быть обязательным (необходимо поставить галочку в поле 'Обязуюсь выполнить'). В дальнейшем Вы можете перераспределить обязательные объявления по своему усмотрению.\");
</script>";
		return false;
		}}
		
		// store it in the db
		if (!$content -> store()) {
			return JError::raiseWarning( 500, $content->getError() );
		}	
		
		$model = $this->getModel("configuration");
		$conf = $model->getConfiguration();
		
		$model = $this->getModel("field");
		$plugins = $model->getPlugins();
		
		$content->save(JRequest::get( 'post' ),JRequest::get( 'files' ),$conf,$this->getModel("adsmanager"),$plugins,$isUpdateMode);
		
		$cache = & JFactory::getCache('com_adsmanager');
		$cache->clean();
	
		$app->redirect( 'index.php?option=com_adsmanager&c=contents', JText::_('ADSMANAGER_CONTENT_SAVED') );	
	}
	
	function _changeState()
	{
		$app = &JFactory::getApplication();

		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$publish	= ( $this->getTask() == 'publish' ? 1 : 0 );

		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1)
		{
			$action = $publish ? 'publish' : 'unpublish';
			JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
		}
		
		$model = $this->getModel( "adsmanager");
		$model->changeState("#__adsmanager_ads","id","published",$publish,$cid);
		
		$cache = & JFactory::getCache('com_adsmanager');
		$cache->clean();

		$app->redirect( 'index.php?option=com_adsmanager&c=contents' );
	}	
}
