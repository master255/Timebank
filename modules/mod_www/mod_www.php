<?php 
defined('_JEXEC') or die('Restricted access');
$document =& JFactory::getDocument();
$document->addStyleSheet('/modules/mod_www/style.css');
 ?>
<div class="section">
	<ul class="tabs">
       <li><div class="fb"></div></li>
       <li><div class="vk"></div></li>
       <li><div class="tw"></div></li>
	</ul>
	<br /><br />
	<div class="box">
<div id="fb-root"></div>
<script>
(function() {
$(function() {
$('ul.tabs').delegate('li:not(.current)', 'click', function() {
$(this).addClass('current').siblings().removeClass('current').parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(150);
})
})
})
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/pages/Банк-времени-Свобода/309701999088210" data-width="185" data-height="290" data-show-faces="true" data-stream="false" data-header="true"></div>
	</div>
	<div class="box visible">
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?49"></script>
<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "185", height: "290"}, 33637540);
</script>
	</div>
	<div class="box">
	<p><a href="https://twitter.com/timebanksvoboda" class="twitter-follow-button" data-show-count="false" data-lang="ru">Читать Банк времени</a></p>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
var tweetUsers = ['timebanksvoboda'];
var buildString = "";

$(document).ready(function(){

	$('#twitter-ticker').slideDown('slow');
	
	for(var i=0;i<tweetUsers.length;i++)
	{
		if(i!=0) buildString+='+OR+';
		buildString+='from:'+tweetUsers[i];
	}
	
	var fileref = document.createElement('script');
	
	fileref.setAttribute("type","text/javascript");
	fileref.setAttribute("src", "http://search.twitter.com/search.json?q="+buildString+"&callback=TweetTick&rpp=3");
	
	document.getElementsByTagName("head")[0].appendChild(fileref);
	
});

function TweetTick(ob)
{
	var container=$('#tweet-container');
	container.html('');
	
	$(ob.results).each(function(el){
	
		var str = '	<div class="tweet">\
				<div class="avatar"><a href="http://twitter.com/'+this.from_user+'" target="_blank"><img src="'+this.profile_image_url+'" alt="'+this.from_user+'" /></a></div>\
				<div class="user"><a href="http://twitter.com/'+this.from_user+'" target="_blank">'+this.from_user+'</a></div>\
				<div class="time">'+relativeTime(this.created_at)+'</div>\
				<div class="txt">'+formatTwitString(this.text)+'</div>\
				</div>';
		
		container.append(str);
	
	});
	
}

function formatTwitString(str)
{
	str=' '+str;
	str = str.replace(/((ftp|https?):\/\/([-\w\.]+)+(:\d+)?(\/([\w/_\.]*(\?\S+)?)?)?)/gm,'<a href=$1 target="_blank">$1</a>');
	str = str.replace(/([^\w])\@([\w\-]+)/gm,'$1@<a href="http://twitter.com/$2" target="_blank">$2</a>');
	str = str.replace(/([^\w])\#([\w\-]+)/gm,'$1<a href="http://twitter.com/search?q=%23$2" target="_blank">#$2</a>');
	return str;
}

function relativeTime(pastTime)
{	
	var origStamp = Date.parse(pastTime);
	var curDate = new Date();
	var currentStamp = curDate.getTime();
	
	var difference = parseInt((currentStamp - origStamp)/1000);

	if(difference < 0) return false;

	if(difference <= 5)		return "Сейчас";
	if(difference <= 20)		return "секунд назад";
	if(difference <= 60)		return "минут назад";
	if(difference < 3600)		return parseInt(difference/60)+" минут назад";
	if(difference <= 1.5*3600) 	return "час назад";
	if(difference < 23.5*3600)	return Math.round(difference/3600)+" часов назад";
	if(difference < 1.5*24*3600)	return "день назад";
	var dateArr = pastTime.split(' ');
	return dateArr[4].replace(/\:\d+$/,'')+' '+dateArr[2]+' '+dateArr[1]+(dateArr[3]!=curDate.getFullYear()?' '+dateArr[3]:'');
}
</script>
<div id="main">
	<div id="twitter-ticker">
		<div id="top-bar">
		</div>
		<div id="tweet-container"></div>
		<div id="scroll"></div>
	</div>    
</div>
	</div>
</div>
