<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Панель установки',
	'SELECT_LANG'	=> 'Выбор языка',

	'STAGE_INSTALL'	=> 'Установка phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Вступление',
	'INTRODUCTION_BODY'		=> 'Добро пожаловать в phpBB3!<br /><br />phpBB® является наиболее распространённым решением с открытым кодом для организации конференций в интернете. phpBB3 является новейшим продуктом в линейке начиная с 2000 года. Как и его предшественники, phpBB3® является функциональным, имеет дружественный интерфейс и полностью поддерживается phpBB Team. В phpBB3 существенно улучшены качества, сделавшие популярным phpBB2, добавлены наиболее необходимые функции, которые отсутствовали в предыдущих версиях. Надеемся, что это превзойдёт ваши ожидания.<br /><br />Эта система проведёт вас через процессы установки phpBB3, обновления предыдущих релизов до последней версии phpBB3, а также конвертирования в phpBB3 другого программного обеспечения для конференций (включая phpBB2). Для получения дополнительной информации мы предлагаем вам ознакомиться с <a href="../docs/INSTALL.html">руководством по установке</a>.<br /><br />Чтобы ознакомиться с лицензионными условиями phpBB3 или узнать о поддержке, выберите соответствующий пункт в боковом меню. Для продолжения выберите нужную закладку выше.',

	// Support page
	'SUPPORT_TITLE'		=> 'Поддержка',
	'SUPPORT_BODY'		=> 'Полная поддержка предоставляется для последнего стабильного релиза phpBB3 бесплатно. Она включает:</p><ul><li>установку</li><li>конфигурацию</li><li>технические вопросы</li><li>проблемы, связанные с потенциальными ошибками программного обеспечения</li><li>обновление версий — кандидатов на релиз (RC) до последней стабильной версии</li><li>конвертирование phpBB 2.0.x в phpBB3</li><li>конвертирование в phpBB3 другого программного обеспечения для конференций (смотрите <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Мы предлагаем пользователям, до сих пор использующим бета-версии phpBB3, заново установить последнюю версию. </p><h2>Расширения/Стили</h2><p>Вопросы, связанные с расширениями, обсуждаются в соответствующем форуме <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Вопросы, связанные со стилями, обсуждаются в соответствующем форуме <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Если ваш вопрос связан с конкретным продуктом, задавайте его в теме, посвящённой этому продукту.</p><h2>Получение поддержки</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">С чего начать</a><br /><a href="https://www.phpbb.com/support/">Поддержка</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Краткое руководство</a><br /><br />Чтобы быть в курсе последних новостей и релизов, вы можете подписаться на <a href="https://www.phpbb.com/support/">нашу рассылку</a>.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Вас приветствует программа установки phpBB',
	'INSTALL_INTRO_BODY'	=> 'С помощью этой программы установки вы сможете установить phpBB3 на сервер.</p><p>Для этого вам необходимо знать реквизиты доступа к базе данных. Если вы не знаете их, то свяжитесь с компанией, предоставляющей вам услуги хостинга, и узнайте их у неё. Вы не сможете продолжить установку без этих данных. Также вам нужно знать следующее:</p>

	<ul>
		<li>Тип базы данных (БД) — той, которую вы будете использовать.</li>
		<li>Имя сервера БД или DSN — адрес сервера базы данных.</li>
		<li>Порт сервера БД — порт сервера базы данных (не нужно указывать в большинстве случаев).</li>
		<li>Название базы данных — имя базы данных на сервере.</li>
		<li>Имя пользователя БД и Пароль к БД — данные для доступа к базе данных.</li>
	</ul>

	<p><strong>Примечание:</strong> если вы выполняете установку с использованием SQLite, то вам необходимо ввести полный путь к файлу базы данных в поле «Имя сервера базы данных или DSN» и оставить пустыми поля имени пользователя и пароля. По соображениям безопасности, вам необходимо удостовериться в том, что этот файл недоступен через интернет.</p>

	<p>phpBB3 поддерживает следующие базы данных:</p>
	<ul>
		<li>MySQL 3.23 и выше (поддерживается MySQLi)</li>
		<li>PostgreSQL 8.3 и выше</li>
		<li>SQLite 2.8.2 и выше</li>
		<li>SQLite 3.6.15 и выше</li>
		<li>MS SQL Server 2000 и выше (напрямую или через ODBC)</li>
		<li>MS SQL Server 2005 и выше (native)</li>
		<li>Oracle</li>
	</ul>

	<p>В списке выбора типа базы данных будут отображаться лишь те, которые поддерживает ваш сервер.',

	'ACP_LINK'	=> 'Перейти в <a href="%1$s">Администраторский раздел</a>',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'Файл не существует',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Для установки phpBB требуется файл %1$s.',
	'FILE_NOT_WRITABLE'			=> 'Файл недоступен для записи',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Для установки phpBB нужно разрешить запись в файл %1$s.',

	'DIRECTORY_NOT_EXISTS'				=> 'Директория не существует',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Для установки phpBB требуется директория %1$s.',
	'DIRECTORY_NOT_WRITABLE'			=> 'Директория недоступна для записи',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Для установки phpBB нужно разрешить запись в директорию %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Версия PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'Для установки и работы phpBB требуется версия PHP 5.4 или выше.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Требуется функция PHP getimagesize()',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Для правильной работы phpBB, должна быть доступна функция getimagesize.',
	'PCRE_UTF_SUPPORT'					=> 'Поддержка PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB не будет работать, если PHP собран без поддержки UTF-8 для расширения PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Поддержка PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Для правильной работы phpBB необходимо наличие расширения PHP JSON.',
	'PHP_SUPPORTED_DB'					=> 'Поддерживаемые базы данных',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Ваша версия PHP должна поддерживать <strong>не менее одной</strong> из перечисленных ниже баз данных. Если в списке не окажется поддерживаемых баз, то свяжитесь со своим провайдером или обратитесь к соответствующему разделу документации PHP.',

	'RETEST_REQUIREMENTS'	=> 'Повторить проверку',

	'STAGE_REQUIREMENTS'	=> 'Требования'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Необходимо заполнить все поля на этой странице.',
	'PHPBB_ALREADY_INSTALLED'	=> 'phpBB уже установлен.'
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Данные для установки',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Сведения об администраторе',

	// Form labels
	'ADMIN_CONFIG'				=> 'Настройки администратора',
	'ADMIN_PASSWORD'			=> 'Пароль администратора',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Подтверждение пароля администратора',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Введите пароль длиной от 6 до 30 символов.',
	'ADMIN_USERNAME'			=> 'Имя администратора',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Введите имя длиной от 3 до 20 символов.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Введён неправильный адрес email.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Введённые пароли не совпадают.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Введённый пароль слишком длинный. Длина пароля не должна превышать 30 символов.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Введённый пароль слишком короткий. Минимальная длина пароля — 6 символов.',
	'INST_ERR_USER_TOO_LONG'	=> 'Введённое имя пользователя слишком длинное. Длина имени пользователя не должна превышать 20 символов.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Введённое имя пользователя слишком короткое. Минимальная длина имени пользователя — 3 символа.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Настройки конференции',
	'DEFAULT_LANGUAGE'	=> 'Язык по умолчанию',
	'BOARD_NAME'		=> 'название конференции',
	'BOARD_DESCRIPTION'	=> 'Краткое описание конференции',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Настройки базы данных',

	// Form labels
	'DB_CONFIG'				=> 'Конфигурация базы данных (БД)',
	'DBMS'					=> 'Тип базы данных',
	'DB_HOST'				=> 'Имя сервера БД или DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN — это имя источника данных и требуется только при установке с использованием ODBC.  В PostgreSQL используйте имя localhost для соединения с локальным сервером через сокет домена UNIX или адрес 127.0.0.1 для соединения через TCP. Для SQLite задайте полный путь к файлу базы данных.',
	'DB_PORT'				=> 'Порт сервера БДess you know the server operates on a non-standard port.',
	'DB_PORT_EXPLAIN'		=> 'Оставьте поле пустым, если сервер использует порт по умолчанию.',
	'DB_PASSWORD'			=> 'Пароль к БД',
	'DB_NAME'				=> 'Название базы данных',
	'DB_USERNAME'			=> 'Имя пользователя БД',
	'TABLE_PREFIX'			=> 'Префикс для таблиц в базе данных',
	'TABLE_PREFIX_EXPLAIN'	=> 'Префикс должен начинаться с буквы и может содержать только буквы, числа и знаки подчёркивания.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ через ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL с расширением MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Не удалось загрузить модуль PHP для выбранного типа базы данных.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Указан неправильный префикс. Он должен начинаться с буквы и может содержать только буквы, числа и знаки подчёркивания.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Указанный префикс таблиц слишком длинный. Длина префикса не должна превышать %d символов.',
	'INST_ERR_DB_NO_NAME'			=> 'Не указано название базы данных.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Указанный файл базы данных находится в папке конференции. Необходимо переместить его в папку, недоступную из интернета.',
	'INST_ERR_DB_CONNECT'			=> 'Не удалось подключиться к базе данных. Ниже показан текст сообщения об ошибке.',
	'INST_ERR_DB_NO_ERROR'			=> 'Сообщения об ошибке недоступно.',
	'INST_ERR_PREFIX'				=> 'Таблицы с указанным префиксом уже существуют. Введите другой префикс.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Установленная на сервере версия MySQL несовместима с выбранным вариантом «MySQL с расширением MySQLi». Вместо него попробуйте выбрать вариант «MySQL».',
	'INST_ERR_DB_NO_SQLITE'			=> 'Установлена устаревшая версия расширения SQLite. Её необходимо обновить как минимум до версии 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Установлена устаревшая версия расширения SQLite. Её необходимо обновить как минимум до версии 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Для установленной на сервере версии Oracle необходимо установить значение параметра <var>NLS_CHARACTERSET</var> равным <var>UTF8</var>. Либо обновите базу данных до версии 9.2 или выше, либо измените значение параметра.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Выбранная база данных создана не с кодировкой <var>UNICODE</var> или <var>UTF8</var>. Попробуйте установить конференцию в базу данных с кодировкой <var>UNICODE</var> или <var>UTF8</var>.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Настройки E-mail',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Настройки сервера',
	'SCRIPT_PATH'				=> 'Путь к конференции',
	'SCRIPT_PATH_EXPLAIN'		=> 'Путь к папке, содержащей phpBB, относительно имени домена. Например, <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Спасибо, Администрация',
	'CONFIG_SITE_DESC'				=> 'Краткое описание вашей конференции',
	'CONFIG_SITENAME'				=> 'ваш_домен.ru',

	'DEFAULT_INSTALL_POST'			=> 'Это пример сообщения на вашей конференции phpBB3. Всё работает правильно. Вы можете удалить это сообщение и продолжить настройку вашей конференции. В процессе установки вашей первой категории и первому форуму были заданы подходящие права доступа для предустановленных групп администраторов, супермодераторов, гостей, зарегистрированных пользователей и зарегистрированных в соответствии с COPPA пользователей. Если вы решите удалить вашу первую категорию и первый форум, не забудьте установить права доступа для всех новых категорий и форумов, которые вы создаёте. Рекомендуем переименовать вашу первую категорию и первый форум и копировать права доступа с них вновь создаваемым категориям и форумам. Удачи!',

	'FORUMS_FIRST_CATEGORY'			=> 'Ваша первая категория',
	'FORUMS_TEST_FORUM_DESC'		=> 'Описание вашего первого форума.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ваш первый форум',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор',
	'REPORT_WAREZ'					=> 'Сообщение содержит ссылки на незаконные или пиратские программы.',
	'REPORT_SPAM'					=> 'Сообщение имеет единственной целью рекламу сайтов, программ или других продуктов, товаров, услуг и пр.',
	'REPORT_OFF_TOPIC'				=> 'Сообщение не относится к обсуждаемой теме.',
	'REPORT_OTHER'					=> 'Причина обжалования не относится ни к одной из перечисленных, используйте поле дополнительной информации.',

	'SMILIES_ARROW'					=> 'Стрелка',
	'SMILIES_CONFUSED'				=> 'Озадачен',
	'SMILIES_COOL'					=> 'Всё путём',
	'SMILIES_CRYING'				=> 'Плачет или сильно расстроен',
	'SMILIES_EMARRASSED'			=> 'Смущён',
	'SMILIES_EVIL'					=> 'Злой или очень раздражён',
	'SMILIES_EXCLAMATION'			=> 'Восклицание',
	'SMILIES_GEEK'					=> 'Ботан',
	'SMILIES_IDEA'					=> 'Идея',
	'SMILIES_LAUGHING'				=> 'Смеётся',
	'SMILIES_MAD'					=> 'Раздражён',
	'SMILIES_MR_GREEN'				=> 'Зелёный',
	'SMILIES_NEUTRAL'				=> 'Нейтральный',
	'SMILIES_QUESTION'				=> 'Вопрос',
	'SMILIES_RAZZ'					=> 'Дразнится',
	'SMILIES_ROLLING_EYES'			=> 'Закатывает глаза',
	'SMILIES_SAD'					=> 'Грустный',
	'SMILIES_SHOCKED'				=> 'В шоке',
	'SMILIES_SMILE'					=> 'Улыбается',
	'SMILIES_SURPRISED'				=> 'Удивлён',
	'SMILIES_TWISTED_EVIL'			=> 'Очень зол',
	'SMILIES_UBER_GEEK'				=> 'Мегаботан',
	'SMILIES_VERY_HAPPY'			=> 'Очень доволен',
	'SMILIES_WINK'					=> 'Подмигивает',

	'TOPICS_TOPIC_TITLE'			=> 'Добро пожаловать в phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Обзор',
	'MENU_INTRO'		=> 'Вступление',
	'MENU_LICENSE'		=> 'Лицензия',
	'MENU_SUPPORT'		=> 'Поддержка',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Создание файла конфигурации',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> 'Запись настроек конфигурации',
	'TASK_ADD_DEFAULT_DATA'			=> 'Запись настроек по умолчанию в базу данных',
	'TASK_CREATE_DATABASE_SCHEMA'	=> 'Создание схемы базы данных',

	// Install data
	'TASK_ADD_BOTS'			=> 'Регистрация ботов',
	'TASK_ADD_LANGUAGES'	=> 'Установка доступных языковых пакетов',
	'TASK_ADD_MODULES'		=> 'Установка модулей',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Отправка e-mail уведомлений',
	'TASK_POPULATE_MIGRATIONS'	=> 'Выполнение миграций',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'программа установки успешно завершила работу',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Модуль не найден',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Не найденный модуль сервиса «%s» не инициализирован.',

	'TASK_NOT_FOUND'				=> 'Задача не найдена',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Не найденная задача сервиса «%s» не инициализирована.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Все задачи сервисов программы установки должны начинаться со слова «installer»',
	'TASK_CLASS_NOT_FOUND'				=> 'Определение задачи сервиса программы установки неверно. Для заданного имени сервиса «%1$s» ожидается пространство имён «%2$s». Для получения дополнительной информации обратитесь к документации по task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Файл конфигурации недоступен для записи.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'			=> 'Установка phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Показать используемую конфигурацию',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Проверить файл конфигурации',
	'CLI_CONFIG_FILE'				=> 'Используемый файл конфигурации',
));
