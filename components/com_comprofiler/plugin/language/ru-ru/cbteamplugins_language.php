<?php
// WARNING: No blank line or spaces before the "< ? p h p" above this.

// IMPORTANT: This file should be made in UTF-8 (without BOM) only.
// CB will automatically convert to site's local character set.

/**
* Joomla/Mambo Community Builder
* @version $Id: cbteamplugins_language.php 1397 2011-01-31 15:39:57Z beat $
* @package Community Builder
* @subpackage CB-Team Plugins Language file (Russian)
* @author Beat, Nant and JoomlaJoe
* @copyright (C) www.joomlapolis.com
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
* Translated by Alexander (Alex) Smirnov aka alexsmirnov at joomlapolis.com or www.twitter.com/joomladka
*/

// ensure this file is being included by a parent file:
if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

// 1.2 Stable:
// ProfileBook plugin: (new method: UTF8 encoding here):
CBTxt::addStrings( array(
'Profile Book' => 'Профильная книжка',
'Name' => 'Имя',
'Entry' => 'Ввод',
'Profile Book Description' => 'Описание Профильной книжки',
'Created On: %s' => 'Создано: %s',
'Edited By %s On: %s' => 'Отредактировано пользователем %s от %s',
'<br /><strong>[Notice: </strong><em>Last Edit by Site Moderator</em><strong>]</strong>' => '<br /><strong>[Пояснение: </strong><em>Последнее редактирование модератором сайта</em><strong>]</strong>',
'Users Feedback:' => 'Отзыв пользователей:',
'Edited by Site Moderator' => 'Редактировано модератором сайта',
'Comments' => 'Комментарии',
'Name' => 'Имя',
'Email' => 'Адрес эл.почты',
'Location' => 'Поместность',
'This user currently doesn\'t have any posts.' => 'У этого пользователя в настоящее время нет сообщений.',
'User Rating' => 'Ранг пользователя',
'Web Address' => 'Веб адрес',
'Submit Entry' => 'Отправить введенные данные',
'Update Entry' => 'Обновить данные',
'Enable Profile Entries' => 'Включить ввод профильных данных',
'Auto Publish' => 'Автоматическая публикация',
'Notify Me' => 'Известить меня',
'Enable visitors to your profile to make comments about you and your profile.' => 'Дать возможность посетителям Вашего профиля оставлять комментарии о Вас и Вашем профиле.',
'Enable Auto Publish if you want entries submitted to be automatically approved and displayed on your profile.' => 'Включите "Автоматическая публикация" если Вы хотите, чтобы отправленные записи одобрялись и публиковались автоматически в вашем профиле.',
'Enable Notify Me if you would like to receive an email notification each time someone submits an entry.  This is recommended if you are not using the Auto Publish feature.' => 'Включите "Известить меня" если Вы хотите получать оповещение по эл.почте всякий раз, когда кто-либо отправляет запись. Это рекомендуется если у Вас не включена "Автоматическая публикация".',
'Enable Profile Blog' => 'Включить блог профиля',
'Enable Profile Wall' => 'Включить стенку профиля',
'Enable your blog on your profile.' => 'Включить Ваш блог в Вашем профиле.',
'Enable the wall on your profile so yourself and visitors can write on it.' => 'Включить стенку в Вашем профиле для того, чтобы Вы сами и Ваши посетители могли писать на ней.',
'Enable Notify Me if you\'d like to receive an email notification each time someone submits an entry. This is recommended if you are not using the Auto Publish feature.' => 'Включить "Известить меня" если Вы хотите получать оповещения по эл.почте всякий раз, когда кто-либо отправляет запись. Это рекомендуется если у Вас не включена"Автоматическая публикация".',
'Bold' => 'Жирный',
'Italic' => 'Италический',
'Underline' => 'Подчеркнутый',
'Quote' => 'Цитата',
'Code' => 'Код',
'List' => 'Список',
'List' => 'Список',
'Image' => 'Картинка',
'Link' => 'Ссылка',
'Close' => 'Закрыть',
'Color' => 'Цвет',
'Size' => 'Размер',
'Item' => 'Предмет',
'Bold text: [b]text[/b]' => 'Жирный текст: [b]текст[/b]',
'Italic text: [i]text[/i]' => 'Италический текст: [i]текст[/i]',
'Underline text: [u]text[/u]' => 'Подчеркнутый текст: [u]текст[/u]',
'Quoted text: [quote]text[/quote]' => 'Цитируемый текст: [quote]текст[/quote]',
'Code display: [code]code[/code]' => 'Отобразить код: [code]код[/code]',
'Unordered List: [ul] [li]text[/li] [/ul] - Hint: a list must contain List Items' => 'Неупорядочный список: [ul] [li]текст[/li] [/ul] - Подсказка: список должен содержать его строки',
'Ordered List: [ol] [li]text[/li] [/ol] - Hint: a list must contain List Items' => 'Упорядочный список: [ol] [li]список[/li] [/ol] - Подсказка: список должен содержать его строки',
'Image: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]' => 'Картинка: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]',
'Link: [url=http://www.zzz.com/]This is a link[/url]' => 'Ссылка: [url=http://www.zzz.com/]Это есть ссылка[/url]',
'Close all open bbCode tags' => 'Закрыть все открытые теги bbCode',
'Color: [color=#FF6600]text[/color]' => 'Цвет: [color=#FF6600]текст[/color]',
'Size: [size=1]text size[/size] - Hint: sizes range from 1 to 5' => 'Размер: [size=1]text size[/size] - Подсказка: размеры градируются от 1 до 5',
'List Item: [li] list item [/li] - Hint: a list item must be within a [ol] or [ul] List' => 'Строка списка: [li] строка списка [/li] - Подсказка: строка списка должна находиться внутри списков [ol] или [ul]',
'Dimensions' => 'Размеры',
'File Types' => 'Типы файлов',
'Submit' => 'Отправить',
'Preview' => 'Предварительный просмотр',
'Cancel' => 'Отменить',
'User Comments' => 'Комментарии пользователя',
'Your Feedback' => 'Ваш отзыв',
'Edit' => 'Редактировать',
'Update' => 'Обновить',
'Delete' => 'Удалить',
'Publish' => 'Публиковать',
'Sign Profile Book' => 'Подписать книгу профиля',
'Give Feedback' => 'Оставить отзыв',
'Edit Feedback' => 'Редактировать отзыв',
'Un-Publish' => 'Отключить публикацию',
'Not Published' => 'Не опубликовано',
'Color' => 'Цвет',
'Size' => 'Размер',
'Very Small' => 'Очень мелкий',
'Small' => 'Мелкий',
'Normal' => 'Обычный',
'Big' => 'Крупный',
'Very Big' => 'Очень крупный',
'Close All Tags' => 'Закрыть все теги',
'Standard' => 'Стандартно',
'Red' => 'Красный',
'Purple' => 'Пурпурный',
'Blue' => 'Голубой',
'Green' => 'Зеленый',
'Yellow' => 'Желтый',
'Orange' => 'Оранжевый',
'Darkblue' => 'Темно-голубой',
'Gold' => 'Золотистый',
'Brown' => 'Коричневый',
'Silver' => 'Серебристый',
'You have received a new entry in your %s' => 'Вы получили новую запись в Вашем %s',
'%s has just submitted a new entry in your %s.' => '%s отправил новую запись в Вашем %s.',
'An entry in your %s has just been updated' => 'Запись в Вашем %s только что была обновлена',
'%s has just submitted an edited entry for %s in your %s.' => '%s только что отправил отредактированную запись для %s в Вашем %s.',
"\n\nYour current setting is that you need to review entries in your %1\$s. Please login, review the new entry and publish if you agree. Direct access to your %1\$s:\n%2\$s\n" => "\n\nСогласно нынешних настроек, Вым необходимо просмотреть записи в Вашем %1\$s. Пожалуйста войдите на сайт, просмотрите новую запись и, если согласны, опубликуйте ее. Прямой доступ к Вашей %1\$s:\n%2\$s\n",
"\n\nYour current setting is that new entries in your %1\$s are automatically publihed. To see the new entry, please login. You can then see the new entry and take appropriate action if needed. Direct access to your %1\$s:\n%2\$s\n" => "\n\nСогласно Ваших настоящих настроек, новые записи в Вашем %1\$s публикуются автоматически. Чтобы просмотреть новую запись, пожалуйста войдите на сайт. Вы сможете увидеть новую запись и, при необходимости, принять соответствующие меры. Прямой доступ к Вашей %1\$s:\n%2\$s\n",
'Name is Required!' => 'Требуется имя!',
'Email Address is Required!' => 'Требуется адрес эл.почты!',
'Comment is Required!' => 'Требуется комментарий!',
'User Rating is Required!' => 'Требуется рэйтинг пользователя!',
'You have not selected a User Rating. Do you really want to provide an Entry without User Rating ?' => 'Вы не выбрали рэйтинг пользователя. Вы действительно желаете предоставить запись без рэйтинга пользователя?',
'Return Gesture' => 'Ответный жест',
'Profile Rating' => 'Рэйтинг профиля',
'You have not selected your User Rating.' => 'Вы не выбрали рэйтинг пользователя.',
'Would you like to give a User Rating ?' => 'Вы не хотели бы дать свой рэйтинг пользователю?',
'Do you really want to delete permanently this Comment and associated User Rating ?' => 'Вы действительно желаете удалить навсегда этот комментарий и относящийся к нему рэйтинг пользователя?',
'You are about to edit somebody else\'s text as a site Moderator. This will be clearly noted. Proceed ?' => 'Как модератор сайта вы собираетесь отредактировать чей-то текст. Это будет явно видно. Продолжить?',
'Hidden' => 'Скрытно',
'Feedback from %s: ' => 'Отзыв от %s: ',
'Poor' => 'Слабый',
'Best' => 'Лучший',
// 1.2:
'Vote %s star' => 'Голосовать %s звезда',
'Vote %s stars' => 'Голосовать %s звезд',
'Cancel Rating' => 'Аннулировать Рэйтинг',
'Average Profile Rating by other users' => 'Средний рэйтинг профиля другими пользователями',
// 1.2.1:
'Title' => 'Заголовок',
'Title is Required!' => 'Требуется заголовок!',
'NEW' => 'НОВЫЙ',
'Mark Read' => 'Отметить прочитанной',
'Mark Unread' => 'Отметить непрочитанной',
'You have %s new %s post' => 'У Вас %s новое %s сообщение',
'You have %s new %s posts' => 'У Вас %s новых %s сообщений',
'Add new blog entry' => 'Добавить новую запись блога',
'Wall entry' => 'Запись стенки',
'Write on the wall' => 'Написать на стенке',
'Entry' => 'Запись',
'Blog text' => 'Текст блога',
'Save Blog Entry' => 'Сохранить запись блога',
'Video' => 'Видео',
'Video: [video type=youtube]id[/video] - Hint: id is only the embedding id of the video' => 'Видео: [video type=youtube]id[/video] - Подсказка: id является только идентификатором внедряемого видео',
// module:
'%s added a new guestbook entry to %s' => '%s добавил новую запись гостевой книги к %s',
'%s wrote a new blog "%s"' => '%s написал новый блог "%s"',
'%s wrote a new blog' => '%s написал новый блог',
'%s added a new wall entry to %s' => '%s добавил новую запись на стенку к %s',
'%s added a new wall entry' => '%s добавил новую запись стенки',
'No entries have been made!' => 'Никаких записей сделано не было!',
// 1.2.2:
'Untranslated strings on this page' => 'На этой странице существуют непереведенные строчки',
'Translations on this page' => 'Переводы на этой странице',
'English string' => 'Строчки на английском языке',
'Translated string' => 'Переведенная строчка',


// CB 1.4 Validations:
'No changes.'							=>	'Изменений нет.',
'This field is required.'				=>	'Это обязательное поле.',
'Please fix this field.'				=>	'Пожалуйста проведите отладку этого поля.',
'Please enter a valid email address.'	=>	'Пожалуйста введите действительный адрес эл.почты.',
'Please enter a valid URL.'				=>	'Пожалуйста введите действительный URL.',
'Please enter a valid date.'			=>	'Пожалуйста введите действительную дату.',
'Please enter a valid date (ISO).'		=>	'Пожалуйста введите действительную дату (ISO).',
'Please enter a valid number.'			=>	'Пожалуйста введите действительное число.',
'Please enter only digits.'				=>	'Пожалуйста введите только цифры.',
'Please enter a valid credit card number.'		=>	'Пожалуйста введите действительный номер кредитной карты.',
'Please enter the same value again.'			=>	'Пожалуйста введите еще раз это же значение.',
'Please enter a value with a valid extension.'	=>	'Пожалуйста введите значение с действительным форматом файла.',
'Please enter no more than {0} characters.'		=>	'Пожалуйста введите не более чем {0} знаков.',
'Please enter at least {0} characters.'			=>	'Пожалуйста введите как минимум {0} знаков.',
'Please enter a value between {0} and {1} characters long.'	=>	'Пожалуйста введите значение динной между {0} и {1} знаками.',
'Please enter a value between {0} and {1}.'					=>	'Пожалуйста введите число между {0} и {1}.',
'Please enter a value less than or equal to {0}.'			=>	'Пожалуйста введите число равное или меньшее чем {0}.',
'Please enter a value greater than or equal to {0}.'		=>	'Пожалуйста введите число равное или большее {0}.',
));

