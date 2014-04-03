<?php
// WARNING: No blank line or spaces before the "< ? p h p" above this.

// IMPORTANT: This file should be made in UTF-8 (without BOM) only.
// CB will automatically convert to site's local character set.

/**
* Joomla/Mambo Community Builder
* @version $Id: russian.php 1040 2010-06-07 14:07:06Z beat $
* @package Community Builder
* @subpackage Default Language file (English)
* @author JoomlaJoe and Beat
* Русский перевод выполнен Александром Смирновым aka alex2010, joomlapolis.com
* @copyright (C) JoomlaJoe and Beat, www.joomlapolis.com
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
*/

// ensure this file is being included by a parent file:
if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//Ярлыки полей Field Labels
DEFINE('_UE_HITS','Просмотры');
DEFINE('_UE_USERNAME','Имя пользователя');
DEFINE('_UE_Address','Улица, дом');
DEFINE('_UE_City','Город');
DEFINE('_UE_State','Область');
DEFINE('_UE_PHONE','Телефон');
DEFINE('_UE_FAX','Факс');
DEFINE('_UE_ZipCode','Индекс');
DEFINE('_UE_Country','Страна');
DEFINE('_UE_Occupation','Профессия');
DEFINE('_UE_Company','Компания');
DEFINE('_UE_Interests','Интересы');
DEFINE('_UE_Birthday','День рождения');
DEFINE('_UE_AVATAR','Аватар');
DEFINE('_UE_Website','Веб-сайт');
DEFINE('_UE_Location','Местность');
DEFINE('_UE_EDIT_TITLE','Редактирование профиля');
DEFINE('_UE_YOUR_NAME','Имя');
DEFINE('_UE_EMAIL','Эл.почта');
DEFINE('_UE_UNAME','Имя пользователя');
DEFINE('_UE_PASS','Пароль');
DEFINE('_UE_VPASS','Подтвердите пароль');
DEFINE('_UE_SUBMIT_SUCCESS','Успешная отправка!');
DEFINE('_UE_SUBMIT_SUCCESS_DESC','Ваш запрос был успешно отправлен нашим администраторам. До своей публикации на этом сайте он будет предварительно осмотрен.');
DEFINE('_UE_WELCOME','Добро пожаловать!');
DEFINE('_UE_WELCOME_DESC','Добро пожаловать в раздел для зарегистрированных пользователей.');
DEFINE('_UE_CONF_CHECKED_IN','Материалы разблокированы.');
DEFINE('_UE_CHECK_TABLE','Проверяется таблица');
DEFINE('_UE_CHECKED_IN','Заблокировать');
DEFINE('_UE_CHECKED_IN_ITEMS',' материалов');
DEFINE('_UE_PASS_MATCH','Пароли не совпадают');
DEFINE('_UE_USERNAME_DESC','Чтобы разрешить смену имени пользователя после регистрации, установите этот параметра на "Да". Значение "Нет" запретит пользователю его менять.');
DEFINE('_UE_ALLOW_EMAIL_USERCONTR','Скрыть эл.почту пользователя');
DEFINE('_UE_ALLOW_EMAIL_USERCONTR_DESC','"Да" предоставит пользователю возможность скрывать свой адрес эл.почты от открытой публикации. Примечание: эта настройка будет контролировать отображение адреса эл.почты только внутри этого компонента!');
DEFINE('_UE_USERAPPROVAL_SUCCESSFUL','Пользователь(и) был(и) успешно одобрен(ы)!');

//Ярлыки профиля передней страницы Front End Profile Lables
DEFINE('_UE_MEMBERSINCE','Стал членом');
DEFINE('_UE_LASTONLINE','Последний вход на сайт');
DEFINE('_UE_ONLINESTATUS','Статус нахождения');
DEFINE('_UE_ISONLINE','НА САЙТЕ');
DEFINE('_UE_ISOFFLINE','НЕ НА САЙТЕ');
DEFINE('_UE_PROFILE_TITLE','Страница профиля');
DEFINE('_UE_UPDATEPROFILE','Обновить профиль');
DEFINE('_UE_UPDATEAVATAR','Обновить аватар');
DEFINE('_UE_CONTACT_INFO_HEADER','Личные данные');
DEFINE('_UE_ADDITIONAL_INFO_HEADER','Дополнительная информация');
DEFINE('_UE_REQUIRED_ERROR','Это поле обязательно для заполнения!');
DEFINE('_UE_FIELD_REQUIRED',' Обязательно!');
DEFINE('_UE_DELETE_AVATAR','Удалить аватар');

//Имена закладок администратора Administrator Tab Names
DEFINE('_UE_USERPROFILE','Профили');
DEFINE('_UE_USERLIST','Списки');
DEFINE('_UE_AVATARS','Аватары');
DEFINE('_UE_REGISTRATION','Регистрация');
DEFINE('_UE_SUBSCRIPTION','Подписки');
DEFINE('_UE_INTEGRATION','Интеграция');

//Ярлыки администратора Administrator Labels
DEFINE('_UE_FIELD_NAME','Название поля');
DEFINE('_UE_EXPLANATION','Описание');
DEFINE('_UE_FIELD_EXPLAINATION','Решите хотите ли Вы чтобы это поле было обязательным для заполнения и было показано пользователю.');
DEFINE('_UE_CONFIG','Конфигурация');
DEFINE('_UE_CONFIG_DESC','Изменить конфигурацию');
DEFINE('_UE_VERSION','Ваша версия: ');
DEFINE('_UE_BY','Джумла 1.0 and 1.5, Мамбо 4.5.2-4.5.5 и 4.6.3 и произвольный компонент совместимых систем от ');
DEFINE('_UE_CURRENT_SETTINGS','Нынешние настройки');
DEFINE('_UE_A_EXPLANATION','Описание');
DEFINE('_UE_DISPLAY','Отображать');
DEFINE('_UE_REQUIRED','Требуется');
DEFINE('_UE_YES','Да');
DEFINE('_UE_NO','Нет');

//Администрационные ярлыки вкладок аватаров Admin Avatar Tab Labels
DEFINE('_UE_AVATAR_DESC','Выберите "Да", если Вы желаете чтобы зарегистрированные пользователи имели аватары (управляемые через их профили).');
DEFINE('_UE_AVHEIGHT','Максимальная высота аватара');
DEFINE('_UE_AVWIDTH','Максимальная ширина аватара');
DEFINE('_UE_AVSIZE','Максимальный размер файла аватара<br/><em>(в килобайтах</em>)');
DEFINE('_UE_AVATARUPLOAD','Разрешить загрузку аватара');
DEFINE('_UE_AVATARUPLOAD_DESC','Выберите "Да", если Вы желаете, чтобы зарегистрированные пользователи могли загружать аватары.');
DEFINE('_UE_AVATARGALLERY','Использовать галерею аватаров');
DEFINE('_UE_AVATARGALLERY_DESC','Выберите "Да", если Вы желаете, чтобы зарегистрированные пользователи могли выбирать аватары из галереи.');
DEFINE('_UE_TNWIDTH','Максимальная ширина миниатюры');
DEFINE('_UE_TNHEIGHT','Максимальная высота миниатюры');

//Административные вкладки списка пользователей Admin User List Tab Labels
DEFINE('_UE_USERLIST_TITLE','Заголовок списка пользователя');
DEFINE('_UE_USERLIST_TITLE_DESC','Заголовок списка пользователя');
DEFINE('_UE_LISTVIEW','Список');
DEFINE('_UE_PICTLIST','Список картинок');
DEFINE('_UE_PICTDETAIL','Данные картинки');
DEFINE('_UE_NUM_PER_PAGE','Пользователей постранично');
DEFINE('_UE_NUM_PER_PAGE_DESC','Число пользователей, показываемых постранично.');
DEFINE('_UE_VIEW_TYPE','Способ показа');
DEFINE('_UE_VIEW_TYPE_DESC','Способ показа');
DEFINE('_UE_ALLOW_EMAIL','Ссылки на эл.почту');
DEFINE('_UE_ALLOW_EMAIL_DESC','Разрешить ссылки на эл.почту. ПРИМЕЧАНИЕ: эта настройка применяется только к произвольным полям по типу "Email Address".');

DEFINE('_UE_ALLOW_WEBSITE','Ссылки на веб-сайт');
DEFINE('_UE_ALLOW_WEBSITE_DESC','Разрешить ссылки на веб-сайт.');
DEFINE('_UE_ALLOW_IM','Ссылки на ЛС');
DEFINE('_UE_ALLOW_IM_DESC','Разрешить ссылки на ЛС');
DEFINE('_UE_ALLOW_ONLINESTATUS','Статус нахождения на сайте');
DEFINE('_UE_ALLOW_ONLINESTATUS_DESC','Показать статус нахождения на сайте.');
DEFINE('_UE_ALLOW_EMAIL_DISPLAY_DESC','ПРИМЕЧАНИЕ: эта настройка применима только к главному адресу эл.почты пользователя.');
DEFINE('_UE_ALLOW_EMAIL_REPLYTO','Эл.почта отправлена "От кого:"');
DEFINE('_UE_ALLOW_EMAIL_REPLYTO_DESC','Настройки для форм эл.почты "Отправить пользователю". Для форматирования поля отправителя выберите одну из следующих опций:<ol>'
		.'<li>"От кого" - адрес эл.почты пользователя (без поля "Куда ответить:"): пользователь получает все ответы и сообщения об ошибках, ради укрепления личной конфиденциальности;</li>'
		.'<li>"От кого" - адрес эл.почты администратора и с полем "Куда ответить" с адресом эл.почты пользователя.<br/>Это находится в полном соответствии с анти-спамными требованиями SPF, но администратор может получить ошибки/ошибочно созданные ответы.</li></ol>');
DEFINE('_UE_A_FROM_USER', 'Адрес пользователя');
DEFINE('_UE_A_FROM_ADMIN', 'Администратор, "Reply-To": Пользователь');

//Администраторские ярлыки вкладки модерации Admin Moderate Tab labels
DEFINE('_UE_MODERATE','Модерация');
DEFINE('_UE_AVATARUPLOADAPPROVALGROUP','Группы модерации');
DEFINE('_UE_AVATARUPLOADAPPROVALGROUP_DESC','Все пользователи, выбранные в группе и выше будут модераторами.');
DEFINE('_UE_ALLOWUSERREPORTS','Разрешить пользователям жаловаться');
DEFINE ('_UE_ALLOWUSERREPORTS_DESC','Позволяет пользователям докладывать модераторам о неподобающем поведении других пользователей.');
DEFINE ('_UE_AVATARUPLOADAPPROVAL','Требовать одобрения загрузки аватара');
DEFINE ('_UE_AVATARUPLOADAPPROVAL_DESC','Включает требование того, чтобы все аватары, загружаемые пользователями были просмотрены для одобрения перед их публикацией.');
DEFINE ('_UE_ALLOWUSERPROFILEBANNING_DESC','Позволить модераторам предотвратить открытый показ профиля пользователя.');
DEFINE ('_UE_ALLOWUSERPROFILEBANNING','Позволить блокировку профиля');

//Администраторские ярлыки вкладки регистрации Admin Registration tab labels
DEFINE('_UE_NAME_FORMAT','Формат имени');
DEFINE('_UE_DATE_FORMAT','Формат даты');
DEFINE('_UE_NAME_FORMAT_DESC','Выбрать в каком формате Вы бы желали отображать поля Имя/Имя пользователя.');
DEFINE('_UE_DATE_FORMAT_DESC','Выбрать в каком формате Вы бы желали отображать поля дат (m - месяц, d - день, y - год).');
DEFINE ('_UE_REG_CONFIRMATION_DESC','Выбрать "Да" для отправки письма эл.почты и ссылки для подтверждения пользователю в ответ на его регистрацию.');
DEFINE ('_UE_REG_CONFIRMATION','Требовать подтверждения эл.почтой');
DEFINE ('_UE_REG_ADMIN_APPROVAL','Требовать одобрения администратором');
DEFINE ('_UE_REG_ADMIN_APPROVAL_DESC','Требовать чтобы регистрации всех пользователей были одобрены администратором.');
DEFINE ('_UE_REG_EMAIL_NAME','Название регистрационной почты');
DEFINE ('_UE_REG_EMAIL_NAME_DESC','Пожалуйста введите название, которым Вы бы хотели озаглавить отправляемое письмо эл.почты.');
DEFINE ('_UE_REG_EMAIL_FROM','Адрес регистрационной эл.почты');
DEFINE ('_UE_REG_EMAIL_FROM_DESC','Адрес, который Вы бы хотели использовать для отправки писем эл.почты регистрирующимся пользователям.');
DEFINE ('_UE_REG_EMAIL_REPLYTO','Кому ответить');
DEFINE ('_UE_REG_EMAIL_REPLYTO_DESC','Адрес эл.почты, который бы Вы хотели использовать как "Кому ответить".');
DEFINE ('_UE_REG_PEND_APPR_MSG','Эл.письма ожидающие одобрения');
DEFINE ('_UE_REG_WELCOME_MSG','Сообщение "Добро пожаловать"');
DEFINE ('_UE_REG_REJECT_MSG','Сообщение об отказе');
DEFINE ('_UE_REG_PEND_APPR_SUB','Ожидающие одобрения темы');
DEFINE ('_UE_REG_WELCOME_SUB','Заголовок письма "Добро пожаловать"');
DEFINE ('_UE_REG_PEND_APPR_SUB_DESC','Заголовок письма отправленного пользователю, ожидающему одобрения. Вы можете использовать языковые строчки или оставить заголовок и тело письма пустыми дабы принудить неотправку письма.');
DEFINE ('_UE_REG_WELCOME_SUB_DESC','Заголовок приветствующего письма, отправляемого пользователю, как только он смог впервые зайти на сайт после регистрации. Вы можете использовать языковые строчки или оставить заголовок и тело письма пустыми дабы принудить неотправку письма.');
DEFINE ('_UE_REG_REJECT_SUB_DESC','Заголовок письма об отказе');
DEFINE ('_UE_REG_SIGNATURE','Подпись письма');
DEFINE ('_UE_REG_ADMIN_PA_SUB','ТРЕБУЕТСЯ ДЕЙСТВИЕ! Регистрация нового пользователя ожидает одобрения');
DEFINE ('_UE_REG_ADMIN_PA_MSG','Новый пользователь только что зарегистрировался на [SITEURL] и требует одобрения.\n'
.'Это письмо содержит их данные\n\n'
.'Имя - [NAME]\n'
.'Адрес эл.почты - [EMAILADDRESS]\n'
.'Имя пользователя - [USERNAME]\n\n\n'
.'Пожалуйста не отвечайте на это письмо, поскольку оно написано автоматически только для Вашей информации.\n');
DEFINE ('_UE_REG_ADMIN_SUB','Регистрация нового пользователя');
DEFINE ('_UE_REG_ADMIN_MSG','Новый пользователь зарегистрировался на сайте [SITEURL].\n'
.'Это письмо содержит их данные\n\n'
.'Имя - [NAME]\n'
.'Адрес эл.почты - [EMAILADDRESS]\n'
.'Имя пользователя - [USERNAME]\n\n\n'
.'Пожалуйста не отвечайте на это письмо, поскольку оно написано автоматически только для Вашей информации.\n');
DEFINE('_UE_REG_EMAIL_TAGS','[NAME] - Как зовут пользователя<br />'
.'[USERNAME] - Имя пользователя для входа на сайт<br />'
.'[DETAILS] - Регистрационные данные пользователя, такие как адрес эл.почты и имя пользователя<br />'
.'[PASSWORD] - Пароль, выбранный пользователем (только в первом письме, отправленном в ответ на нажатие "Регистрировать")<br />'
.'[CONFIRM] - Вставляет ссылку на подтверждение в случае когда подтверждающая функция задействована<br />'
.'[FIELDNAME] - Это вставит значение, относящееся к пользователю, которому адресуется письмо. Просто включите между [ и ] имя поля базы данных того поля, которое Вы желаете включить.<br />'
);

