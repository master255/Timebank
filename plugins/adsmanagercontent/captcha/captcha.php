<?php
// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * JComments Content Plugin
 *
 * @package		Joomla.Plugin
 * @subpackage	Content.Captcha
 * @since		1.5
 */
class plgAdsmanagercontentCaptcha extends JPlugin
{
	
	public function onContentBeforeSave() {
		return $this->checkCaptcha();
	}
    public function onUserBeforeSave() {
		return $this->checkCaptcha();
	}
	public function onMessageBeforeSend() {
		return $this->checkCaptcha();
	}

	public function onContentAfterForm($content) {	
		return $this->displayCaptcha();
	}
	
	public function onUserAfterForm($user) {
		return $this->displayCaptcha();
	}
	public function onMessageAfterForm($content) {
		return $this->displayCaptcha();
	}
	
	public function checkCaptcha() {
		$code = JRequest::getVar('code_captcha','');
		$session = JFactory::getSession();

		if ($session->get('security_code') != $code) {
			throw new Exception(JText::_('ADSMANAGER_ERROR_BAD_CAPTCHA'));
		}
		return true; 
	}
	
	public function displayCaptcha()
	{
		if(version_compare(JVERSION,'1.6.0','>=')){
        	$url = JURI::base() . "plugins/adsmanagercontent/captcha/captcha/";
        } else {
        	$url = JURI::base() . "plugins/adsmanagercontent/captcha/";
        }
		$img = '<img src="'.$url.'generate.php" />';
		
		$html  = "<tr><td>".JText::_('ADSMANAGER_SECURITY_CODE')."</td><td>";
		$html .= "$img<br/><input class='inputbox' type='text' name='code_captcha' value='' size='17' />";
		$html .= "</td></tr>";
		return $html;
	}
}