// Profile Gallery plugin: (new method: UTF8 encoding here):
CBTxt::addStrings( array(
'CB Profile Gallery' => 'Галерея профиля CB',
'This tab contains a basic no-frills image Gallery for CB profiles' => 'Эта вкладка содержит основную безхитросную галерею картинок для профилей CB',
'Current Items' => 'Текущие составные части',
'Keeps track of number of stored items' => 'Сохраняет след числа сохраненных составных',
'Date of last update to Gallery items in this profile' => 'Дата последнего обновления составных частей галереи этого профиля',
'Last Update' => 'Последнее обновление',
'Enable Gallery' => 'Включить галерею',
'Select Yes or No to turn-on or off the Gallery Tab' => 'Выберите "Да" или "Нет" чтобы включить или выключить вкладку галереи',
'Short Greeting' => 'Короткое приветствие',
'Enter a short greeting for your gallery viewers' => 'Введите короткое приветствие для просматривающих Вашу галерею',
'Item Quota' => 'Квота составляющих',
'The admin may use this to over-ride the default value of allowable items for each profile owner' => 'Администратор может использовать это для перезаписи значения по умолчанию разрешенных составных для каждого владельца профиля',
'No Items published in this profile gallery' => 'В галерее этого профиля опубликованных составных нет',
'Title:' => 'Заголовок:',
'Description:' => 'Описание:',
'Image File:' => 'Файл картинки:',
'Submit New Gallery Entry' => 'Отправить новую запись галереи',
'Submit Gallery Entry' => 'Отправить запись галереи',
'A file must be selected via the Browse button' => 'Необходимо выбрать файл с помощью кнопки Пролистать',
'A gallery item title must be entered' => 'Необходимо ввести заголовок составной части галереи',
'Autopublish items' => 'Опубликовать составные части автоматически',
'Select Yes or No to autopublish or not newly uploaded gallery items' => 'Выберите "Да" или "Нет" для автоматической публикации только что загруженных составных частей галереи',
'Current Storage' => 'Нынешний размер диска',
'This field keeps track of the total size of all uploaded gallery items - like a quota usage field. Value is in bytes.' => 'Это поле следит за полным размером всех загруженных составных частей галереи - как поле использования квоты (значение в bytes).',
'Greetings - connections only viewing enabled' => 'Приветствия - включен просмотр только соединений',
'Sorry - connections only viewing enabled for this gallery that currently has %1$d items in it.' => 'Извините - для этой галереи, которая в настоящее время имеет %1$d составных частей, включен просмотр только соединений.',
'Automatically approve' => 'Одобрять автоматически',
'This value can be set by the admin to over-ride the gallery plugin backend default approval parameter' => 'Это значение может быть включено администратором для перезаписи назначаемого по умолчанию параметра одобрения галереи плагина',
'Storage Quota (KB)' => 'Квота на дисковое простаранство (KB)',
'This value can be set by the admin to over-ride the gallery plugin backend default user quota' => 'Это значение может может быть установлено администратором для перезаписи отведенной пользователю по умолчанию квоты плагина галереи',
'Maximum allowable single upload size exceeded - gallery item rejected' => 'Максимальная квота файла для загрузки превышена - составная часть галереи отвергнута',
'File extension not authorized' => 'Файлы с такими расширениями не допускаются',
/**
 * Parameters available for use in _pg_QuotaMessage language string
 * %1$d ~ Total count of items uploaded
 * %2$d ~ Maximum uploaded items allowed
 * %3$d ~ Total KB of uploaded items
 * %4$d ~ Maximum KB of uploaded items allowed
 * %5$d ~ Consumed storage percentage of uploaded items
 * %6$d ~ Free storage percentage of uploaded items
 * %7$d ~ Maximum single upload size
 */
' [Your current quota marks: %1$d/%2$d items %3$d/%4$d Kbytes (%5$d%% consumed - %6$d%% free)]' => ' [Ваша квота в настоящее время: %1$d/%2$d составные части %3$d/%4$d Kbytes (%5$d%% употреблено - %6$d%% свободно) - размер разовой загрузки %7$d Kbytes]',
'This file would cause you to exceed you quota - gallery item rejected' => 'Этот файл привел бы к превышению отведенной Вам квоты - составная часть галлереи отвергнута',
'Access Mode' => 'Вид доступа',
'Select desirable access mode: Public access, Registered users only, Connected users only, REG-S for Registered-stealth, CON-S for Connections-stealth' => 'Выберите желаемый вид доступа: Все, только Зарегистрированные пользователи, только Подсоединенные пользователи, REG-S для Скрытно-зарегистрированных, CON-S for Скрытно-соединенных',
'Allow Public Access' => 'Разрешить допуск всем',
'Allow Registered Access' => 'Разрешить допуск зарегистрированным',
'Allow Connections Access' => 'Разрешить допуск соединенным',
'Registered Stealth Access' => 'Допуск скрытно-зарегистрированным',
'Connections Stealth Access' => 'Допуск скрытно-соединенным',
'Display Format' => 'Формат отображения',
'Select Display Format to apply for gallery viewing.' => 'Выберите формат отображения чтобы сделать заявку на просмотр галереи.',
'Pictures gallery list format' => 'Формат списка картинок галереи',
'File list format' => 'Формат списка файлов',
'Picture gallery list lightbox format' => 'Формат lightbox списка галереи',
'Gallery repository successfully created!' => 'Хранилище галереи успешно создано!',
'Gallery repository could not be created! Please notify system admin!' => 'Репозитор галереи создать не удалось! Пожалуйста известите системного администратора!',
'Image ToolBox failure! - Please notify system admin - ' => 'Ошибка "Ящика инструментов" картинок! - Пожалуйста известите системного администратора - ',
'The file upload has failed! - Please notify your system admin!' => 'Ошибка загрузки файла! - Пожалуйста известите системного администратора!',
/**
 * Parameters available for use in _pg_FileUploadSucceeded and _pg_FileUploadAndTnSucceeded language strings
 * %1$s ~ Name of uploaded file in user repository
 */
'The file %1$s has been successfully uploaded!' => 'Файл %1$s был успешно загружен!',
'The file %1$s has been successfully uploaded and tn%1$s thumbnail created!' => 'Файл %1$s был успешно загружен и tn%1$s миниатюра создана!',
'Only Registered Members Allowed to view the %1$d items in this Gallery!' => 'Только зарегистрированным членам разрешается просмаривать  %1$d составные части в этой галерее!',
'Delete' => 'Удалить',
'Publish' => 'Публиковать',
'Unpublish' => 'Не публик.',
'Approve' => 'Одобрить',
'Revoke' => 'Отозвать',
'Default setting' => 'Настройка по умолчанию',
'Are you sure you want to delete selected item ? The selected item will be deleted and cannot be undone!' => 'Вы в самом деле хотите удалить выбранное? Выбранное будет удалено без возможности вернуться на шаг назад!',
'Max single upload (KB)' => 'Максимальная разовая загрузка (KB)',
'This value can be set by the admin to over-ride the gallery plugin backend default maximum single upload size' => 'Это значение может быть включено администратором для перезаписи настроенного по умолчанию максимального размера разовой загрузки плагина галереи',
'Updated' => 'Обновлено',
'Title' => 'Заголовок',
'Description' => 'Описание',
'Download' => 'Скачать',
'Actions' => 'Действия',
'Never' => 'Никогда',
'Gallery Moderation' => 'Модерация галереи',
'This tab contains all pending autorization gallery items' => 'Эта вкладка содержит все ожидающие одобрения составные части галереи',
'New Gallery Item just uploaded' => 'Новая составная часть галереи загружена',
/**
 * Parameters available for use in _pg_MSGBODY_NEW language string
 * %1\$s ~ item type
 * %2\$s ~ item title
 * %3\$s ~ item description
 * %4\$s ~ username
 * %5\$s ~ profile link
 */
"A new Gallery item has just been uploaded and may require approval.\n"
."This email contains the item details\n\n"
."Gallery Item Type - %1\$s\n"
."Gallery Item Title - %2\$s\n"
."Gallery Item Description - %3\$s\n\n"
."Username - %4\$s\n"
."Profile Link - %5\$s \n\n\n"
."Please do not respond to this message as it is automatically generated and is for information purposes only\n"
=>
"Новая составная часть галереи только что была загружена и может потребовать одобрения.\n"
."Это эл.письмо содержит подробности составной части\n\n"
."Тип составной части галереи - %1\$s\n"
."Заголовок составной части галереи - %2\$s\n"
."Описание составной части галереи - %3\$s\n\n"
."Имя пользователя - %4\$s\n"
."Ссылка профиля - %5\$s \n\n\n"
."Пожалуйста не отвечайте на это сообщение поскольку оно создано автоматически в чисто информационных целях\n",

'Your Gallery Item has been approved!' => 'Ваша составная часть гелереи была одобрена!',

"A Gallery item in your Gallery Tab has just been approved by a moderator.\n\n\n"
."Please do not respond to this message as it is automatically generated and is for information purposes only\n"
=>
"Составная часть галереи во вкладке Вашей галереи была только что одобрена модератором.\n\n\n"
."Пожалуйста не отвечайте на это сообщение поскольку оно создано автоматически в чисто информационных целях\n",

'Your Gallery Item has been revoked!' => 'Составная часть Вашей галереи была отозвана!',

"A Gallery item in your Gallery Tab has just been revoked by a moderator.\n\n\n"
."If you feel that this action is unjustified please contact one of our moderators.\n"
."Please do not respond to this message as it is automatically generated and is for information purposes only\n"
=>
"Составная часть галереи в Вашей вкладке галереи была только что отозвана модератором.\n\n\n"
."Если Вы чувствуете что эти действия являются неоправданными, пожалуйста свяжитесь с одним из наших модераторов.\n"
."Пожалуйста не отвечайте на это сообщение поскольку оно создано автоматически в чисто информационных целях\n",

'Your Gallery Item has been deleted!' => 'Составная часть Вашей галереи была удалена!',

"A Gallery item in your Gallery Tab has just been deleted by a moderator.\n\n\n"
."If you feel that this action is unjustified please contact one of our moderators.\n"
."Please do not respond to this message as it is automatically generated and is for information purposes only\n"
=>
"Составная часть галереи в Вашей вкладке галереи была только что удалена модератором.\n\n\n"
."Если Вы чувствуете что эти действия являются неоправданными, пожалуйста свяжитесь с одним из наших модераторов.\n"
."Пожалуйста не отвечайте на это сообщение поскольку оно создано автоматически в чисто информационных целях\n",

'Your Gallery item is pending approval by a site moderator.' => 'Ваша составная часть галереи ожидает одобрения модератором сайта.',
'Your Gallery item quota has been reached. You must delete an item in order to upload a new one or you may contact the admin to increase your quota.' => 'Вы достигли квоты, отведенной Вашим составным частям галереи. Вам нужно удалить одну из составных частей галереи прежде чем загружать новую или связаться с администратором с просьбой увеличить квоту.',
'Failed to be add index.html to the plugin gallery - please contact administrator!' => 'Ошибка при добавлении index.html к плагину галереи - пожалуйста свяжитесь с администратором!',
'No item uploaded!' => 'Ничего не загружено!',
/**
 * Parameters available for use in _pgModeratorViewMessage
 * %1$d ~ Total count of items uploaded
 * %2$d ~ Maximum uploaded items allowed
 * %3$d ~ Total KB of uploaded items
 * %4$d ~ Maximum KB of uploaded items allowed
 * %5$s ~ access mode setting
 * %6$s ~ display format setting
 * %7$s ~ single upload size
 */
'<font color="red">Moderator data:<br />'
.'Items - %1$d<br />'
.'Item Quota - %2$d<br />'
.'Storage - %3$d<br />'
.'Storage Quota - %4$d<br />'
.'Access Mode - %5$s<br />'
.'Display Mode - %6$s<br /></font>'
=>
'<font color="red">Информация модератора:<br />'
.'Составных частей - %1$d<br />'
.'Квота составных честей - %2$d<br />'
.'Дисковое пространство - %3$d<br />'
.'Квота дискового пространства - %4$d<br />'
.'Вид доступа - %5$s<br />'
.'Вид отображения в браузере - %6$s<br />'
.'Размер еденичной загрузки - %7$s<br /></font>',

'Image ' => 'Картинка ',
' of ' => ' из ',
'Image {x} of {y}' => 'Картинка {x} из {y}',



/**
 * Following section defines language strings used in CB Gallery Module
 */
'No Viewable Items' => 'Составные части, которые нельзя увидеть',
'No items rendered' => 'Отображенных составных частей нет',

'Edit Gallery Item' => 'Редактировать составную часть галереи',
'Edit' => 'Изменить',
'Update' => 'Обновить',

'Bad File - Item rejected' => 'Файл с ошибкой - составная часть отвергнута',
'Not logged on' => 'Не зашел на сайт',
'No connected items' => 'Составные части соединения отсутствуют'
) );

