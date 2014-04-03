  <?php 
 defined( '_JEXEC' ) or die( 'Restricted access' );
		$user = &JFactory::getUser();
		$itemID = JRequest::getVar('Itemid');
		 if ($user->guest && ($itemID == 101)) {
		$database =& JFactory::getDBO();
		$database->setQuery('SELECT id from `#__users` where block=0');
		$rez=$database->loadObjectList();
		$count=count ($rez);
		$database->setQuery('SELECT id, ad_headline, ad_text from `#__adsmanager_ads` where (root_cat=4) and (published=1) and ((FIND_IN_SET (0, ad_group)) or (ad_group=\'\'))');
		$rez1=$database->loadObjectList();
		$count1=count ($rez1);
			echo '
<span style="font-family: \'arial\', \'helvetica\', sans-serif; font-size: 14pt;"><p align="center"><strong>Добро пожаловать на сайт банка времени &quot;Свобода&quot;!</strong></p>
<p><strong>Для вступления нужно: <a href="http://'.$_SERVER['HTTP_HOST'].'/index.php/component/comprofiler/registers"><blink>Зарегистрироваться</blink></a> и подтвердить e-mail.</strong> <br/>Зарегистрировано в Санкт-Петербурге: '.$count.'</p>';
if ($count1>0) {
echo '
<div align=center><b>Список товаров\услуг, которые можно приобрести прямо сейчас:</b><p><table border=2>
<tr><th>Изображение</th><th width=105>Заголовок</th><th>Содержание</th></tr>';
srand ();
shuffle($rez1);
$rf=0;
foreach ($rez1 as $ert) {
if (strlen ($ert->ad_text)>150) {$ert->ad_text=(JString::substr ($ert->ad_text, 0, 150)).'..';}
if (file_exists ('images/com_adsmanager/img/'.$ert->id.'a_t.jpg')==true) {$pt='/images/com_adsmanager/img/'.$ert->id.'a_t.jpg';} else {$pt='/components/com_adsmanager/images/nopic.gif';}
echo '<tr><td><img name="adimage" src="http://'.$_SERVER['HTTP_HOST'].$pt.'"/></td><td class="tabl5">'.$ert->ad_headline.'</td><td class="tabl5">'.$ert->ad_text.'<br/><a href="/component/comprofiler/registers">Купить</a></td></tr>';
$rf=$rf+1;
if ($rf>3) {break;}
}
echo '</table></p></div>';
}
echo '
<p>Подробнее о том, что вообще такое банки времени, можно узнать <a href="http://ru.wikipedia.org/wiki/Банк_времени">тут</a></p>
<p>       Здесь вы можете легко получить необходимые вам товары и услуги из тех которые есть в банке.</p>
<p>       Эта инновационная технология навсегда избавит вас от материальных проблем. Вы не будете так зависимы от работодателя. А ваши средства - от инфляций и кризисов! Обман тут исключён по условиям участия.</p>
<p>       Здесь вы без труда найдёте любую работу по душе и по настроению. И, что немаловажно, вам заплатят за её выполнение.</p>
<p>       Предприниматели и юридические лица смогут получать услуги и товары в обмен на свои активы.</p>
<p>       Наконец, вступив в общество, вы ничего не теряете. Если ваша услуга не будет пользоваться популярностью, то вы можете просто состоять в участниках. </p>
<p>       Сайт только для города Санкт-Петербург, но использовать для организации групп можно из любого города.</p>
</span>';
                        JMenu::setActive(101);
		} else {
		echo '
		    <script type="text/javascript">
    
        $(document).ready(function() {
         
              setInterval( function() {
              var seconds = new Date().getSeconds();
              var sdegree = seconds * 6;
              var srotate = "rotate(" + sdegree + "deg)";
              
              $("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
                  
              }, 1000 );
              
         
              setInterval( function() {
              var hours = new Date().getHours();
              var mins = new Date().getMinutes();
              var hdegree = hours * 30 + (mins / 2);
              var hrotate = "rotate(" + hdegree + "deg)";
              
              $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
                  
              }, 1000 );
        
        
              setInterval( function() {
              var mins = new Date().getMinutes();
              var mdegree = mins * 6;
              var mrotate = "rotate(" + mdegree + "deg)";
              
              $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
                  
              }, 1000 );
         
        }); 
    
    </script>
		<span style="font-family: \'arial\', \'helvetica\', sans-serif; font-size: 14pt;"><p align="center"><strong>Здравствуйте, участники!</strong></p>
<p>       Мы рады, что вы присоединились к нашей организации. Приятного времяпрепровождения!</p>
<p>       Здесь будут публиковаться новости и важная информация.</p>
<p>       Для начала нужно добавить объявления в разделах <a href="/spros">"Спрос"</a> и <a href="/predlozhenie">"Предложение"</a>. У каждого участника должно быть минимум одно объявление в разделе <a href="/predlozhenie">"Предложение"</a> об оказании услуги. Иначе вы не сможете зарабатывать часы.</p>
<p>       Подробнее о правилах и принципах работе сайта читайте в <a href="instr">инструкции</a> и <a href="/component/content/article/79-123/2-pravila?tmpl=component">соглашении,</a> с которым вы согласились при регистрации.</p>
<p><strong>Для активации вашего аккаунта нужно прийти на одну из <a href="vstrechi">встреч</a> с паспортом.</strong></p>
<p>На встрече пройдёт первичный инструктаж и ответы на любые вопросы по организации.</p>
<p>Существует возможность привязывать объявления к координатам на карте. Поэтому в разделе <a href="/map">"Карта объявлений"</a> можно наглядно посмотреть где находятся объявления, наши встречи и участники с мобильными приложениями.</p>
<p>В разделе <a href="/message">"Сообщения"</a> вы можете общаться с другими участниками</p>
<p>Для того что бы проверять и контролировать нашу прозрачную мини-экономику существует раздел <a href="/users">"Список всех участников"</a>. Тут всегда можно суммировать часы всех участников и получить ноль - подтверждающий целостность распределения часов.</p>
<p>Очень удобный раздел <a href="/groups">"Мои группы"</a> в котором можно создавать свои группы для объединения людей по любым направлениям. В них можно обмениваться информацией, а главное распределять доступ к своим объявлениям по своим группам.</p>
<p>В разделах <a href="/otpravlennye-zayavki">"Отправленные заявки"</a> и <a href="/prishedshie-zayavki">"Пришедшие заявки"</a> можно отслеживать и управлять заявками на перевод часов.</p>
<p>Различные настройки работы нашего сервиса можно найти в разделе <a href="/settings">"Мои настройки"</a></p>
<p>И не забывайте про самый большой раздел нашего сайта <a href="/forum/index">"Форум"</a>. В нём всегда можно обсудить любые ваши вопросы со всеми участниками.</p>
</span>
';
// <ul id="clock">	
	   	// <li id="sec"></li>
	   	// <li id="hour"></li>
		// <li id="min"></li>
	// </ul>
// <p><div align="center"><b>Времени всё меньше.</b></div></p>
                        JMenu::setActive(101);
		} 
  ?>