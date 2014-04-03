<?php

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class tranzController extends JController
{

	public function display($cachable = false, $urlparams = false)
	{
	if ( JRequest::getCmd( 'view' )=='uprav' ) {$default="uprav";};
	if ( JRequest::getCmd( 'view' )=='rassilka' ) {$default="rassilka";};
	if ( JRequest::getCmd( 'view' )=='vstrechi' ) {$default="vstrechi";};
		JRequest::setVar('view',$default); // force it to be the search view
		
		return parent::display($cachable, $urlparams);
	}

}
