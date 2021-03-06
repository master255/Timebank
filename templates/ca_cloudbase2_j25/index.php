<?php
/**
 * @package Gantry Template Framework - RocketTheme
 * @version 3.2.0 March 4, 2011
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2011 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
  /* <link  href="//fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" /> */
// load and inititialize gantry class
require_once('lib/gantry/gantry.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
    <head>
        <?php
            $gantry->displayHead();
            $gantry->addStyles(array('template.css','joomla.css','style.css','typography.css'));
        ?>
    </head>
    <body <?php echo $gantry->displayBodyTag(); ?>>
	<BGSOUND id="sound">
    	<a name="pageTop" id="pageTop"></a>
    	<div id="page-wraper">
    		<div id="in-page-wraper">
    			<div id="in-page-wraper-2">
			        <?php /** Begin Drawer **/ if ($gantry->countModules('drawer')) : ?>
			        <div id="rt-drawer">
			            <div class="rt-container">
			                <?php echo $gantry->displayModules('drawer','standard','standard'); ?>
			                <div class="clear"></div>
			            </div>
			        </div>
			        <?php /** End Drawer **/ endif; ?>
					<?php /** Begin Top **/ if ($gantry->countModules('top')) : ?>
					<div id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top'); ?>>
						<div class="rt-container">
							<?php echo $gantry->displayModules('top','standard','standardplustop'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Top **/ endif; ?>
					<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
					<div id="rt-header">
						<div class="rt-container">
							<?php echo $gantry->displayModules('header','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Header **/ endif; ?>
					<?php /** Begin Menu **/ if ($gantry->countModules('navigation')) : ?>
					<div id="rt-menu">
						<div class="rt-container">
							<?php echo $gantry->displayModules('navigation','basic','basic'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Menu **/ endif; ?>
					<?php /** Begin Showcase **/ if ($gantry->countModules('showcase')) : ?>
					<div id="rt-showcase">
						<div class="rt-container">
							<?php echo $gantry->displayModules('showcase','standard','standardplus'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Showcase **/ endif; ?>
					<?php /** Begin Feature **/ if ($gantry->countModules('feature')) : ?>
					<div id="rt-feature">
						<div class="rt-container">
							<?php echo $gantry->displayModules('feature','standard','standardplusfeature'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Feature **/ endif; ?>
					<?php /** Begin Utility **/ if ($gantry->countModules('utility')) : ?>
					<div id="rt-utility">
						<div class="rt-container">
							<?php echo $gantry->displayModules('utility','standard','basic'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Utility **/ endif; ?>
					<?php /** Begin Breadcrumbs **/ if ($gantry->countModules('breadcrumb')) : ?>
					<div id="rt-breadcrumbs">
						<div class="rt-container">
							<?php echo $gantry->displayModules('breadcrumb','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Breadcrumbs **/ endif; ?>
					<?php /** Begin Main Top **/ if ($gantry->countModules('maintop')) : ?>
					<div id="rt-maintop">
						<div class="rt-container">
							<?php echo $gantry->displayModules('maintop','standard','standardplusmaintop'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Main Top **/ endif; ?>
					<?php /** Begin Main Body **/ ?>
				    <?php echo $gantry->displayMainbody('mainbody','sidebar','standardplus','standard','standardpluscontenttop','standard','standardpluscontentbottom'); ?>
					<?php /** End Main Body **/ ?>
					<?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
					<div id="rt-mainbottom">
						<div class="rt-container">
							<?php echo $gantry->displayModules('mainbottom','standard','standardplusmainbottom'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Main Bottom **/ endif; ?>
					<?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
					<div id="rt-bottom">
						<div class="rt-container">
							<?php echo $gantry->displayModules('bottom','standard','standardplusbottom'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Bottom **/ endif; ?>
					</div>
			</div>
		</div>

		<?php /** Begin Footer **/ /* if ($gantry->countModules('footer')) : Благотворительный, компенсационный<a href="http://yaudit.org/yaudit/410011473093764"> фонд на сегодня 300 руб..</a> */ ?>
<div id="rt-footer" align="center"><table width="998"><tr><td width="183"><div id="vk_like"></div></td><td width="600" align="center">Сделать пожертвование можно <a href="index.php?option=com_tranz&view=donation&layout=donation">здесь</a>
</td><td align="right" width="183"><div class="fb-like" data-href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/" data-send="false" data-layout="button_count" data-width="216" data-show-faces="true" data-font="arial"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php  $document =& JFactory::getDocument(); 
 $document->addScript("http://userapi.com/js/api/openapi.js"); /*	<div class="rt-container"> echo $gantry->displayModules('footer','standard','standard'); <div class="clear"></div></div>*/ ?>
<script type="text/javascript">
VK.init({apiId: <?php  if ($_SERVER['HTTP_HOST']=='timebankspb.ru') {echo 2924047;} else {echo 2883988;} ?>, onlyWidgets: true});
VK.Widgets.Like("vk_like", {type: "button", pageUrl:"http://<?php echo $_SERVER['HTTP_HOST']; ?>"});
</script>
 </td>
</tr></table>
		</div>
			<div style="position: relative	;  bottom: 150px; left: 88%; width: 0px; height: 0px;" ><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t29.11;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано количество просмотров и"+
" посетителей' "+
"border='0' width='88' height='120'><\/a>")
//--></script><!--/LiveInternet--></div>
		<?php /** End Footer **/ /* endif; */ ?>
		<?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
		<div id="rt-copyright">
			<div class="rt-container">
				<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Copyright **/ endif; ?>
		<?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
		<div id="rt-debug">
			<div class="rt-container">
				<?php echo $gantry->displayModules('debug','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Debug **/ endif; ?>
		
		<?php /** Begin To Top Feature **/ if ($gantry->countModules('totop')) : ?>
		<div id="totop">
			<?php echo $gantry->displayModules('totop','standard','standard'); ?>
		</div>
		<?php /** End To Top Feature **/ endif; ?>
		
		<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
		<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
		<?php /** End Analytics **/ endif; ?>
	</body>
</html>
<?php
$gantry->finalize();
?>