//Registration form
DEFINE('_UE_REG_COMPLETE_NOPASS','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваш пароль был отправлен по введенному Вами адресу эл.почты.</p>'
.'<p>Пожалуйста проверьте свою эл.почту (включая папку для спама). Вы сможете зайти на сайт сразу же как только получите свой пароль.</p>');
DEFINE('_UE_REG_COMPLETE','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Вы теперь можете входить на сайт.</p>');
DEFINE('_UE_REG_COMPLETE_NOPASS_NOAPPR','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваша регистрация требует одобрения. По одобрению Ваш пароль будет отправлен Вам по введенному Вами адресу эл.почты.</p>'
.'<p>Когда вы получите одобрение и пароль, Вы сможете войти на сайт.</p>');
DEFINE('_UE_REG_COMPLETE_NOAPPR','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваша регистрация требует одобрения. По одобрению, Вам будет отправлено сообщение одобрения по адресу эл.почты, которые Вы ввели.</p>'
.'<p>Когда вы получите одобрение, Вы сможете войти на сайт.</p>');
DEFINE('_UE_REG_COMPLETE_CONF','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Эл.письмо с дальнейшими указаниями о завершении регистрации было отправлено по представленному Вами адресу эл.почты.</p>'
.'<p>Пожалуйста проверьте Вашу эл.почту (включая папку для спама) для завершения регистрации.</p>'
.'<p>Для отправки повторного эл.письма просто попытайтесь войти на сайт с паролем и именем пользователя, соответствующими Вашим регистрационным.</p>');
DEFINE('_UE_REG_COMPLETE_NOPASS_CONF','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваш пароль был отправлен по введенному Вами адресу эл.почты.</p>'
.'<p>Пожалуйста проверьте вашу эл.почту (включая папку для спама). Когда Вы получите Ваш пароль и последуете инструкциям по подтверждению, тогда Вы сможете войти на сайт.</p>');

// User List Labels
DEFINE ('_UE_HAS','содержит');
DEFINE ('_UE_USERS','зарегистрированных пользователей(я)');
DEFINE ('_UE_SEARCH_ALERT','Пожалуйста введите значение для поиска!');
DEFINE ('_UE_SEARCH','Найти пользователя');
DEFINE ('_UE_ENTER_EMAIL','Введите адрес эл.почты пользователя, имя и имя пользователя');
DEFINE ('_UE_SEARCH_BUTTON','Поиск');
DEFINE ('_UE_SHOW_ALL','Показать всех пользователей');
DEFINE ('_UE_NAME','Ф И О');
DEFINE ('_UE_UL_USERNAME','Имя пользователя');
DEFINE ('_UE_USERTYPE','Тип пользователя');
DEFINE ('_UE_VIEWPROFILE','Смотреть профиль');
DEFINE ('_UE_LIST_ALL','Перечислить всех');
DEFINE ('_UE_PAGE','Страница');
DEFINE ('_UE_RESULTS','Результаты');
DEFINE ('_UE_OF_TOTAL','всего');
DEFINE ('_UE_NO_RESULTS','Нет результатов');
DEFINE ('_UE_FIRST_PAGE','Начало');
DEFINE ('_UE_PREV_PAGE','Предыд');
DEFINE ('_UE_NEXT_PAGE','След');
DEFINE ('_UE_END_PAGE','Окончание');
DEFINE('_UE_CONTACT','Контакт');
DEFINE('_UE_INSTANT_MESSAGE','Мгновенное сообщение');
DEFINE('_UE_IMAGEAVAILABLE','Фото');
DEFINE('_UE_INFO','Информация');
DEFINE('_UE_PROFILE','Профиль');
DEFINE('_UE_PRIVATE_MESSAGE','ЛС');
DEFINE('_UE_ADDITIONAL','Дополнительная информация');
DEFINE('_UE_NO_DATA','Данные отсутствуют');
DEFINE('_UE_CLICKTOVIEW','Щелкните для');
DEFINE('_UE_CLICKTOSORTBY','Щелкните отсортировать по %s');		// %s replaced by sorting name
DEFINE('_UE_UL_USERNAME_NAME','Имя пользователя(Имя)');

//mod_userextraslogin
DEFINE('_UE_NO_ACCOUNT','Еще нет учетной записи?');
DEFINE('_UE_CREATE_ACCOUNT','Создать учетную запись');
DEFINE('_UE_REGISTER','Зарегистрироваться');
DEFINE('_UE_FORGOT_PASSWORD','Забыли пароль?');
DEFINE('_LOGIN_NOT_CONFIRMED','Ваш процесс регистрации еще не завершен! Пожалуйста проверьте снова Вашу эл.почту для дальнейших, вновь высланных инструкций. Если Вы не находите письмо, проверьте свою папку спама. Удостоверьтесь, что Ваша почта не настроена на немедленное удаление спама. Если это так, попытайтесь еще раз зайти на сайт для получения нового письма с инструкциями.');
DEFINE('_LOGIN_NOT_APPROVED','Ваша учетная запись еще не была одобрена!');
DEFINE('_UE_USER_CONFIRMED','Ваша учетная запись теперь активна. Вы можете войти на сайт!');
DEFINE('_UE_USER_NOTCONFIRMED','Ваша учетная запись еще не активна. Пожалуйста проверьте свою эл.почту и последуйте инструкциям для завершения регистрационного процесса. Если Вы не находите письмо, проверьте свою папку спама. Удостоверьтесь, что Ваша почта не настроена на немедленное удаление спама. Если это так, попытайтесь еще раз зайти на сайт для получения нового письма с инструкциями.');


//Avatar
DEFINE('_UE_UPLOAD_UPLOAD','Загрузить');
DEFINE('_UE_UPLOAD_SUBMIT','Отправить новый аватар для загрузки');
DEFINE('_UE_UPLOAD_SELECT_FILE','Выбрать файл');
DEFINE('_UE_UPLOAD_ERROR_TYPE','Пожалуйста используйте аватары только в формате JPEG, JPG или PNG');
DEFINE('_UE_UPLOAD_ERROR_EMPTY','Пожалуйста выберите файл для загрузки');
DEFINE('_UE_UPLOAD_ERROR_NAME','Название файла аватара должно состоять только из буквенно-цифровых знаков и без пробелов пожалуйста.');
DEFINE('_UE_UPLOAD_ERROR_SIZE','Размер файла аватара превышает разрешенный администратором максимум.');
DEFINE('_UE_UPLOAD_ERROR_WIDTHHEIGHT','Высота или ширина аватара превышают разрешенный администратором максимум.');
DEFINE('_UE_UPLOAD_ERROR_WIDTH','Ширина аватара превышает разрешенный администратором максимум.');
DEFINE('_UE_UPLOAD_ERROR_HEIGHT','Высота автара превышает разрешенный администратором максимум.');
DEFINE('_UE_UPLOAD_ERROR_CHOOSE','Вы не выбрали аватар из галереи.');
DEFINE('_UE_UPLOAD_UPLOADED','Ваш аватар был загружен.');
DEFINE('_UE_UPLOAD_GALLERY','Выберите аватар из галереи');
DEFINE('_UE_UPLOAD_CHOOSE','Подтвердить');
DEFINE('_UE_UPLOAD_UPDATED','Ваш аватар был настроен.');
DEFINE('_UE_USER_PROFILE_NOT','Ваш профиль не может быть обновлен.');
DEFINE('_UE_USER_PROFILE_UPDATED','Ваш профиль был обновлен.');
DEFINE('_UE_USER_RETURN_A','Если через некоторое время Вы не будете перенаправлены в Ваш профиль ');
DEFINE('_UE_USER_RETURN_B','щелкните здесь');
//DEFINE('_UPDATE','UPDATE');

//Moderator
DEFINE('_UE_USERPROFILEBANNED','Этот профиль был заблокирован модератором.');
DEFINE('_UE_REQUESTUNBANPROFILE','Отправить запрос разблокирования');
DEFINE('_UE_REPORTUSER','Пожаловаться на пользователя');
DEFINE('_UE_BANPROFILE','Заблокировать профиль');
DEFINE('_UE_UNBANPROFILE','Разблокировать профиль');
DEFINE('_UE_REPORTUSER_TITLE','Жаловаться на пользователя');
DEFINE('_UE_USERREASON','Причина жалобы на пользователя');
DEFINE('_UE_BANREASON','Причина для блокирования');
DEFINE('_UE_SUBMITFORM','Отправить');
DEFINE('_UE_NOUNBANREQUESTS','Нет требований по разблокировки для обработки');
DEFINE('_UE_IMAGE_MODERATE','Модерировать картинки');
DEFINE('_UE_APPROVE_IMAGE','Одобрить картинку');
DEFINE('_UE_REJECT_IMAGE','Отклонить картинку');
DEFINE('_UE_MODERATE_TITLE','Модератор');
DEFINE('_UE_NOIMAGESTOAPPROVE','Нет картинок для обработки');
DEFINE('_UE_USERREPORT_MODERATE','Модерировать жалобы пользователя(лей)');
DEFINE('_UE_REPORT','Жаловаться');
DEFINE('_UE_REPORTEDONDATE','Дата жалобы');
DEFINE('_UE_REPORTEDUSER','Пожаловавшийся пользователь');
DEFINE('_UE_REPORTEDBY','Жалоба отправлена');
DEFINE('_UE_PROCESSUSERREPORT','Обработка-Процесс');
DEFINE('_UE_NONEWUSERREPORTS','Новых жалоб пользователя нет');
DEFINE('_UE_USERUNBAN_SUCCESSFUL','Профиль пользователя успешно разблокирован.');
DEFINE('_UE_REPORTUSERSACTIVITY','Описать активность пользователя');
DEFINE('_UE_USERREPORT_SUCCESSFUL','Жалоба на пользователя успешно отправлена.');
DEFINE('_UE_USERBAN_SUCCESSFUL','Профиль пользователя успешно заблокирован.');
DEFINE('_UE_FUNCTIONALITY_DISABLED','Эта функция в настоящее время выключена.');
DEFINE('_UE_UPLOAD_PEND_APPROVAL','Ваш аватар в настоящее время ожидает одобрения модератором.');
DEFINE('_UE_UPLOAD_SUCCESSFUL','Ваш аватар был успешно загружен.');
DEFINE('_UE_UNBANREQUEST','Запрос разблокирования профиля');
DEFINE('_UE_USERUNBANREQUEST_SUCCESSFUL','Ваш запрос о разблокировке профиля был успешно отправлен.');
DEFINE('_UE_USERREPORT','Жалоба пользователя');
DEFINE('_UE_VIEWUSERREPORTS','Просмотреть жалобы пользователя');
DEFINE('_UE_USERREQUESTRESPONSE','Просмотреть жалобы пользователя');
DEFINE('_UE_MODERATORREQUESTRESPONSE','Просмотреть жалобы пользователя');
DEFINE('_UE_REPORTBAN_TITLE','Заблокировать жалобу');
DEFINE('_UE_REPORTUNBAN_TITLE','Заблокировать жалобу');

DEFINE('_UE_UNBANREQUIREACTION',' Разблокировать жалобу(ы)');
DEFINE('_UE_USERREPORTSREQUIREACTION','Жалоба(ы) пользователя');
DEFINE('_UE_IMAGESREQUIREACTION','Картинка(и)');
DEFINE('_UE_NOACTIONREQUIRED','Нет действий к рассмотрению');

DEFINE('_UE_UNBAN_MODERATE','Запросы разблокировки профиля');
DEFINE('_UE_BANNEDUSER','Заблокированный пользователь');
DEFINE('_UE_BANNEDREASON','Причина заблокирования');
DEFINE('_UE_BANNEDON','Дата заблокирования');
DEFINE('_UE_BANNEDBY','Заблокирован');

DEFINE('_UE_MODERATORBANRESPONSE','Отклик модератора');
DEFINE('_UE_USERBANRESPONSE','Отклик пользователя');

DEFINE('_UE_IMAGE_ADMIN_SUB','Картинка ожидает одобрения');
DEFINE('_UE_IMAGE_ADMIN_MSG','Пользователь отправил картинку на одобрение. Пожалуйста зайдите на сайт и предпримите соответствующие меры.');
DEFINE('_UE_USERREPORT_SUB','Жалоба пользователя ожидает рассмотрения');
DEFINE('_UE_USERREPORT_MSG','Пользователь отправил жалобу на другого пользователя, которая требует Вашего рассмотрения. Пожалуйста зайдите на сайт и предпримите соответствующие меры.');
DEFINE('_UE_IMAGEAPPROVED_SUB','Картинка одобрена');
DEFINE('_UE_IMAGEAPPROVED_MSG','Ваша картинка была одобрена модератором.');
DEFINE('_UE_IMAGEREJECTED_SUB','Картинка отвергнута');
DEFINE('_UE_IMAGEREJECTED_MSG','Ваша картинка была отвергнута модератором. Пожалуйста зайдите на сайт и отправьте новую.');
DEFINE('_UE_BANUSER_SUB','Профиль пользователя заблокирован.');
DEFINE('_UE_BANUSER_MSG','Ваш пользовательский профиль был заблокирован администратором. Пожалуйста зайдите на сайт и посмотрите почему.');
DEFINE('_UE_UNBANUSER_SUB','Профиль пользователя разблокирован');
DEFINE('_UE_UNBANUSER_MSG','Профиль пользователя был разблокирован администратором. Ваш профиль теперь снова виден всем пользователям.');
DEFINE('_UE_UNBANUSERREQUEST_SUB','Запрос о разблокировании ожидающий рассмотрения');
DEFINE('_UE_UNBANUSERREQUEST_MSG','Пользователь отправил запрос о разблокировке его профиля.Пожалуйста зайдите на сайт и предпримите соответствующие меры.');


