<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc2 =& JFactory::getDocument();
$doc2->addScript('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js');
 $doc2->addStyleSheet('/media/system/css/jquery.ui.theme.css');/* <a href="http://yaudit.org/yaudit/410011473093764">Аудит нашего кошелька. Для всех и в реальном времени!</a> */
echo '<div align="center"><h2>Основная идея: вы отдаёте грязные деньги в замен получаете ровно столько же белых, чистых, прозрачных. В любой момент можете вернуть отданные деньги, но без убытков для Банка времени.</h2></div>
<script>
$(function() {
$( "#slider1" ).slider({
			value:100,
			min: 0,
			max: 10000,
			step: 10,
			slide: function( event, ui ) {
				$( "#CompanySum" ).val( Math.round(ui.value + (ui.value*0.03)+15));
				$( "#CompanySum1" ).val( ui.value );
				$( "#CompanySum2" ).val( ui.value +" руб." );
			}
		});
		$( "#CompanySum" ).val( Math.round($( "#slider1" ).slider( "value" )+ (($( "#slider1" ).slider( "value" ))*0.03)+15 ));
		$( "#CompanySum1" ).val( $( "#slider1" ).slider( "value" ) );
		$( "#CompanySum2" ).val( $( "#slider1" ).slider( "value" ) +" руб." );
});
$(function() {
$( "#slider2" ).slider({
			value:100,
			min: 0,
			max: 1000,
			step: 1,
			slide: function( event, ui ) {
				$( "#CompanySum" ).val( Math.round(ui.value + (ui.value*0.03)+15));
				$( "#CompanySum1" ).val( ui.value );
				$( "#CompanySum2" ).val( ui.value +" руб." );
			}
		});
		$( "#CompanySum" ).val( Math.round($( "#slider2" ).slider( "value" )+ (($( "#slider2" ).slider( "value" ))*0.03)+15 ));
		$( "#CompanySum1" ).val( $( "#slider2" ).slider( "value" ));
		$( "#CompanySum2" ).val( $( "#slider2" ).slider( "value" )+" руб." );
});
</script>
Больше:
<p><div id="slider1"></div></p>
Меньше:
<p><div id="slider2"></div></p>
<form id="my" name="my">
<b>Перечислить: <input type="text" id="CompanySum2" size="10" style="border:0; color:#FFA2A2; font-weight:bold;" />&nbsp;от</b>&nbsp;<input type="text" id="rec" size="30" name="rec" onchange="document.ynd.CompanyName.value=\'Банк времени &quot;Свобода&quot;. От \'+document.my.rec.value; document.rbk.serviceName.value=\'От \'+document.my.rec.value;"/>&nbsp; (по умолчанию от анонима)</form></br>
<h3>С помощью бумажных денег (без комиссии)</h3>
Деньги можете передать организатору на одной из <a href="/vstrechi">встреч</a> Банка времени.
</br><h3>С помощью Яндекс денег (комиссия* 3%+15 руб.)</h3>
<form id="ynd" name="ynd" style="margin: 0; padding: 0;" action="https://money.yandex.ru/charity.xml" method="post"><input type="hidden" name="to" value="410011473093764"/><input type="hidden" name="CompanyName" value="Банк времени &quot;Свобода&quot;. От анонима"/><input type="hidden" name="CompanyLink" value="http://'.$_SERVER['HTTP_HOST'].'"/><table border="0" cellspacing="0" cellpadding="0"><tr><td><div style="background: url(https://img.yandex.net/i/li-uncolorer-rt.gif) no-repeat right top #FFFFFF;"><div style="background: url(https://img.yandex.net/i/li-uncolorer-rb.gif) no-repeat right bottom;"><div style="background: url(https://img.yandex.net/i/li-uncolorer-lb.gif) no-repeat left bottom;"><div style="background: url(https://img.yandex.net/i/li-uncolorer-lt.gif) no-repeat left top; margin-right: 10px; padding: 10px 0 0 10px;"><table border="0" cellspacing="0" cellpadding="0"><tr><td><table border="0" cellspacing="0" cellpadding="0"><tr><td><input type="submit" value="Отправить" style="margin-right: 5px;"/></td><td><input type="text" id="CompanySum" name="CompanySum" value="100" size="8" style="margin-right: 5px;"/></td><td nowrap="nowrap" style="font: 70% Verdana, Arial, Geneva CY, Sans-Serif;" valign="bottom"><strong>рублей Яндекс.Деньгами</strong></td></tr></table></td><td width="90" rowspan="3" valign="bottom"><a href="http://money.yandex.ru/"><img src="https://img.yandex.net/i/ym-logo.gif" width="90" height="39" border="0" style="margin-left: 5px;"/></a></td></tr><tr><td nowrap="nowrap" style="font: 70% Verdana, Arial, Geneva CY, Sans-Serif;">на счет <span style="color: #006600; font-weight: bold;">410011473093764</span>&nbsp;(<a href="http://'.$_SERVER['HTTP_HOST'].'/"><span style="color: #666666; text-decoration: underline;">Банк времени "Свобода"</span></a>)</td></tr><tr><td><img src="https://img.yandex.net/i/x.gif" width="1" height="10" /></td></tr></table></div></div></div></div></td></tr></table></form>

</br>
<h3>С помощью РБК денег (без комиссии)</h3>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
      <tr >
           <td  align="left">
                <div align="left">Введите сумму: </div>
           </td>
      </tr>
      <tr >
      <form id="rbk" name="rbk" action=https://rbkmoney.ru/acceptpurchase.aspx>
           <td width="39%" align="left">
                <div align="left">
                    <input type="hidden" name="eshopId" value="2011790">
                    <input type="hidden" name="orderId" value="1">
					<input type="submit" name="button" value="Отправить">
                    <input type="text" id="CompanySum1" size="8" name="recipientAmount" value="100">
                    <input type="hidden" name="recipientCurrency" value="RUR">
                    <input type="hidden" name="serviceName" value="Анонимный платёж">
                    
                </div>
           </td>
      </form>
      </tr>
      <tr>
           <td >
                <div align="left">
                    Если Вы не имеете кошелек в платежной системе RBK Money, бесплатно его открыть Вы можете
                    <a href="https://rbkmoney.ru/register.aspx">здесь</a>
                </div>
           </td>
      </tr>
 </table></br>
<h3>С помощью webmoney (комиссия 2%)</h3>
Кошельки:</br>
wmr: R317033565097</br>
wmz: Z125769727291</br>
<h3>Самый простой способ помочь нам!</h3>
За каждый ваш клик по рекламе мы получим деньги (примерно 3-6 руб. за 1 клик), которые в дальнейшем пойдут в фонд Банка времени.</br>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-1818554203829282";
/* Реклама */
google_ad_slot = "5779839191";
google_ad_width = 600;
google_ad_height = 110;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></br>
* - комиссия берётся не за перевод, а за снятие (вывод) перечисленных электронных денег.</br>
** - Возможен возврат переведённой суммы. Сумма возвращается в полном объёме за исключением комиссии, долга участника, если он есть и подаренных часов при регистрации. Не возвращаются анонимные платежи и переводы не от участников. Для возврата обратитесь к администратору любым способом, например, через форму обратной связи слева.
';
?>