// Privacy plugin: (new method: UTF8 encoding here):
CBTxt::addStrings( array(
'Visible on profile'					=>	'Видимый на профиле',
'Only to logged-in users'				=>	'Только вошедшим на сайт пользователям',
'Only for direct connections'			=>	'Только для прямых соединений',
'Only for %s'							=>	'Только для %s',
'Also for connections\' connections'	=>	'Также для соединений принадлежащим соединениям',
'Invisible on profile'					=>	'Невидимый на профиле',
'Access only to logged-in users. Please login.'						=>	'Доступ только для вошедших на сайт пользователей. Пожалуйста войдите.',
'Access only to logged-in users. Please login or %s.'				=>	'Доступ только для вошедших на сайт пользователей. Пожалуйста войдите или %s.',
'register'															=>	'зарегистрируйтесь',
'Access only with login'											=>	'Доступ только со входом на сайт',
'Access only to directly connected users'							=>	'Доступ только для пользователей, соединенных напрямую',
'Access only to directly connected users and friends of friends'	=>	'Доступ только для напрямую соединенных пользователей и друзей своих друзей',
));

// Activity plugin: (new method: UTF8 encoding here):
CBTxt::addStrings( array(
'%s joined, welcome !'					=>	'%s присоединился, добро пожаловать!',
'%s updated his profile'				=>	'%s обновил свой профиль',
'%s updated their profile'				=>	'%s обновили свои профили',

'%s and %s'								=>	'%s и %s',
'%s, %s and %s'							=>	'%s, %s и %s'	,
'%s, %s, %s and %s more'				=>	'%s, %s, %s и %s к этому',

'%s and %s are now connected'			=>	'%s и %s теперь соединены',
'%s is now connected to %s'				=>	'%s сейчас соединен с %s',
'%s are now connected to %s'			=>	'%s сейчас соединены с %s',

'%s added a new picture'				=>	'%s добавил новую картинку',
'%s added new pictures'					=>	'%s добавил новую картинки',
'%s added %s new pictures'				=>	'%s добавил %s новых картинок',
'%s commented to %s\'s %s'				=>	'%s отправил комментарий на %s -ую %s',
'%s rated %s\'s %s'						=>	'%s создал рэйтинг %s -ой %s',
'picture'								=>	'картинки',
'pictures'								=>	'картинок',
'profile'								=>	'профиля',

'%s added a new gallery'				=>	'%s добавил новую галерею',

'%s signed the guestbook of %s'			=>	'%s подписал гостевую книгу пользователя %s',
'%s wrote on the wall of %s'			=>	'%s написал на стене пользователя %s',
'%s posted a new note to %s'			=>	'%s отправил новую записку пользователю %s',
'%s updated a %s in %s'					=>	'%s обновил %s в %s',
'%s updated a %s in %s\'s %s'			=>	'%s обновил %s в %s -ой %s',
'%s updated a %s in the %s'				=>	'%s обновил %s в %s',

'%s wrote a new %s'						=>	'%s написал новую %s',
'%s wrote a new %s "%s"'				=>	'%s написал новую %s "%s"',
'%s replied to %s'						=>	'%s ответил %s',
'%s replied to %s "%s"'					=>	'%s ответил %s "%s"',
'%s edited his %s'						=>	'%s отредактировал его %s',
'forum post'							=>	'сообщение форума',
'comment'								=>	'комментарий',
'note'									=>	'записку',
'tag'									=>	'тегу',
'rating'								=>	'рэйтинг',

'%s created the group "%s"'				=>	'%s создал группу "%s"',
'%s joined the group "%s"'				=>	'%s присоединился к группе "%s"',

'%s subscribed to %s'					=>	'%s подписался на %s',
'%s upgraded to %s'						=>	'%s обновился на %s',
'%s donated %s'							=>	'%s подарил %s',
'%s donated %s, thank you very much'	=>	'%s подарено %s, большое спасибо',
'%s donated'							=>	'%s подарено',
'%s donated, thank you very much'		=>	'%s подарено, большое спасибо',
'%s purchased something'				=>	'%s купил нечто',
'%s purchased something, thank you'		=>	'%s купил нечто, большое спасибо',
'%s purchased a %s'						=>	'%s купил a %s',
'%s purchased a %s, thank you'			=>	'%s купил %s, спасибо',

));