//Alpha 3 Build
DEFINE('_UE_IMAGE','Аватар профиля');
DEFINE('_UE_FORMATNAME','Отформатированное имя');

//Alpha 4 Build
DEFINE('_UE_ADMINREQUIREDFIELDS','Проверка правильности заполнения полей в административном разделе');
DEFINE('_UE_ADMINREQUIREDFIELDS_DESC','Включить "Да" для задействия параметров проверки правильности заполнения полей (таких как "Обязательно", "Размер" и т.д.) в разделе администратора "Менеджер пользователей" и настроить на "Нет" для игнорирования правильности заполнения полей.');
DEFINE('_UE_CANCEL','Отменить');
DEFINE('_UE_NA','Не применимо');
DEFINE('_UE_MODERATOREMAIL','Отправить письмо модераторам');
DEFINE('_UE_MODERATOREMAIL_DESC','Если включено на "Да", то, когда на сайте произойдут события, требующие внимания и модерации, модераторы будут получать письма по эл.почте.');

//Beta 1 Build
DEFINE('_UE_UPDATE','Обновить');

//Beta 2 Build
DEFINE('_UE_FIELDONPROFILE','Это поле ВИДИМО в профиле');
DEFINE('_UE_FIELDNOPROFILE','Это поле НЕ ВИДИМО в профиле');
DEFINE('_UE_FIELDREQUIRED','Это поле обязательно для заполнения');
DEFINE('_UE_NOT_AUTHORIZED','Вы не авторизованы для просмотра этой страницы!');
DEFINE('_UE_ALLOW_LISTVIEWBY','Позволить доступ к:');
DEFINE('_UE_ALLOW_LISTVIEWBY_DESC','Выберите группу, которой Вы хотите разрешить просмотр списка. Доступ к нему получат все пользователи того уровня и выше.');
DEFINE('_UE_ALLOW_PROFILEVIEWBY','Разрешить доступ от:');
DEFINE('_UE_ALLOW_PROFILEVIEWBY_DESC','Выберите группу, которой Вы хотите разрешить просмотр списка. Доступ к нему получат все пользователи уровня доступа этой группы и выше. ВАЖНО: пункт меню профиля СВ должен также иметь соответствующий уровень доступа (например, "Все", если доступ должен быть предоставлен всем).');

//Beta 3 Build
DEFINE('_UE_NOLISTFOUND','Опубликованных списков пользователей не существует!');
DEFINE('_UE_ALLOW_PROFILELINK','Позволить создавать ссылку на профиль');
DEFINE('_UE_ALLOW_PROFILELINK_DESC','Выберите "Да", чтобы разрешить каждой строчке быть привязанной к профилю соответствующего пользователя и "Нет", чтобы предотвратить возможность создания ссылок профиля в списке.');
DEFINE('_UE_REGISTERFORPROFILE','Пожалуйста войдите на сайт или зарегистрируйтесь чтобы просмотреть или изменить Ваш профиль.');
DEFINE('_UE_UPLOAD_ERROR_GDNOTINSTALLED','Библиотека картинок GD2 либо не установлена либо не скомпилирована с РНР! Пожалуйста известите Вашего системного администратора чтобы выключить функцию автоматического изменения размеров картинок.');
DEFINE('_UE_UPLOAD_ERROR_UPLOADFAILED','Во время загрузки/обработки картинки произошла ошибка!');
DEFINE('_UE_TOC','Примите Условия и Соглашения');
DEFINE('_UE_TOC_REQUIRED','Перед регистрацией Вы должны принять Условия и Соглашения!');
DEFINE('_UE_REG_TOC_MSG','Включить Условия и Соглашения');
DEFINE('_UE_REG_TOC_DESC','Включите на "Да" чтобы перед регистрацией обязывать пользователей принимать или не принимать Ваши "Условия и Соглашения"!');
DEFINE('_UE_REG_TOC_URL_MSG','URL-адрес "Условий и Соглашений"');
DEFINE('_UE_REG_TOC_URL_DESC','Введите URL-адрес Вашего документа "Условия и Соглашения".');
DEFINE('_UE_LASTUPDATEDON','Последнее обновление');

//Beta 4 Build
DEFINE('_UE_EMAILFORMWARNING','ВАЖНО:<ol>'
		.'<li>Адрес эл.почты в Вашем профиле: <strong>%s</strong>.</li>'
		.'<li>Удостоверьтесь в том, что он верен и проверьте фильтр спама перед отправкой сообщений, т.к. Ваш получатель будет использовать его для ответа Вам.</li>'
		.'<li>Пожалуйста примите к сведению что адресат может не получить письмо эл.почты ввиду настроек эл.почты и спам-фильтра.</li>'
		.'</ol>');
DEFINE('_UE_EMAILFORMSUBJECT','Тема:');
DEFINE('_UE_EMAILFORMMESSAGE','Сообщение:');
DEFINE('_UE_EMAILFORMTITLE','Отправить сообщение по эл.почте в адрес %s');
DEFINE('_UE_GENERAL','Общая');
DEFINE('_UE_SENDEMAILNOTICE',"------- Это сообщение от %s чей адрес - %s ( %s ) Вам: -------\r\n\r\n");
DEFINE('_UE_SENDEMAILNOTICE_REPLYTO',"\r\n\r\nОтвечая, пожалуйста тщательно проверьте что адрес эл.почты пользователя %s является %s.");
DEFINE('_UE_SENDEMAILNOTICE_DISCLAIMER',"\r\n\r\n------ Заметки: ------\r\n\r\nЭтот пользователь не видел адрес Вашей эл.почты. Если Вы ответите, то у получателя будет Ваш адрес.\r\n\r\n%s владельцы не могут принять никакой ответственности за содержание и адреса писем пользователя.");
DEFINE('_UE_SENDEMAILNOTICE_MESSAGEHEADER',"\r\n\r\n\r\n------ Сообщение от %s Вам: ------\r\n\r\n");
DEFINE('_UE_SENDPMSNOTICE','ЗАМЕТКА: Это сообщение создано автоматически. Отвечать на него не нужно.');
DEFINE('_UE_SENDEMAIL','Отправить письмо эл.почты');
DEFINE('_UE_SENTEMAILSUCCESS','Ваше письмо было успешно отправлено!');
DEFINE('_UE_SENTEMAILFAILED','Отправка Вашего письма не прошла! Пожалуйста попытайтесь еще раз.');
DEFINE('_UE_ALLOW_EMAIL_DISPLAY','Обработка эл.почты');
DEFINE('_UE_REGISTERDATE','Дата регистрации');
DEFINE('_UE_ACTION','Действия');
DEFINE('_UE_USER','Пользователь');
DEFINE('_UE_USERAPPROVAL_MODERATE','Одобрение/Отклонение пользователя');
DEFINE('_UE_USERPENDAPPRACTION',' Пользователь(и)');
DEFINE('_UE_APPROVEUSER','Обработать пользователя(ей)');
DEFINE('_UE_REG_REJECT_SUB','Ваша регистрация была отклонена!');
DEFINE('_UE_USERREJECT_MSG',"Ваша регистрация на %s была отклонена по следующей причине:\n%s");
DEFINE('_UE_COMMENT','Отклонить комментарий');
DEFINE('_UE_APPROVE','Одобрить');
DEFINE('_UE_REJECT','Отклонить');
DEFINE('_UE_USERREJECT_SUCCESSFUL','Пользователь был успешно отклонен!');
DEFINE('_UE_USERAPPROVE_SUCCESSFUL','Пользователь был успешно одобрен!');
DEFINE('_LOGIN_REJECTED','Ваш запрос о регистрации был отклонен!');
DEFINE('_UE_EMAILFOOTER','ЗАМЕТКА: Это письмо было автоматически создано от %s (%s).');
DEFINE('_UE_MODERATORUSERAPPOVAL','Пользователи одобренные модератором');
DEFINE('_UE_MODERATORUSERAPPOVAL_DESC','Эта настройка позволяет модераторам одобрять пользователей, ожидающих утверждения, через передние страницы сайта.');
DEFINE('_UE_REG_COMPLETE_NOAPPR_CONF','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваша регистрация требует подтверждения через эл.почту и утверждения. Пожалуйста следуйте пошаговым инструкциям, присланным Вам по эл.почте. После утверждения, по введенному Вами адресу будет отправлено письмо.</p>'
.'<p>Вы сможете войти на сайт, когда получите одобрение.</p>');
DEFINE('_UE_REG_COMPLETE_NOPASS_NOAPPR_CONF','<div class="componentheading">Регистрация завершена!</div>'
.'<p>Ваша регистрация требует подтверждения через эл.почту и утверждения. Пожалуйста следуйте пошаговым инструкциям, присланным Вам по эл.почте</p>'
.'<p>Когда Вы получите одобрение, Вам будет отправлен пароль и тогда сможете войти на сайт.</p>');
DEFINE('_UE_NAME_STYLE','Стиль имени');
DEFINE('_UE_NAME_STYLE_DESC','Стиль имени точнее определяет, каким Вы желаете получить поле имени в Joomla/Mambo.');
DEFINE('_UE_USER_CONFIRMED_NEEDAPPR','Благодарим за подтверждение Вашего адреса эл.почты. Ваша учетная запись требует одобрения модератора. Вы получите письмо по эл.почте с итогом рассмотрения.');
DEFINE('_UE_YOUR_FNAME','Имя');   
DEFINE('_UE_YOUR_MNAME','Отчество');
DEFINE('_UE_YOUR_LNAME','Фамилия');

