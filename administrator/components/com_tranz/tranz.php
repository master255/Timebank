<?php
defined( '_JEXEC' ) or die( 'Restricted access' );


	jimport('joomla.application.component.controller');

	// Create the controller
	$controller = JController::getInstance('tranz');

	// Perform the Request task
	$controller->execute(JRequest::getCmd('task'));

	// Redirect if set by the controller
	$controller->redirect();

 ?>