// Ratings fields plugin: (new method: UTF8 encoding here):
CBTxt::addStrings( array(
'Thank you for rating!'					=>	'Благодарим за рэйтинг!',
'Click on a star to rate!'				=>	'Щелкните по звездочке чтобы оставить рэйтинг!',
// Rate 1 Star:
'Rate %s %s'							=>	'Оставить рэйтинг %s %s',
'Cancel Rating'							=>	'Отменить рэйтинг',
// following rating strings can be used/changed in field's param
'Self'									=>	'На себя',
'Visitor'								=>	'Посетитель',
'Rating'								=>	'Рэйтинг',
'Star'									=>	'Звездочка',
'Stars'									=>	'Звездочки',
'Poorest'								=>	'Самый слабый',
'Poor'									=>	'Слабый',
'Average'								=>	'Средний',
'Good'									=>	'Хороший',
'Better'								=>	'Лучший',
'Best'									=>	'Самый лучший'
));

// Forum integration plugin:
CBTxt::addStrings( array(
'Found %s Forum Posts'					=>	'Найдено %s сообщений форума',
'Forum Posts'							=>	'Сообщений форума',
'Last %s Forum Posts'					=>	'Последние %s сообщений форума',
'Moderator'								=>	'Модератор',
'Administrator'							=>	'Администратор',
'ONLINE'								=>	'НА САЙТЕ',
'OFFLINE'								=>	'НЕ НА САЙТЕ',
'Online Status: '						=>	'Статус нахождения на сайте: ',
'View Profile: '						=>	'Смотреть профиль: ',
'Send Private Message: '				=>	'Отправить личное сообщение: ',
'Date'									=>	'Дата',
'Subject'								=>	'Тема',
'Category'								=>	'Категория',
'Hits'									=>	'Просмотры',
'Karma: '								=>	'Карма: ',
'Posts: '								=>	'Сообщения: ',
'Forum Statistics'						=>	'Статистика форума',
'Forum Ranking'							=>	'Ранг форума',
'Total Posts'							=>	'Всего сообщений',
'Karma'									=>	'Карма',
'No matching forum posts found.'		=>	'Соответствующих сообщений форума не найдено.',
'This user has no forum posts.'			=>	'У этого пользователя нет сообщений форума.',
'Your Subscriptions'					=>	'Ваши подписки',
'Action'								=>	'Действия',
'No subscriptions found for you.'		=>	'Подписок для Вас не найдено.',
'Your Favorites'						=>	'Ваши избранные темы',
'No favorites found for you.'			=>	'Ваших избранных не найдено.',
'Remove'								=>	'Удалить',
'Remove All'							=>	'Удалить все',
'Unsubscribe'							=>	'Аннулировать подписку',
'Unsubscribe All'						=>	'Аннулировать все подписки',
'Are you sure you want to unsubscribe from this forum subscription?'				=>	'Вы действительно хотите аннулировать Вашу подписку на этом форум?',
'Are you sure you want to unsubscribe from all your forum subscriptions?'			=>	'Вы действительно хотите аннулировать все Ваши подписки на этом форум?',
'Are you sure you want to remove this favorite thread?'								=>	'Вы действительно хотите удалить эту Вашу избранную тему?',
'Are you sure you want to remove all your favorite threads?'						=>	'Вы действительно хотите удалить все Ваши избранные темы?',
'The forum component is not installed.  Please contact your site administrator.'	=>	'Компонент форума не установлен. Пожалуйста свяжитесь с администратором Вашего сайта.',
'Male'									=>	'Мужчина',
'Female'								=>	'Женщина'
));

