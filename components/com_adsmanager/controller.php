<?php
/**
 * @package		AdsManager
 * @copyright	Copyright (C) 2010-2011 JoomPROD.com. All rights reserved.
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'tables');


/**
 * Content Component Controller
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class AdsManagerController extends JController
{
	function display()
	{
		$app = JFactory::getApplication();
		$document = JFactory::getDocument();
		$user		= JFactory::getUser();
		
		if ( ! JRequest::getCmd( 'view' ) ) {
			$default	= 'front';
			JRequest::setVar('view', $default );
		}
		
		$viewName  = JRequest::getVar('view', 'front', 'default', 'cmd');
		$type	   = JRequest::getVar('format', 'html', 'default', 'cmd');
		$view      = $this->getView($viewName,$type);
		
		if ($viewName == "edit")
		{
			$this->write();
			return;
		}
		
		$uri =& JFactory::getURI();
		$baseurl = JURI::base();
		$view->assign("baseurl",$baseurl);
		$view->assignRef("baseurl",$baseurl);
		
		if (($type == "html")&&(!defined( '_ADSMANAGER_CSS' ))) {
			/** ensure that functions are declared only once */
			define( '_ADSMANAGER_CSS', 1 );
			$uri =& JFactory::getURI();
			$baseurl = JURI::base();
			
			$document =& JFactory::getDocument();
			$document->addStyleSheet($baseurl.'components/com_adsmanager/css/adsmanager.css');
		}
		
		$itemid = JRequest::getInt('Itemid', 0);
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		$view->assign("Itemid",$itemid);
		$view->assignRef("Itemid",$itemid);
		
		// Push a model into the view
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		
		$contentmodel	= &$this->getModel( "content" );
		$catmodel		= &$this->getModel( "category" );
		$positionmodel	= &$this->getModel( "position" );
		$columnmodel	= &$this->getModel( "column" );
		$fieldmodel	    = &$this->getModel( "field" );
		$usermodel		= &$this->getModel( "user" );
		$adsmanagermodel= &$this->getModel( "adsmanager" );
		$configurationmodel	= &$this->getModel( "configuration" );

		if (!JError::isError( $contentmodel )) {
			$view->setModel( $contentmodel, true );
		}	
		
		$view->setModel( $contentmodel);
		$view->setModel( $catmodel);
		$view->setModel( $positionmodel);
		$view->setModel( $columnmodel);
		$view->setModel( $fieldmodel);
		$view->setModel( $usermodel);
		$view->setModel( $adsmanagermodel);
		$view->setModel( $configurationmodel);
		
		if (file_exists( JPATH_BASE .'/components/com_adsmanager/cron.php' ))
			require_once( JPATH_BASE .'/components/com_adsmanager/cron.php' );
		if ($last_cron_date != "Ymd") {
			$contentmodel->manage_expiration($itemid,$fieldmodel->getPlugins(),$configurationmodel->getConfiguration());
		}
		
		if ($viewName == "details") {
			$contentid = JRequest::getInt( 'id',	0 );
			$content = $contentmodel->getContent($contentid);
			// increment views. views from ad author are not counted to prevent highclicking views of own ad
			if ( $user->id <> $content->userid || $content->userid==0) {
				$contentmodel->increaseHits($content->id);
			}
		}
		
		if (($viewName == "list")&&($user->get('id')==0)&&(JRequest::getInt( 'user',	-1 ) == 0)) {
			$app->redirect( JRoute::_("index.php?option=com_adsmanager&view=login&Itemid=".$itemid), "" );
	    	return;
		}
		
		
		if ($user->get('id'))
		{
			parent::display(false);
		}
		else if ($viewName == "list")
		{
			$cache =& JFactory::getCache( 'com_adsmanager' );
			$method = array( $view, 'display' );
			
			$conf = $configurationmodel->getConfiguration();
			
			$tsearch = $app->getUserStateFromRequest('com_adsmanager.front_content.tsearch','tsearch',"");
			$limit   = $app->getUserStateFromRequest('global.list.limit','limit',$app->getCfg('list_limit'), 'int');
			$order   = $app->getUserStateFromRequest('com_adsmanager.front_content.order','order',0,'int');
			$mode    = $app->getUserStateFromRequest('com_adsmanager.front_content.mode','mode',$conf->display_expand);
			$url =& $uri->toString();
			
			echo $cache->call( $method, null,$url,$tsearch,$limit,$order,$mode) . "\n";
		}
		else
		{	
			parent::display(true);
		}
		
		$path = JPATH_ADMINISTRATOR.'/../libraries/joomla/database/table';
		JTable::addIncludePath($path);
	}
	
	function write()
	{
		$app = JFactory::getApplication();
		
		$document = JFactory::getDocument();

		// Set the default view name from the Request
		$type = "html";
		
		$uri =& JFactory::getURI();
		$baseurl = JURI::base();
		
		if (!defined( '_ADSMANAGER_CSS' )) {
			/** ensure that functions are declared only once */
			define( '_ADSMANAGER_CSS', 1 );
			$uri =& JFactory::getURI();
			$baseurl = JURI::base();
			$document =& JFactory::getDocument();
			$document->addStyleSheet($baseurl.'components/com_adsmanager/css/adsmanager.css');
		}
		
		// Push a model into the view
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		$configurationmodel	= &$this->getModel( "configuration" );
		$catmodel		    = &$this->getModel( "category" );
		$contentmodel		= &$this->getModel( "content" );
		$fieldmodel			= &$this->getModel( "field" );
		$usermodel			= &$this->getModel( "user");
		
		$user = JFactory::getUser();
		$conf = $configurationmodel->getConfiguration();
		
		$itemid = JRequest::getInt('Itemid', 0);
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		
		
		/* submission_type = 1 -> Account needed */
	    if (($conf->submission_type == 1)&&($user->id == "0")) {	
	    	$view = $this->getView("login",'html');
	    	$view->setModel( $contentmodel, true );
	    	$view->setModel( $catmodel );
			$view->setModel( $configurationmodel );
			$view->setModel( $fieldmodel );
			$view->setModel( $usermodel );
			
			$view->assign("Itemid",$itemid);
			$view->assignRef("Itemid",$itemid);
		
	    	$view->display();
	    	return;
	    }
	    else
	    {
		    $contentid = JRequest::getInt( 'id', 0 );
		    $nbcontents = $contentmodel->getNbContentsOfUser($user->id);
		  
			if (($contentid == 0)&&($user->id != "0")&&($conf->nb_ads_by_user != -1)&&($nbcontents >= $conf->nb_ads_by_user))
			{
				//REDIRECT
				$redirect_text = sprintf(JText::_('ADSMANAGER_MAX_NUM_ADS_REACHED'),$conf->nb_ads_by_user);
				$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), $redirect_text );
			}
			else 
			{
				$view = $this->getView("edit",'html');
				$view->setModel( $contentmodel, true );
				$view->setModel( $catmodel );
				$view->setModel( $configurationmodel );
				$view->setModel( $fieldmodel );
				$view->setModel( $usermodel );
				
				$view->assign("Itemid",$itemid);
				$view->assignRef("Itemid",$itemid);
		
				$view->display();
			}
	    }
	    $path = JPATH_ADMINISTRATOR.'/../libraries/joomla/database/table';
		JTable::addIncludePath($path);
	}

	/**
	* Saves the content item an edit form submit
	*
	* @todo
	*/
	function save()
	{
		$app = JFactory::getApplication();
		
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		
		$redirect_text = JText::_('ADSMANAGER_INSERT_SUCCESSFULL_PUBLISH');
		
		$user = JFactory::getUser();
		$content =& JTable::getInstance('contents', 'AdsmanagerTable');
		
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		$configurationmodel	= &$this->getModel( "configuration" );
		$contentmodel		= &$this->getModel( "content" );
		$usermodel			= &$this->getModel( "user" );
		$itemid = JRequest::getInt('Itemid', 0);
		
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
	
		$conf = $configurationmodel->getConfiguration();
		
		$id = JRequest::getInt( 'id', 0 );
		
		if (($id == 0)&&($user->id != "0")&&($conf->nb_ads_by_user != -1))
		{
			$nb = $contentmodel->getNbContentsOfUser($user->id);
			if ($nb >= $conf->nb_ads_by_user)
			{
				$redirect_text = sprintf(JText::_('ADSMANAGER_MAX_NUM_ADS_REACHED'),$conf->nb_ads_by_user);
				$app->redirect(JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), $redirect_text );
			}
		}
	
		// bind it to the table
		if (!$content -> bind(JRequest::get( 'post' ))) {
			return JError::raiseWarning( 500, $row->getError() );
		}
		
		if (($content->id != 0)&&($content->id != "")) {
			$isUpdateMode = 1;
			
			$redirect_text = JText::_('ADSMANAGER_UPDATE_SUCCESSFULL');
		}
		else
			$isUpdateMode = 0;
	
		if ($isUpdateMode == 0)
		{
			if ($conf->auto_publish == 1)
			{
				$content->published = 1;
			}
			else
			{	
				$content->published = 0;
				$redirect_text = JText::_('ADSMANAGER_INSERT_SUCCESSFULL_CONFIRM');
			}
		}
		
		
		
		/* if ($isUpdateMode == 0)
		{  */  date_default_timezone_set('Asia/Tbilisi');
			$content->date_created = date("Y-m-d H:i:s");
			$delta = $conf->ad_duration;  
			$content->expiration_date = date("Y-m-d",mktime()+($delta*24*3600)); 
		/* } */	
		
		$errorMsg = null;
		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('adsmanagercontent');

		try {
			$results = $dispatcher->trigger('onContentBeforeSave', array ());
		} catch(Exception $e) {
			$errorMsg = $e->getMessage();
		}
		
		//Creation of account if needed
		if (($conf->submission_type == 0)&&($user->id == 0))
		{
			$username = JRequest::getVar('username', "" );
			$password = JRequest::getVar('password', ""  );
			$email = JRequest::getVar('email', ""  );
			$errorMsg = $usermodel->checkAccount($username,$password,$email,$userid,$conf);
			$user->id = $userid;
		}
		
		if (isset($errorMsg))
		{
			$catid = JRequest::getInt('category', 0 );
			$url = JRoute::_("index.php?option=com_adsmanager&task=write&catid=$catid&Itemid=$itemid");
			echo "<form name='form' action='$url' method='post'>"; 
			foreach(JRequest::get( 'post' ) as $key => $val) 
			{
				if (is_array($val))
					$val = ",".implode(",",$val).",";
				echo "<input type='hidden' name='$key' value='".htmlspecialchars($val)."'>"; 
			}
			echo "<input type='hidden' name='errorMsg' value='$errorMsg'>"; 
			echo '</form>'; 
			echo '<script language="JavaScript">'; 
			echo 'document.form.submit()'; 
			echo '</script>'; 		
			return;
		}
		
		//Valid account or visitor are allowed to post
		if (($user->id != 0)||($conf->submission_type == 2))
		{
			$content->userid = $user->id;
		} else {
			//trying to save ad, without being registered
			return;
		}
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
		if (($isUpdateMode == 1) and (isset ($content->id))) {
		$database->setQuery('SELECT * FROM `#__adsmanager_ads` where `id`='.$content->id);
		$zag=$database->loadObject();
		if (($zag->ad_headline!=$content->ad_headline) or ($zag->ad_text!=$content->ad_text)) {
		$database->setQuery("UPDATE `#__adsmanager_ads` SET `rating` = '0',
`count1` = '0' WHERE `#__adsmanager_ads`.`id` =".$content->id);
		$database->query();
		$content->ad_rating=0;
		$database->setQuery('SELECT * FROM `#__adsmanager_ads` where (userid='.$user->id.') and (published=1) and (root_cat=4)');
		$rez1=$database->loadObjectList();															//Суммирование рейтинга
		$sum1=0;	 $sum2=0;
		foreach ($rez1 as $ert) {
		$sum1=$sum1+$ert->rating;
		$sum2=$sum2+$ert->count1;
		};
   $database->setQuery("UPDATE `#__users` SET `rating` = '".$sum1."',
`count1` = '".$sum2."' WHERE `#__users`.`id` =".$user->id);//Обновление данных по рейтингу
		$database->query();
		}}
		// store it in the db
		if (!$content -> store()) {
			return JError::raiseWarning( 500, $content->getError() );
		} else {
		$database->setQuery("SELECT * FROM `#__users` where (id<>".$user->id.") and (block=0)");	
		$usern=$database->loadObjectList();
		foreach($usern as $us) {
			if ($us->sett4==1) {
			$nach = strpos ($us->message, "o");
			if ($nach === false) {
			$query = "UPDATE `#__users` SET `message` = '".$us->message."o1o' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);	
			$database->query();
			} else {
			$kon = strrpos ($us->message, "o");
			$len = strlen ($us->message);
			$re = substr ($us->message, $nach+1, ((($len-$nach)-($len-$kon))-1));
			$re = $re+1;
			$rf = (substr ($us->message, 0, $nach+1)).$re.(substr ($us->message, $kon, ($len-$kon)));
			$query = "UPDATE `#__users` SET `message` = '".$rf."' WHERE `#__users`.`id` =".$us->id;
			$database->setQuery($query);	
			$database->query();
			}}
		}
		$database->setQuery('SELECT id FROM #__jcomments_subscriptions where object_id='.$content->id.' and userid='.$user->id.' and object_group=\'com_adsmanager\'');
		$ww=$database->loadObjectList();
		if (count ($ww)==0) {
		$database->setQuery ("select email from #__users where id=".$user->id);
		$em=$database->loadresult ();
		$database->setQuery ("INSERT INTO `#__jcomments_subscriptions` (
`id` ,
`object_id` ,
`object_group` ,
`lang` ,
`userid` ,
`name` ,
`email` ,
`hash` ,
`published` ,
`source` 
)
VALUES (
NULL , '".$content->id."', 'com_adsmanager', 'ru-RU', '".$user->id."', '".$user->name."', '".$em."', '', '1', ''
)");
		$database->query();
		}
		}
		
		$model = $this->getModel("field");
		$plugins = $model->getPlugins();
		
		$content->save(JRequest::get( 'post' ),JRequest::get( 'files' ),$conf,$this->getModel("adsmanager"),$plugins,$isUpdateMode);
		
		$cache = & JFactory::getCache('com_adsmanager');
		$cache->clean();

		if ((($conf->send_email_on_new == 1)&&($isUpdateMode == 0))||
			(($conf->send_email_on_update == 1)&&($isUpdateMode == 1)))
		{
			$config	= &JFactory::getConfig();
			$from		= $config->getValue('mailfrom');
			$fromname	= $config->getValue('fromname');
			
			$body = JRequest::getVar("ad_text", "" );
			$body = str_replace(array("\r\n", "\n", "\r"), "<br />", $body);
			
			$subject = JRequest::getVar("ad_headline", "" );
			if( $isUpdateMode == 1)
				$subject = JText::_('ADSMANAGER_EMAIL_UPDATE')." ".$subject;
			else
				$subject = JText::_('ADSMANAGER_EMAIL_NEW')." ".$subject;
				
			// Send the e-mail to Administrator
			if (!JUtility::sendMail($from, $fromname, $from, $subject, $body))
			{
				$this->setError(JText::_('ADSMANAGER_ERROR_SENDING_MAIL'));
				return false;
			}
		}	
		$cache =& JFactory::getCache( 'com_adsmanager');
		$cache->clean();
			 if (isset($_POST['ret'])) {
$app->redirect("index.php/component/adsmanager/post_ad", "Успешно сохранено. Добавляйте ещё!");
};
		if ($conf->submission_type == 2)
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), $redirect_text );	
		else if ($conf->comprofiler == 2)
			$app->redirect( JRoute::_('index.php?option=com_comprofiler&task=userProfile&tab=AdsManagerTab'), $redirect_text );
		else
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), $redirect_text ); 
			
	}
	
	function delete()
	{
		$app = JFactory::getApplication();
		
		$itemid = JRequest::getInt('Itemid', 0);
		
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		
		$user = JFactory::getUser();
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		$configurationmodel = &$this->getModel( "configuration" );
		$fieldmodel	        = &$this->getModel( "field" );
		
		$content =& JTable::getInstance('contents', 'AdsmanagerTable');
		
		$id = JRequest::getInt('id', 0);
		if ($id == 0) {
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), "" );
		}
		
		$content->load($id);
		if (($content == null)||($content->userid != $user->id))
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=list&Itemid='.$itemid), "" );
		$database =& JFactory::getDBO();
		$database->setQuery('SELECT COUNT(*) FROM `#__adsmanager_ads` where `userid`='.$user->id.' and `root_cat`=4');
		$vsego=$database->loadResult();
		if ($vsego>1) {
		$database->setQuery('SELECT COUNT(*) FROM `#__adsmanager_ads` where `userid`='.$user->id.' and `ad_important`=1');
		$imp=$database->loadResult ();
		if ($imp==1) {
		$database->setQuery('SELECT id FROM `#__adsmanager_ads` where `ad_important`=1 and `userid`='.$user->id);
		$rez2=$database->loadResult ();
		if ($id==$rez2) {
		echo "<script language='JavaScript' type='text/JavaScript'>
		history.back();
alert (\"Уважаемый участник, при наличии других объявлений вы не можете удалить Ваше последнее обязательное объявление. Перераспределите обязательные объявления для удаления этого. Если Вы хотите удалить все объявления, то последнее обязательное объявление должно быть последним удаляемым.\");
</script>";
		return false;
		}
		}}
		$conf = $configurationmodel->getConfiguration();
		$plugins = $fieldmodel->getPlugins();
		$content->delete($id,$conf,$plugins);
		
		$cache =& JFactory::getCache( 'com_adsmanager');
		$cache->clean();
		$database->setQuery('SELECT rating, count1 FROM `#__adsmanager_ads` where userid='.$user->id.' and root_cat=4');
		$rez=$database->loadObjectList();															//Суммирование рейтинга
		$sum1=0;	 $sum2=0;		
		foreach ($rez as $ert) {
		$sum1=$sum1+$ert->rating;
		$sum2=$sum2+$ert->count1;
		};
   $database->setQuery("UPDATE `#__users` SET `rating` = '".$sum1."',
`count1` = '".$sum2."' WHERE `#__users`.`id` =".$user->id);//Обновление данных по рейтингу
		$database->query();
		$app->redirect(($_SERVER["HTTP_REFERER"]), (JText::_('ADSMANAGER_CONTENT_REMOVED')));
	}
	
	function sendmessage()
	{
		$app = JFactory::getApplication();
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		
		$contentid = JRequest::getInt( 'contentid',0 );
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		$contentmodel = &$this->getModel( "content" );
		$content = $contentmodel->getContent($contentid);
		
		$itemid = JRequest::getInt('Itemid', 0);
		
		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('adsmanagercontent');
		
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		
		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('adsmanagercontent');
		try {
			$results = $dispatcher->trigger('onMessageBeforeSend', array ());
		} catch(Exception $e) {
			$errorMsg = $e->getMessage();
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=message&contentid='.$contentid.'&Itemid='.$itemid), $errorMsg );
		}
		
		if (isset($content))
		{
			$name = JRequest::getVar('name' , "" );
			$email = JRequest::getVar('email', "" );
			jimport('joomla.mail.helper');
			if (!JMailHelper::isEmailAddress($email))
			{
				$this->setError(JText::_('INVALID_EMAIL_ADDRESS'));
				$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=details&catid='.$content->catid.'&id='.$contentid.'&Itemid='.$itemid), 'INVALID_EMAIL_ADDRESS' );
			}
			$subject = JRequest::getVar('title', "" );
			$body = JRequest::getVar('body' , "" );
			$body = str_replace(array("\r\n", "\n", "\r"), "<br />", $body);
			
			$file = JRequest::getVar( 'attach_file',null,'FILES');
			if ($file['tmp_name'] != "")
			{
				$directory = ini_get('upload_tmp_dir')."";
				if ($directory == "")
					$directory = ini_get('session.save_path')."";
					
				$filename = $directory."/".basename($file['name']);
				rename($file['tmp_name'], $filename);
				if (!JUtility::sendMail($email,$name,$content->email,$subject,$body,1,NULL,NULL,$filename))
				{
					$this->setError(JText::_('ADSMANAGER_ERROR_SENDING_MAIL'));
					$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=details&catid='.$content->catid.'&id='.$contentid.'&Itemid='.$itemid), JText::_('ADSMANAGER_ERROR_SENDING_MAIL') );
				}
			}
			else {
				if (!JUtility::sendMail($email,$name,$content->email,$subject,$body,1))
				{
					$this->setError(JText::_('ADSMANAGER_ERROR_SENDING_MAIL'));
					$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=details&catid='.$content->catid.'&id='.$contentid.'&Itemid='.$itemid), JText::_('ADSMANAGER_ERROR_SENDING_MAIL') );
				}
			}
		}
		$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=details&catid='.$content->catid.'&id='.$contentid.'&Itemid='.$itemid), JText::_('ADSMANAGER_EMAIL_SENT') );
	}
	
	function saveprofile()
	{
		$app = JFactory::getApplication();
		
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		
		$user  = JFactory::getUser();
		$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
		$usermodel = &$this->getModel( "user" );
		
		$itemid = JRequest::getInt('Itemid', 0);
		
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		
		$dispatcher =& JDispatcher::getInstance();
		JPluginHelper::importPlugin('adsmanagercontent');
		try {
			$results = $dispatcher->trigger('onUserBeforeSave', array ());
		} catch(Exception $e) {
			$errorMsg = $e->getMessage();
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=profile&Itemid='.$itemid), $errorMsg );
		}
	
		$user->orig_password = $user->password;
	
		$password   =  JRequest::getVar('password', "");
		$verifyPass = JRequest::getVar('verifyPass', "");
		if($password != "") {
			if($verifyPass == $password) {
				jimport('joomla.user.helper');
				$salt = JUserHelper::genRandomPassword(32);
				$crypt = JUserHelper::getCryptedPassword($password, $salt);
				$user->password = $crypt.':'.$salt;
			} else {
				$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=profile&Itemid='.$itemid), JText::_('_PASS_MATCH') );
				exit();
			}
		} else {
			// Restore 'original password'
			$user->password = $user->orig_password;
		}
	
		$user->name = JRequest::getVar('name', "");
		$user->username = JRequest::getVar('username', "");
		$user->email = JRequest::getVar('email', "");
	
		unset($user->orig_password); // prevent DB error!!
	
		if (!$user->save()) {
			$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=profile&Itemid='.$itemid), $user->getError() );
		}
	
		$usermodel->updateProfileFields($user->id);
		
		$app->redirect( JRoute::_('index.php?option=com_adsmanager&view=profile&Itemid='.$itemid), JText::_('ADSMANAGER_PROFILE_SAVED') );
	}
	
	function renew() {
		$app = JFactory::getApplication();
		
		$itemid = JRequest::getInt('Itemid', 0);
		
		if ($itemid == 0)
		{
			$component =& JComponentHelper::getComponent('com_adsmanager');
      	    $menus  = &JApplication::getMenu('site', array());
       		$items  = $menus->getItems('componentid', $component->id);
       		if ($items)
       		{
				$itemid = $items[0]->id;       			
       		}
		}  
		$contentid = JRequest::getInt('id', 0);
		
		if (function_exists("renewPaidAd")) {
			renewPaidAd($contentid,$itemid);
			
			$cache =& JFactory::getCache( 'com_adsmanager');
			$cache->clean();
			
			$app->redirect(JRoute::_("index.php?option=com_adsmanager&Itemid=".$itemid),JText::_('ADSMANAGER_CONTENT_RESUBMIT'));
		}
		else
		{
			$this->addModelPath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_adsmanager'.DS.'models');
			$contentmodel = &$this->getModel( "content" );
			
			$confmodel = &$this->getModel( "configuration" );
			$conf = $confmodel->getConfiguration();
			
			
			$contentmodel->renewContent($contentid,$conf->ad_duration);
			
			$cache =& JFactory::getCache( 'com_adsmanager');
			$cache->clean();
			
			$app->redirect(JRoute::_("index.php?option=com_adsmanager&Itemid=".$itemid),JText::_('ADSMANAGER_CONTENT_RESUBMIT'));
		}
	}
}
