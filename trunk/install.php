<?php
/** 
*
* install [Russian]
*
* @package language
* @version $Id: install.php,v 1.81 2007/01/26 16:09:16 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Настройки администратора',
	'ADMIN_PASSWORD'			=> 'Пароль администратора',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Подтвердите пароль администратора',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Введите пароль длиной от 6 до 30 знаков)',
	'ADMIN_TEST'				=> 'Проверка настроек администратора',
	'ADMIN_USERNAME'			=> 'Имя администратора',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Введите имя длиной от 3 до 20 знаков)',
	'APP_MAGICK'				=> 'Поддержка Imagemagick [ Вложения ]',
	'AUTHOR_NOTES'				=> 'Заметки автора<br />» %s',
	'AVAILABLE'					=> 'Доступно',
	'AVAILABLE_CONVERTORS'		=> 'Доступные конверторы',

	'BEGIN_CONVERT'					=> 'Начать конвертирование',
	'BLANK_PREFIX_FOUND'			=> 'Сканирование ваших таблиц показало правильность установки без использования префикса таблиц.',
	'BOARD_NOT_INSTALLED'			=> 'Не найдена установка phpBB3',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Чтобы осуществить конвертирование, необходимо иметь установленный по умолчанию phpBB3. Пожалуйста, учтите, что для конвертирования новая и старая установки phpBB должны использовать одну и ту же базу данных. Вы можете перейти по ссылке для <a href="%s">установки</a>.',

	'CATEGORY'					=> 'Категория',
	'CACHE_STORE'				=> 'Тип кэша',
	'CACHE_STORE_EXPLAIN'		=> 'Физическое расположение данных кэша, предпочтительно файловая система.',
	'CAT_CONVERT'				=> 'Конвертирование',
	'CAT_INSTALL'				=> 'Установка',
	'CAT_OVERVIEW'				=> 'Обзор',
	'CHANGE'					=> 'Изменить',
	'CHECK_TABLE_PREFIX'		=> 'Пожалуйста, проверьте правильность префикса таблиц, и попробуйте снова.',
	'CLEAN_VERIFY'				=> 'Очистка и проверка конечной структуры',
	'CONFIG_CONVERT'			=> 'Конвертирование конфигурации',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Не удалось записать файл конфигурации. Другие способы создания этого файла указаны ниже',
	'CONFIG_FILE_WRITTEN'		=> 'Файл конфигурации записан. Теперь вы можете приступить к следующему этапу установки',
	'CONFIG_PHPBB_EMPTY'		=> 'Переменная конфигурации phpBB3 для "%s" пуста.',
	'CONFIG_RETRY'				=> 'Повторить',
	'CONTACT_EMAIL_CONFIRM'		=> 'Подтверждение контактного адреса email',
	'CONTINUE_CONVERT'			=> 'Продолжить конвертирование',
	'CONTINUE_CONVERT_BODY'		=> 'Обнаружена предыдущая попытка конвертирования. Вы можете начать новое конвертирование или продолжить предыдущее',
	'CONTINUE_LAST'				=> 'Continue last statements', //пока неясен контекст...
	'CONTINUE_OLD_CONVERSION'	=> 'Продолжить ранее начатое конвертирование',
	'CONVERT'					=> 'Конвертировать',
	'CONVERT_COMPLETE'			=> 'Конвертирование завершено',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Вы успешно конвертировали вашу конференцию в формат phpBB 3.0. Вы можете <a href="../">войти на конференцию</a>. Помните, что вспомогательную информацию по использованию phpBB можно получить в Интернете, изучив <a href="http://www.phpbb.com/support/documentation/3.0/">Руководство пользователя</a>, а также на <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Форуме поддержки</a>, форумах русской поддержки <a href="http://phpbbguru.net">phpBB2</a> и <a href="http://anderson.phpbbguru.net">phpBB3</a>',
	'CONVERT_INTRO'				=> 'Добро пожаловать в phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Здесь вы имеете возможность импортировать данные из других (установленных) форумных систем. В списке ниже содержатся доступные в настоящее время модули для конвертирования. Если в нём отсутствует форум, который вы хотели бы конвертировать, пожалуйста, посетите наш вебсайт, на котором могут быть доступны для скачивания дополнительные модули.',
	'CONVERT_NEW_CONVERSION'	=> 'Новое конвертирование',
	'CONVERT_NOT_EXIST'			=> 'Указанный конвертор не существует',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Проверка указанной вами информации завершена. Чтобы начать конвертирование, нажмите кнопку ниже',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Загрузка вложений через FTP на старом форуме была разрешена. Пожалуйста, отключите эту функцию и убедитесь в правильности указанной папки для загрузки, потом скопируйте все файлы вложений в эту новую папку, доступную через веб. Затем перезапустите конвертор.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Отсутствует доступная информация о конфигурации для конвертирования.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Не удалось получить информацию о правах доступа.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Не удалось получить информацию о категориях.',
	'CONV_ERROR_GET_CONFIG'				=> 'Не удалось получить информацию о конфигурации форумов.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Не удалось получить доступ/прочесть "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Не удалось получить информацию о правах доступа для групп.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Обнаружено нарушение целостности таблицы групп в add_bots() - вам необходимо добавить все специальные группы вручную.',
	'CONV_ERROR_INSERT_BOT'				=> 'Не удалось добавить бота в таблицу пользователей.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Не удалось добавить бота в таблицу ботов.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Не удалось добавить пользователя в таблицу user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Ошибка обработки сообщения',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Замечание для разработчика: вы должны указать $convertor[\'avatar_path\'] для использования %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Не указан относительный путь к исходному форуму.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Замечание для разработчика: вы должны указать $convertor[\'avatar_gallery_path\'] для использования %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Не удалось найти группу "%1$s" в %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Замечание для разработчика: вы должны указать $convertor[\'ranks_path\'] для использования %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Замечание для разработчика: вы должны указать $convertor[\'smilies_path\'] для использования %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Замечание для разработчика: вы должны указать $convertor[\'upload_path\'] для использования %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Не удалось добавить/обновить настройки прав доступа.',
	'CONV_ERROR_PM_COUNT'				=> 'Не удалось отобрать количество личных сообщений в папке.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Не удалось добавить новый форум вместо старой категории.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Не удалось добавить новый форум вместо старого форума.',
	'CONV_ERROR_USER_ACCESS'			=> 'Не удалось получить данные аутентификации пользователя.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Обнаружена неправильная группа "%1$s" в %2$s.',
	'CONV_SAVED_MESSAGES'				=> 'Сохранённые сообщения',

	'COULD_NOT_COPY'			=> 'Не удалось скопировать файл <strong>%1$s</strong> в <strong>%2$s</strong><br /><br />Пожалуйста, проверьте, что папка для копирования существует и в неё может осуществляться запись',
	'COULD_NOT_FIND_PATH'		=> 'Не удалось найти путь к старому форуму. Пожалуйста, проверьте установки и попробуйте снова.<br />» Указанный ранее путь был %s',

	'DBMS'						=> 'Тип базы данных',
	'DB_CONFIG'					=> 'Конфигурация базы данных (БД)',
	'DB_CONNECTION'				=> 'Подключение к базе данных',
	'DB_ERR_INSERT'				=> 'Ошибка при обработке запроса <code>INSERT</code>',
	'DB_ERR_LAST'				=> 'Ошибка при обработке <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Ошибка при выполнении <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Ошибка при выполнении <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Ошибка при обработке запроса <code>SELECT</code>',
	'DB_HOST'					=> 'Имя сервера БД или DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN - имя источника данных при установке с использованием ODBC.',
	'DB_NAME'					=> 'Название базы данных',
	'DB_PASSWORD'				=> 'Пароль к БД',
	'DB_PORT'					=> 'Порт сервера БД',
	'DB_PORT_EXPLAIN'			=> 'Оставьте поле пустым, если сервер использует порт по умолчанию.',
	'DB_USERNAME'				=> 'Имя пользователя БД',
	'DB_TEST'					=> 'Тестовое подключение',
	'DEFAULT_LANG'				=> 'Язык по умолчанию',
	'DEFAULT_PREFIX_IS'			=> 'Конвертору не удалось найти таблицы phpBB3 с указанным префиксом. Пожалуйста, убедитесь, что старая конференция и установленный phpBB 3.0.x используют одну и ту же базу данных. У таблиц форума %1$s префикс <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'В конверторе не указано значение переменной test_file. Если вы пользователь конвертора, пожалуйста, сообщите об этой ошибке его автору, т.к. она не должна возникать. Если вы автор конвертора, то вы должны задать имя существующего файла конвертируемой конференции, для того чтобы проверить правильность пути к ней.',
	'DIRECTORIES_AND_FILES'		=> 'Настройка папок и файлов',
	'DISABLE_KEYS'				=> 'Деактивация ключей',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Поддержка удаленного FTP [ Установка ]',
	'DLL_GD'					=> 'Поддержка графической библиотеки GD [ Визуальное подтверждение ]',
	'DLL_MBSTRING'				=> 'Поддержка многобайтовых символов',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ через ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL с расширением MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Поддержка XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Поддержка zlib-компрессии [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Скачать файл конфигурации',
	'DL_CONFIG_EXPLAIN'			=> 'Вы можете целиком скачать файл config.php к себе на компьютер. Затем вам будет нужно вручную закачать этот файл в корневую папку phpBB 3.0, заменив исходный config.php. Помните, что файл должен быть закачан на сервер в формате ASCII (если вы не знаете как этого добиться, обратитесь к документации вашего FTP-клиента). После того, как закачаете config.php, щелкните «Готово» для перехода к следующему шагу.',
	'DL_DOWNLOAD'				=> 'Скачать',
	'DONE'						=> 'Готово',

	'ENABLE_KEYS'				=> 'Реактивация ключей. Эта операция может занять некоторое время',

	'FILES_OPTIONAL'			=> 'Необязательные файлы и папки',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Необязательно</strong> - файлы, папки или права доступа, не являющиеся обязательными. Система установки предложит различные способы их создания, если они не существуют, или для них нет прав на запись. Тем не менее, их наличие ускорит процесс установки.',
	'FILES_REQUIRED'			=> 'Файлы и папки',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Необходимо</strong> - для правильной работы phpBB нужен доступ на чтение или запись определенных файлов и папок. Если вы видите надпись «Не найдено», необходимо создать соответствующий файл или папку. Если написано «Нет прав на запись», необходимо изменить права на файл или папку, чтобы разрешить запись в них для phpBB.',
	'FILLING_TABLE'				=> 'Заполнение таблицы <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Заполнение таблиц',
	'FINAL_STEP'				=> 'Заключительный шаг',
	'FORUM_ADDRESS'				=> 'Адрес конференции',
	'FORUM_ADDRESS_EXPLAIN'		=> 'URL старой конференции, например, <samp>http://www.example.com/phpBB2/</samp>. Если вы заполните это поле, то во всех сообщениях, ЛС и подписях этот адрес будет заменен на адрес новой конференции.',
	'FORUM_PATH'				=> 'Путь к конференции',
	'FORUM_PATH_EXPLAIN'		=> '<strong>Относительный</strong> путь к старой конференции от <strong>корневой папки установленного phpBB</strong>',
	'FOUND'						=> 'Найдено',
	'FTP_CONFIG'				=> 'Перенести файл конфигурации по FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'Обнаружено наличие модуля FTP на сервере. Если желаете, можно попытаться установить config.php с его помощью. Вам будет нужно ввести информацию в поля указанные ниже. Помните, что это имя пользователя и пароль относятся к FTP вашего сервера! (если вы их не знаете, обратитесь за помощью к хостеру)',
	'FTP_PATH'					=> 'Путь FTP',
	'FTP_PATH_EXPLAIN'			=> 'Путь от корневой папки FTP до корневой папки phpBB, например, htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Закачать',

	'GPL'						=> 'General Public License',
	
	'INITIAL_CONFIG'			=> 'Базовая конфигурация',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Программа установки определила, что phpBB может работать на вашем сервере, теперь необходимо ввести ваши данные. Если вы не знаете, как подключиться к вашей базе данных, свяжитесь с хостером (в первую очередь) или обратитесь на форум техподдержки phpBB. После ввода данных тщательно проверьте их перед отправкой.',
	'INSTALL_CONGRATS'			=> 'Поздравляем',
	'INSTALL_CONGRATS_EXPLAIN'	=> 'Вы успешно установили phpBB 3.0. Нажмите на кнопку ниже, чтобы перейти в администраторский раздел. Уделите некоторое время изучению доступных пунктов меню и настроек. Помните о доступном в интернете <a href="http://www.phpbb.com/support/documentation/3.0/">Руководстве пользователя</a> и <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Форуме техподдержки Beta-версии</a> (на английском) а также <a href="http://anderson.phpbbguru.net">Русскоязычном форуме перевода Olympus</a>, за дополнительной информацией обратитесь к %sREADME%s.<br /><br /><strong>Пожалуйста, удалите, переместите или переименуйте папку install прежде чем начнёте пользоваться конференцией. В противном случае будет доступен только администраторский раздел.</strong>',
	'INSTALL_INTRO'				=> 'Вас приветствует программа установки phpBB',
	'INSTALL_INTRO_BODY'		=> 'Здесь можно установить phpBB на ваш сервер.</p><p>Для этого вам потребуются следующие данные:</p>
	<ul>
	<li>Имя сервера базы данных</li>
	<li>Название базы данных</li>
	<li>Имя пользователя и пароль базы данных</li>
	</ul>
	<p>Возможно, тут будет вступительный текст…',
	'INSTALL_INTRO_NEXT'		=> 'Чтобы начать установку, нажмите кнопку ниже.',
	'INSTALL_LOGIN'				=> 'Войти',
	'INSTALL_NEXT'				=> 'Следующий шаг',
	'INSTALL_NEXT_FAIL'			=> 'Часть тестов завершилась неудачей, вам необходимо исправить эту проблему прежде, чем вы перейдёте к следующему шагу. В противном случае установка конференции будет неоконченной.',
	'INSTALL_NEXT_PASS'			=> 'Все основные тесты пройдены, вы можете перейти к следующему шагу установки. В случае, если вы изменили какие-либо права, модули, и т.п. и хотите провести тесты ещё раз, нажмите кнопку "Перепроверить".',
	'INSTALL_PANEL'				=> 'Установка конференции',
	'INSTALL_SEND_CONFIG'		=> 'К сожалению, не удалось записать конфигурацию phpBB напрямую в файл config.php. Это произошло потому, что файл не существует или отсутствуют права на запись. Ниже представлен список вариантов, позволяющих завершить установку config.php.',
	'INSTALL_START'				=> 'Начать установку',
	'INSTALL_TEST'				=> 'Перепроверить',
	'INST_ERR'					=> 'Ошибка при установке',
	'INST_ERR_DB_CONNECT'		=> 'Не удалось подключиться к базе данных. Ниже показан текст сообщения об ошибке',
	'INST_ERR_DB_FORUM_PATH'	=> 'Файл базы данных находится в папке форума. Необходимо переместить его в папку, недоступную через веб',
	'INST_ERR_DB_NO_ERROR'		=> 'Сообщение об ошибке отсутствует',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Установленная на сервере версия MySQL несовместима с выбранным вариантом «MySQL с расширением MySQLi». Вместо него попробуйте выбрать вариант «MySQL».',
	'INST_ERR_DB_NO_SQLITE'		=> 'У вас установлена устаревшая версия расширения SQLite, её необходимо обновить по крайней мере до версии 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Для установленной на сервере версии Oracle необходимо установить значение параметра <var>NLS_CHARACTERSET</var> равным <var>UTF8</var>. Либо обновите базу данных до версии 9.2 или выше, либо измените значение параметра.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Установленная на сервере версия Firebird более старая, чем 2.0, пожалуйста, обновите базу данных до новой версии.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Выбранная база данных Firebird имеет размер страницы менее 8192, размер страницы должен быть не менее 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Выбранная база данных была создана не с кодировкой <var>UNICODE</var> или <var>UTF8</var>. Попробуйте установить конференцию в базу данных с кодировкой <var>UNICODE</var> или <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Не указано название базы данных',
	'INST_ERR_EMAIL_INVALID'	=> 'Введенный адрес email недопустим',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Введенные адреса email не совпадают.',
	'INST_ERR_FATAL'			=> 'Критическая ошибка при установке',
	'INST_ERR_FATAL_DB'			=> 'Произошла критическая ошибка при работе с базой данных, установка прервана. Причиной могло быть отсутствие прав на выполнение операций создания и добавления данных <code>CREATE TABLES</code>, <code>INSERT</code> или аналогичных. Более подробная информация может быть предоставлена ниже. Пожалуйста, сперва свяжитесь с вашим хостером или обратитесь на форумы поддержки phpBB за дополнительной помощью.',
	'INST_ERR_FTP_PATH'			=> 'Не удалось перейти в заданную папку, убедитесь в правильности относительного пути.',
	'INST_ERR_FTP_LOGIN'		=> 'Не удалось войти на FTP-сервер, убедитесь в правильности имени пользователя и пароля',
	'INST_ERR_MISSING_DATA'		=> 'Вы должны заполнить все поля из этого раздела',
	'INST_ERR_NO_DB'			=> 'Не удалось загрузить PHP-модуль для выбранного типа базы данных',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Введенные пароли не совпадают.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Введенный пароль слишком длинный. Максимальная длина 30 знаков.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Введенный пароль слишком короткий. Минимальная длина 6 знаков.',
	'INST_ERR_PREFIX'			=> 'Таблицы с указанным префиксом уже существуют, пожалуйста, выберите другой префикс.',
	'INST_ERR_PREFIX_INVALID'	=> 'Указанный префикс таблиц недопустим для вашей базы данных. Выберите другой префикс, без спецсимволов, типа дефиса',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Указанный префикс таблиц слишком длинный. Максимальная длина в знаках: %d.',
	'INST_ERR_USER_TOO_LONG'	=> 'Введенное имя пользователя слишком длинное. Максимальная длина 20 знаков.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Введенное имя пользователя слишком короткое. Минимальная длина 3 знака.',
	'INVALID_PRIMARY_KEY'		=> 'Недопустимый первичный ключ: %s',

	// mbstring
	'MBSTRING_CHECK'						=> 'Проверка расширения <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> - расширение, обеспечивающее работу многобайтовых строковых функций. Определенные возможности mbstring несовместимы с phpBB и должны быть отключены.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Перегрузка функции',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> 'Значение <var>mbstring.func_overload</var> должно быть установлено равным 0 либо 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Прозрачное кодирование символов',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Значение <var>mbstring.encoding_translation</var> должно быть установлено равным 0',
	'MBSTRING_HTTP_INPUT'					=> 'Кодировка входящих символов',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> 'Значение <var>mbstring.http_input</var> должно быть установлено равным <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'Кодировка исходящих символов',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Значение <var>mbstring.http_output</var> должно быть установлено равным <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Убедитесь, что эта папка существует и у сервера есть права на запись в неё, затем повторите попытку:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Убедитесь, что эти папки существуют и у сервера есть права на запись в них, затем повторите попытку:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Конфликт имён: оба имени %s и %s являются псевдонимами<br /><br />%s',
	'NEXT_STEP'					=> 'Следующий шаг',
	'NOT_FOUND'					=> 'Не найдено',
	'NOT_UNDERSTAND'			=> 'Не удалось разобрать выражение %s #%d, таблица %s ("%s")',
	'NO_CONVERTORS'				=> 'Нет доступных для использования конверторов',
	'NO_CONVERT_SPECIFIED'		=> 'Не выбран конвертор',
	'NO_LOCATION'				=> 'Не удалось найти приложение. Если вы знаете, что Imagemagick установлен, вы можете указать путь к нему в администраторском разделе после установки.',
	'NO_TABLES_FOUND'			=> 'Таблиц не найдено.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'					=> 'Мы рады представить вам общедоступную бета-версию phpBB следующего поколения после 2.0.x, phpBB 3.0! Этот бета-релиз предназначен продвинутым пользователям для тестирования в выделенных средах разработки, чтобы помочь нам завершить создание лучшего opensource-решения для интернет-конференций.</p><p><strong style="text-transform: uppercase;">Примечание:</strong> Этот релиз <strong style="text-transform: uppercase;">не финальный</strong> и предоставлен <strong style="text-transform: uppercase;">исключительно</strong> для тестирования.</p><p> Система установки будет помогать вам на протяжении процесса установки phpBB, конвертирования из другого программного обеспечения или обновления до последней версии phpBB. За дополнительной информацией по каждому из пунктов перейдите по соответствующей ссылке меню выше.',
	'PCRE_UTF_SUPPORT'				=> 'Поддержка UTF-8 в PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>не будет</strong> работать, если PHP собран без поддержки UTF-8 для расширения PCRE',
	'PHP_OPTIONAL_MODULE'			=> 'Дополнительные модули',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Необязательно</strong> - Эти модули и приложения не являются обязательными. Однако, если они доступны, это откроет дополнительные функции.',
	'PHP_SUPPORTED_DB'				=> 'Поддерживаемые базы данных',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Необходимо</strong> - Ваша версия PHP должна поддерживать как минимум одну из перечисленных баз данных. В противном случае свяжитесь с вашим провайдером или обратитесь к соответствующему разделу документации PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'Параметр PHP <var>register_globals</var> отключён',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB будет работать и в случае, если параметр register_globals включён, но, если это возможно, его рекомендуется отключить в целях безопасности.',
	'PHP_SAFE_MODE'					=> 'Безопасный режим (Safe mode)',
	'PHP_SETTINGS'					=> 'Версия и настройки PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Необходимо</strong> - Для установки phpBB требуется версия PHP не младше 4.3.3. Если ниже написано <var>Безопасный режим (Safe mode)</var>, то ваш PHP работает в защищённом режиме. Это наложит ограничения на удаленное администрирование и аналогичные функции.',
	'PHP_VERSION_REQD'				=> 'Версия PHP >= 4.3.3',
	'POST_ID'						=> 'Идентификатор сообщения',
	'PREFIX_FOUND'					=> 'Просмотр ваших таблиц показал наличие подходящей установки phpBB с префиксом таблиц <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Выполнение предварительных функций/запросов',
	'PRE_CONVERT_COMPLETE'			=> 'Все этапы подготовки к конвертации успешно завершены. Теперь вы можете начать процесс конвертации.',
	'PROCESS_LAST'					=> 'Выполнение заключительных запросов',

	'REFRESH_PAGE'				=> 'Обновлять страницу для продолжения конвертации',
	'REFRESH_PAGE_EXPLAIN'		=> '«Да» означает, что конвертор будет автоматически перезагружать страницу, чтобы продолжить конвертацию после завершения очередного этапа. Если это ваша первая конвертация с целью тестирования и проверки на ошибки, мы советуем установить значение этого параметра в «Нет».',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'Программная совместимость',
	'REQUIREMENTS_EXPLAIN'		=> 'Перед инсталляцией phpBB будут проведены проверки файлов и конфигурации сервера, чтобы удостовериться в том, что phpBB можно установить и запускать. Тщательно ознакомьтесь с результатами и не переходите к следующему этапу установки, пока необходимые проверки не будут пройдены. Если вам нужны какие-либо из дополнительных возможностей конференции, убедитесь, что соответствующие им тесты также успешно пройдены.',
	'RETRY_WRITE'				=> 'Повторить попытку записи конфигурации',
	'RETRY_WRITE_EXPLAIN'		=> 'При желании вы можете изменить права на файл config.php, чтобы разрешить phpBB запись в него. В этом случае нажмите на кнопку «Повторить» ниже. Не забудьте вернуть права на файл config.php после завершения инсталляции.',

	'SCRIPT_PATH'				=> 'Путь к конференции',
	'SCRIPT_PATH_EXPLAIN'		=> 'Путь к папке, содержащей phpBB, относительно корня сайта, например, <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Выберите язык',
	'SERVER_CONFIG'				=> 'Конфигурация сервера',
	'SOFTWARE'					=> 'Тип конференции',
	'SPECIFY_OPTIONS'			=> 'Определение настроек конвертирования',
	'STAGE_ADMINISTRATOR'		=> 'Сведения об администраторе',
	'STAGE_ADVANCED'			=> 'Продвинутые настройки',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Изменять параметры на этой странице необходимо лишь в случае, если вы знаете, что вам не подойдут настройки по умолчанию. Если вы не уверены, переходите к следующему шагу, так как эти настройки можно будет изменить позже в администраторском разделе.',
	'STAGE_CONFIG_FILE'			=> 'Файл конфигурации',
	'STAGE_CREATE_TABLE'		=> 'Создание таблиц базы данных',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Таблицы базы данных phpBB 3.0 были созданы и заполнены начальными данными. Переходите к следующему шагу для завершения установки phpBB.',
	'STAGE_DATABASE'			=> 'Настройки базы данных',
	'STAGE_FINAL'				=> 'Заключительный этап',
	'STAGE_INTRO'				=> 'Введение',
	'STAGE_IN_PROGRESS'			=> 'Конвертирование',
	'STAGE_REQUIREMENTS'		=> 'Требования',
	'STAGE_SETTINGS'			=> 'Настройки',
	'STARTING_CONVERT'			=> 'Начало конвертации',
	'STEP_PERCENT_COMPLETED'	=> 'Шаг <strong>%d</strong> из <strong>%d</strong>',
	'SUB_INTRO'					=> 'Введение',
	'SUB_LICENSE'				=> 'Лицензия',
	'SUB_SUPPORT'				=> 'Поддержка',
	'SUCCESSFUL_CONNECT'		=> 'Успешное подключение',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'В период бета-тестирования <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">на форуме поддержки бета-версий phpBB 3.0</a> (на английском) будет оказана минимальная помощь. Мы будем отвечать на общие вопросы по установке, проблемам с настройкой и оказывать поддержку по решению проблем общего характера, в основном связанных с ошибками в phpBB. Поддержка модификаций, стилей и пользователей, использующих конференцию не для тестирования оказываться не будет.</p><p>За дополнительной помощью обращайтесь к нашему <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Краткому руководству пользователя</a> (на английском).</p><p>Чтобы быть в курсе последних новостей и следить за релизами стоит <a href="http://www.phpbb.com/support/">подписаться на нашу рассылку</a>.',
	'SYNC_FORUMS'				=> 'Синхронизация форумов',
	'SYNC_TOPICS'				=> 'Синхронизация тем',
	'SYNC_TOPIC_ID'				=> 'Синхронизация тем с <var>topic_id</var> от %1$s до %2$s',

	'TABLES_MISSING'			=> 'Не удалось найти таблицы<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Префикс для таблиц в базе данных',
	'TABLE_PREFIX_SAME'			=> 'Префикс таблиц должен быть тем же, что используется конвертируемым форумом.<br />» Вы указали префикс %s',
	'TESTS_PASSED'				=> 'Проверка пройдена',
	'TESTS_FAILED'				=> 'Проверка не пройдена',

	'UNABLE_WRITE_LOCK'			=> 'Не удалось записать файл блокировки',
	'UNAVAILABLE'				=> 'Недоступно',
	'UNWRITEABLE'				=> 'Нет прав на запись',
	'UPDATE_TOPICS_POSTED'		=> 'Генерация перечня тем, в которых писал пользователь',

	'VERSION'					=> 'Версия',

	'WELCOME_INSTALL'			=> 'Вас приветствует программа установки phpBB 3',
	'WRITEABLE'					=> 'Права на запись',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Все файлы соответствуют самой последней версии phpBB. <a href="../ucp.php?mode=login">Войдите на конференцию</a> и проверьте, что всё работает нормально. Не забудьте удалить, переименовать или переместить папку install!',
	'ARCHIVE_FILE'				=> 'Файл-источник в архиве',

	'BACK'				=> 'Назад',
	'BINARY_FILE'		=> 'Бинарный файл',

	'CHECK_FILES'					=> 'Сравнить файлы',
	'CHECK_FILES_AGAIN'				=> 'Повторно сравнить файлы',
	'CHECK_FILES_EXPLAIN'			=> 'На следующем шаге все файлы phpBB будут сравнены с файлами обновления, это может занять некоторое время, если сравнение файлов проводится впервые.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Согласно базе данных, ваша версия phpBB самая новая. Вы можете перейти к сравнению файлов, чтобы убедиться в том, что все файлы действительно соответствуют самой последней версии phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Продолжить обновление',
	'COLLECTED_INFORMATION'			=> 'Сведения об отобранных файлах',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Список ниже демонстрирует сведения о файлах, нуждающихся в обновлении. Прочтите информацию, предшествующую блоку файлов каждого типа, чтобы понять их смысл и что требуется сделать для выполнения успешного обновления.',
	'COMPLETE_LOGIN_TO_BOARD'		=> '<a href="../ucp.php?mode=login">Войдите на конференцию</a> и проверьте, что всё работает нормально. Не забудьте удалить, переименовать или переместить папку install!',
	'CONTINUE_INLINE_UPDATE'		=> 'Обновление базы данных прошло успешно. Теперь закройте это окно и продолжайте процесс обновления согласно инструкции.',
	'CURRENT_FILE'					=> 'Текущий исходный файл',
	'CURRENT_VERSION'				=> 'Текущая версия',

	'DATABASE_TYPE'						=> 'Тип базы данных',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Файл обновления базы данных в папке install устарел. Убедитесь что закачали исправную версию этого файла.',
	'DESTINATION'						=> 'Файл-получатель',
	'DIFF_INLINE'						=> 'Внутри текста',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Конец текущего файла/Начало обновленного файла',
	'DIFF_SIDE_BY_SIDE'					=> 'Параллельно',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Не обновлять этот файл',
	'DONE'								=> 'Готово',
	'DOWNLOAD'							=> 'Скачать',
	'DOWNLOAD_AS'						=> 'Скачать в формате',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Скачать архив с модифицированными файлами',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Скачав архив, распакуйте его. В нём вы найдёте измененные файлы, которые нужно закачать в корень phpBB, при этом каждый файл должен оказаться в соответствующей ему папке. После этого снова проведите сравнение файлов, нажав отвечающую за это кнопку ниже.',

	'ERROR'		=> 'Ошибка',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Файл уже соответствует новой версии',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Нет прав на выполнение команды diff для этого файла',
	'FILE_USED'						=> 'Информация из файла',			// Single file
	'FILES_CONFLICT'				=> 'Конфликтующие файлы',
	'FILES_CONFLICT_EXPLAIN'		=> 'Следующие файлы модифицированы и не соответствуют оригинальным файлам старой версии. phpBB определил, что эти файлы будут создавать конфликт при объединении с их новыми версиями. Изучите конфликтные места и попытайтесь исправить их вручную, либо продолжите обновление, выбрав подходящий тип объединения файлов. Если вы будете разрешать конфликт вручную, снова проведите сравнение файлов после того, как внесёте в них изменения. Для каждого файла в отдельности вы можете выбрать предпочтительный метод объединения с новой версией. Результатом работы первого метода будет файл, в котором отброшены конфликтующие строки из вашего старого файла, во втором методе будут отброшены конфликтующие строки из новой версии.',
	'FILES_MODIFIED'				=> 'Измененные файлы',
	'FILES_MODIFIED_EXPLAIN'		=> 'Следующие файлы модифицированы и не соответствуют оригинальным файлам старой версии. Обновленный файл будет результатом объединения вашего модифицированного и нового файла.',
	'FILES_NEW'						=> 'Новые файлы',
	'FILES_NEW_EXPLAIN'				=> 'Следующих файлов нет в вашей версии phpBB.',
	'FILES_NEW_CONFLICT'			=> 'Новые конфликтующие файлы',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Следующие файлы появились лишь в последней версии. Но файл с тем же именем в том же месте уже существует. Этот файл будет перезаписан файлом из новой версии.',
	'FILES_NOT_MODIFIED'			=> 'Неизмененные файлы',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Следующие файлы не были модифицированы и представляют собой оригинальные файлы phpBB той версии, которую вы хотите обновить.',
	'FILES_UP_TO_DATE'				=> 'Уже обновленные файлы',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Следующие файлы уже соответствуют файлам новой версии и не нуждаются в обновлении.',
	'FTP_SETTINGS'					=> 'Настройки FTP',
	'FTP_UPDATE_METHOD'				=> 'Закачать по FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'The update files are incomplete',

	'LATEST_VERSION'		=> 'Latest version',
	'LINE'					=> 'Line',
	'LINE_ADDED'			=> 'Added',
	'LINE_MODIFIED'			=> 'Modified',
	'LINE_REMOVED'			=> 'Removed',
	'LINE_UNMODIFIED'		=> 'Unmodified',
	'LOGIN_UPDATE_EXPLAIN'	=> 'In order to update your installation you need to login first.',

	'MAPPING_FILE_STRUCTURE'	=> 'To ease the upload here are the file locations which map your phpBB installation.',
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Do not merge - use new file',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Do not merge - use currently installed file',
	'MERGE_MOD_FILE_OPTION'		=> 'Merge differences and use modified code within conflicting block',
	'MERGE_NEW_FILE_OPTION'		=> 'Merge differences and use new file code within conflicting block',
	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes are not correctly selected.',

	'NEW_FILE'						=> 'New updated file',
	'NO_AUTH_UPDATE'				=> 'Not authorized to update',
	'NO_ERRORS'						=> 'No errors',
	'NO_UPDATE_FILES'				=> 'Not updating the following files',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'The following files are new or modified but the directory they normally reside in could not be found on your installation. If this list contains files to other directories than language/ or styles/ than you may have modified your directory structure and the update may be incomplete.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No valid update directory was found, please make sure you uploaded the relevant files.<br /><br />Your installation does <strong>not</strong> seem to be up to date. Updates are available for your version of phpBB %1$s, please visit <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> to obtain the correct package to update from Version %2$s to Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'NO_UPDATE_INFO'				=> 'Update file information could not be found.',
	'NO_UPDATES_REQUIRED'			=> 'No updates required',
	'NO_VISIBLE_CHANGES'			=> 'No visible changes',
	'NOTICE'						=> 'Notice',
	'NUM_CONFLICTS'					=> 'Number of conflicts',

	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PERFORM_DATABASE_UPDATE'			=> 'Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a link to the database update script. This script needs to be run seperatly because updating the database might result in unexpected behaviour if you are logged in. The database update can take a while, so please do not stop the execution if it seems to hang. After you performed the database update, close the database update window and continue the update process.',
	'PREVIOUS_VERSION'					=> 'Previous version',
	'PROGRESS'							=> 'Progress',

	'RESULT'					=> 'Result',
	'RUN_DATABASE_SCRIPT'		=> 'Update my database now',

	'SELECT_DIFF_MODE'			=> 'Select diff mode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'Select FTP settings',
	'SHOW_DIFF_CONFLICT'		=> 'Show differences/conflicts',
	'SHOW_DIFF_FINAL'			=> 'Show resulting file',
	'SHOW_DIFF_MODIFIED'		=> 'Show merged differences',
	'SHOW_DIFF_NEW'				=> 'Show file contents',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Show differences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Show differences',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'Check files',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update files',
	'STAGE_VERSION_CHECK'		=> 'Version check',
	'STATUS_CONFLICT'			=> 'Modified file producing conflicts',
	'STATUS_MODIFIED'			=> 'Modified file',
	'STATUS_NEW'				=> 'New file',
	'STATUS_NEW_CONFLICT'		=> 'Conflicting new file',
	'STATUS_NOT_MODIFIED'		=> 'Not modified file',
	'STATUS_UP_TO_DATE'			=> 'Already updated file',

	'UPDATE_COMPLETED'				=> 'Update completed',
	'UPDATE_DATABASE'				=> 'Обновить',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Within the next step the database will be updated.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Updating database schema',
	'UPDATE_FILES'					=> 'Update files',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s">the release announcement for the latest version</a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation</h1>

		<p>The recommended way of updating your installation only takes the following steps:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">phpBB.com downloads page</a> and download the correct "phpBB Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified after the update is complete.
		</p>
	',
	'UPDATE_METHOD'					=> 'Update method',
	'UPDATE_METHOD_EXPLAIN'			=> 'You are now able to choose your preferred update method. Using the FTP upload will present you with a form you need to enter your FTP account details into. With this method the files will be automatically moved to the new location and backups of the old files being created by appending .bak to the filename. If you choose to download the modified files you are able to unpack and upload them to their correct location manually later.',
	'UPDATE_SUCCESS'				=> 'Update was successful',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Successfully updated all files. The next step involves checking all files again to make sure the files got updated correctly.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Updating version and optimizing tables',
	'UPDATING_DATA'					=> 'Updating data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'Updated version',
	'UPLOAD_METHOD'					=> 'Upload method',

	'UPDATE_DB_SUCCESS'				=> 'Database update was successful',

	'VERSION_CHECK'				=> 'Version check',
	'VERSION_CHECK_EXPLAIN'		=> 'Checks to see if the version of phpBB you are currently running is up to date.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Your version of phpBB is not up to date. Please continue the update process.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Your version of phpBB is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'VERSION_UP_TO_DATE'		=> 'Your installation is up to date, no updates are available for your version of phpBB. You may want to continue anyway to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Your installation is up to date, no updates are available for your version of phpBB. You do not need to update your installation.',
	'VIEWING_FILE_CONTENTS'		=> 'Viewing file contents',
	'VIEWING_FILE_DIFF'			=> 'Viewing file differences',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

?>