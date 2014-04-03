<?php
// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * JComments Content Plugin
 *
 * @package		Joomla.Plugin
 * @subpackage	Content.JComments
 * @since		1.5
 */
class plgAdsmanagercontentJComments extends JPlugin
{
	/**
	 * JComments before display content method
	 *
	 * Method is called by the view and the results are imploded and displayed in a placeholder
	 *
	 * @param	object		The content params
	 */
	public function onContentAfterDisplay($content)
	{
		// add JComments
		$comments = JPATH_SITE.DS.'components'.DS.'com_jcomments'.DS.'jcomments.php';
		if (is_file($comments)) {
		  require_once($comments);
		  return JComments::showComments($content->id, 'com_adsmanager', htmlspecialchars($content->ad_headline));
		}
	}
}
