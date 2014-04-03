<?php
class AdsManagerGmapPlugin {

	function __construct()
	{
		$db =& JFactory::getDBO();
		$this->_db = $db;
	}

	function getListDisplay($contentid,$field)
	{
		return AdsManagerGmapPlugin::getDetailsDisplay($contentid,$field);
	}

	function getDetailsDisplay($contentid,$field)
	{
		$return='';
		$query = "SELECT lat,lng FROM #__adsmanager_fieldgmap WHERE fieldid = ".(int)$field->fieldid." AND contentid = ".(int)$contentid;
		$fieldid = $field->fieldid;
		$this->_db->setQuery($query);
		$result = $this->_db->loadObject();
		if ($result){
			$lat = $result->lat;
			$lng = $result->lng;
			if ($lat&&$lng){
			$document =& JFactory::getDocument();
				$this->_db->setQuery("SELECT * FROM #__adsmanager_fieldgmap_conf WHERE fieldid = ".(int)$field->fieldid);
				$conf = $this->_db->loadObject();
				$map_width = $conf->map_width;//500;
				$map_height= $conf->map_height;//300;
				$document->addScript('http://maps.google.com/maps/api/js?sensor=false');
				$return .= '<script type="text/javascript">';
				$return .= 'var isCall'.$contentid.' = false; ';
				$return .= 'function initialize'.$contentid.'() {';
				$return .= 'if (!isCall'.$contentid.') { isCall'.$contentid.' = true; ';
				$return .= 'var myLatlng'.$contentid.' = new google.maps.LatLng('.$lat.', '.$lng.');';
				$return .= 'var myOptions'.$contentid.' = {zoom:13, center:myLatlng'.$contentid.', mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}, zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL}};';
				$return .= 'var map'.$contentid.' = new google.maps.Map(document.getElementById("map_canvas'.$contentid.'"), myOptions'.$contentid.');';
				$return .= 'var marker'.$contentid.' = new google.maps.Marker({position:myLatlng'.$contentid.', map:map'.$contentid.'});};};'; 
				$return .= '</script>';
				$return .= '<div id="map_canvas'.$contentid.'" style="width: '.$map_width.'px; height: '.$map_height.'px"></div>';
			}
		}
		return $return;
	}

