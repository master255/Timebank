<?php

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class tranzController extends JController
{

	public function display($cachable = false, $urlparams = false)
	{
	if ( JRequest::getCmd( 'view' )=='first' ) {$default="first";}; 
	if ( JRequest::getCmd( 'view' )=='second' ) {$default="second";};
	if ( JRequest::getCmd( 'view' )=='third' ) {$default="third";};
	if ( JRequest::getCmd( 'view' )=='pokupka' ) {$default="pokupka";  /* JRequest::setVar('tmpl','component'); */  };
	if ( JRequest::getCmd( 'view' )=='prodaja' ) {$default="prodaja"; /* JRequest::setVar('tmpl','component'); */ };
	if ( JRequest::getCmd( 'view' )=='options' ) {$default="Options";};
	if ( JRequest::getCmd( 'view' )=='groups' ) {$default="groups";};
	if ( JRequest::getCmd( 'view' )=='predlojenie' ) {$default="predlojenie";};
	if ( JRequest::getCmd( 'view' )=='general' ) {$default="General";};
	if ( JRequest::getCmd( 'view' )=='instr' ) {$default="instr";};
	if ( JRequest::getCmd( 'view' )=='vstrechi' ) {$default="vstrechi";};
	if ( JRequest::getCmd( 'view' )=='rassilka' ) {$default="rassilka";};
	if ( JRequest::getCmd( 'view' )=='map' ) {$default="map";};
	if ( JRequest::getCmd( 'view' )=='rassilka1' ) {$default="rassilka1";};
	if ( JRequest::getCmd( 'view' )=='chat' ) {$default="chat";};
	if ( JRequest::getCmd( 'view' )=='vstrecha' ) {$default="vstrecha";};
	if ( JRequest::getCmd( 'view' )=='donation' ) {$default="donation";};
	if ( JRequest::getCmd( 'view' )=='run' ) {$default="run"; JRequest::setVar('tmpl','component');};
	if ( JRequest::getCmd( 'view' )=='img' ) {$default="img"; JRequest::setVar('tmpl','component');};
	if ( JRequest::getCmd( 'view' )=='mail' ) {$default="mail"; JRequest::setVar('tmpl','component');};
	if ( JRequest::getCmd( 'view' )=='xls' ) {$default="xls"; JRequest::setVar('tmpl','component');};
	if ( JRequest::getCmd( 'view' )=='mobile' ) {$default="mobile"; JRequest::setVar('tmpl','component');};
		JRequest::setVar('view',$default); // force it to be the search view
		
		return parent::display($cachable, $urlparams);
	}

}
