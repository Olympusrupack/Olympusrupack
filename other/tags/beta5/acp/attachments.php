<?php
/** 
*
* acp_attachments [English]
*
* @package language
* @version $Id: attachments.php,v 1.21 2007/01/21 18:33:45 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Здесь вы можете настроить основные параметры для вложений и связанных с ними специальных категорий.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Здесь вы можете добавить, удалить, изменить или отключить группы расширений. Также можно назначить им специальную категорию, изменить механизм скачивания, определить значок, который будет отображаться перед вложением, принадлежащим к группе.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Здесь вы можете управлять разрешёнными расширениями. Для активации расширений обратитесь к разделу Управление группами расширений. Мы настоятельно рекомендуем не разрешать расширения скриптов (такие, как <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, и так далее…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Здесь вы можете видеть файлы, находящиеся в папке для закачки вложений, но не прикреплённые к сообщениям. Обычно это происходит, когда пользователи прикрепляют файл, но не отправляют сообщение. Вы можете удалить такие файлы или прикрепить их к уже существующим сообщениям. Во втором случае вам вам потребуется правильный номер сообщения (ID), который вы должны определить самостоятельно. Эта возможность главным образом подходит тем, кто желает закачивать файлы (обычно больших размеров) с помощью сторонних программ и прикреплять их к уже существующим сообщениям.',
	'ADD_EXTENSION'						=> 'Добавить расширение',
	'ADD_EXTENSION_GROUP'				=> 'Добавить группу расширений',
	'ADMIN_UPLOAD_ERROR'				=> 'Ошибки при попытке прикрепления файла: %s',
	'ALLOWED_FORUMS'					=> 'Разрешённые форумы',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Разрешено добавлять вложения с назначенными расширениями в выбранных (или во всех при их выборе) форумах',
	'ALLOW_ATTACHMENTS'					=> 'Разрешить расширения',
	'ALLOW_ALL_FORUMS'					=> 'Разрешить все форумы',
	'ALLOW_IN_PM'						=> 'Разрешено в личных сообщениях',
	'ALLOW_PM_ATTACHMENTS'				=> 'Разрешить вложения в личных сообщениях',
	'ALLOW_SELECTED_FORUMS'				=> 'Только выбранные ниже форумы',
	'ASSIGNED_EXTENSIONS'				=> 'Назначенные расширения',
	'ASSIGNED_GROUP'					=> 'Назначенная группа расширений',
	'ATTACH_EXTENSIONS_URL'				=> 'Расширения',
	'ATTACH_EXT_GROUPS_URL'				=> 'Группы расширений',
	'ATTACH_MAX_FILESIZE'				=> 'Максимальный размер файла',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимальный размер каждого файла, 0 означает неограниченный размер.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимальный размер файлов в личных сообщениях',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимальный размер дискового пространства, доступный каждому пользователю для вложений в личных сообщениях, 0 означает неограниченный размер.',
	'ATTACH_ORPHAN_URL'					=> 'Файлы, не вложенные в сообщения',
	'ATTACH_POST_ID'					=> 'Номер (ID) сообщения',
	'ATTACH_QUOTA'						=> 'Общая квота для вложений',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимальный размер дискового пространства, доступный для вложений на всей конференции, 0 означает неограниченный размер.',
	'ATTACH_TO_POST'					=> 'Прикрепить файл к сообщению',

	'CAT_FLASH_FILES'			=> 'Файлы flash',
	'CAT_IMAGES'				=> 'Изображения',
	'CAT_QUICKTIME_FILES'		=> 'Медиафайлы Quicktime',
	'CAT_RM_FILES'				=> 'Медиафайлы RealMedia',
	'CAT_WM_FILES'				=> 'Медиафайлы Windows Media',
	'CREATE_GROUP'				=> 'Создать группу',
	'CREATE_THUMBNAIL'			=> 'Создавать миниатюру',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Всегда создавать миниатюру.',

	'DEFINE_ALLOWED_IPS'			=> 'Разрешить IP-адреса/хосты',
	'DEFINE_DISALLOWED_IPS'			=> 'Запретить IP-адреса/хосты',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Чтобы указать несколько различных IP-адресов или хостов, задайте каждый из них в отдельной строке. Чтобы указать диапазон IP-адресов, разделите его начало и конец дефисом (-), используйте * для маски',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Вы можете удалить (или удалить из исключённых) несколько IP-адресов сразу, используя подходящее для ваших компьютера и браузера сочетание мыши и клавиатуры. Исключённые IP-адреса отображаются на синем фоне.',
	'DISPLAY_INLINED'				=> 'Показывать изображения в тексте сообщений',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Нет означает, что изображения будут показаны в виде ссылок.',
	'DISPLAY_ORDER'					=> 'Порядок отображения вложений',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Показывать вложения по дате добавления.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Редактировать группу расширений',
	'EXCLUDE_ENTERED_IP'			=> 'Включите для исключения заданного IP-адреса/хоста.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Исключить IP-адрес из разрешённых IP-адресов/хостов',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Исключить IP-адрес из запрещённых IP-адресов/хостов',
	'EXTENSIONS_UPDATED'			=> 'Расширения успешно обновлены',
	'EXTENSION_EXIST'				=> 'Расширение %s уже существует',
	'EXTENSION_GROUP'				=> 'Группа расширений',
	'EXTENSION_GROUPS'				=> 'Группы расширений',
	'EXTENSION_GROUP_DELETED'		=> 'Группа расширений успешно удалена.',
	'EXTENSION_GROUP_EXIST'			=> 'Группа расширений %s уже существует',

	'GO_TO_EXTENSIONS'		=> 'Перейти к экрану управлений группами',
	'GROUP_NAME'			=> 'Имя группы',

	'IMAGE_LINK_SIZE'			=> 'Размер изображения для показа в виде ссылки',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Показывать изображения в виде ссылок, если их размеры больше указанного. Для отключения этой возможности установите значения 0 пикс. на 0 пикс.',
	'IMAGICK_PATH'				=> 'Путь к Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Полный путь к приложению imagemagick, например <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Максимум вложений в сообщении',
	'MAX_ATTACHMENTS_PM'			=> 'Максимум вложений в личном сообщении',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимальный размер файла',
	'MAX_IMAGE_SIZE'				=> 'Максимальные размеры изображения',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимальные размеры вложенных изображений. Установите обе значения 0 пикс. на 0 пикс. для отключения проверки размеров.',
	'MAX_THUMB_WIDTH'				=> 'Максимальная ширина миниатюры в пикселах',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Ширина созданной миниатюры будет не больше указанной',
	'MIN_THUMB_FILESIZE'			=> 'Минимальный размер файла миниатюры',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не создавать миниатюру, если файл изображения меньше указанного.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Запрещено в личных сообщениях',
	'NOT_ASSIGNED'				=> 'Не назначено',
	'NO_EXT_GROUP'				=> 'Нет',
	'NO_EXT_GROUP_NAME'			=> 'Не задано имя группы',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Не указана группа расширений.',
	'NO_FILE_CAT'				=> 'Нет',
	'NO_IMAGE'					=> 'Нет изображения',
	'NO_THUMBNAIL_SUPPORT'		=> 'Поддержка миниатюр была отключена из-за того, что поддержка библиотеки GD отсутствует и приложение imagemagick не удалось обнаружить.',
	'NO_UPLOAD_DIR'				=> 'Указанная папка для закачки не существует.',
	'NO_WRITE_UPLOAD'			=> 'В указанную папку для закачки невозможно осуществить запись. Измените права доступа, разрешив веб-серверу запись в неё.',

	'ONLY_ALLOWED_IN_PM'	=> 'Разрешено только в личных сообщениях',
	'ORDER_ALLOW_DENY'		=> 'Разрешить',
	'ORDER_DENY_ALLOW'		=> 'Запретить',

	'REMOVE_ALLOWED_IPS'		=> 'Удалить или удалить из исключённых <em>разрешённые</em> IP-адреса/хосты',
	'REMOVE_DISALLOWED_IPS'		=> 'Удалить или удалить из исключённых <em>запрещённые</em> IP-адреса/хосты',

	'SEARCH_IMAGICK'				=> 'Найти Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Список разрешённых/запрещённых',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Изменить список разрешённых/запрещённых, если разрешены безопасные скачивания, на <strong>белый список</strong> (Разрешить) или <strong>чёрный список</strong> (Запретить)',
	'SECURE_DOWNLOADS'				=> 'Включить безопасные скачивания',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Если включено, скачивания будут ограничены для определённых вами IP-адресов/хостов.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Безопасные скачивания не включены. Настройки ниже будут применены после включения безопасных скачиваний.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Список IP-адресов успешно обновлён.',
	'SECURE_EMPTY_REFERRER'			=> 'Разрешить пустые переходные ссылки',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Безопасные скачивания основаны на переходных ссылках (referrers). Желаете ли вы разрешить скачивания при отсутствующей переходной ссылке?',
	'SETTINGS_CAT_IMAGES'			=> 'Настройки категории изображений',
	'SPECIAL_CATEGORY'				=> 'Специальная категория',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Специальные категории отличаются по способу представления в сообщениях.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успешно загружено',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Группа расширений успешно добавлена',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'группа расширений успешно обновлена',

	'UPLOADING_FILES'				=> 'Закачка файлов',
	'UPLOADING_FILE_TO'				=> 'Закачка файла «%1$s» в сообщение номер %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'У вас нет прав на закачку файлов в форум «%s»',
	'UPLOAD_DIR'					=> 'Папка для закачки',
	'UPLOAD_DIR_EXPLAIN'			=> 'Путь для хранения вложений.',
	'UPLOAD_ICON'					=> 'Значок закачки',
	'UPLOAD_NOT_DIR'				=> 'Указанный путь для закачки не является папкой.',
));

?>