//RC 1 Build
DEFINE('_UE_NOSELFEMAIL','Вам не разрешено отправлять эл.почту самому себе!');
DEFINE('_UE_PROFILETAB','Профиль');
DEFINE('_UE_AUTHORTAB','Статьи');
DEFINE('_UE_FORUMTAB','Форум');
DEFINE('_UE_BLOGTAB','Блог');
DEFINE('_UE_ARTICLEDATE','Дата');
DEFINE('_UE_ARTICLETITLE','Заголовок');
DEFINE('_UE_ARTICLERATING','Рейтинг');
DEFINE('_UE_ARTICLEHITS','Просмотры');
DEFINE('_UE_NESTTABS','Вставить внутрь вкладок');
DEFINE('_UE_NESTTABS_DESC','Вставить все вкладки под единой панелью профиля. Это очень пригодно когда существует большое количество вкладок.');
DEFINE('_UE_MENUFORMATBAR','Планка меню');
DEFINE('_UE_MENUFORMATLIST','Список меню');
DEFINE('_UE_MENUFORMAT','Формат меню');
DEFINE('_UE_MENUFORMAT_DESC','Выберите какими представить меню, используемые в Community Builder.');
DEFINE('_UE_TEMPLATEDIR','Шаблон Community Builder');
DEFINE('_UE_TEMPLATEDIR_DESC','Выберите шаблон, применяемый ко вкладкам, выскакивающим подсказкам, панелям и меню, используемым в Community Builder.'
.' Вы можете добавить Ваш собственный или другие шаблоны, используя встроенный "Менеджер плагинов" Community Builder.');
DEFINE('_UE_MINHITSINTV','Минимальный интервал между просмотрами (в минутах)');
DEFINE('_UE_MINHITSINTV_DESC','Установить минимальный интервал между подсчетами просмотров и хитов профиля пользователя каким-либо пользователем. Настройка по умолчанию - 60 минут (один час).');
DEFINE('_UE_XHTMLCOMPLY','Соответствие стандарту W3C XHTML 1.0 Trans.');
DEFINE('_UE_XHTMLCOMPLY_DESC','Поскольку некоторые шаблоны для систем Joomla/Mambo не включают необходимое заявление ( &lt;?php mosShowHead(); ?&gt; ),'
.' эта настройка является не обязательной. Вы можете проверить файл index.php Вашего шаблона или просто включить эту настройку и посмотреть отображается ли вкладка профиля пользователя.'
.' В настоящем выпуске мы добились прогресса в сторону соответствия стандарту W3C XHTML, но полностью ему соответствуют пока еще только несколько страниц.'
.' Само собой, для соответствия стандарту W3C XHTML, Вам необходимо чтобы и используемый(ые) шаблон(ы) Joomla/Mambo тоже ему соответствовал(и).');
DEFINE('_UE_MAMBLOGNOTINSTALLED','Компонент блогера Mamblog не установлен. Пожалуйста свяжитесь с администратором Вашего сайта.');
DEFINE('_UE_BLOGDATE','Дата');
DEFINE('_UE_BLOGTITLE','Титул');
DEFINE('_UE_BLOGHITS','Просмотры');
DEFINE('_UE_NOBLOGS','У этого пользователя нет опубликованных записей блога.');
DEFINE('_UE_NOARTICLES','У этого пользователя нет опубликованных статей.');
DEFINE('_UE_IMPATH','Путь к ImageMagick');
DEFINE('_UE_IMPATH_DESC','Путь к директории с ImageMagick, заканчивающийся / . Или оставьте "auto" для автоматического определения на большинстве современных систем Linux.');
DEFINE('_UE_NETPBMPATH','Путь к NetPBM');
DEFINE('_UE_NETPBMPATH_DESC','Путь к директории NetPBM, заканчивающийся / . Или оставьте "auto" для автоматического определения на большинстве современных систем Linux.');
DEFINE('_UE_AUTODET','Автоматическое определение');
DEFINE('_UE_ERROR_NOTINSTALLED','Не установлено');
DEFINE('_UE_CONVERSIONTYPE','Программное приложение аватаров');
DEFINE('_UE_NEWPASS_FAILED','Изменение пароля не удалось!');
DEFINE('_UE_USER_SUBSCRIPTIONS','Ваши подписки');
DEFINE('_UE_THREAD_UNSUBSCRIBE',':: отказаться от подписок ::');
DEFINE('_UE_USER_NOSUBSCRIPTIONS','Ваших подписок не обнаружено');
DEFINE('_UE_GEN_BY','с помощью');
DEFINE('_UE_USER_UNSUBSCRIBE_ALL','Отказаться от всех подписок');
DEFINE('_UE_USERREPORTMODERATED_SUCCESSFUL','Жалоба пользователя успешно модерирована!');
DEFINE('_UE_USERIMAGEMODERATED_SUCCESSFUL','Картинка пользователя успешно модерирована!');
DEFINE('_UE_NOREPORTSTOPROCESS','Жалоб пользователей для обработки нет');
DEFINE('_UE_NOUSERSPENDING','Пользователей ожидающих одобрения нет');
DEFINE('_UE_BLANK','');
DEFINE('_UE_REG_FIRST_VISIT_URL_MSG','URL первого захода на сайт');
DEFINE('_UE_REG_FIRST_VISIT_URL_DESC','Введите URL для отображения во время самого первого захода на сайт 
после регистрации. Эта страница может содержать Ваше сообщение приветствия новым членам и/или особы инструкции, 
или перенаправить пользователя на завершение его профиля. Оставьте незаполненной для обычного входа 
на сайт первый раз. URL для показа профиля пользователя: 
index.php?option=com_comprofiler&Itemid=1 (замените Itemid=1 на Itemid Вашего меню профиля).');
DEFINE('_UE_NOSUCHPROFILE','Этот профиль либо больше не существует или больше не доступен.');

//RC 2
DEFINE('_UE_REG_INTRO_MSG','Вступительный текст для регистрации');
DEFINE('_UE_REG_INTRO_DESC','Введите текст/html для отображения вверху '
.'страницы регистрации или постоянной, зависящей от выбранного языка, как например _UE_WELCOME_DESC. '
.'Это поле может содержать мотивационное  послание новым членам '
.'зарегистрироваться и/или со специальными инструкциями. Оставьте незаполненным, если не хотите отображать никакого сообщения.');
DEFINE('_UE_REG_CONCLUSION_MSG','Текст, завершающий регистрацию');
DEFINE('_UE_REG_CONCLUSION_DESC','Введите текст/html отображать внизу '
.'страницы регистрации или значения постоянной, зависящей от выбранного языка, как например _UE_WELCOME_DESC. '
.'Эта поле может содержать благодарственное сообщение или особые инструкции. '
.'Оставьте поле незаполненным, если не хотите отображать никакого сообщения.');
DEFINE('_UE_USER_NOT_APPROVED','Этот пользователь еще не был одобрен модератором!');
DEFINE('_UE_USER_NOT_CONFIRMED','Этот пользователь пока не подтвердил свой адрес эл.почты и учетную запись!');
//Connections
DEFINE('_UE_ADDCONNECTION','Добавить в друзья');
DEFINE('_UE_REMOVECONNECTION','Удалить из друзей');
DEFINE('_UE_CONNECTION','Друзья');
DEFINE('_UE_CONNECTIONACCEPTSUCCESSFULL','Друг успешно добавлен!');
DEFINE('_UE_CONNECTIONREMOVESUCCESSFULL','Друг успешно удален!');
DEFINE('_UE_CONNECTIONADDSUCCESSFULL','Друг успешно добавлен!');
DEFINE('_UE_CONNECTIONPENDINGACCEPTANCE','Ожидает подтверждения');
DEFINE('_UE_DIRECTCONNECTIONPENDINGACCEPTANCE','Дружба с %s ожидает подтверждения!');
DEFINE('_UE_NOCONNECTIONS','Нет друзей.');
DEFINE('_UE_NODIRECTCONNECTION','Отсутствует в списке друзей.');
DEFINE('_UE_ACCEPTCONNECTION','Принять дружбу');
DEFINE('_UE_CONNECTIONPENDING','Дружба ожидает одобрения');
DEFINE('_UE_CONNECTEDSINCE','Добавлен(а) начиная с');
DEFINE('_UE_CONNECTEDCOMMENT','Комментарий');
DEFINE('_UE_CONNECTEDDETAIL','Подробности');
DEFINE('_UE_CONNECTIONREQUESTDETAIL','Подробности запроса дружбы');
DEFINE('_UE_CONNECTIONREQUIREDON','Дружба востребована');
DEFINE('_UE_DECLINECONNECTION','Отклонить дружбу');
DEFINE('_UE_FIELDDESCRIPTION','Описание поля: двигайте указатель мыши над иконкой');
DEFINE('_UE_WEBURL','Адрес сайта');
DEFINE('_UE_WEBTEXT','Название сайта');
DEFINE('_UE_CONNECTIONTYPE','Категория');
DEFINE('_UE_CONNECTIONCOMMENT','Комментарий');
DEFINE('_UE_CONNECTIONSUPDATEDSUCCESSFULL','Ваша дружба была успешно обновлена!');
DEFINE('_UE_MANAGECONNECTIONS','Друзья');
DEFINE('_UE_MANAGEACTIONS','Управлять действиями');
DEFINE('_UE_CONNECTIONACTIONSSUCCESSFULL','Действия дружбы успешны!');
DEFINE('_UE_ALLOWCONNECTIONS','Задействовать дружбу');
DEFINE('_UE_ALLOWCONNECTIONS_DESC','Включение этой функции позволит Вашим пользователям устанавливать дружбу друг с другом. Это обычно называют системой друзей или buddy-buddy.');
DEFINE('_UE_USEMUTUALCONNECTIONACCEPTANCE','Взаимное согласие');
DEFINE('_UE_USEMUTUALCONNECTIONACCEPTANCE_DESC','Включение этой функции требует чтобы до официального установления  дружбы обе стороны согласились на начальную дружбу.');
DEFINE('_UE_CONNECTOINNOTIFYTYPE','Метод извещения');
DEFINE('_UE_CONNECTOINNOTIFYTYPE_DESC','Выберите хотите ли Вы получать извещения о дружбе и каким образом Вы бы хотели чтобы Ваши пользователи получали извещения о дружбе.');
DEFINE('_UE_AUTOADDCONNECTIONS','Перекрестная дружба');
DEFINE('_UE_AUTOADDCONNECTIONS_DESC','Включение этой функции создаст дружбу для обеих сторон вместо дружбы только для запрашивающей стороны.');
DEFINE('_UE_CONNECTIONCATEGORIES','Категории друзей');
DEFINE('_UE_CONNECTIONCATEGORIES_DESC','Введите список категорий, чтобы разрешить Вашим пользователям глубже категоризировать их дружбу. После ввода каждой категории нажмите на "Enter".');
DEFINE('_UE_CONNECTIONMADESUB','%s соединился с Вами!');
DEFINE('_UE_CONNECTIONMADEMSG','%s установил дружбу с Вами.');
DEFINE('_UE_CONNECTIONMSGPREFIX',"  %s включил следующее личное сообщение:\n\n%s");
DEFINE('_UE_CONNECTIONMESSAGE',"Личное сообщение включено");
DEFINE('_UE_CONNECTIONPENDSUB','%s ожидает одобрения дружбы с Вами!');
DEFINE('_UE_CONNECTIONPENDMSG','%s запрашивает дружбу с Вами и ожидает Вашего одобрения. Пожалуйста примите или откажите ее запросу.');
DEFINE('_UE_CONNECTTO','Добавить в друзья %s');
DEFINE('_UE_CONNECTEDWITH','Управлять друзьями');
DEFINE('_UE_NOCONNECTEDWITH','Сейчас у вас нет друзей.');
DEFINE('_UE_CONNECTIONDENIED_SUB','Запрос дружбы отклонен!');
DEFINE('_UE_CONNECTIONDENIED_MSG','Ваш запрос дружбы с  %s был отклонен!');
DEFINE('_UE_CONNECTIONREMOVED_SUB','Дружба удалена');
DEFINE('_UE_CONNECTIONREMOVED_MSG','%s удалил(а) Вас из друзей');
DEFINE('_UE_CONNECTIONACCEPTED_SUB','Запрос о дружбе принят!');
DEFINE('_UE_CONNECTIONACCEPTED_MSG','Ваш запрос дружбы с  %s был принят!');
DEFINE('_UE_CONNECTIONDENYSUCCESSFULL','Дружба была успешно отклонена!');
DEFINE('_UE_TOC_LINK','Принимаю %sУсловия и Соглашения%s');	// to link only the "Terms and Conditions", first %s will be replaced by <a.. and second %s by </a>.
// RC2 Newsletters Support
DEFINE('_UE_NEWSLETTER_HEADER','Выпуск новостей');
DEFINE('_UE_NEWSLETTER','Подписка на выпуск новостей');
DEFINE('_UE_NEWSLETTER_USER_EDIT_TITLE','Редактировать Вашу подписку на выпуск новостей');
DEFINE('_UE_NEWSLETTER_USER_EDIT_DESC','В обзоре внизу Вы увидите наши выпуски новостей доступные Вам. '
.'Квадрат для галочки перед каждым выпуском новостей указывает подписаны ли Вы или нет. '
.'Вы можете изменить это и нажать "Обновить" для изменения подписки на наши выпуски новостей.');
DEFINE('_UE_NEWSLETTER_USER_EDIT_DESC_EMAIL','Если Вы добавили подписки, Вы должны будете подтвердить это чтобы '
.'Вы получили эти выпуски новостей. Пожалуйста проверьте Вашу эл.почту для дальнейших подробностей.');
DEFINE('_UE_NEWSLETTER_INTRODCUTION',"<div class='delimiterCell'>"._UE_NEWSLETTER_USER_EDIT_TITLE."</div>\n"
."<div class='fieldCell'>"._UE_NEWSLETTER_USER_EDIT_DESC." "._UE_NEWSLETTER_USER_EDIT_DESC_EMAIL."</div>\n");	// nothing to translate here!
DEFINE('_UE_NEWSLETTER_NAME','Выпуск новостей');
DEFINE('_UE_NEWSLETTER_DESCRIPTION','Описание');
DEFINE('_UE_NEWSLETTER_NAME_REG','Выпуск новостей');
DEFINE('_UE_NEWSLETTER_DESCRIPTION_REG','Описание');
DEFINE('_UE_NEWSLETTER_FORMAT_TITLE','Выбрать формат выпуска новостей');
DEFINE('_UE_NEWSLETTER_FORMAT_FIELD','Получать выпуски новостей:');
DEFINE('_UE_NEWSLETTER_HTML','эл.письма отформатированные в HTML');
DEFINE('_UE_NEWSLETTER_TEXT','как чисто текстовые эл.письма');
DEFINE('_UE_NEWSLETTER_DESC','Выберите "Нет", если у Вас не установлен компонент "Выпуск новостей". В противном случае выберите какую версию Вы бы хотели интегрировать.');
DEFINE('_UE_NEWSLETTER_DESC2','На данное время поддерживается только "YaNC 1.4" и будет предлагать подписку на публичные выпуски новостей в конце страницы регистрации.');
DEFINE('_UE_NEWSLETTERSREGLIST','Предлагаемый выбор выпусков новостей');
DEFINE('_UE_NEWSLETTERSREGLIST_DESC','Списки к предложению на странице регистрации (если включена интеграция выпуска новостей). Если интеграция выпусков новостей выбрана, но не выбраны выпуски новостей, будут предложены все публично доступные выпуски. Пользуйтесь CTRL (на Mac: COMMAND) для выбора более чем одного выпуска, или щелкните на уже выбранный(е) для переизбрания одного или нескольких.');
DEFINE('_UE_NEWSLETTERSREGLIST_DESC2','Несколько-строчный выбор с помощью ctrl (для PC) или command (для Mac) выбрать/удалить выпуск новостей.');
DEFINE('_UE_NEWSLETTER_SUBSCRIBE','Подписаться на:');
DEFINE('_UE_NEWSLETTERNOTINSTALLED','Компонент выпуска новостей не установлен. Пожалуйста свяжитесь с администратором сайта.');
DEFINE('_UE_NONEWSLETTERS','Выпусков новостей для подписки нет.');
DEFINE('_UE_PUBLIC','Всем');
DEFINE('_UE_PRIVATE','Лично');
DEFINE('_UE_CONNECTIONDISPLAY','Уровень показа');
DEFINE('_UE_CONNECTIONDISPLAY_DESC','Выберите показывать ли друзей каждого пользователя всем или лично.');
DEFINE('_UE_CONNECTIONPATH','Показывать степень дружбы');
DEFINE('_UE_CONNECTIONPATH_DESC','Выберите показывать ли степень дружбы между пользователем и посещаемым им профилем.');
DEFINE('_UE_DIRECTCONNECTION','Вы напрямую подружены с ');
DEFINE('_UE_NOESTABLISHEDCONNECTION','Отсутствует дружба между Вами и  ');
DEFINE('_UE_CONNECTIONPATH1','Ваш уровень дружбы с  ');
DEFINE('_UE_CONNECTIONPATH2','уровень ):<br />');
DEFINE('_UE_DETAILSABOUT',' Подробности о ');
DEFINE('_UE_CONNECTIONINVITATIONMSG','Настройте индивидуально Ваше приглашение к дружбе, добавив сообщение, которое будет включено.');
DEFINE('_UE_MESSAGE','Сообщение:');
DEFINE('_UE_SENDCONNECTIONREQUEST','Отправить');
DEFINE('_UE_CANCELCONNECTIONREQUEST','Отменить');
DEFINE('_UE_CONFIRMREMOVECONNECTION','Вы действительно хотите удалить дружбу?');
DEFINE('_UE_CONNECTIONREQUIREACTION','Запрос дружбы');
DEFINE('_UE_NOZOOMIMGS','У этого пользователя отсутствуют картинки!');
DEFINE('_UE_ZOOMNOTINSTALLED','Компонент наезда на картинки не установлен. Пожалуйста свяжитесь с администратором сайта.');
DEFINE('_UE_ZOOMGALLERY','Смотрите галерею');
DEFINE('_UE_ZOOMTABTITLE','Галерея картинок');
DEFINE('_UE_FORUM_FORUMRANKING','Ранг на форуме');
DEFINE('_UE_FORUM_TOTALPOSTS','Всего сообщений');
DEFINE('_UE_FORUM_KARMA','Карма');
DEFINE('_UE_NEWSLETTER_NOT_CONFIRMED','Не подтверждено');
DEFINE('_UE_NOTIFICATIONSAT','Извещение на');
DEFINE('_UE_YOUR_VERSION','Ваша версия');
DEFINE('_UE_LATEST_VERSION','Самая последняя версия');
DEFINE('_UE_ACTIONSMENU','Меню действий');
DEFINE('_UE_CONNECT_ACTIONREQUIRED','Внизу Вы видите пользователей, которые предлагают соединиться с Вами. У Вас есть выбор принять или отклонить их запросы. '
.'Выберите зеленую галочку чтобы принять или красный крестик чтобы отклонить их запросы. Затем щелкните на кнопку "Обновить" '
.'Подвигайте и подержите указатель мыши над картинками и иконками чтобы увидеть короткое пояснение деталей и их значение.');
DEFINE('_UE_CONNECT_MANAGECONNECTIONS','Внизу Вы видите пользователей с которыми Вы имеете дружбу напрямую. '
.'Вы можете добавить личный комментарий и выбрать несколько типов друзей из списка щелкая по ним с помощью CTRL (на PC) или CMD (на Mac). '
.'Затем щелкните на кнопку "Обновить". '
.'Подвигайте и подержите указатель мыши над иконками чтобы посмотреть короткое пояснение их значения и действий, и над картинками чтобы посмотреть подробности друзей.');

// PMS:
//Administrator Integration Tab
DEFINE('_UE_PMSTAB','Быстрое сообщение');
DEFINE('_UE_PMS_NOTINSTALLED','Выбранная система личных сообщений не установлена.');
// PMS integration definitions
DEFINE('_UE_PM_SENTSUCCESS','Ваше личное сообщение было успешно отправлено!');
DEFINE('_UE_PM_NOTSENT','Ваше личное сообщение не было отправлено!');
DEFINE('_UE_PMS_TYPE_UNSUPPORTED','Выбранная система личных сообщений этот тип личных сообщений не поддерживает!');
DEFINE('_UE_PM_EMPTYMESSAGE','Пустое сообщение.');
DEFINE('_UE_SESSIONTIMEOUT','Сессия истекла.');
DEFINE('_UE_TRYAGAIN','Пожалуйста попробуйте еще раз.');
DEFINE('_UE_PM_SENDMESSAGE','Отправить сообщение');
DEFINE('_UE_PM_PROFILEMSG','Сообщение из обзора Вашего профиля');
DEFINE('_UE_PM_MESSAGES_HAVE'	, 'Вас ожидает');
DEFINE('_UE_PM_NEW_MESSAGE'		, 'новое личное сообщение');
DEFINE('_UE_PM_NEW_MESSAGES'	, 'новое(ых) личное(ых) сообщение(й/я)');
DEFINE('_UE_PM_NO_MESSAGES'		, 'Новых личных сообщений нет');
// PMS Menus:
DEFINE('_UE_PM','ЛС');
DEFINE('_UE_PM_USER','Отправить личное сообщение');
DEFINE('_UE_MENU_PM_USER_DESC','Отправить этому пользователю личное сообщение');
DEFINE('_UE_PM_INBOX','Показать ящик входящих личных сообщений');
DEFINE('_UE_MENU_PM_INBOX_DESC','Показать полученные личные сообщения');
DEFINE('_UE_PM_OUTBOX','Показать ящик отправленных личных сообщений');
DEFINE('_UE_MENU_PM_OUTBOX_DESC','Показать Отправленные/Ожидающие отправки личные сообщения');
DEFINE('_UE_PM_TRASHBOX','Показать Мусорную Корзину личных сообщений');
DEFINE('_UE_MENU_PM_TRASHBOX_DESC','Показать личные сообщения в Мусорной Корзине');
DEFINE('_UE_PM_OPTIONS','Редактировать опции системы личных сообщений');
DEFINE('_UE_MENU_PM_OPTIONS_DESC','Отредактируйте опции системы личных сообщений');

// Menus
DEFINE('_UE_MENU', 'Меню');
DEFINE('_UE_USER_STATUS', 'Статус пользователя');
DEFINE('_UE_MENU_CB', 'Сообщество');
DEFINE('_UE_MENU_ABOUT_CB', 'О Community Builder...');
DEFINE('_UE_SITE_POWEREDBY', 'Функции сообщества на этом сайте поддерживаются компонентом Joomla/Mambo Community Builder');
DEFINE('_UE_MENU_EDIT', 'Редактировать');
DEFINE('_UE_MENU_VIEW', 'Смотреть');
DEFINE('_UE_MENU_MESSAGES', 'Сообщения');
DEFINE('_UE_MENU_CONNECTIONS', 'Друзья');
//DEFINE('_UE_MENU_UPDATEPROFILE', 'Update Your Profile');
DEFINE('_UE_MENU_UPDATEPROFILE_DESC', 'Измените настройки Вашего профиля');
//DEFINE('_UE_MENU_UPDATEAVATAR', 'Update Your Image');
DEFINE('_UE_MENU_UPDATEAVATAR_DESC', 'Измените аватар Вашего профиля');
//DEFINE('_UE_MENU_DELETE_AVATAR', 'Remove Image');
DEFINE('_UE_MENU_DELETE_AVATAR_DESC', 'Удалите аватар из Вашего профиля');
DEFINE('_UE_MENU_VIEWMYPROFILE', 'Просмотреть свой профиль');
DEFINE('_UE_MENU_VIEWMYPROFILE_DESC', 'Просмотрите свой собственный профиль');

DEFINE('_UE_MENU_SENDUSEREMAIL','Отправить пользователю эл.письмо');
DEFINE('_UE_MENU_SENDUSEREMAIL_DESC','Отправить этому пользователю эл.письмо');
DEFINE('_UE_MENU_USEREMAIL_DESC','Адрес эл.почты этого пользователя');
DEFINE('_UE_ADDCONNECTION_DESC','Добавить друзей к этому пользователю');
DEFINE('_UE_ADDCONNECTIONREQUEST','Добавить в друзья');
DEFINE('_UE_ADDCONNECTIONREQUEST_DESC','Запросите дружбу с этим пользователем');
DEFINE('_UE_REMOVECONNECTION_DESC','Удалить из друзей');
DEFINE('_UE_REVOKECONNECTIONREQUEST','Забрать назад запрос дружбы');
DEFINE('_UE_REVOKECONNECTIONREQUEST_DESC','Отозвать запрос дружбы с этим пользователем');
DEFINE('_UE_MENU_MANAGEMYCONNECTIONS','Список друзей');
DEFINE('_UE_MENU_MANAGEMYCONNECTIONS_DESC','Управляйте здесь действиями по Вашим существующим и ожидающим одобрения друзьям');

DEFINE('_UE_MENU_MODERATE', 'Модерация');
//DEFINE('_UE_MENU_REQUESTUNBANPROFILE','Submit Unban Request');
DEFINE('_UE_MENU_REQUESTUNBANPROFILE_DESC', 'Отправляйте здесь запрос о разблокировании Вашего профиля модератору сайта');
//DEFINE('_UE_MENU_BANPROFILE','Ban Profile');
DEFINE('_UE_MENU_BANPROFILE_DESC', 'Как модератор сайта: Заблокировать этот профиль, сделав его невидимым для других пользователей');
//DEFINE('_UE_MENU_UNBANPROFILE','Unban Profile');
DEFINE('_UE_MENU_UNBANPROFILE_DESC', 'Как модератор сайта: Разблокировать этот профиль, сделав его видимым для других пользователей');
//DEFINE('_UE_MENU_REPORTUSER','Report User');
DEFINE('_UE_MENU_REPORTUSER_DESC', 'Пожаловаться на этого пользователя модератору сайта, чтобы он по нему смог принять соответствующие меры');
//DEFINE('_UE_MENU_VIEWUSERREPORTS','View User Reports');
DEFINE('_UE_MENU_VIEWUSERREPORTS_DESC','Как модератор сайта: Просмотрите здесь жалобы на этого пользователя');
DEFINE('_UE_UNBAN_MODERATE_DESC','Щелкните на имя пользователя заблокированного чтобы просмотреть соответствующий профиль. '
.'Затем выберите в меню профиля пользователя "Модерировать/Разблокировать", если Вы намереваетесь разблокировать этого пользователя.');
DEFINE('_UE_MENU_APPROVE_IMAGE_DESC', 'Как модератор сайта: Одобрите картинку, отправленную пользователем для своего профиля, сделав ее видимой остальным пользователям');
DEFINE('_UE_MENU_REJECT_IMAGE_DESC', 'Как модератор сайта: Отклоните картинку пользователя для этого профиля');
DEFINE('_UE_HITS_DESC','Число просмотров профиля этого пользователя');
DEFINE('_UE_ONLINESTATUS_DESC','Нынешний статус нахождения этого пользователя на сайте');
DEFINE('_UE_MEMBERSINCE_DESC','Этот пользователь является членом с');
DEFINE('_UE_LASTONLINE_DESC','Этот пользователь был на линии последний раз:');
DEFINE('_UE_LASTUPDATEDON_DESC','Этот пользователь последний раз обновлял свой профиль:');

DEFINE('_UE_LENGTH_ERROR','Максимальная длина этого поля была превышена пользователем');
DEFINE('_UE_CHARACTERS','знаки');
DEFINE('_UE_NEVER','Никогда');
DEFINE('_UE_NOFORUMPOSTSFOUND','Подходящие сообщения форума не найдены.');

DEFINE('_UE_PORTRAIT','Портрет');
DEFINE('_UE_CONNECTIONPATHS','Пути дружбы');

DEFINE('_UE_PROFILE_PAGE_TITLE','Название страницы профиля пользователя');
DEFINE('_UE_PROFILE_TITLE_TEXT','%s страница профиля');

DEFINE('_UE_SEARCH_INPUT','Поиск и Помощь;');	// &hellip; = "..."
DEFINE('_UE_POS_CB_MAIN','Главная часть (ниже левой/средней/правой)');
DEFINE('_UE_POS_CB_HEAD','Шапка (над левой/средней/правой)');
DEFINE('_UE_POS_CB_MIDDLE','Средняя часть');
DEFINE('_UE_POS_CB_LEFT','Левая часть (средней части)');
DEFINE('_UE_POS_CB_RIGHT','Правая часть (средней части)');
DEFINE('_UE_POS_CB_BOTTOM','Подножная часть (под главной частью)');

DEFINE('_UE_DISPLAY_TAB','Панель со вкладками');
DEFINE('_UE_DISPLAY_DIV','Тег Div с заголовком');
DEFINE('_UE_DISPLAY_HTML','Грубое отображение без заголовка');
DEFINE('_UE_DISPLAY_OVERLIB','Верхний слой, двигающийся вместе с указателем мыши');
DEFINE('_UE_DISPLAY_OVERLIBFIX','Фиксированное наложение, закрывающееся с уходом указателя мыши');
DEFINE('_UE_DISPLAY_OVERLIBSTICKY','Кнопка с "Липким" слоем');
DEFINE('_UE_CLOSE_OVERLIB','Закрыть');

//SB Integration Support
DEFINE('_UE_SB_TABTITLE','Настройки Форума');
DEFINE('_UE_SB_TABDESC','Это - настройки Вашего Форума');
DEFINE('_UE_SB_VIEWTYPE_TITLE','Предпочтенный тип просмотра');
DEFINE('_UE_SB_VIEWTYPE_FLAT','Плоский');
DEFINE('_UE_SB_VIEWTYPE_THREADED','С нанизыванием');
DEFINE('_UE_SB_ORDERING_TITLE','Предпочтенный порядок сообщений');
DEFINE('_UE_SB_ORDERING_OLDEST','Старые сообщения сначала');
DEFINE('_UE_SB_ORDERING_LATEST','Поздние сообщения сначала');
DEFINE('_UE_SB_SIGNATURE','Подпись');
//added for SB 1.5 during 1.0 RC 1
DEFINE('_UE_SB_POSTSPERPAGE','Сообщений на одной странице'); 
DEFINE('_UE_SB_USERTIMEOFFSET','Разница между местным временем и временем на удаленном сервере');
DEFINE('_UE_SB_CONFIRMUNSUBSCRIBEALL','Вы уверены в том, что Вы хотите аннулировать все Ваши форумские подписки?');
DEFINE('_UE_FORUMDATE','Дата');
DEFINE('_UE_FORUMCATEGORY','Категории');
DEFINE('_UE_FORUMSUBJECT','Тема');
DEFINE('_UE_FORUMHITS','Просмотры');
DEFINE('_UE_FORUM_POSTS','Форумские сообщения');
DEFINE('_UE_FORUM_LASTPOSTS','Последние %s форумские сообщения');
DEFINE('_UE_FORUM_FOUNDPOSTS','Найдено %s форумских сообщений');
DEFINE('_UE_FORUM_STATS','Форумские статистики');
if (!defined('_RANK_MODERATOR')) DEFINE('_RANK_MODERATOR','Модератор');
if (!defined('_RANK_ADMINISTRATOR')) DEFINE('_RANK_ADMINISTRATOR','Администратор');
DEFINE('_UE_SBNOTINSTALLED','Компонент этого форума не установлен. Пожалуйста свяжитесь с администратором сайта.');
DEFINE('_UE_NOFORUMPOSTS','У этого пользователя нет форумских сообщений.');
DEFINE("_UE_USERPARAMS","Параметры пользователя");
//Mamblog search:
DEFINE('_UE_BLOG_LASTENTRIES','Последние блог-записи от %d');
DEFINE('_UE_BLOG_FOUNDENTRIES','Найдено %d блог-записей');
DEFINE('_UE_BLOG_ENTRIES','Блог-записи');

// 1.0 stable:
DEFINE('_UE_NO_USERS_IN_LIST','В этом списке пользователи отсутствуют');
DEFINE('_UE_LIST_DOES_NOT_EXIST','Этот список не существует');
DEFINE('_UE_VISIBLE_ONLY_MODERATOR','Эта запись видна только модераторам');
DEFINE('_UE_AUTOMATIC','Автоматически');
DEFINE('_UE_MANUAL','Вручную');
DEFINE('_UE_NOVERSIONCHECK','Проверка версии в конфигурации');
DEFINE('_UE_NOVERSIONCHECK_DESC','Выберите хотите ли Вы проверять версию при каждом открытии общей конфигурации Community Builder автоматически (настоятельно рекомендуется, чтобы Вы немедленно увидели сообщение в случае наличия важного выпуска безопасности) или вручную, при щелчке на ссылку (не рекомендуется). Ваш установленный компонент Community Builder не открывает никакую личную информацию во время этой проверки версии (за исключением нынешней установленной версии и стандартных параметров http). Сервис автоматического обновления отсутствует.');
// 1.0 stable cblogin module:
DEFINE('_UE_SHOW_POFILE_OF','Показать профиль ');

//Not yet used within application but are needed to translate default images for profile.
DEFINE('_UE_IMG_NOIMG','Нет картинки');
DEFINE('_UE_IMG_PENDIMG','Ожидает одобрения');

// CB 1.0.2 optional string:
DEFINE('_UE_MAXEMAILSLIMIT','Вы превысили максимальный лимит %d эл.писем в течении %d часов. Пожалуйста попробуйте еще раз попозже.');
DEFINE('_UE_INPUT_VALUE_NOT_ALLOWED','Это значение ввода не разрешено.');

//Needed for Joomla 1.5 and Mambo 4.6 language independance: Translators: please take strings from joomla 1.0.11's language file
/** registration.php */
if (!defined('_ERROR_PASS'))		DEFINE('_ERROR_PASS','Извините, соответственный пользователь не был найден');
// if (!defined('_NEWPASS_SENT'))		DEFINE('_NEWPASS_SENT','Новый пароль пользователя был создан и выслан!');
if (!defined('_REGWARN_NAME'))		DEFINE('_REGWARN_NAME','Пожалуйста введите свое имя.');
if (!defined('_REGWARN_UNAME'))		DEFINE('_REGWARN_UNAME','Пожалуйста введите Ваше имя пользователя.');
if (!defined('_REGWARN_MAIL'))		DEFINE('_REGWARN_MAIL','Пожалуйста введите действительный адрес эл.почты.');
if (!defined('_REGWARN_VPASS2'))	DEFINE('_REGWARN_VPASS2','Пароли не соответствуют. Пожалуйста попробуйте еще раз.');
if (!defined('_REGWARN_INUSE'))		DEFINE('_REGWARN_INUSE','Это имя пользователя уже занято. Пожалуйста попробуйте другое.');
if (!defined('_REGWARN_EMAIL_INUSE')) DEFINE('_REGWARN_EMAIL_INUSE', 'Этот адрес эл.почты уже зарегистрирован. Если Вы забыли пароль, щелкните на "Забыли Ваш пароль?" или на "Напомнить пароль" и новый пароль будет Вам выслан.');
if (!defined('_VALID_AZ09'))		DEFINE('_VALID_AZ09',"Пожалуйста введите действительное %s.  Без пробелов, более чем %d знаков и содержащее 0-9,a-z,A-Z");
/** classes/html/registration.php */
if (!defined('_PROMPT_PASSWORD'))	DEFINE('_PROMPT_PASSWORD','Потеряли Ваш пароль?');
if (!defined('_NEW_PASS_DESC'))		DEFINE('_NEW_PASS_DESC','Пожалуйста введите Ваше имя пользователя и адрес эл.почты и затем щелкните на кнопку "Выслать пароль".<br />'
.'Вскоре Вы получите новый пароль.  Для входа на сайт используйте этот новый пароль.');
if (!defined('_PROMPT_UNAME'))		DEFINE('_PROMPT_UNAME','Имя пользователя:');
if (!defined('_PROMPT_EMAIL'))		DEFINE('_PROMPT_EMAIL','Адрес эл.почты:');
if (!defined('_BUTTON_SEND_PASS'))	DEFINE('_BUTTON_SEND_PASS','Выслать пароль');
if (!defined('_REGISTER_TITLE'))	DEFINE('_REGISTER_TITLE','Регистрация');
if (!defined('_REGISTER_NAME'))		DEFINE('_REGISTER_NAME','Имя:');
if (!defined('_REGISTER_UNAME'))	DEFINE('_REGISTER_UNAME','Имя пользователя:');
if (!defined('_REGISTER_EMAIL'))	DEFINE('_REGISTER_EMAIL','Адрес эл.почты:');
if (!defined('_REGISTER_PASS'))		DEFINE('_REGISTER_PASS','Пароль:');
if (!defined('_REGISTER_VPASS'))	DEFINE('_REGISTER_VPASS','Подтвердить пароль:');
if (!defined('_BUTTON_SEND_REG'))	DEFINE('_BUTTON_SEND_REG','Отправить регистрацию');
if (!defined('_SENDING_PASSWORD'))	DEFINE('_SENDING_PASSWORD','Ваш пароль будет отправлен по указанному выше адресу эл.почты.<br />Как только Вы получили Ваш'
.' новый пароль, Вы можете войти на сайт и изменить его.');
if (!defined('_LOGIN_SUCCESS'))		DEFINE('_LOGIN_SUCCESS','Вы успешно вошли на сайт');
if (!defined('_LOGOUT_SUCCESS'))	DEFINE('_LOGOUT_SUCCESS','Вы успешно вышли с сайта');
if (!defined('_LOGIN_BLOCKED'))		DEFINE('_LOGIN_BLOCKED','Ваш вход на сайт блокирован.');
if (!defined('_CMN_YES'))			DEFINE('_CMN_YES','Да');
if (!defined('_CMN_NO'))			DEFINE('_CMN_NO','Нет');
if (!defined('_CMN_SHOW'))			DEFINE('_CMN_SHOW','Показать');
if (!defined('_CMN_HIDE'))			DEFINE('_CMN_HIDE','Скрыть');
if (!defined('_LOGIN_INCOMPLETE'))	DEFINE('_LOGIN_INCOMPLETE','Пожалуйста заполните поля имени пользователя и пароля.');
if (!defined('_LOGIN_INCORRECT'))	DEFINE('_LOGIN_INCORRECT','Неправильные имя пользователя или пароль. Пожалуйста попробуйте еще раз.');
if (!defined('_USER_DETAILS_SAVE'))	DEFINE('_USER_DETAILS_SAVE','Ваши данные были сохранены.');

// 1.1:
DEFINE('_UE_MENU_STATUS', 'Статус');
DEFINE('_UE_YOURCONNECTIONS','Ваши друзья');
DEFINE('_UE_USERSNCONNECTIONS','Друзья пользователя %s');
DEFINE('_UE_SEEALLNCONNECTIONS','Посмотреть всех друзей пользователя %s');
DEFINE('_UE_SEEALLOFUSERSNCONNECTIONS','Посмотреть всех %s друзей пользователя %s');
DEFINE('_UE_YOU_ARE_ALREADY_REGISTERED','Вы уже зарегистрированы с этим именем пользователя и паролем.');
DEFINE('_UE_SESSION_EXPIRED','Истекла сессия или на Вашем браузере не включены куки. Пожалуйста включите куки и перегрузите страницу.');
DEFINE('_UE_PLEASE_REFRESH','Пожалуйста перегрузите страницу прежде чем заполнять.');
DEFINE('_UE_REGISTERFORPROFILEVIEW','Пожалуйста зайдите на сайт или зарегистрируйтесь чтобы увидеть пользовательские профили.');
DEFINE('_UE_INFORMATION_FOR_FIELD','Информация: %s : %s');
DEFINE('_UE_ALLOWMODERATORSUSEREDIT_DESC','Разрешить модераторам редактировать профили пользователей и добавлять, изменять или удалять их аватары. Модераторы не могут редактировать модераторов этого же или высшего уровней.');
DEFINE('_UE_ALLOWMODERATORSUSEREDIT','Позволить модераторам редактировать профили пользователей');
DEFINE('_UE_USERPROFILEBLOCKED','Этот профиль больше не доступен.');
DEFINE('_UE_EDIT_OTHER_USER_TITLE','Редактировать данные %s');
DEFINE('_UE_MOD_MENU_UPDATEPROFILE', 'Обновить профиль пользователя');
DEFINE('_UE_MOD_MENU_UPDATEPROFILE_DESC', 'Изменить параметры профиля пользователя');
DEFINE('_UE_MOD_MENU_UPDATEAVATAR', 'Обновить картинку пользователя');
DEFINE('_UE_MOD_MENU_UPDATEAVATAR_DESC', 'Выбрать картинку профиля этого пользователя');
DEFINE('_UE_MOD_MENU_DELETE_AVATAR', 'Удалить картинку пользователя');
DEFINE('_UE_MOD_MENU_DELETE_AVATAR_DESC', 'Удалить картинку профиля этого пользователя');
DEFINE('_UE_MOD_MENU_VIEWOLDUSERREPORTS','Просмотреть обработанные жалобы пользователя');
DEFINE('_UE_MOD_MENU_VIEWOLDUSERREPORTS_DESC','Как модератор сайта: Просмотреть обработанные жалобы пользователей на этого пользователя');
DEFINE('_UE_REPORTSTATUS','Статус жалобы');
DEFINE('_UE_REPORTSTATUS_OPEN','Открыта');
DEFINE('_UE_REPORTSTATUS_PROCESSED','Обработана');
DEFINE('_UE_UNBANUSER','Профиль пользователя разблокирован');
DEFINE('_UE_UNBANNEDON','Дата разблокировки');
DEFINE('_UE_UNBANNEDBY','Разблокирование выполнено ');
DEFINE('_UE_MENU_BANPROFILE_HISTORY','История блокировки');
DEFINE('_UE_MENU_BANPROFILE_HISTORY_DESC', 'Как модератор сайта: Просмотреть историю блокировки этого профиля');
DEFINE('_UE_BANSTATUS','Статус блокировки');
DEFINE('_UE_BANSTATUS_BANNED','Заблокирован');
DEFINE('_UE_BANSTATUS_UNBAN_REQUEST_PENDING','Запрос на разблокировку ожидает одобрения');
DEFINE('_UE_BANSTATUS_PROCESSED','Обработан');
DEFINE('_UE_UNNAMED_USER','Анонимный пользователь');
DEFINE('_UE_REG_CB_ALLOW','Разрешить регистрацию пользователей');
DEFINE('_UE_REG_CB_ALLOW_DESC','Позволить ли регистрацию пользователей согласно соответствующей конфигурации в "Общих настройках" сайта, или любым образом посредством CB.<br />Рекомендованные параметры: только через CB, - установите "Да" здесь и "Нет" в "Общих настройках" сайта.');
DEFINE('_UE_REG_PROFILE_2COLS','Размещение в 2 колонки: ширина:');
DEFINE('_UE_REG_PROFILE_2COLS_RIGHT_REST','Правая: остальное!');
DEFINE('_UE_REG_PROFILE_2COLS_DESC','Ширина размещения в % для профилей в 2 колонки.');
DEFINE('_UE_REG_PROFILE_3COLS','Размещение в 3 колонки: ширина:');
DEFINE('_UE_REG_PROFILE_3COLS_RIGHT_REST','Правая: остальное!');
DEFINE('_UE_REG_PROFILE_3COLS_DESC','Ширина размещения профилей в три колонки в %. Средняя колонка занимает оставшуюся ширину!');
DEFINE('_UE_REG_FILTER_ALLOWED_TAGS','Не фильтровать следующие теги в полях редактора:');
DEFINE('_UE_REG_FILTER_ALLOWED_TAGS_DESC','Введите теги, которые бы Вы хотели сделать не фильтруемыми, разделяя их единичным нажатием пробела, например: `applet body bgsound embed`.<br />ПРЕДУПРЕЖДЕНИЕ: эта настройка предоставляется на Ваш собственный  риск, так как при ее задействовании пользователи смогут вводить зловредный код. Фильтрация по умолчанию этого не допускает. Следующие теги фильтруются по умолчанию и могут быть удалены из фильтрации посредством их ввода в данном поле:');
DEFINE('_UE_REG_FURTHER_SETTINGS','Дальнейшие параметры:');
DEFINE('_UE_REG_FURTHER_SETTINGS_MORE','смотрите параметры плагинов и вкладок.');
DEFINE('_UE_REG_FURTHER_SETTINGS_DESC','Больше параметров имеется в меню: Компоненты/Community Builder/Менеджер плагинов и /Менеджер вкладок. Каждый плагин и каждая вкладка могут редактироваться и иметь свои собственные параметры. Чтобы быть активными, плагины и вкладки должны быть опубликованы.');
// 1.1: backend global config:
DEFINE('_UE_REG_CONFIGURATION_MANAGER','- Менеджер конфигурации');
DEFINE('_UE_REG_ALLOWREG_SAME_AS_GLOBAL','как и общая настройка сайта "Разрешить регистрацию пользователей"');
DEFINE('_UE_REG_ALLOWREG_YES','да, независимо от общей настройки сайта');
DEFINE('_UE_NONE','Никого');
DEFINE('_UE_REG_NAMEFORMAT_NAME_ONLY','Только имя');
DEFINE('_UE_REG_NAMEFORMAT_NAME_USERNAME','Имя (имя пользователя)');
DEFINE('_UE_REG_NAMEFORMAT_USERNAME_ONLY','Только имя пользователя');
DEFINE('_UE_REG_NAMEFORMAT_USERNAME_NAME','Имя пользователя (Имя)');
DEFINE('_UE_REG_NAMEFORMAT_SINGLE_FIELD','Поле одного имени');
DEFINE('_UE_REG_NAMEFORMAT_TWO_FIELDS','Поле имени и фамилии');
DEFINE('_UE_REG_NAMEFORMAT_THREE_FIELDS','Поле имени, отчества и фамилии');
DEFINE('_UE_REG_EMAILDISPLAY_EMAIL_ONLY','Показывать только эл.почту');
DEFINE('_UE_REG_EMAILDISPLAY_EMAIL_W_MAILTO','Показывать адрес эл.почты со ссылкой "Кому"');
DEFINE('_UE_REG_EMAILDISPLAY_EMAIL_W_FORM','Показывать ссылку на форму отправки эл.письма');
DEFINE('_UE_REG_EMAILDISPLAY_EMAIL_NO','Не показывать адрес эл.почты');
DEFINE('_UE_GROUPS_EVERYBODY','Все');
DEFINE('_UE_GROUPS_ALL_REG_USERS','Все зарегистрированные пользователи');
DEFINE('_UE_WARNING','Предупреждение');
DEFINE('_UE_YOUR_CONFIG_FILE','Ваш файл конфигурации');
DEFINE('_UE_IS_NOT_WRITABLE','не открыт на запись');
DEFINE('_UE_NEED_TO_CHMOD_CONFIG','Вам нужно изменить права (chmod) на 766 для того, чтобы конфигурация обновилась');
DEFINE('_UE_FILE_UNWRITABLE','Файл не открыт для записи');
DEFINE('_UE_LEFT','Левый');
DEFINE('_UE_RIGHT','Правый');
DEFINE('_UE_CENTER','Центральный');
DEFINE('_UE_UP','Вверх');
DEFINE('_UE_DOWN','Вниз');
DEFINE('_UE_TOP','Верх');
DEFINE('_UE_BOTTOM','Низ');
DEFINE('_UE_MODERATORS_AND_ABOVE','Модераторы CB и уровни выше этого');
DEFINE('_UE_SUPERADMINS_ONLY','Только супер-администраторы');
DEFINE('_UE_ADMINS_AND_SUPERADMINS_ONLY','Только администраторы и супер-администраторы');
DEFINE('_UE_NO_PARAMS','Для этого параметров нет');
DEFINE('_UE_CALENDAR_TYPE','Тип календаря');
DEFINE('_UE_CALENDAR_TYPE_DESC','Выберите какой календарь Вы бы хотели использовать для выбора дат.');
DEFINE('_UE_CALENDAR_TYPE_DROPDOWN_POPUP','Выпадающий календарь(+выплывающий) календарь');
DEFINE('_UE_CALENDAR_TYPE_POPUP','Выплывающий календарь (старый)');
DEFINE('_UE_REG_USERNAMECHECKER','Ajax-овская проверка имени пользователя');
DEFINE('_UE_REG_USERNAMECHECKER_DESC','Позволяет во время регистрации проверять свободно ли имя пользователя. Вам стоит помнить что, хотя эта функция защищена, при некоторых обстоятельствах она может быть использована для отгадывания имени, облегчая отгадывание пароля. Эта функция экспериментальная, пока еще не оптимизированная для больших сайтов. Обязательно проводите тщательное тестирование прежде чем применять ее!');
// 1.1: frontend:
DEFINE('_UE_BUTTON_LOGIN','Войти');
DEFINE('_UE_BUTTON_LOGOUT','Выйти');
DEFINE('_UE_DO_LOGIN','Вам нужно войти.');
DEFINE('_UE_DO_LOGOUT','Вам нужно выйти.');
define('_UE_CHECK_USERNAME_AVAILABILITY',"Проверить свободно ли имя пользователя");
define('_UE_USERNAME_ALREADY_EXISTS',"Имя пользователя '%s' уже зарегистрировано. Пожалуйста выберите другое.");
define('_UE_USERNAME_DOESNT_EXISTS',"Имя пользователя '%s' не занято. Можете продолжать.");
define('_UE_CHECKING',"Проверяется...");
define('_UE_SORRY_CANT_CHECK',"Извините, не могу проверить.");
DEFINE('_UE_PLEAE_CHECK_PROFILE','Пожалуйста проверьте Ваш профиль');
DEFINE('_UE_BANNED_CHANGE_PROFILE','Ваш профиль заблокирован. Только Вы и модератор могут видеть его.<br />Пожалуйста последуйте запросу модератора, а затем выберите Модерация/Разблокировать чтобы отправить запрос о разблокировании Вашего профиля.');
DEFINE('_UE_WARNING_EDIT_OTHER_USER_PROFILE','ПРЕДУПРЕЖДЕНИЕ: Это не Ваш профиль. Как модератор, Вы редактируете профиль пользователя  %s.');
DEFINE('_UE_BACK_TO_YOUR_PROFILE','Назад к Вашему профилю');
// CB captcha plugin strings in core since cb 1.1:
DEFINE('_UE_CAPTCHA_Label','Код защиты');
DEFINE('_UE_CAPTCHA_Enter_Label','Введите код защиты');
DEFINE('_UE_CAPTCHA_Desc','Введите код защиты на картинке. Если картинка с кодом отсутствует, попробуйте выключить Ваш блокиратор рекламы и перегрузить эту страницу. В противном случае, пожалуйста свяжитесь с администратором сайта для дальнейшей помощи.');
DEFINE('_UE_CAPTCHA_NOT_VALID','Недействительный код защиты');
DEFINE('_UE_CAPTCHA_ALT_IMAGE','Картинка с встроенным в ней кодом защиты');
DEFINE('_UE_CAPTCHA_AUDIO','щелкнуть здесь чтобы услышать буквы');
DEFINE('_UE_CAPTCHA_AUDIO_POPUP_TITLE','Звуковой проигрыш кода безопасности CB');
DEFINE('_UE_CAPTCHA_AUDIO_POPUP_DESCRIPTION','Прослушайте звуковой проигрыш кода безопасности на картинке');
DEFINE('_UE_CAPTCHA_AUDIO_DOWNLOAD','Щелкните для стороннего проигрыша или скачки звукового файла');
DEFINE('_UE_CAPTCHA_AUDIO_CLICK2DOWNLOAD','(правый щелчок мыши или control-click)');
DEFINE('_UE_CAPTCHA_AUDIO_POPUP_CLOSEWINDOW','Щелкнуть для закрытия окна');

// 1.2 Frontend:
DEFINE('_UE_ERROR_USER_NOT_SYNCHRONIZED','Пользователь или не существует или не синхронизирован с CB');
DEFINE('_LOGIN_TITLE','Войти');
DEFINE('_LOGIN_REGISTER_TITLE','Добро пожаловать. Пожалуйста войдите на сайт или зарегистрируйтесь:');
DEFINE('_UE_UPLOAD_DIMENSIONS_AVATAR','Размер Вашего аватара будет при необходимости автоматически изменен как максимум на %s пикселей ширины и %s пикселей высоты, но на диске ему разрешено занимать не более %s KB.');
DEFINE('_UE_LOGIN_BLOCKED','Ваш вход на сайт заблокирован.');
DEFINE('_UE_REMEMBER_ME', 'Запомнить меня');
DEFINE('_UE_PASSWORD_REMINDER','Напомнить пароль');
DEFINE('_UE_USERNAME_PASSWORD_REMINDER','Напомнить данные входа');
DEFINE('_UE_REMINDER_NEEDED_FOR','Повторное извещение необходимо для');
DEFINE('_UE_LOST__USERNAME','Потеряно имя пользователя');
DEFINE('_UE_LOST__PASSWORD','Потерян пароль');
DEFINE('_UE_LOST_PASSWORD','Потерян пароль?');
DEFINE('_UE_USERNAMEREMINDER_SUB','Повторное извещение об имени пользователя для %s');
DEFINE('_UE_USERNAMEREMINDER_MSG','Приветствуем,\n'
.'С Вашей учетной записи %s было запрошено повторное извещение об имени пользователя.\n\n'
.'Ваше имя пользователя: %s\n\n'
.'Чтобы зайти в Вашу учетную запись, щелкните на ссылку ниже:\n'
.'%s\n\n'
.'Благодарим.\n');
DEFINE('_UE_NEWPASS_SUB','Новый пароль для: %s');
DEFINE('_UE_NEWPASS_MSG','Вы или кто-то от Вашего имени: %s.\n'
.'Запросил восстановление пароля на сайте %s .\n\n'
.'Ваш новый пароль: %s\n\n'
.'Если это не Ваш запрос, не беспокойтесь. Никто кроме Вас не получил это сообщение, но Ваш пароль поменялся.\n'
.'Теперь Вы можете войти на наш сайт используя Ваш почтовый адрес в качестве логина или сам логин и пароль из этого письма.\n'
.'Не удаляйте это письмо, что бы не забыть этот пароль. Если это ошшибка, то просто войдите на сайт с новым паролем (из этого письма) и поменяйте его на старый.');
DEFINE('_UE_ALREADY_LOGGED_IN','Вы уже вошли на сайт');
DEFINE('_UE_EMAIL_COULD_NOT_CHECK','Этот адрес эл.почты не возможно было проверить. Пожалуйста проверьте дважды, это необходимо для подтверждения.');
DEFINE('_UE_EMAIL_COULD_NOT_CHECK_NEEDED','Этот адрес эл.почты не возможно было проверить. Пожалуйста проверьте дважды.');
DEFINE('_UE_EMAIL_INCORRECT_CHECK','На этот адрес эл.почты сообщения не поступают. Пожалуйста проверьте его.');
DEFINE('_UE_EMAIL_INCORRECT_CHECK_NEEDED','На этот адрес эл.почты сообщения не поступают. Требуется для подтверждения.');
DEFINE('_UE_EMAIL_VERIFIED','Этот адрес эл.почты выглядит действительным.');
DEFINE('_UE_EMAIL_NOVALID','Этот адрес эл.почты не является действительным.');
DEFINE('_UE_EMAIL_ALREADY_REGISTERED','Этот адрес эл.почты уже зарегистрирован, возможно Вами.');
DEFINE('_UE_FIELDONPROFILE_SHORT','Поля, видимые в Вашем профиле');
DEFINE('_UE_FIELDNOPROFILE_SHORT','Поля <strong>не</strong> видимые в профиле');
DEFINE('_UE_FIELDREQUIRED_SHORT','Обязательные к заполнению поля');
DEFINE('_UE_FIELDDESCRIPTION_SHORT','Информация: наведите указатель мыши на иконку');
DEFINE('_UE_AVATAR_UPLOAD_DISCLAIMER','Щелкая на "Загрузить", Вы подтверждаете что у Вас есть права на распространение этой картинки.');
DEFINE('_UE_AVATAR_UPLOAD_DISCLAIMER_TERMS','Щелкая на "Загрузить", Вы подтверждаете что у Вас есть права на распространение этой фотографии и что это не нарушает %s.');
DEFINE('_UE_AVATAR_TOC_LINK','Условия и Соглашения');
DEFINE('_UE_USER_EMAIL_CONFIRMED','Этот адрес эл.почты уже был подтвержден');
DEFINE('_UE_LOST_USERNAME_PASSWORD','Забыли данные входа на сайт?');
DEFINE('_UE_LOST_USERNAME_OR_PASSWORD','Потеряли Ваше имя пользователя или пароль?');
DEFINE('_UE_LOST_USERNAME_DESC','Если вы <strong>потеряли Ваше имя пользователя</strong>, пожалуйста введите адрес Вашей эл.почты, отправляя поле для ввода имени пользователя не заполненным, затем щелкните на кнопку "Отправить имя пользователя" и Ваше имя пользователя будет отправлено Вам по указанному адресу.');
DEFINE('_UE_LOST_USERNAME_ONLY_DESC','Если Вы <strong>потеряли Ваше имя пользователя</strong>, пожалуйста введите адрес Вашей эл.почты, затем щелкните на кнопку "Отправить имя пользователя" и Ваше имя пользователя будет отправлено Вам по указанному адресу.');
DEFINE('_UE_LOST_PASSWORD_DESC','Если Вы <strong>потеряли Ваш пароль</strong> но знаете Ваше имя пользователя, пожалуйста введите Ваше имя пользователя и адрес Вашей эл.почты, щелкните на кнопку "Отправить пароль" и Вы вскоре получите Ваш новый пароль. Используйте этот новый пароль для входа на сайт.');
DEFINE('_UE_LOST_USERNAME_PASSWORD_DESC','Если Вы <strong>забыли и Ваше имя пользователя и Ваш пароль</strong>, пожалуйста сначала восстановите имя пользователя, а затем пароль. Для восстановления имени пользователя, пожалуйста введите адрес Вашей эл.почты, оставляя поле для имени пользователя пустым, затем щелкните на кнопку "Отправить имя пользователя" и Ваше имя пользователя будет отправлено на адрес Вашей эл.почты. Далее Вы можете использовать эту же форму для восстановления Вашего пароля.');
DEFINE('_UE_BUTTON_SEND','Отправить');
DEFINE('_UE_BUTTON_SEND_USERNAME','Отправить имя пользователя');
DEFINE('_UE_BUTTON_SEND_PASS','Отправить пароль');
DEFINE('_UE_BUTTON_SEND_USERNAME_PASS','Отправить имя пользователя/пароль');
define('_UE_USERNAME_EXISTS_ON_SITE',"Имя пользователя '%s' уже существует на этом сайте.");
define('_UE_USERNAME_DOES_NOT_EXISTS_ON_SITE',"Имя пользователя '%s' не существует на этом сайте.");
define('_UE_USERNAME_FREE_OK_TO_PROCEED',"Имя пользователя '%s' не занято. Можете продолжать.");
define('_UE_THIS_IS_YOUR_USERNAME',"Это Ваше нынешнее имя пользователя на этом сайте.");
define('_UE_THIS_IS_USERS_USERNAME',"Это - нынешнее имя пользователя на этом сайте.");
define('_UE_EMAIL_EXISTS_ON_SITE',"Адрес эл.почты '%s' уже существует на этом сайте.");
define('_UE_EMAIL_DOES_NOT_EXISTS_ON_SITE',"Адрес эл.почты '%s' на этом сайте не существует.");
define('_UE_SEARCH_ERROR','Поиск ошибок');
define('_UE_EMAIL_SENDING_ERROR','Ошибка при отправке эл.почты');
DEFINE('_UE_USERNAME_REMINDER_SENT','Повторное извещение с именем пользователя отправлено по адресу Вашей эл.почты %s. Пожалуйста проверьте Вашу эл.почту (и если необходимо, также и Вашу папку для спама)!');
DEFINE('_UE_NEWPASS_SENT','Новый пароль пользователя создан и отправлен по адресу Вашей эл.почты %s. Пожалуйста проверьте Вашу эл.почту (и если необходимо, также и Вашу папку для спама)!');
DEFINE('_UE_VALID_UNAME','Пожалуйста введите действительное имя пользователя, без пробелов, длинной как минимум из трех знаков и состоящее только из 0-9,a-z,A-Z');
DEFINE('_UE_VALID_UNAME_CHARS','Пожалуйста введите действительное значение %s, без пробелов, длинной как минимум из %s знаков и состоящее только из 0-9,a-z,A-Z');
DEFINE('_UE_VALID_PASS','Пожалуйста введите действительный пароль, без пробелов, длинной как минимум из 6 знаков и состоящее только из заглавных и строчных буквы, чисел и специальных знаков.');
DEFINE('_UE_VALID_PASS_CHARS','Пожалуйста введите действительное значение %s. без пробелов, длинной как минимум из %s знаков и содержащее заглавные и строчные буквы, числа и специальные знаки.');
DEFINE('_UE_VALID_MIN_LENGTH','Пожалуйста введите действительное значение %s, длинной как минимум из %s знаков. Вы ввели %s знаков.');
DEFINE('_UE_VALID_MAX_LENGTH','Пожалуйста введите действительное значение %s: максимальной длинной из %s знаков. Вы ввели %s знаков.');
DEFINE('_UE_REGWARN_NAME','Пожалуйста введите Ваше действительное полное имя.');
DEFINE('_UE_REGWARN_FNAME','Пожалуйста введите Ваше действительное имя.');
DEFINE('_UE_REGWARN_MNAME','Пожалуйста введите Ваше действительное отчество.');
DEFINE('_UE_REGWARN_LNAME','Пожалуйста введите Вашу действительную фамилию.');
DEFINE('_UE_REGWARN_MAIL','Пожалуйста введите действительный адрес эл.почты. По окончании регистрации по этому адресу будет отправлено письмо с подтверждением.');
DEFINE('_UE_REGWARN_VPASS2','Пароли не совпадают, пожалуйста попробуйте еще раз.');
DEFINE('_UE_VERIFY_SOMETHING','Подтвердите %s');
DEFINE('_UE_NO_PREFERENCE','Предпочтений нет');
DEFINE('_UE_NO_INDICATION','Индикации нет');
DEFINE('_UE_SEARCH_CRITERIA','Критерии поиска');
DEFINE('_UE_SEARCH_RESULTS','Результаты поиска');
DEFINE ('_UE_SEARCH_USERS','Поиск пользователей');
DEFINE ('_UE_FIND_USERS','Найти пользователя');
DEFINE ('_UE_SEARCH_FROM','Между');
DEFINE ('_UE_SEARCH_TO','и');
DEFINE ('_UE_MATCH_IS','есть');
DEFINE ('_UE_MATCH_IS_NOT','нет');
DEFINE ('_UE_MATCH_IS_EXACTLY','точно');
DEFINE ('_UE_MATCH_IS_EXACTLY_NOT','абсолютно не');
DEFINE ('_UE_MATCH_ARE_EXACTLY','как раз точно');
DEFINE ('_UE_MATCH_ARE_EXACTLY_NOT','как раз точно не');
DEFINE ('_UE_MATCH_IS_ONE_OF','одно из');
DEFINE ('_UE_MATCH_IS_NOT_ONE_OF','не одно из');
DEFINE ('_UE_MATCH_PHRASE','содержит фразу');
DEFINE ('_UE_MATCH_PHRASE_NOT','не содержит фразу');
DEFINE ('_UE_MATCH_ALL','содержит все из');
DEFINE ('_UE_MATCH_ALL_NOT','не содержит все из');
DEFINE ('_UE_MATCH_ANY','содержит любое из');
DEFINE ('_UE_MATCH_ANY_NOT','не содержит любое из');
DEFINE ('_UE_MATCH_INCLUDE_ALL_OF','включает все из');
DEFINE ('_UE_MATCH_INCLUDE_ALL_OF_NOT','не включает все из');
DEFINE ('_UE_MATCH_INCLUDE_ANY_OF','включает все из');
DEFINE ('_UE_MATCH_INCLUDE_ANY_OF_NOT','не включает ничего из');
DEFINE ('_UE_MATCH_EXCLUSIONS','Исключения');
DEFINE ('_UE_AVATAR_NONE','Аватар в профиле отсутствует');
DEFINE ('_UE_AVATAR_NO_CHANGE','Аватар не изменился');
DEFINE ('_UE_AVATAR_UPLOAD','Загрузить аватар в профиль');
DEFINE ('_UE_AVATAR_UPLOAD_NEW','Загрузить новый аватар в профиль');
DEFINE ('_UE_AVATAR_SELECT','Выберите аватар в галерее');
DEFINE ('_UE_HAS_PROFILE_IMAGE','Имеет аватар в профиле');
DEFINE ('_UE_HAS_NO_PROFILE_IMAGE','Не имеет аватара в профиле');
DEFINE ('_UE_AGE_YEARS','%s лет');
DEFINE ('_UE_YEARS','лет');
DEFINE ('_UE_HI_NAME','Приветствуем, %s');

// 1.2 Backend:
DEFINE('_UE_TOP_AND_BOTTOM','Верх и низ');
DEFINE('_UE_REG_SHOW_ICONS_EXPLAIN','Показывать объяснение для иконок');
DEFINE('_UE_REG_SHOW_ICONS_EXPLAIN_DESC','Следует ли показывать объяснения иконок вверху или внизу страницы регистрации (по умолчанию - "Верх и низ").');
DEFINE('_UE_ICONS_DISPLAY','Показывать иконки в полях');
DEFINE('_UE_ICONS_DISPLAY_DESC','Следует ли показывать иконки и их объяснения на экранах регистрации и редактирования пользователей. Если присутствует описание поля, то информационные иконки всегда показываются.');
DEFINE('_UE_REG_SHOW_LOGIN_ON_PAGE','Показывать модуль входа на странице регистрации.');
DEFINE('_UE_REG_SHOW_LOGIN_ON_PAGE_DESC','Следует ли на регистрационной странице показывать модуль входа. ВАЖНО: для этого должен быть установлен модуль входа CB.');
DEFINE('_UE_REQUIRED_ONLY','Только иконка "Обязательно"');
DEFINE('_UE_PROFILE_ONLY','Только иконки "Профиль/Нет профиля"');
DEFINE('_UE_REQUIRED_AND_PROFILE_ONLY','Только иконки "Обязательно" и профиля');
DEFINE('_UE_INFO_ONLY','Только объяснение иконок информации');
DEFINE('_UE_REQUIRED_AND_INFO_ONLY','Обязательно и иконки объяснения информации');
DEFINE('_UE_PROFILE_AND_INFO_ONLY','Иконка профиля и иконки объяснения информации');
DEFINE('_UE_REQUIRED_PROFILE_AND_INFO','Все иконки: Обязательно, профиль и информация объяснения');
DEFINE('_UE_ALWAYSRESAMPLEUPLOADS','Всегда тестировать загрузку аватара');
DEFINE('_UE_ALWAYSRESAMPLEUPLOADS_DESC','Тестирование загрузок аватаров добавляет защиту пользователям, просматривающим Ваш сайт, но только ImageMagic сохранит GIF-анимацию.');
DEFINE('_UE_FRONTENDUSERPARAMS','Позволить пользователю редактировать параметры его CMS с передних страниц');
DEFINE('_UE_FRONTENDUSERPARAMS_DESC','Показывает параметры пользователя и позволяет пользователю изменять их на его собственной странице профиля.');
DEFINE('_UE_REG_CB_EMAILPASS','Автоматическое генерирование произвольного пароля регистрации');
DEFINE('_UE_REG_CB_EMAILPASS_DESC','Генерировать ли автоматически и отправлять ли по эл.почте пароль пользователя (настройка "Да") или спрашивать пользователя об этом на странице регистрации (рекомендуется настройка по умолчанию "Нет").');
DEFINE('_UE_REG_EMAILCHECKER','Ajax-овская проверка адреса эл.почты');
DEFINE('_UE_REG_EMAILCHECKER_WARNING','ПРЕДУПРЕЖДЕНИЕ: На вашей системе PHP не установлена и не задействована функция "getmxrr()". Поскольку она является чисто функцией Linux, то это характерно для серверов на Windows и без нее проверка DNS и SMTP эл.почты не возможна.');
DEFINE('_UE_REG_EMAILCHECKER_DESC','Позволяет во время регистрации проверять является ли адрес эл.почты действительным, проверяя точный формат эл.почты, существующие записи MX DNS, а также то, что соответствующие почтовые серверы принимают входящую по этому адресу почту в протоколе SMTP. Вы также можете проверить не зарегистрирован ли уже этот адрес эл.почты. ПРЕДУПРЕЖДЕНИЕ: эта проверка - "Адрес эл.почты уже зарегистрирован" - может привести к НАРУШЕНИЮ КОНФИДЕНЦИАЛЬНОСТИ Вашим сайтом в Вашей стране, так как при регистрации любой может проверить зарегистрирован ли данный адрес эл.почты! Пожалуйста включайте только после проверок Ваших местных законов, применимых к Вашему сайту. Для проверки SMTP, для большинства адресов эл.почты у Вашего сервера должен быть собственный адрес IP, адрес эл.почты должен быть действительным и этот сервер должен значиться в списке авторизированного поставщика (список SPF). В заключение, Ваш почтовый сервер должен быть способен отправлять запросы DNS и пакеты SMTP (исходящий фильтр firewall должен разрешить это). Вы должны иметь в виду, что хотя эта функция и защищена, при некоторых обстоятельствах она может быть использована во вред. Для больших сайтов - это экспериментальная и еще не оптимизированная функция - сначала тестируйте!');
DEFINE('_UE_REG_EMAILCHECKER_VALID_EMAIL_ONLY','Да, проверять только для почтовых серверов, принимающих почту');
DEFINE('_UE_REG_EMAILCHECKER_NOT_REGISTERED_AND_VALID_EMAIL', "Да, проверять для незарегистрированных адресов\r\n\r\nэл.почты и для серверов (смотрите ПРЕДУПРЕЖДЕНИЕ!)");
DEFINE('_UE_REG_UNIQUEEMAIL','Требовать уникальный адрес эл.почты');
DEFINE('_UE_REG_UNIQUEEMAIL_DESC','Если "Да", то разные пользователи не смогут использовать один и тот же адрес эл.почты. Это общая настройка системы CMS для сайта или характеристика CMS. CB принимает эту настройку автоматически.');

// 1.2 FIREBOARD support - these strings are actually used in a CB tab and fields that are added by FB backend
DEFINE('_UE_FB_TABTITLE', 'Настройки форума' );
DEFINE('_UE_FB_ORDERING_OLDEST', 'Сначала старые сообщения' );
DEFINE('_UE_FB_ORDERING_LATEST', 'Сначала новые сообщения' );
DEFINE('_UE_FB_ORDERING_TITLE', 'Порядок сообщений' );
DEFINE('_UE_FB_SIGNATURE', 'Ваша подпись' );
DEFINE('_UE_FB_VIEWTYPE_FLAT', 'Обычный' );
DEFINE('_UE_FB_VIEWTYPE_THREADED', 'Деревом' );
DEFINE('_UE_FB_VIEWTYPE_TITLE', 'Тип просмотра' );
DEFINE('_UE_FB_TABDESC', 'Общие опции профиля' );
// 1.2 Extended forum strings for FIREBOARD favorites support in CB plugin (this is why they have _FB_ instead of _FORUM)
DEFINE('_UE_FB_FAVORITES','Ваши излюбленные темы');
DEFINE('_UE_FB_REMOVE_FAVORITE_THREAD',':: Удалить избранные темы ::');
DEFINE('_UE_FB_NO_FAVORITES_FOUND','Ваших избранных тем не найдено');
DEFINE('_UE_FB_REMOVE_FAVORITES_ALL','Удалить все Ваши избранные темы');
DEFINE('_UE_FB_CONFIRMUNFAVORITEALL','Вы действительно хотите удалить Ваши избранные темы?');

// 1.2 CB Team extensions
DEFINE('_UE_PROFILE_GALLERY','Галерея профиля');
DEFINE('_UE_PROFILE_GALLERY_DESC','Эта вкладка содержит галерею картинок для профилей');
DEFINE('_UE_PROFILE_GALLERY_MODERATION','Галерея модератора');
DEFINE('_UE_PROFILE_GALLERY_MODERATION_DESC','Эта вкладка содержит все картинки галереи, ожидающие одобрения');
DEFINE('_UE_PROFILE_BOOK','Книга профиля');
DEFINE('_UE_PROFILE_BOOK_DESC','Описание книги профиля');

// 1.2 CB beta 8+9+10:
DEFINE('_UE_AVATAR_DISCLAIMER','Щелкая "%s", Вы подтверждаете что у Вас есть право использовать этот аватар.');
DEFINE('_UE_AVATAR_DISCLAIMER_TERMS','Щелкая "%s", Вы подтверждаете что у Вас есть право использовать этот аватар и что это не нарушает %s.');
DEFINE('_UE_AGE','Возраст');
DEFINE('_UE_CLOAKED','Этот адрес эл.почты защищен от спам-роботов. Вы должны разрешить JavaScript в Вашем браузере чтобы увидеть его.');
DEFINE ('_UE_YEAR','год');
DEFINE ('_UE_MONTHS','месяц (а/ев)');
DEFINE ('_UE_MONTH','месяц');
DEFINE ('_UE_DAYS','дня (ень/ей)');
DEFINE ('_UE_DAY','день');
DEFINE ('_UE_HOURS','час(а/ов)');
DEFINE ('_UE_HOUR','час');
DEFINE ('_UE_MINUTES','минут(у/ы)');
DEFINE ('_UE_MINUTE','минута');
DEFINE ('_UE_SECONDS','секунд(ы/у)');
DEFINE ('_UE_SECOND','секунда');
DEFINE ('_UE_ANYTHING_AGO','%s назад');
DEFINE ('_UE_NOW','Сейчас');
DEFINE ('_UE_YEAR_NOT_IN_RANGE','Год %s не входит между %s и %s');
DEFINE ('_UE_ADD_IMAGE','Добавить картинку');
DEFINE ('_UE_LINE','Линия');
DEFINE ('_UE_COLUMN','Колонка');
DEFINE ('_UE_MONTHS_1','Январь');
DEFINE ('_UE_MONTHS_2','Февраль');
DEFINE ('_UE_MONTHS_3','Март');
DEFINE ('_UE_MONTHS_4','Апрель');
DEFINE ('_UE_MONTHS_5','Май');
DEFINE ('_UE_MONTHS_6','Июнь');
DEFINE ('_UE_MONTHS_7','Июль');
DEFINE ('_UE_MONTHS_8','Август');
DEFINE ('_UE_MONTHS_9','Сентябрь');
DEFINE ('_UE_MONTHS_10','Октябрь');
DEFINE ('_UE_MONTHS_11','Ноябрь');
DEFINE ('_UE_MONTHS_12','Декабрь');
DEFINE ('_UE_NO_ANSWER','Ответа нет');
DEFINE ('_UE_ANY','Любое');
DEFINE ('_UE_TODAY','сегодня');
// 1.2 CB beta 8+9+10 backend:
DEFINE ('_UE_SHOWEMPTYTABS','Показывать пустые вкладки');
DEFINE ('_UE_SHOWEMPTYTABS_DESC','Показывать все вкладки, даже если вкладка не имеет содержания, или только показывать вкладки с содержимым.');
DEFINE ('_UE_SHOWEMPTYFIELDS','Показывать пустые поля');
DEFINE ('_UE_SHOWEMPTYFIELDS_DESC','Показывать все поля, также, если в поле отсутствует содержание, или только показывать поля с содержимым.');
DEFINE ('_UE_EMPTYFIELDSTEXT','Текст показываемый для пустых полей');
DEFINE ('_UE_EMPTYFIELDSTEXT_DESC','Текст, который показывается для пустых полей. Языковые строчки и замены полей тоже срабатывают. Например, языковая строчка _UE_NO_ANSWER показывает "Нет ответа".');
// 1.2 CB RC 2 beta 2:
DEFINE('_UE_USERNAME_OR_EMAIL','Логин или email');
// 1.2 CB RC 2 beta 2 backend:
DEFINE('_UE_SAVE','Сохранить');
DEFINE('_UE_LOGIN_TYPE','Тип поля входа на сайт');
DEFINE('_UE_LOGIN_TYPE_DESC','Вход возможен по комбинации имя пользователя + пароль, имя пользователя или адрес эл.почты + пароль или адрес эл.почты + пароль. Модуль входа CB также принимает это устроение соответственно.');
DEFINE('_UE_INCORRECT_EMAIL_OR_PASSWORD','Неверный адрес эл.почты или пароль. Пожалуйста попробуйте еще раз.');
// 1.2 CB RC 4 frontend:
DEFINE('_UE_ERROR_IN_QUERY_TURN_SITE_DEBUG_ON_TO_VIEW','Ошибка в запросе базы данных. Для того, чтобы видеть эту ошибку и устранить ее, администратор сайта должен включить отладку ошибок.');
// 1.2 CB RC 4 backend:
DEFINE('_UE_USERNAME_OR_AUTH','Имя пользователя, адрес эл.почты или задействуйте плагины авторизации CMS');
// 1.2 Stable: same as RC4
// 1.2.1 Stable:
DEFINE('_UE_MALE','Мужчина');
DEFINE('_UE_FEMALE','Женщина');
// 1.2.2 backend:
DEFINE('_UE_DISPLAY_ROUNDED_DIV','Округленные div с заголовком');
DEFINE('_UE_WRONG_CONFIRMATION_CODE','Неверный код подтверждения. Пожалуйста проверьте Вашу эл.почту и папку для спама.');
// 1.2.3:
DEFINE('_UE_LOST_YOUR_PASSWORD','Потерян пароль?');
DEFINE('_UE_LOST_PASSWORD_EMAIL_ONLY_DESC','Если Вы <strong>потеряли Ваш пароль</strong>, пожалуйста введите адрес Вашей эл.почты, затем щелкните на кнопку "Отправить пароль" и вскоре Вы получите новый пароль. Для входа на сайт используйте этот новый пароль.');
// 1.4 Stable:
DEFINE('_UE_ENABLESPOOFCHECK','Включить проверки противо-спуфинговой защиты сессий');
DEFINE('_UE_ENABLESPOOFCHECK_DESC','Выбирайте эту настройку если Вы желаете включить проверку спуфинга сессий (настоятельно рекомендуется, за исключением случаев, когда Вы испытываете трудности с закрытием сессий и ошибки куки, если они включены). По умолчанию этот параметр отключен ради большей стабильности и простоты использования интерфейса пользователя.');


// IMPORTANT WARNING: The closing tag, "?" and ">" has been intentionally omitted - CB works fine without it.
// This was done to avoid errors caused by custom strings being added after the closing tag. ]
// With such tags, always watchout to NOT add any line or space or anything after the "?" and the ">".
