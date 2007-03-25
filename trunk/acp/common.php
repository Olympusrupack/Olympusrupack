<?php
/** 
*
* acp common [Russian]
*
* @package language
* @version $Id: common.php,v 1.83 2007/01/24 11:29:56 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrators',
	'ACP_ADMIN_LOGS'			=> 'Admin log',
	'ACP_ADMIN_ROLES'			=> 'Admin roles',
	'ACP_ATTACHMENTS'			=> 'Attachments',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Attachment settings',
	'ACP_AUTH_SETTINGS'			=> 'Authentication',
	'ACP_AUTOMATION'			=> 'Automation',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar settings',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Banning',
	'ACP_BAN_EMAILS'			=> 'Ban emails',
	'ACP_BAN_IPS'				=> 'Ban IPs',
	'ACP_BAN_USERNAMES'			=> 'Ban usernames',
	'ACP_BASIC_PERMISSIONS'		=> 'Basic permissions',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Board configuration',
	'ACP_BOARD_DEFAULTS'		=> 'Board defaults',
	'ACP_BOARD_FEATURES'		=> 'Board features',
	'ACP_BOARD_MANAGEMENT'		=> 'Board management',
	'ACP_BOARD_SETTINGS'		=> 'Board settings',
	'ACP_BOTS'					=> 'Spiders/Robots',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> '.Mods',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'General',
	'ACP_CAT_MAINTENANCE'		=> 'Maintenance',
	'ACP_CAT_PERMISSIONS'		=> 'Permissions',
	'ACP_CAT_POSTING'			=> 'Posting',
	'ACP_CAT_STYLES'			=> 'Styles',
	'ACP_CAT_SYSTEM'			=> 'System',
	'ACP_CAT_USERGROUP'			=> 'Users and Groups',
	'ACP_CAT_USERS'				=> 'Users',
	'ACP_CLIENT_COMMUNICATION'	=> 'Client communication',
	'ACP_COOKIE_SETTINGS'		=> 'Cookie settings',
	'ACP_CRITICAL_LOGS'			=> 'Error log',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Custom profile fields',
	
	'ACP_DATABASE'				=> 'Database management',
	'ACP_DISALLOW'				=> 'Disallow',
	'ACP_DISALLOW_USERNAMES'	=> 'Disallow usernames',
	
	'ACP_EMAIL_SETTINGS'		=> 'Email settings',
	'ACP_EXTENSION_GROUPS'		=> 'Manage extension groups',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forum based permissions',
	'ACP_FORUM_LOGS'				=> 'Forum logs',
	'ACP_FORUM_MANAGEMENT'			=> 'Forum management',
	'ACP_FORUM_MODERATORS'			=> 'Forum moderators',
	'ACP_FORUM_PERMISSIONS'			=> 'Forum permissions',
	'ACP_FORUM_ROLES'				=> 'Forum roles',

	'ACP_GENERAL_CONFIGURATION'		=> 'General configuration',
	'ACP_GENERAL_TASKS'				=> 'General tasks',
	'ACP_GLOBAL_MODERATORS'			=> 'Global moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Global permissions',
	'ACP_GROUPS'					=> 'Groups',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Groups’ forum permissions',
	'ACP_GROUPS_MANAGE'				=> 'Manage groups',
	'ACP_GROUPS_MANAGEMENT'			=> 'Group management',
	'ACP_GROUPS_PERMISSIONS'		=> 'Groups’ permissions',
	
	'ACP_ICONS'					=> 'Topic icons',
	'ACP_ICONS_SMILIES'			=> 'Topic icons/smilies',
	'ACP_IMAGESETS'				=> 'Imagesets',
	'ACP_INACTIVE_USERS'		=> 'Inactive users',
	'ACP_INDEX'					=> 'ACP index',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber settings',
	
	'ACP_LANGUAGE'				=> 'Language management',
	'ACP_LANGUAGE_PACKS'		=> 'Language packs',
	'ACP_LOAD_SETTINGS'			=> 'Load settings',
	'ACP_LOGGING'				=> 'Logging',
	
	'ACP_MAIN'					=> 'ACP index',
	'ACP_MANAGE_EXTENSIONS'		=> 'Manage extensions',
	'ACP_MANAGE_FORUMS'			=> 'Manage forums',
	'ACP_MANAGE_RANKS'			=> 'Manage ranks',
	'ACP_MANAGE_REASONS'		=> 'Manage report/denial reasons',
	'ACP_MANAGE_USERS'			=> 'Manage users',
	'ACP_MASS_EMAIL'			=> 'Mass email',
	'ACP_MESSAGES'				=> 'Messages',
	'ACP_MESSAGE_SETTINGS'		=> 'Private message settings',
	'ACP_MODULE_MANAGEMENT'		=> 'Module management',
	'ACP_MOD_LOGS'				=> 'Moderator log',
	'ACP_MOD_ROLES'				=> 'Moderator roles',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Orphaned attachments',
	
	'ACP_PERMISSIONS'			=> 'Permissions',
	'ACP_PERMISSION_MASKS'		=> 'Permission masks',
	'ACP_PERMISSION_ROLES'		=> 'Permission roles',
	'ACP_PERMISSION_SETTINGS'	=> 'Permission settings',
	'ACP_PERMISSION_TRACE'		=> 'Permission trace',
	'ACP_PHP_INFO'				=> 'PHP information',
	'ACP_POST_SETTINGS'			=> 'Post settings',
	'ACP_PRUNE_FORUMS'			=> 'Prune forums',
	'ACP_PRUNE_USERS'			=> 'Prune users',
	'ACP_PRUNING'				=> 'Pruning',
	
	'ACP_QUICK_ACCESS'			=> 'Quick access',
	
	'ACP_RANKS'					=> 'Ranks',
	'ACP_REASONS'				=> 'Report/denial reasons',
	'ACP_REGISTER_SETTINGS'		=> 'User registration settings',

	'ACP_RESTORE'				=> 'Restore',

	'ACP_SEARCH'				=> 'Search configuration',
	'ACP_SEARCH_INDEX'			=> 'Search index',
	'ACP_SEARCH_SETTINGS'		=> 'Search settings',

	'ACP_SECURITY_SETTINGS'		=> 'Security settings',
	'ACP_SERVER_CONFIGURATION'	=> 'Server configuration',
	'ACP_SERVER_SETTINGS'		=> 'Server settings',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signature settings',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_SPECIAL_PERMISSIONS'	=> 'Special permissions',
	'ACP_STYLE_COMPONENTS'		=> 'Style components',
	'ACP_STYLE_MANAGEMENT'		=> 'Style management',
	'ACP_STYLES'				=> 'Styles',
	
	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Themes',
	
	'ACP_UPDATE'					=> 'Updating',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Users’ forum permissions',
	'ACP_USERS_LOGS'				=> 'User logs',
	'ACP_USERS_PERMISSIONS'			=> 'Users’ permissions',
	'ACP_USER_ATTACH'				=> 'Attachments',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Groups',
	'ACP_USER_MANAGEMENT'			=> 'User management',
	'ACP_USER_OVERVIEW'				=> 'Overview',
	'ACP_USER_PERM'					=> 'Permissions',
	'ACP_USER_PREFS'				=> 'Preferences',
	'ACP_USER_PROFILE'				=> 'Profile',
	'ACP_USER_RANK'					=> 'Rank',
	'ACP_USER_ROLES'				=> 'User roles',
	'ACP_USER_SECURITY'				=> 'User security',
	'ACP_USER_SIG'					=> 'Signature',

	'ACP_VC_SETTINGS'					=> 'Visual confirmation settings',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA image preview',
	'ACP_VERSION_CHECK'					=> 'Check for updates',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'View administrative permissions',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'View forum moderation permissions',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'View forum-based permissions',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'View global moderation permissions',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'View user-based permissions',
	
	'ACP_WORDS'					=> 'Word censoring',

	'ACTION'				=> 'Действие',
	'ACTIONS'				=> 'Действия',
	'ACTIVATE'				=> 'Активировать',
	'ADD'					=> 'Добавить',
	'ADMIN'					=> 'Администрирование',
	'ADMIN_INDEX'			=> 'Администраторский раздел',
	'ADMIN_PANEL'			=> 'Администраторский раздел',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Безопасная палитра',
	'CONFIG_UPDATED'		=> 'Конфигурация успешно обновлена.',

	'DEACTIVATE'				=> 'Деактивировать',
	'DIMENSIONS'				=> 'Размеры',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Заданный путь «%s» не существует.',
	'DIRECTORY_NOT_DIR'			=> 'Заданный путь «%s» не является папкой.',
	'DIRECTORY_NOT_WRITEABLE'	=> 'По заданному пути «%s» невозможно произвести запись.',
	'DISABLE'					=> 'Отключить',
	'DOWNLOAD'					=> 'Скачать',
	'DOWNLOAD_AS'				=> 'Скачать как',
	'DOWNLOAD_STORE'			=> 'Скачать или сохранить файл',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Вы можете напрямую скачать файл или сохранить его в папке <samp>store/</samp>.',

	'EDIT'					=> 'Редактировать',
	'ENABLE'				=> 'Включить',
	'EXPORT_DOWNLOAD'		=> 'Скачать',
	'EXPORT_STORE'			=> 'Сохранить',

	'GENERAL_OPTIONS'		=> 'Общие настройки',
	'GENERAL_SETTINGS'		=> 'Общие установки',
	'GLOBAL_MASK'			=> 'Общие права доступа',

	'INSTALL'				=> 'Установить',
	'IP'					=> 'IP-адрес пользователя',
	'IP_HOSTNAME'			=> 'IP-адреса или хосты',

	'LOGGED_IN_AS'			=> 'Вы вошли как:',
	'LOGIN_ADMIN'			=> 'Для администрирования конференции вы должны войти на неё.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Для администрирования конференции вы должны повторно ввести имя и пароль.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Вы успешно вошти и сейчас будете перенаправлены в администраторский раздел',
	'LOOK_UP_FORUM'			=> 'Выбрать форум',

	'MANAGE'				=> 'Управление',
	'MOVE_DOWN'				=> 'Вниз',
	'MOVE_UP'				=> 'Вверх',

	'NOTIFY'				=> 'Уведомления',
	'NO_ADMIN'				=> 'Вы не имеете права администрирования этой конференции.',
	'NO_EMAILS_DEFINED'		=> 'Не найдено правильных email-адреов',

	'OFF'					=> 'Выкл',
	'ON'					=> 'Вкл',

	'PARSE_BBCODE'						=> 'Включить BBCode',
	'PARSE_SMILIES'						=> 'Включить смайлики',
	'PARSE_URLS'						=> 'Включить ссылки',
	'PERMISSIONS_TRANSFERRED'			=> 'Права доступа переданы',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'В настоящий момент вы имеете права доступа пользователя %1$s. Вы можете просматривать конференцию с этими правами, но не будете иметь доступа к администраторскому разделу, поскольку права администратора не были переданы. Вы можете <a href="%2$s"><strong>вернуть свои права</strong></a> в любое время.',
	'PIXEL'							=> 'px',	
	'PROCEED_TO_ACP'					=> '%sПерейти в администраторский раздел%s',

	'REMIND'							=> 'Напомнить',
	'REORDER'							=> 'Упорядочить',
	'RESYNC'							=> 'Синхронизировать',
	'RETURN_TO'							=> 'Вернуться к…',

	'SELECT_ANONYMOUS'		=> 'Выбрать анонимного пользователя',
	'SELECT_OPTION'			=> 'Выбрать',

	'UCP'					=> 'Личный раздел',
	'USERNAMES_EXPLAIN'		=> 'Каждое имя пользователя указывается с новой строки',
	'USER_CONTROL_PANEL'	=> 'Личный раздел',

	'WARNING'				=> 'Предупреждение',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Эта страница содержит информацию об установленной на этом сервере версии PHP. Она включает подробные сведения о загруженных модулях, доступных переменных и настройках по умолчанию. Эта информация может быть полезной при диагностике возникших проблем. Учтите, что некоторые хостинг-провайдеры ограничивают объём этой информации по соображениям безопасности. Рекомендуется не раскрывать любые сведения, содержащиеся на этой странице без соответствующего запроса <a href="http://www.phpbb.com/about/">членов команды</a> официальной поддержки.',

	'NO_PHPINFO_AVAILABLE'	=> 'Не удалось получить информацию о PHP. Функция phpinfo() была отключена по соображениям безопасности.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Здесь содержится список действий, произведённых администраторами конференции. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также очистить отдельные записи или весь журнал целиком.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Здесь содержится список действий, произведённых самой конференцией. Этот журнал даёт вам информацию, которую можно использовать для решения специфических проблем, например с доставкой email-сообщений. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также очистить отдельные записи или весь журнал целиком.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Здесь содержится список действий, произведённых модераторами конференции, выбор форума осуществляется из выпадающего списка ниже. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также очистить отдельные записи или весь журнал целиком.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Здесь содержится список всех действий, произведённых пользователями или над пользователями.',
	'ALL_ENTRIES'				=> 'Все записи',

	'DISPLAY_LOG'	=> 'Показать записи за последние',

	'NO_ENTRIES'	=> 'Отсутствуют записи за указанный период',

	'SORT_IP'		=> 'IP-адрес',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Действие',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Спасибо за выбор phpBB в качестве решения для создания конференции. На этой странице вы найдёте краткий обзор её всевозможной статистики. Ссылки в левой части экрана позволяют управлять каждым аспектом работы вашей конференции. Каждая страница содержит инструкции по использованию её инструментов.',
	'ADMIN_LOG'					=> 'Действия администратора',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Здесь содержится список последних пяти действий, произведённых администраторами конференции. Полную копию журнала можно просмотреть через соответствующий пункт меню или по ссылке ниже.',
	'AVATAR_DIR_SIZE'			=> 'Размер папки с аватарами',

	'BOARD_STARTED'		=> 'Дата запуска конференции',

	'DATABASE_SERVER_INFO'	=> 'Сервер базы данных',
	'DATABASE_SIZE'			=> 'Размер базы данных',

	'FILES_PER_DAY'		=> 'Вложений в день',
	'FORUM_STATS'		=> 'Статистика конференции',

	'GZIP_COMPRESSION'	=> 'Сжатие GZip',

	'NOT_AVAILABLE'		=> 'Недоступно',
	'NUMBER_FILES'		=> 'Вложений',
	'NUMBER_POSTS'		=> 'Сообщений',
	'NUMBER_TOPICS'		=> 'Тем',
	'NUMBER_USERS'		=> 'Пользователей',
	'NUMBER_ORPHAN'		=> 'Не прикреплённых вложений',

	'POSTS_PER_DAY'		=> 'Сообщений в день',

	'RESET_DATE'			=> 'Сбросить дату',
	'RESET_ONLINE'			=> 'Сбросить онлайн статистику',
	'RESYNC_POSTCOUNTS'		=> 'Синхронизировать количество сообщений',
	'RESYNC_POST_MARKING'	=> 'Синхронизировать свои темы',
	'RESYNC_STATS'			=> 'Синхронизировать статистику',

	'STATISTIC'			=> 'Статистика',

	'TOPICS_PER_DAY'	=> 'Тем в день',

	'UPLOAD_DIR_SIZE'	=> 'Размер прикреплённых вложений',
	'USERS_PER_DAY'		=> 'Пользователей в день',

	'VALUE'					=> 'Значение',
	'VIEW_ADMIN_LOG'		=> 'Журнал администратора',
	'VIEW_INACTIVE_USERS'	=> 'Неактивные пользователи',

	'WELCOME_PHPBB'			=> 'Добро пожаловать в phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Дата',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Учётная запись деактивирована администратором',
	'INACTIVE_REASON_PROFILE'		=> 'Изменён профиль',
	'INACTIVE_REASON_REGISTER'		=> 'Новая учётная запись',
	'INACTIVE_REASON_REMIND'		=> 'Принудительная повторная активация',
	'INACTIVE_REASON_UNKNOWN'		=> 'Неизвестно',
	'INACTIVE_USERS'				=> 'Неактивные пользователи',
	'INACTIVE_USERS_EXPLAIN'		=> 'Здесь содержится список зарегистрированных пользователей, учётные записи которых неактивны. Вы можете активировать, удалить этих пользователей или отправить им напоминание (email-сообщением).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Здесь содержится список последних 10 зарегистрированных пользователей, учётные записи которых неактивны. В полном списке, доступном через соответствующий пункт меню или по ссылке ниже, вы можете активировать, удалить этих пользователей или отправить им напоминание (email-сообщением).',

	'NO_INACTIVE_USERS'	=> 'Нет неактивных пользователей',

	'SORT_INACTIVE'		=> 'Дата',
	'SORT_LAST_VISIT'	=> 'Последнее посещение',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Дата регистрации',

	'USER_IS_INACTIVE'		=> 'Пользователь неактивен',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Добавлены или изменены пользовательские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Добавлены или изменены пользовательские права групп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Добавленв или изменены общие модераторские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Добавлены или изменены общие модераторские права групп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторские права групп</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторы</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Добавлены или изменены общие модераторы</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Добавлен или изменён доступ пользователей к форуму</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Добавлен или изменён доступ модератора к форуму</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Добавлен или изменён доступ групп к форуму</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Добавлен или изменён модераторский доступ групп к форуму</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Добвалены или изменены модераторы</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Добавлен или изменён доступ к форуму</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Удалены администраторы</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Удалены общие модераторы</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Удалены модераторы</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Удалён доступ пользователя/группы к форуму</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Перенесены права доступа пользователя</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Свои права доступа возвращены после использования прав доступа пользователя</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неудачная попытка входа в качестве администратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешный вход в качестве администратора</strong>',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Added or edited attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Removed attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Updated attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Added extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edited extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removed extension group</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orphan File uploaded to Post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orphan Files deleted</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Excluded email from ban</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Banned user</strong> for reason "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banned email</strong> for reason "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned email</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Added new BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edited BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Deleted BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>New bot added</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Deleted bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existing bot updated</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Cleared user log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Cleared user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered email settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered visual confirmation settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Deleted post</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Locked topic</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Locked post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Moved topic</strong><br />» from %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved splitted posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Splitted posts</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Changed topic type</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Unlocked topic</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Unlocked post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Database restore</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email error</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved messages</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its messages</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its messages and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its messages, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group made default for members</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Added new imageset to database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Add new imageset on filesystem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Deleted imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Edited imageset details</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Edited imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Exported imageset</strong><br />» %s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Refreshed imageset</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder emails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP "<em>%1$s</em>" checked against session IP "<em>%2$s</em>", user browser string "<em>%3$s</em>" checked against session browser string "<em>%4$s</em>" and user X_FORWARDED_FOR string "<em>%5$s</em>" checked against session X_FORWARDED_FOR string "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic "%1$s"</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_STYLE_ADD'				=> '<strong>Added new style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Deleted style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edited style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified class <em>%2$s</em>',
	'LOG_THEME_EDIT_ADD'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Added class <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned email via user management</strong> for reason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by "%1$s" to forum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account re-activation</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User "%1$s" changed email</strong><br />» from "%2$s" to "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from "%1$s" to "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account re-activation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',
));

?>