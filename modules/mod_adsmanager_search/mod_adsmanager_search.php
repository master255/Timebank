<?php
// no direct access
defined('_JEXEC') or die( 'Restricted access' );

require_once(JPATH_BASE.'/administrator/components/com_adsmanager/models/configuration.php');
require_once(JPATH_BASE.'/administrator/components/com_adsmanager/models/field.php');
require_once(JPATH_BASE.'/administrator/components/com_adsmanager/models/category.php');
require_once(JPATH_BASE."/components/com_adsmanager/helpers/field.php");

$lang = JFactory::getLanguage();
$lang->load("com_adsmanager");

if (!defined('_ADSMANAGER_MODULE_SEARCH')) {
	define( '_ADSMANAGER_MODULE_SEARCH', 1 );
	function adsmanagerModuleSelectCategories($id, $level, $children,$catid) {
		if (@$children[$id]) {
			foreach ($children[$id] as $row) {
				if ($level == "") { ?>
					<option style="background-color:#dcdcc3;" value="<?php echo $row->id; ?>" <?php if ($catid == $row->id) echo "selected='selected'"; ?>><?php echo "-- ". $row->name." --"; ?></option>
				<?php } else { ?>
					<option value="<?php echo $row->id; ?>" <?php if ($catid == $row->id) echo "selected='selected'"; ?>><?php echo $row->name; ?></option>
				<?php } 
				adsmanagerModuleSelectCategories($row->id, $level." >> ",$children,$catid);
			}
		}
	}
}

/****************************************************/
jimport( 'joomla.session.session' );	
$currentSession = JSession::getInstance('none',array());
$defaultvalues = $currentSession->get("searchfields",array());
			
$catid = intval( JRequest::getInt('catid', -1 ));
//$text_search = JRequest::getVar('tsearch','');
$app = &JFactory::getApplication();
$text_search = $app->getUserStateFromRequest('com_adsmanager.front_content.tsearch','tsearch',"");
		
$itemid = intval($params->get( 'default_itemid', JRequest::getInt('Itemid', 0 ) )) ;
$advanced_search = intval($params->get( 'advanced_search', 1)) ;
$search_by_cat = intval($params->get( 'search_by_cat', 1)) ;

$fields[] = $params->get( 'field1', "") ;
$fields[] = $params->get( 'field2', "") ;
$fields[] = $params->get( 'field3', "") ;
$fields[] = $params->get( 'field4', "") ;
$fields[] = $params->get( 'field5', "") ;
$type = $params->get( 'type', "table") ;
$listfields="";

foreach($fields as $field)
{
	if (($listfields == "")&&($field != ""))
		$listfields .= "'$field'";
	if ($field != "")
		$listfields .= ",'$field'";
}

$fieldmodel  = new AdsmanagerModelField();
$field_values = array();
if ($listfields != "")
{
	$searchfields = $fieldmodel->getFieldsByName($listfields);
	$field_values = $fieldmodel->getFieldValues();

	foreach($searchfields as $field)
	{
		if ($field->cbfieldvalues != "-1")
		{
			/*get CB value fields */
			$cbfieldvalues = $fieldmodel->getCBFieldValues($field->cbfieldvalues);
			$field_values[$field->fieldid] = $cbfieldvalues;
		}
	}
}

$categorymodel = new AdsmanagerModelCategory();
$cats = $categorymodel->getCatTree();

$conf = new AdsmanagerModelConfiguration();
$baseurl = JURI::base();

$field = new JHTMLAdsmanagerField($conf,$field_values,"1",$fieldmodel->getPlugins(),$itemid,$baseurl);

$url = "index.php";

require(JModuleHelper::getLayoutPath('mod_adsmanager_search'));
$content="";
$path = JPATH_ADMINISTRATOR.'/../libraries/joomla/database/table';
JTable::addIncludePath($path);