// Facebook integration plugin: (updated for version 1.2 of Facebook plugin)
CBTxt::addStrings( array(
// 8 language strings from file plug_cbfacebookconnect/cb.facebookconnect.php
'View Facebook Profile'	=>	'Просмотреть профиль на Facebook',
'Logout of your Facebook account.'	=>	'Выйти из своего аккаунта на Facebook.',
'Sign out'	=>	'Выйти',
'Login with your Facebook account.'	=>	'Зайти с данными своего аккаунта на Facebook.',
'Sign in'	=>	'Войти',
'Unjoin this site'	=>	'Аннулировать свое членство на этом сайте',
'Unauthorize this site from your Facebook account.'	=>	'Запретить этом сайт от доступа к Вашему аккаунту на Facebook.',
'Are you sure you want to unjoin %s?'	=>	'Вы действительно хотите аннулировать свое членство на сайте %s?'
));

// Twitter integration plugin: (updated for version 1.1 of Twitter plugin)
CBTxt::addStrings( array(
// 3 language strings from file plug_cbtwitter/cb.twitter.php
'View Twitter Profile'	=>	'Просмотреть свой профиль на Twitter',
'Logout of your Twitter account.'	=>	'Выйти из своего аккаунта на Twitter.',
'Login with your Twitter account.'	=>	'Войти на сайт со данными своего аккаунта на Twitter.'
));

// imagetoolbox messages needed for CB Team plugins
CBTxt::addStrings( array(
// 1 language string from imagetoolbox
'The file exceeds the maximum size of %s kilobytes'	=>	'Файл превышает максимально допустимый размер %s kb'
));

// imagetoolbox messages needed for CB Team plugins
CBTxt::addStrings( array(
// 1 language string from imagetoolbox
'The file exceeds the maximum size of %s kilobytes'	=>	'Этот файл превосходит максимальный размер в %s kb.'
));

// IMPORTANT WARNING: The closing tag, "?" and ">" has been intentionally omitted - CB works fine without it.
// This was done to avoid errors caused by custom strings being added after the closing tag. ]
// With such tags, always watchout to NOT add any line or space or anything after the "?" and the ">".