	function getFormDisplay($contentid,$field)
	{
		$query = "SELECT lat,lng FROM #__adsmanager_fieldgmap ".
				"WHERE fieldid = $field->fieldid AND contentid = ".(int)$contentid;
		$fieldid = $field->fieldid;
		$this->_db->setQuery($query);
		$result = $this->_db->loadObject();
		$this->_db->setQuery("SELECT * FROM #__adsmanager_fieldgmap_conf WHERE fieldid = $field->fieldid");
		$conf = $this->_db->loadObject();
		if (isset($result))
		{
			$lat = $result->lat;
			$lng = $result->lng;
			$update = 1;
		}
		else
		{
			$lat = $conf->lat;
			$lng = $conf->lng;
			$update = 0;
		}
		$map_width = $conf->map_width;
		$map_height= $conf->map_height;
		if (!$lat) {$lat = $conf->lat; $lng = $conf->lng;}
		$return  = "<script src='http://maps.google.com/maps/api/js?v=3.5&sensor=false' type='text/javascript'></script>\n";
		$return .= "<script type='text/javascript'>\n";
		$return .= " var geocoder; \n var map; \n var marker;  \n var isCall=false;  \n";
		$return .= "function initialize() { \n";
		$return .= "if (!isCall) {isCall = true; geocoder = new google.maps.Geocoder();\n";
		$return .= "	var LatLng = new google.maps.LatLng(".$lat.", ".$lng.");\n";
		$return .= "	var myOptions = {zoom:13, center:LatLng, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}, zoomControlOptions:{style:google.maps.ZoomControlStyle.SMALL}};\n";
		$return .= "	map = new google.maps.Map(document.getElementById('map_canvas".$contentid."'), myOptions);\n";
		$return .= "	marker = new google.maps.Marker({position:LatLng, map:map, draggable:true});\n"; 
		$return .= "	google.maps.event.addListener(marker, 'dragend', function() {\n";
		$return .= "		LatLng=marker.getPosition();\n";
		$return .= "		document.getElementById('gmap_lat".$contentid."').value = LatLng.lat();\n";
		$return .= "		document.getElementById('gmap_lng".$contentid."').value = LatLng.lng();\n";
		$return .= "		geocoder.geocode({'latlng': LatLng}, function (results, status) {\n";
		$return .= "			if (status == google.maps.GeocoderStatus.OK) {\n";
		$return .= "				document.getElementById('gmap_address".$contentid."').value = results[0].formatted_address; }\n";
		$return .= "		});\n";
		$return .= "	});\n";
		$return .= "}}\n";
		$return .= "function showAddress() { \n";
		$return .= "	var addr = document.getElementById('gmap_address".$contentid."').value;\n";
		$return .= "	geocoder.geocode({'address': addr}, function (results, status) {\n";
		$return .= "		if (status == google.maps.GeocoderStatus.OK) {\n";
		$return .= "			map.setCenter(results[0].geometry.location);\n";
		$return .= "			marker.setPosition(results[0].geometry.location);\n";
		$return .= "			document.getElementById('gmap_lat".$contentid."').value = marker.getPosition().lat();\n";
		$return .= "			document.getElementById('gmap_lng".$contentid."').value = marker.getPosition().lng();\n";
		$return .= "		}else{\n";
		$return .= "			alert('Не удалось найти адрес!');\n";
		$return .= "		}\n";
		$return .= "	});\n";  
		$return .= "}\n";
		$return .= 'function toggl() {
$(\'#karta\').slideToggle("slow", togg2());}
function togg2() {
if ($("#karta").is(":visible")) {
document.getElementById("gmap_lat'.$contentid.'").value = "";
document.getElementById("gmap_lng'.$contentid.'").value = "";
};};';
		$return .= "</script>";
		if ((!$update)or($update&&$lat==$conf->lat&&$lng==$conf->lng)) {$lat=''; $lng='';}
		$return .= '<input type="button" class="abutton" onclick="toggl(); initialize();" value="Добавить\Удалить карту" />';
		$return .= "<div id='karta' style='display:none'>";
		$return .= "<input type='text' size='60' id='gmap_address".$contentid."' placeholder='Введите город или адрес на карте' value=''/>";
		$return .= "<input type='button' id='finder' value='Найти!' onClick='showAddress()' />";
		$return .= "<div id='map_canvas".$contentid."' style='width: ".$map_width."px; height: ".$map_height."px'></div>";
		$return .= "<input type='hidden' id='gmap_lat".$contentid."' name='gmap_lat".$fieldid."' value='".$lat."'/>";
		$return .= "<input type='hidden' id='gmap_lng".$contentid."' name='gmap_lng".$fieldid."' value='".$lng."'/>";
		$return .= "Если система не находит Ваш адрес поставьте маркер сами.";
		$return .= "</div>";

      return $return;
   }

	function onFormSave($contentid,$fieldid,$update)
	{
		$lat = JRequest::getVar("gmap_lat$fieldid",0);
		$lng = JRequest::getVar("gmap_lng$fieldid",0);
		if ($update == 1)
		{
			$query = "DELETE FROM #__adsmanager_fieldgmap WHERE fieldid = ".(int)$fieldid." AND contentid = ".(int)$contentid;
			$this->_db->setQuery($query);
			$this->_db->query();
			$query = "INSERT INTO #__adsmanager_fieldgmap (`fieldid`,`contentid`,`lat`,`lng`) VALUES ($fieldid,$contentid,'$lat','$lng')";    
			$this->_db->setQuery($query);
			$this->_db->query();
		}
		else
		{
			$query = "INSERT INTO #__adsmanager_fieldgmap (`fieldid`,`contentid`,`lat`,`lng`) VALUES ($fieldid,$contentid,'$lat','$lng')";
			$this->_db->setQuery($query);
			$this->_db->query();
		}
	}
   
	function onDelete($directory,$contentid = -1)
	{
		if ($contentid == -1)
			$query = "DELETE FROM #__adsmanager_fieldgmap WHERE 1";
		else
			$query = "DELETE FROM #__adsmanager_fieldgmap WHERE contentid = ".(int)$contentid;
		$this->_db->setQuery($query);
		$this->_db->query();
	}
   
	function getEditFieldJavaScriptDisable()
	{
		$return = "elem=getObject('divGMapOptions');";
		$return .= "elem.style.visibility = 'hidden';";
		$return .= "elem.style.display = 'none';";
		$return .= "elem=getObject('gmap_map_width');";
		$return .= "elem.setAttribute('mosReq',0);";
		$return .= "elem=getObject('gmap_map_height');";
		$return .= "elem.setAttribute('mosReq',0);";
		$return .= "elem=getObject('gmap_lat');";
		$return .= "elem.setAttribute('mosReq',0);";
		$return .= "elem=getObject('gmap_lng');";
		$return .= "elem.setAttribute('mosReq',0);";
		return $return;
	}
   
	function getEditFieldJavaScriptActive()
	{
		$return = "disableAll();";
		$return .= "elem=getObject('divGMapOptions');";
		$return .= "elem.style.visibility = 'visible';";
		$return .= "elem.style.display = 'block';";
		$return .= "elem=getObject('gmap_map_width');";
		$return .= "elem.setAttribute('mosReq',1);";
		$return .= "elem=getObject('gmap_map_height');";
		$return .= "elem.setAttribute('mosReq',1);";
		$return .= "elem=getObject('gmap_lat');";
		$return .= "elem.setAttribute('mosReq',1);";
		$return .= "elem=getObject('gmap_lng');";
		$return .= "elem.setAttribute('mosReq',1);";
		return $return; 
	}

	function getEditFieldOptions($fieldid)
	{
		$this->_db->setQuery("SELECT * FROM #__adsmanager_fieldgmap_conf WHERE fieldid = '$fieldid'");
		$row = $this->_db->loadObject();
		
		$return = "<div id='divGMapOptions'>";
		$return .= "<table class='adminform'>";
		$return .= "<tr>";
		$return .= "<td width='20%'>Ширина карты, px</td>";
		$return .= "<td width='20%' align=left><input type='text' id='gmap_map_width' name='gmap_map_width' mosReq=1 mosLabel='Map Width' class='inputbox' value='".$row->map_width."' /></td>";
		$return .= "<td>&nbsp;</td>";
		$return .= "</tr>";
		$return .= "<tr>";
		$return .= "<td width='20%'>Высота карты, px</td>";
		$return .= "<td width='20%' align=left><input type='text' id='gmap_map_height' name='gmap_map_height' mosReq=1 mosLabel='Map Height' class='inputbox' value='".$row->map_height."' /></td>";
		$return .= "<td>&nbsp;</td>";
		$return .= "</tr>";
		$return .= "<tr>";
		$return .= "<td width='20%'>Широта по умолчанию</td>";
		$return .= "<td width='20%' align=left><input type='text' id='gmap_lat' name='gmap_lat' mosReq=1 mosLabel='Default Lat' class='inputbox' value='".$row->lat."' /></td>";
		$return .= "<td>&nbsp;</td>";
		$return .= "</tr>";
		$return .= "<tr>";
		$return .= "<td width='20%'>Долгота по умолчанию</td>";
		$return .= "<td width='20%' align=left><input type='text' id='gmap_lng' name='gmap_lng' mosReq=1 mosLabel='Default Lng' class='inputbox' value='".$row->lng."' /></td>";
		$return .= "<td>&nbsp;</td>";
		$return .= "</tr>";
		$return .= "</table>";
		$return .= "</div>";
		return $return;
	}

	function saveFieldOptions($fieldid)
	{
		$this->install();
		$gmap_map_width = JRequest::getInt("gmap_map_width",500);
		$gmap_map_height =JRequest::getInt("gmap_map_height",350);
		$gmap_lat = JRequest::getVar("gmap_lat",55.75);
		$gmap_lng = JRequest::getVar("gmap_lng",37.616666699999996);
		$this->_db->setQuery("DELETE FROM #__adsmanager_fieldgmap_conf WHERE fieldid = ".(int)$fieldid);
		$this->_db->query();
		$this->_db->setQuery("INSERT INTO #__adsmanager_fieldgmap_conf VALUES ($fieldid,$gmap_map_width,$gmap_map_height,$gmap_lat,$gmap_lng)");
		$this->_db->query();
		return;
	}

	function getFieldName()
	{
		return "GMap";
	}
   
	function install()
	{
		$query = "CREATE TABLE IF NOT EXISTS `#__adsmanager_fieldgmap` ( ".
				"`id` int(10) unsigned NOT NULL auto_increment, ".
				"`fieldid` int(10) unsigned default NULL, ".
				"`contentid` int(10) unsigned default NULL, ".
				"`lat` TEXT default NULL, ".
				"`lng` TEXT default NULL, ".
				"PRIMARY KEY  (`id`) ); ";
		$this->_db->setQuery($query);
		$this->_db->query();
		
		$query = "CREATE TABLE IF NOT EXISTS `#__adsmanager_fieldgmap_conf` ( ".
				"`fieldid` int(10) unsigned default NULL, ".
				"`map_width` int(10) unsigned default '500', ".
				"`map_height` int(10) unsigned default '350', ".
				"`lat` VARCHAR(50) default '55.75', ".
				"`lng` VARCHAR(50) default '37.616666699999996', ".
				"PRIMARY KEY  (`fieldid`) ); ";
		$this->_db->setQuery($query);
		$this->_db->query();
		$this->_db->setQuery("INSERT INTO #__adsmanager_fieldgmap_conf VALUES ('NULL','500','350','55.75','37.616666699999996');");
		$this->_db->query();
	}
   
	function uninstall()
	{
		$query = "DROP TABLE `#__adsmanager_fieldgmap`";
		$this->_db->setQuery($query);
		$this->_db->query();
		$query = "DROP TABLE `#__adsmanager_fieldgmap_conf`";
		$this->_db->setQuery($query);
		$this->_db->query();
	}
}

$plugins["gmap"] = new AdsManagerGmapPlugin();
?>