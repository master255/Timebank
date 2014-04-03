<?php
defined('_JEXEC') or die('Restricted access');
$document =& JFactory::getDocument();
 $document->addStyleSheet('/modules/mod_sslider/css/chopslider.css');
 ?>
<script type="text/javascript" src="/modules/mod_sslider/js/jquery.id.chopslider-2.2.0.free.min.js"></script>
<script type="text/javascript" src="/modules/mod_sslider/js/jquery.id.cstransitions-1.2.min.js"></script>
<script type="text/javascript">
jQuery(function(){
$("#slider").chopSlider({
/* Slide Element */
slide : ".slide",
/* Controlers */
nextTrigger : "a#slide-next",
prevTrigger : "a#slide-prev",
hideTriggers : true,
sliderPagination : ".slider-pagination",
/* Captions */
useCaptions : false,
everyCaptionIn : ".sl-descr",
showCaptionIn : ".caption",
captionTransform : "scale(0) translate(-600px,0px) rotate(45deg)",
/* Autoplay */
autoplay : true,
autoplayDelay : 120000,
/* Default Parameters */
t2D : [
/*  csTransitions['sexy']['random'],
/* csTransitions['half']['random'],*/
csTransitions['horizontal']['random'], 
 csTransitions['multi']['random'],
csTransitions['vertical']['random']
],
t3D : [
csTransitions['3DFlips']['random'],
csTransitions['3DBlocks']['random']
],
/* For Mobile Devices */
mobile: csTransitions['mobile']['random'],
/* For Old and IE Browsers */
noCSS3:csTransitions['noCSS3']['random'],
onStart: function(){ /* Do Something*/ },
onEnd: function(){ /* Do Something*/ }
})
})
</script>
  <div id="slider">
    <?php
if ((JRequest::getint('api_id', 0))!=0) {echo '<div class="slide cs-activeSlide"><a href ="?component/comprofiler/registers" target="_BLANK"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/1.jpg" width="940" height="265" alt="В единстве сила!" title="Для перехода на сайт нажмите на это изображение"/></a></div>
    <div class="slide"><a href ="?component/comprofiler/registers" target="_BLANK"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/1.jpg" width="940" height="265" alt="В единстве сила!" /></a></div>
    <div class="slide"><a href ="?component/comprofiler/registers" target="_BLANK"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/1.jpg" width="940" height="265" alt="В единстве сила!" /></a></div>
<div class="slide"><a href ="?component/comprofiler/registers" target="_BLANK"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/1.jpg" width="940" height="265" alt="В единстве сила!" /></a></div>';} else {echo '<div class="slide cs-activeSlide"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/1.jpg" width="940" height="265" alt="В единстве сила!" /></div>
    <div class="slide"><img onclick="$.chopSlider.slide({});" src="/modules/mod_sslider/images/slider/2.jpg" width="940" height="265" alt="В единстве сила!" /></div>
';} ?>
 </div>