<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Document
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * JDocument head renderer
 *
 * @package     Joomla.Platform
 * @subpackage  Document
 * @since       11.1
 */
class JDocumentRendererHead extends JDocumentRenderer
{
	/**
	 * Renders the document head and returns the results as a string
	 *
	 * @param   string  $head     (unused)
	 * @param   array   $params   Associative array of values
	 * @param   string  $content  The script
	 *
	 * @return  string  The output of the script
	 *
	 * @since   11.1
	 *
	 * @note    Unused arguments are retained to preserve backward compatibility.
	 */
	public function render($head, $params = array(), $content = null)
	{
		ob_start();
		echo $this->fetchHead($this->_doc);
		$buffer = ob_get_contents();
		ob_end_clean();

		return $buffer;
	}

	/**
	 * Generates the head HTML and return the results as a string
	 *
	 * @param   JDocument  &$document  The document for which the head will be created
	 *
	 * @return  string  The head hTML
	 *
	 * @since   11.1
	 */
	public function fetchHead(&$document)
	{
		// Trigger the onBeforeCompileHead event (skip for installation, since it causes an error)
		$app = JFactory::getApplication();
		$app->triggerEvent('onBeforeCompileHead');
		// Get line endings
		$lnEnd = $document->_getLineEnd();
		$tab = $document->_getTab();
		$tagEnd = ' />';
		$buffer = '';

		// Generate base tag (need to happen first)
		$base = $document->getBase();
		if (!empty($base))
		{
			$buffer .= $tab . '<base href="' . $document->getBase() . '" />' . $lnEnd;
		}

		// Generate META tags (needs to happen as early as possible in the head)
		foreach ($document->_metaTags as $type => $tag)
		{
			foreach ($tag as $name => $content)
			{
				if ($type == 'http-equiv')
				{
					$content .= '; charset=' . $document->getCharset();
					$buffer .= $tab . '<meta http-equiv="' . $name . '" content="' . htmlspecialchars($content) . '" />' . $lnEnd;
				}
				elseif ($type == 'standard' && !empty($content))
				{
					$buffer .= $tab . '<meta name="' . $name . '" content="' . htmlspecialchars($content) . '" />' . $lnEnd;
				}
			}
		}

		// Don't add empty descriptions
		$documentDescription = $document->getDescription();
		if ($documentDescription)
		{
			$buffer .= $tab . '<meta name="description" content="' . htmlspecialchars($documentDescription) . '" />' . $lnEnd;
		}

		// Don't add empty generators
/* 		$generator = $document->getGenerator();
		if ($generator)
		{
			$buffer .= $tab . '<meta name="generator" content="' . htmlspecialchars($generator) . '" />' . $lnEnd;
		} */

		$buffer .= $tab . '<title>' . htmlspecialchars($document->getTitle(), ENT_COMPAT, 'UTF-8') . '</title>' . $lnEnd;

		// Generate link declarations
		foreach ($document->_links as $link => $linkAtrr)
		{
			$buffer .= $tab . '<link href="' . $link . '" ' . $linkAtrr['relType'] . '="' . $linkAtrr['relation'] . '"';
			if ($temp = JArrayHelper::toString($linkAtrr['attribs']))
			{
				$buffer .= ' ' . $temp;
			}
			$buffer .= ' />' . $lnEnd;
		}

		// Generate stylesheet links
		foreach ($document->_styleSheets as $strSrc => $strAttr)
		{
			$buffer .= $tab . '<link rel="stylesheet" href="' . $strSrc . '" type="' . $strAttr['mime'] . '"';
			if (!is_null($strAttr['media']))
			{
				$buffer .= ' media="' . $strAttr['media'] . '" ';
			}
			if ($temp = JArrayHelper::toString($strAttr['attribs']))
			{
				$buffer .= ' ' . $temp;
			}
			$buffer .= $tagEnd . $lnEnd;
		}

		// Generate stylesheet declarations
		foreach ($document->_style as $type => $content)
		{
			$buffer .= $tab . '<style type="' . $type . '">' . $lnEnd;

			// This is for full XHTML support.
			if ($document->_mime != 'text/html')
			{
				$buffer .= $tab . $tab . '<![CDATA[' . $lnEnd;
			}

			$buffer .= $content . $lnEnd;

			// See above note
			if ($document->_mime != 'text/html')
			{
				$buffer .= $tab . $tab . ']]>' . $lnEnd;
			}
			$buffer .= $tab . '</style>' . $lnEnd;
		}
$user5 = JFactory::getUser();		
		if(($app->isAdmin() !=1) and ($user5->get('guest') != 1)) {
		$buffer .='<link rel="stylesheet" type="text/css" href="/media/system/js/jquery.jgrowl.css"/>';
		}
		if ($app->isAdmin() !=1) {
		$buffer .='<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>';
		}
 	if(($app->isAdmin() !=1) and ($user5->get('guest') != 1)) {
	$dat =& JFactory::getDBO();
	$dat->setQuery('SELECT sett10 FROM `#__users` where id='.$user5->id);
	$nas=$dat->loadresult();
	if ($nas == 1) {
	$del1='<script src="/media/system/js/jquery.scrollTo.js" type="text/javascript"></script>';
	$del2='jQuery.scrollTo("325", 400);';
	} else {
	$del1='';
	$del2='';
	}
		$buffer .='<script src="/media/system/js/jquery.jgrowl_minimized.js" type="text/javascript"></script>';
	 	$buffer .= $del1."
<script type='text/javascript'>
try {
var audioMenu = new Audio;
audioMenu.src = '/media/system/sound/tada.wav';
} catch (e) {
function playHome() { 
document.all.sound.src = \"/media/system/sound/tada.wav\"}}
function show()  
{
$.ajax({
type: \"POST\",
url: \"/index.php?option=com_tranz&view=run&layout=run&no_html=1\",
cache: false,
success: function (msg){
if (msg !=' ') {
a=msg.indexOf ('s');
b=msg.lastIndexOf ('s');
rt=msg.substring (a+1,b);
if (rt > 0) {
$.jGrowl(\"<a href='/index.php?option=com_uddeim&view=select&id=1' class='hov'>Новых сообщений: \"+rt+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
};
a=msg.indexOf ('t');
b=msg.lastIndexOf ('t');
rt=msg.substring (a+1,b);
if (rt > 0) {
$.jGrowl(\"<a href='/index.php?option=com_tranz&view=third&layout=third' class='hov'>Новых запросов на перевод часов: \"+rt+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
};
a=msg.indexOf ('n');
b=msg.lastIndexOf ('n');
rt=msg.substring (a+1,b);
if (rt > 0) {
$.jGrowl(\"<a href='/index.php?option=com_tranz&view=first&layout=first' class='hov'>Новых переводов часов: \"+rt+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
};
a=msg.indexOf ('j');
b=msg.lastIndexOf ('j');
rt=msg.substring (a+1,b);
if (rt > 0) {
if (rt==1) 
{
$.jGrowl(\"<a href='/index.php?option=com_tranz&view=second&layout=second' class='hov'>Отказано в \"+rt+\" переводе часов\"+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
} else {
$.jGrowl(\"<a href='/index.php?option=com_tranz&view=second&layout=second' class='hov'>Отказано в \"+rt+\" переводах часов\"+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
}
};
a=msg.indexOf ('u');
b=msg.lastIndexOf ('u');
rt=msg.substring (a+1,b);
if (rt !='') {
var textDiv = document.getElementById('poin');
textDiv.innerHTML = \"<a href='/index.php?option=com_tranz&view=first&layout=first'>\"+rt+\"</a>\";
};
a=msg.indexOf ('o');
b=msg.lastIndexOf ('o');
rt=msg.substring (a+1,b);
if (rt > 0) {
$.jGrowl(\"<a href='/index.php?option=com_adsmanager&view=list' class='hov'>Обновлено/новых объявлений: \"+rt+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}
};
a=msg.indexOf ('k');
b=msg.lastIndexOf ('k');
rt=msg.substring (a+1,b);
if (rt > 0) {
$.jGrowl(\"<a href='/index.php?option=com_kunena&view=latest' class='hov'>Новых сообщений на форуме: \"+rt+\"</a>\", { sticky: true } );
try {audioMenu.play();} catch (e) {playHome();}};};
setTimeout(show, 60000);
}});}; 
$(document).ready(function(){
setTimeout (show, 3000);
$del2
});
</script>"; 
};
		// Generate script file links
		foreach ($document->_scripts as $strSrc => $strAttr)
		{
			if ((($strSrc != '/media/system/js/mootools-more.js') and ($strSrc != '/media/system/js/mootools-core.js') and ($strSrc != '/media/system/js/core.js')) or (($app->getCfg('debug') ==0) and ($app->isAdmin() == 1))) 
			{
			$buffer .= $tab . '<script src="' . $strSrc . '"';
			if (!is_null($strAttr['mime']))
			{
				$buffer .= ' type="' . $strAttr['mime'] . '"';
			}
			if ($strAttr['defer'])
			{
				$buffer .= ' defer="defer"';
			}
			if ($strAttr['async'])
			{
				$buffer .= ' async="async"';
			}
			$buffer .= '></script>' . $lnEnd;
			}
		}

		// Generate script declarations
		foreach ($document->_script as $type => $content)
		{
			$buffer .= $tab . '<script type="' . $type . '">' . $lnEnd;

			// This is for full XHTML support.
			if ($document->_mime != 'text/html')
			{
				$buffer .= $tab . $tab . '<![CDATA[' . $lnEnd;
			}

			$buffer .= $content . $lnEnd;

			// See above note
			if ($document->_mime != 'text/html')
			{
				$buffer .= $tab . $tab . ']]>' . $lnEnd;
			}
			$buffer .= $tab . '</script>' . $lnEnd;
		}

		// Generate script language declarations.
		if (count(JText::script()))
		{
			$buffer .= $tab . '<script type="text/javascript">' . $lnEnd;
			$buffer .= $tab . $tab . '(function() {' . $lnEnd;
			$buffer .= $tab . $tab . $tab . 'var strings = ' . json_encode(JText::script()) . ';' . $lnEnd;
			$buffer .= $tab . $tab . $tab . 'if (typeof Joomla == \'undefined\') {' . $lnEnd;
			$buffer .= $tab . $tab . $tab . $tab . 'Joomla = {};' . $lnEnd;
			$buffer .= $tab . $tab . $tab . $tab . 'Joomla.JText = strings;' . $lnEnd;
			$buffer .= $tab . $tab . $tab . '}' . $lnEnd;
			$buffer .= $tab . $tab . $tab . 'else {' . $lnEnd;
			$buffer .= $tab . $tab . $tab . $tab . 'Joomla.JText.load(strings);' . $lnEnd;
			$buffer .= $tab . $tab . $tab . '}' . $lnEnd;
			$buffer .= $tab . $tab . '})();' . $lnEnd;
			$buffer .= $tab . '</script>' . $lnEnd;
		}

		foreach ($document->_custom as $custom)
		{
			$buffer .= $tab . $custom . $lnEnd;
		}

		return $buffer;
	}
}