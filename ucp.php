<?php
/** 
*
* ucp [Russian]
*
* @package language
* @version $Id: ucp.php,v 1.86 2006/11/24 14:59:13 acydburn Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Заходя на форумы «%1$s» (в дальнейшем «мы», «наш», «%1$s», «%2$s»), вы подтверждаете своё согласие со следующими условиями. Если вы не согласны с ними, пожалуйста, не заходите и не пользуйтесь форумами «%1$s». Мы оставляем за собой право изменять эти правила в любое время и сделаем всё возможное, чтобы уведомить вас об этом, однако с вашей стороны было бы разумным регулярно просматривать этот текст на предмет изменений, так как использование форумов «%1$s» после обновленния/исправленния условий означает ваше согласие с ними.<br />
	<br />
	Наши форумы работают под управлением phpBB (в дальнейшем «они», «ПО phpBB», «www.phpbb.com», «Группа phpBB», «Команды phpBB»), программного обеспечения для создания конференций, выпущенного по лицензии «<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>» (в дальнейшем «GPL»). Скачать его можно по адресу <a href="http://www.phpbb.com/">www.phpbb.com</a>. The phpBB software only facilitates Internet based discussions and the GPL strictly forbids them in what we allow and/or disallow as permissible content and/or conduct. За дополнительной информацией о phpBB обращайтесь по адресу <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, которые могут нарушить законы вашей страны, страны, которая предоставляет услуги хостинга для форумов «%1$s», или международное право. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов, при этом ваш провайдер будет поставлен в известность, если мы сочтём это нужным. IP-адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы форумов «%1$s» имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, ни администрация форумов «%1$s», ни Группа phpBB не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.
	',

	'PRIVACY_POLICY'		=> 'Это соглашение подробно объясняет, как «%1$s» и его подразделения (в дальнейшем «мы», «наш», «%1$s», «%2$s») и phpBB (в дальнейшем «они», «ПО phpBB», «www.phpbb.com», «Группа phpBB», «Команды phpBB») используют информацию, полученную во время любого из ваших пользовательских сеансов (в дальнейшем «ваша информация»).<br />
	<br />
	Ваша информация собирается двумя способами. Во-первых, просмотр «%1$s» приведёт к созданию программным обеспечением phpBB определенного числа "cookies" (небольшие текстовые файлы, загружаемые в папку временных файлов вашего браузера). Первые две "cookie" содержат только идентификатор пользователя (в дальнейшем «user-id») и идентификатор анонимного сеанса (в дальнейшем «session-id»), автоматически присвоенные вам ПО phpBB. Третья "cookie" будет создана после просмотра одной из тем на форумах «%1$s» и будет использоваться для хранения информации о прочтенных вами темах, таким образом повышая удобство работы с форумами.<br />
	<br />
	Также, во время просмотра форумов «%1$s», мы можем установить cookies, внешние по отношению к ПО phpBB, однако они выходят за рамки этого документа, целью которого является рассмотрение страниц, созданных исключительно ПО phpBB. Вторым источником получения вашей информации являются данные, которые вы отправляете на форум. Ими могут быть, но не ограничиваются: сообщения, размещенные под учётной записью Гостя (в дальнейшем «анонимные сообщения»), данные, указанные при регистрации на форумах «%1$s» (в дальнейшем «ваша учётная запись») и сообщения, оставленные вами после регистрации и авторизации (в дальнейшем «ваши сообщения»).<br />
	<br />
	Ваша учётная запись будет содержать, как минимум, однозначно идентифицируемое имя (в дальнейшем «ваше имя пользователя»), индивидуальный пароль для входа под вашей учётной записью (далее «ваш пароль») и реальный адрес email (в дальнейшем «ваш адрес email»). Ваша информация из вашей учётной записи на форумах «%1$s» охраняется законами о защите компьютерной информации, применяемыми в стране, предоставляющей нам услуги хостинга. Любая информация, запрашиваемая при регистрации на форумах «%1$s», кроме вашего имени пользователя, вашего пароля и вашего адреса email, может быть на наше усмотрение как необходимой, так и необязательной ко вводу. В любом случае у вас есть возможность выбрать, какая информация из вашей учётной записи будет общедоступна. Кроме того у вас есть возможность согласиться/отказаться от получения сообщений, автоматически сгенерированных ПО phpBB.<br />
	<br />
	Ваш пароль надежно зашифрован (односторонним хэшированием). Однако, не рекомендуется использовать этот же самый пароль, регистрируясь на других сайтах. Ваш пароль является средством доступа к вашей учётной записи на форумах «%1$s», пожалуйста, храните его в тайне, ни при каких обстоятельствах ни «%1$s», ни Группа phpBB, ни другое третье лицо не в праве спрашивать ваш пароль. В случае, если вы забудете ваш пароль к вашей учётной записи, вы сможете воспользоваться функцией восстановления пароля «Забыли пароль?», предусмотренной ПО phpBB. Вам будет необходимо ввести ваше имя пользователя и ваш адрес email, после чего ПО phpBB сгенерирует вам новый пароль для вашей учётной записи.<br />
	',
));

$lang = array_merge($lang, array(
	'CAPTCHA' =>array(
		'cells'		=> array(
			'   Введите код,    ',
			'находящийся справа,',
			'в том порядке, что ',
			'   указан слева    ',
		),
		'shape'		=> array(
			'   Введите код,    ',
			'находящийся справа,',
			'  соответствующий  ',
			' изображению слева ',
		)
	)
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Ваша учётная запись была активирована. Спасибо за регистрацию.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Ваша учётная запись была активирована.',
	'ACCOUNT_ADDED'					=> 'Спасибо за регистрацию, учётная запись была создана. Вы можете войти в систему, используя ваше имя и пароль.',
	'ACCOUNT_COPPA'					=> 'Ваша учётная запись была создана, но теперь она должна быть одобрена, более подробная информация была выслана вам по e-mail.',
	'ACCOUNT_INACTIVE'				=> 'Учётная запись была создана. На этом форуме требуется активация учётной записи, ключ для активации был выслан на введённый вами адрес. Проверьте свою почту для получения более подробной информации.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Учётная запись была создана. На этом форуме требуется активация новой учётной записи одним из администраторов. Им был отправлен e-mail, и, как только они активируют вашу учётную запись, вы получите уведомление.',
	'ACTIVATION_EMAIL_SENT'			=> 'Письмо для активации учётной записи было выслано вам по email',
	'ADD'							=> 'Добавить',
	'ADD_BCC'						=> 'Добавить [Копия]',
	'ADD_FOES'						=> 'Добавить новых недругов',
	'ADD_FOES_EXPLAIN'				=> 'Вы можете ввести несколько имён пользователей, каждое на отдельной строке',
	'ADD_FOLDER'					=> 'Добавить папку',
	'ADD_FRIENDS'					=> 'Добавить новых друзей',
	'ADD_FRIENDS_EXPLAIN'			=> 'Вы можете ввести несколько имён пользователей, каждое на отдельной строке',
	'ADD_NEW_RULE'					=> 'Добавить новое правило',
	'ADD_RULE'						=> 'Добавить правило',
	'ADD_TO'						=> 'Добавить [Кому]',
	'ADMIN_EMAIL'					=> 'Получать email от администраторов',
	'AGREE'							=> 'Я согласен с этими условиями',
	'ALLOW_PM'						=> 'Разрешить пользователям посылать вам личные сообщения',
	'ALLOW_PM_EXPLAIN'				=> 'Учтите, что администраторы и модераторы всегда смогут посылать вам сообщения.',
	'ALREADY_ACTIVATED'				=> 'Вы уже активировали свою учётную запись',
	'ATTACHMENTS_EXPLAIN'			=> 'Это список вложений к сообщениям, оставленным в этом форуме.',
	'ATTACHMENTS_DELETED'			=> 'Вложения успешно удалено.',
	'ATTACHMENT_DELETED'			=> 'Вложение успешно удалено.',
	'AVATAR_CATEGORY'				=> 'Категория',
	'AVATAR_EXPLAIN'				=> 'Максимальные размеры: ширина %1$d пикс., высота %2$d пикс., размер файла %3$dКб.',
	'AVATAR_GALLERY'				=> 'Галерея аватар',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Невозможно загрузить аватару в %s',
	'AVATAR_PAGE'					=> 'Страница',

   	'BACK_TO_DRAFTS'         		=> 'Вернуться к сохраненным черновикам',
   	'BACK_TO_LOGIN'           		=> 'Вернуться на страницу входа',
  	'BIRTHDAY'               		=> 'День рождения',
   	'BIRTHDAY_EXPLAIN'         		=> 'Если вы укажете год рождения, ваш возраст будет отображаться на форуме.', // ???
   	'BOARD_DATE_FORMAT'         	=> 'Формат даты',
	'BOARD_DATE_FORMAT_EXPLAIN'   	=> 'Синтаксис идентичен функции <a href="http://www.php.net/date">date()</a> языка PHP',
	'BOARD_DST'               		=> 'Сейчас действует летнее время',
	'BOARD_LANGUAGE'         		=> 'Язык',
	'BOARD_STYLE'            		=> 'Внешний вид форумов',
	'BOARD_TIMEZONE'         		=> 'Часовой пояс',
	'BOOKMARKS'               		=> 'Закладки',
	'BOOKMARKS_EXPLAIN'         	=> 'Вы можете добавить данную тему в закладки для будущего обращения. Установите флажок для любой закладки, которую вы хотите удалить, затем нажмите кнопку <em>Удалить отмеченные закладки</em>.',
	'BOOKMARKS_DISABLED'      		=> 'Закладки отключены на данных форумах',
	'BOOKMARKS_REMOVED'         	=> 'Закладки были успешно удалены',

	'CANNOT_EDIT_MESSAGE_TIME'  	=> 'Вы больше не можете отредактировать или удалить данное сообщение',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Сообщения не могут быть перемещены в папку, которую вы собираетесь удалить.',
	'CANNOT_RENAME_FOLDER'      	=> 'Данная папка не может быть переименована.',
	'CANNOT_REMOVE_FOLDER'      	=> 'Данная папка не может быть удалена.',
	'CHANGE_DEFAULT_GROUP'      	=> 'Изменить группу по умолчанию',
	'CHANGE_PASSWORD'         		=> 'Изменить пароль',
	'CLICK_RETURN_FOLDER'      		=> '%1$sВернуться в папку &laquo;%3$s&raquo;%2$s',
	'CONFIRMATION'            		=> 'Подтверждение регистрации',
	'CONFIRM_CHANGES'         		=> 'Подтвердите изменения',
	'CONFIRM_EMAIL'            		=> 'Подтвердите email',
	'CONFIRM_EMAIL_EXPLAIN'     	=> 'Указывайте email только если вы хотите его поменять.',
	'CONFIRM_EXPLAIN'         		=> 'Для предотвращения автоматических регистраций администратор форумов требует ввода кода подтверждения. Код показан на картинке, которая находится ниже. Если вы не видите код на картинке, то обратитесь к %sадминистратору%s.',
	'CONFIRM_PASSWORD'         		=> 'Подтвердите новый пароль',
	'CONFIRM_PASSWORD_EXPLAIN'  	=> 'Указывайте пароль только если вы изменили его выше.',
	'COPPA_BIRTHDAY'         		=> 'Для продолжения регистрации, пожалуйста, укажите дату рождения.',
	'COPPA_COMPLIANCE'         		=> 'Согласие по COPPA',
	'COPPA_EXPLAIN'            		=> 'Учтите, что ваша учётная запись будет создана после отправки формы. Тем не менее, она не будет активирована до тех пор, пока родитель или опекун не одобрит вашу регистрацию. Вам будет выслана копия email с необходимой формой и указаниями, куда её нужно отправить.',
	'CREATE_FOLDER'            		=> 'Добавить папку…',
	'CURRENT_IMAGE'            		=> 'Текущее изображение',
	'CURRENT_PASSWORD'         		=> 'Текущий пароль',
	'CURRENT_PASSWORD_EXPLAIN'  	=> 'Если вы хотите изменить имя пользователя, e-mail или пароль, вы должны указать текущий пароль.', // ???
	'CUR_PASSWORD_ERROR'      		=> 'Введённый вами пароль не совпадает с текущим паролем',
	'CUSTOM_DATEFORMAT'         	=> 'Другой…',

	'DEFAULT_ACTION'         		=> 'Действие по умолчанию',
	'DEFAULT_ACTION_EXPLAIN'   		=> 'Это действие будет выполнено, если ни одно из вышеуказанных правил не может быть применено',
	'DEFAULT_ADD_SIG'         		=> 'Всегда присоединять мою подпись',
	'DEFAULT_BBCODE'         		=> 'BBCode всегда включён',
	'DEFAULT_NOTIFY'         		=> 'Всегда сообщать мне об ответах',
	'DEFAULT_SMILIES'         		=> 'Смайлики всегда включены',
	'DEFINED_RULES'            		=> 'Определенные правила',
	'DELETED_TOPIC'            		=> 'Tема была удалена',
	'DELETE_ATTACHMENT'         	=> 'Удалить вложение',
	'DELETE_ATTACHMENTS'      		=> 'Удалить вложения',
	'DELETE_ATTACHMENT_CONFIRM' 	=> 'Вы уверены что хотите удалить данное вложение?',
	'DELETE_ATTACHMENTS_CONFIRM'	=> 'Вы уверены что хотите удалить данные вложения?',
	'DELETE_AVATAR'            		=> 'Удалить изображение',
	'DELETE_COOKIES_CONFIRM'   		=> 'Вы уверены что хотите удалить все cookie, установленные данным форумом?',
	'DELETE_MARKED_PM'         		=> 'Удалить отмеченные сообщения',
	'DELETE_MARKED_PM_CONFIRM'  	=> 'Вы уверены что хотите удалить все отмеченные соообщения?',
	'DELETE_OLDEST_MESSAGES'   		=> 'Удалить самые старые сообщения',
	'DELETE_MESSAGE'         		=> 'Удалить сообшение',
	'DELETE_MESSAGE_CONFIRM'   		=> 'Вы уверены что хотите удалить данное сообщение?',
	'DELETE_MESSAGES_IN_FOLDER' 	=> 'Удалить все сообщения, которые содержатся в удаляемой папке',
	'DELETE_RULE'            		=> 'Удалить правило',
	'DELETE_RULE_CONFIRM'      		=> 'Вы уверены что хотите удалить данное правило?',
	'DEMOTE_SELECTED'         		=> 'Отказаться от руководства',
	'DISABLE_CENSORS'         		=> 'Разрешить автоцензор',
	'DISPLAY_GALLERY'         		=> 'Показать галерею',
	'DOMAIN_NO_MX_RECORD_EMAIL' 	=> 'Введенный домен email не имеет корректной почтовой записи в DNS (MX record).',
	'DOWNLOADS'               		=> 'Скачивания',
	'DRAFTS_DELETED'         		=> 'Все отмеченные черновики были успешно удалены.',
	'DRAFTS_EXPLAIN'         		=> 'Здесь вы можете просмотреть, отредактировать и удалить ваши сохраненные черновики.',
	'DRAFT_UPDATED'            		=> 'Черновик был успешно обновлен.',
	
	'EDIT_DRAFT_EXPLAIN'      		=> 'Здесь вы можете редактировать черновик. Черновики не содержат вложений и опросов.',
	'EMAIL_BANNED_EMAIL'      		=> 'Введенный адрес email запрещен к использованию.',
	'EMAIL_INVALID_EMAIL'      		=> 'Введенный адрес email неверен.',
	'EMAIL_REMIND'            		=> 'Адрес email, указанный вами при регистрации.',
	'EMAIL_TAKEN_EMAIL'         	=> 'Введенный адрес email уже используется другим пользователем',
	'EMPTY_DRAFT'            		=> 'Вы должны ввести сообщение, чтобы подтвердить изменения',
	'EMPTY_DRAFT_TITLE'         	=> 'Вы должны ввести название черновика',
	'EXPORT_AS_XML'            		=> 'Экспортировать как XML',
	'EXPORT_AS_CSV'            		=> 'Экспортировать как CSV',
	'EXPORT_AS_CSV_EXCEL'      		=> 'Экспортировать как CSV (Excel)',
	'EXPORT_AS_TXT'            		=> 'Экспортировать как TXT',
	'EXPORT_AS_MSG'            		=> 'Экспортировать как MSG',
	'EXPORT_FOLDER'            		=> 'Экспортировать папку',

	'FIELD_REQUIRED'           			=> 'Не заполнено поле “%s”.',
	'FIELD_TOO_SHORT'          			=> 'Значение поля “%1$s” слишком короткое, минимально допустимая длина составляет %2$d символов.',
	'FIELD_TOO_LONG'           			=> 'Значение поля “%1$s” слишком длинное, максимально допустимая длина составляет %2$d символов.',
	'FIELD_TOO_SMALL'          			=> 'Значение поля “%1$s” слишком маленькое, минимально допустимым значением является %2$d.',
	'FIELD_TOO_LARGE'          			=> 'Значение поля “%1$s” слишком большое, максимально допустимым значением является %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Поле “%s” содержит недопустимые символы, разрешены только цифры.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'   	=> 'Поле “%s” содержит недопустимые символы, разрешены только буквенно-цифровые символы.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'  => 'Поле “%s” содержит недопустимые символы, разрещены только буквенно-цифровые символы, пробелы, а также символы -+_[].',
	'FIELD_INVALID_DATE'        		=> 'Поле “%s” содержит недопустимую дату.',

	'FOE_MESSAGE'            	=> 'Сообщение от недруга',
	'FOES_EXPLAIN'            	=> 'НедругиFoes are users which will be ignored by default. Posts by these users will not be fully visible and personal messages will not be permitted. Please note that you cannot ignore moderators or administrators.',
	'FOES_UPDATED'            	=> 'Списко недругов был успешно обновлен',
	'FOLDER_ADDED'            	=> 'Папка была успешно добавлена',
	'FOLDER_MESSAGE_STATUS'     => '%1$d из %2$d сообщений',
	'FOLDER_NAME_EXIST'         => 'Папка <strong>%s</strong> уже существует',
	'FOLDER_OPTIONS'         	=> 'Свойства папки',
	'FOLDER_RENAMED'         	=> 'Папка была успешно переименована',
	'FOLDER_REMOVED'         	=> 'Папка была успешно удалена',
	'FOLDER_STATUS_MSG'         => 'Папка заполнена на %1$d%% (%2$d из %3$d сообщений)',
	'FORWARD_PM'            	=> 'Переслать ЛС',
	'FORCE_PASSWORD_EXPLAIN'   	=> 'Before you may continue browsing the board you are required to change your password',
	'FRIEND_MESSAGE'         	=> 'Сообщение от друга',
	'FRIENDS'               	=> 'Друзья',
	'FRIENDS_EXPLAIN'         	=> 'Друзья Friends enable you quick access to members you communicate with frequently. If the template has relevant support any posts made by a friend may be highlighted.',
	'FRIENDS_OFFLINE'         	=> 'Вне форума',
	'FRIENDS_ONLINE'         	=> 'На форуме',
	'FRIENDS_UPDATED'         	=> 'Список друзей был успешно обновлен',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Full Folder Option changed successfully', // ???
	'FWD_ORIGINAL_MESSAGE'      => '-------- Original Message --------',
	'FWD_SUBJECT'            	=> 'Тема: %s',
	'FWD_DATE'               	=> 'Дата: %s',
	'FWD_FROM'               	=> 'От: %s',
	'FWD_TO'               		=> 'Кому: %s',

	'GLOBAL_ANNOUNCEMENT'      	=> 'Общее объявление',

	'HIDE_ONLINE'           	=> 'Скрыть мое пребывание на форуме',
	'HOLD_NEW_MESSAGES'         => 'Do not accept new messages (New messages will be held back until enough space is available)',
	'HOLD_NEW_MESSAGES_SHORT'   => 'New messages will be held back',
   
	'IF_FOLDER_FULL'			=> 'If folder is full',
	'IMPORTANT_NEWS'			=> 'Important announcements',
	'INVALID_CHARS_USERNAME'	=> 'The username contains forbidden characters.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'The password does not contain the required characters.',
	'ITEMS_REQUIRED'			=> 'The items marked with * are required profile fields and need to be filled out',

	'JOIN_SELECTED'				=> 'Join selected',

	'LANGUAGE'					=> 'Language',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Enter the URL of the location containing the Avatar image you wish to link to.',
	'LINK_REMOTE_SIZE'			=> 'Avatar dimensions',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',
	'LOGIN_EXPLAIN_UCP'			=> 'Please login in order to access the User Control Panel',
	'LOGIN_REDIRECT'			=> 'You have been successfully logged in.',
	'LOGOUT_REDIRECT'			=> 'You have been successfully logged out.',

	'MARK_IMPORTANT'				=> 'Mark as important',
	'MARKED_MESSAGE'				=> 'Marked message',
	'MAX_FOLDER_REACHED'			=> 'Maximum number of allowed user defined folder reached',
	'MESSAGE_BY_AUTHOR'				=> 'by',
	'MESSAGE_COLOURS'				=> 'Message colours',
	'MESSAGE_DELETED'				=> 'Message successfully deleted',
	'MESSAGE_HISTORY'				=> 'Message history',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'This message has been removed by it’s author before it was delivered',
	'MESSAGE_SENT_ON'				=> 'on',
	'MESSAGE_STORED'				=> 'Your message has been sent successfully',
	'MESSAGE_TO'					=> 'To',
	'MESSAGES_DELETED'				=> 'Messages successfully deleted',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Move messages from removed folder to',
	'MOVE_DOWN'						=> 'Move down',
	'MOVE_MARKED_TO_FOLDER'			=> 'Move marked to %s',
	'MOVE_PM_ERROR'					=> 'An error occurred while moving the messages to the new folder, only %1d from %2d messages were moved.',
	'MOVE_TO_FOLDER'				=> 'Move to Folder',
	'MOVE_UP'						=> 'Move up',

	'NEW_EMAIL_ERROR'				=> 'The email addresses you entered do not match.',
	'NEW_FOLDER_NAME'				=> 'New folder name',
	'NEW_PASSWORD'					=> 'New password',
	'NEW_PASSWORD_ERROR'			=> 'The passwords you entered do not match.',
	'NOTIFY_METHOD'					=> 'Notification method',
	'NOTIFY_METHOD_BOTH'			=> 'Both',
	'NOTIFY_METHOD_EMAIL'			=> 'Email only',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'				=> 'Jabber only',
	'NOTIFY_ON_PM'					=> 'Notify me on new private messages',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'You cannot add the anonymous user to your friends list.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'You cannot add users to your friends list who are on your foes list',
	'NOT_ADDED_FRIENDS_SELF'		=> 'You cannot add yourself to the friends list',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'You cannot add administrators and moderators to your foes list.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'You cannot add the anonymous user to your foes list.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'You cannot add users to your foes list who are on your friends list.',
	'NOT_ADDED_FOES_SELF'			=> 'You cannot add yourself to the foes list.',
	'NOT_AGREE'						=> 'I do not agree to these terms',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'The destination folder «%s» seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGE'				=> 'You have 1 private message currently on hold because of full folder.',
	'NOT_MOVED_MESSAGES'			=> 'You have %d private messages currently on hold because of full folder.',
	'NO_ACTION_MODE'				=> 'No message action specified.',
	'NO_AUTHOR'						=> 'No author defined for this message',
	'NO_AVATAR_CATEGORY'			=> 'None',

	'NO_AUTH_DELETE_MESSAGE'		=> 'You are not authorised to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'You are not authorised to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'You are not authorised to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'You are not authorised to send private messages to groups.',
	'NO_AUTH_READ_MESSAGE'			=> 'You are not authorised to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'			=> 'You are not authorised sending private messages.',
	'NO_AUTH_SIGNATURE'				=> 'You are not authorised to define a signature',

	'NO_BCC_RECIPIENT'			=> 'None',
	'NO_BOOKMARKS'				=> 'You have no bookmarks',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks',
	'NO_EMAIL_USER'				=> 'The email/username information submitted could not be found',
	'NO_FOES'					=> 'No foes currently defined',
	'NO_FRIENDS'				=> 'No friends currently defined',
	'NO_FRIENDS_OFFLINE'		=> 'No friends offline',
	'NO_FRIENDS_ONLINE'			=> 'No friends online',
	'NO_GROUP_SELECTED'			=> 'No group specified',
	'NO_IMPORTANT_NEWS'			=> 'No important announcements present',
	'NO_MESSAGE'				=> 'Private Message could not be found',
	'NO_NEW_FOLDER_NAME'		=> 'You have to specify a new folder name',
	'NO_NEWER_PM'				=> 'No newer messages',
	'NO_OLDER_PM'				=> 'No older messages',
	'NO_RECIPIENT'				=> 'No recipient defined',
	'NO_RULES_DEFINED'			=> 'No rules defined',
	'NO_SAVED_DRAFTS'			=> 'No drafts saved',
	'NO_TO_RECIPIENT'			=> 'None',
	'NO_WATCHED_FORUMS'			=> 'You are not watching any forums.',
	'NO_WATCHED_TOPICS'			=> 'You are not watching any topics.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain alphanumerics',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must be mixed case',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain symbols',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated',
	'PASSWORD_UPDATED'			=> 'Your password has been sent successfully to your original email address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERED'	=> 'Successfully transfered permissions from <strong>%s</strong>, you are now able to browse the forum with the users permissions.<br />Please note that admin permissions were not transfered. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board',
	'PM_FROM'					=> 'From',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'PM icon',
	'PM_INBOX'					=> 'Inbox',
	'PM_OUTBOX'					=> 'Outbox',
	'PM_SENTBOX'				=> 'Sent Messages',
	'PM_SUBJECT'				=> 'Message subject',
	'PM_TO'						=> 'Send to',
	'POPUP_ON_PM'				=> 'Pop up window on new private message',
	'POST_EDIT_PM'				=> 'Edit message',
	'POST_FORWARD_PM'			=> 'Forward message',
	'POST_NEW_PM'				=> 'Post message',
	'POST_PM_LOCKED'			=> 'Private Messaging is locked',
	'POST_PM_POST'				=> 'Quote post',
	'POST_QUOTE_PM'				=> 'Quote message',
	'POST_REPLY_PM'				=> 'Reply to message',
	'PRINT_PM'					=> 'Print View',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'Please note that this information will be viewable to other members. Be careful when including any personal details. Any fields marked with a * must be completed.',
	'PROFILE_UPDATED'			=> 'Your profile has been updated.',

	'RECIPIENT'							=> 'Recipient',
	'RECIPIENTS'						=> 'Recipients',
	'REGISTRATION'						=> 'Registration',
	'RELATIVE_DAYS'						=> 'Relative days',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropiate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'Remove address',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Remove selected bookmarks',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Are you sure you want to delete all selected bookmarks?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Remove marked bookmarks',
	'REMOVE_FOLDER'						=> 'Remove folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Are you sure you want to remove this folder?',
	'RENAME'							=> 'Rename',
	'RENAME_FOLDER'						=> 'Rename folder',
	'REPLIED_MESSAGE'					=> 'Replied to message',
	'RESIGN_SELECTED'					=> 'Resign selected',
	'RETURN_FOLDER'						=> '%1$sReturn to previous folder%2$s',
	'RETURN_UCP'						=> '%sReturn to the User Control Panel%s',
	'RULE_ADDED'						=> 'Rule successfully added',
	'RULE_ALREADY_DEFINED'				=> 'This rule was defined previously',
	'RULE_DELETED'						=> 'Rule successfully removed',
	'RULE_NOT_DEFINED'					=> 'Rule not correctly specified',
	'RULE_REMOVED_MESSAGE'				=> 'One private message had been removed due to private message filters.',
	'RULE_REMOVED_MESSAGES'				=> '%d private messages were removed due to private message filters.',

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password',
	'SEARCH_YOUR_POSTS'			=> 'Show your posts',
	'SEND_PASSWORD'				=> 'Send password',
	'SENT_AT'					=> 'Sent at',
	'SHOW_EMAIL'				=> 'Users can contact me by email',
	'SIGNATURE_EXPLAIN'			=> 'This is a block of text that can be added to posts you make. There is a %d character limit',
	'SIGNATURE_PREVIEW'			=> 'Your signature will appear like this in posts',
	'SIGNATURE_TOO_LONG'		=> 'Your signature is too long.',
	'SORT'						=> 'Sort',
	'SORT_COMMENT'				=> 'File comment',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Filename',
	'SORT_POST_TIME'			=> 'Post time',
	'SORT_SIZE'					=> 'Filesize',

	'TIMEZONE'					=> 'Timezone',
	'TO'						=> 'To',
	'TOO_MANY_RECIPIENTS'		=> 'Too many recipients',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'User Control Panel',
	'UCP_ACTIVATE'				=> 'Activate account',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will receive an email at the address you specified.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Attachments',
	'UCP_COPPA_BEFORE'			=> 'Before %s',
	'UCP_COPPA_ON_AFTER'		=> 'On or After %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. You will recieve an email at the address you provide that contains an account activation link.',
	'UCP_ICQ'					=> 'ICQ number',
	'UCP_JABBER'				=> 'Jabber address',

	'UCP_MAIN'					=> 'Overview',
	'UCP_MAIN_ATTACHMENTS'		=> 'Manage attachments',
	'UCP_MAIN_BOOKMARKS'		=> 'Manage bookmarks',
	'UCP_MAIN_DRAFTS'			=> 'Manage drafts',
	'UCP_MAIN_FRONT'			=> 'Front page',
	'UCP_MAIN_SUBSCRIBED'		=> 'Manage subscriptions',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'You have posted no files',

	'UCP_PREFS'					=> 'Forum preferences',
	'UCP_PREFS_PERSONAL'		=> 'Edit global settings',
	'UCP_PREFS_POST'			=> 'Edit posting defaults',
	'UCP_PREFS_VIEW'			=> 'Edit display options',
	
	'UCP_PM'					=> 'Private messages',
	'UCP_PM_COMPOSE'			=> 'Compose message',
	'UCP_PM_DRAFTS'				=> 'Manage PM drafts',
	'UCP_PM_OPTIONS'			=> 'Edit options',
	'UCP_PM_POPUP'				=> 'Private messages',
	'UCP_PM_POPUP_TITLE'		=> 'Private message popup',
	'UCP_PM_UNREAD'				=> 'Unread messages',
	'UCP_PM_VIEW'				=> 'View messages',

	'UCP_PROFILE'				=> 'Profile',
	'UCP_PROFILE_AVATAR'		=> 'Edit avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Edit profile',
	'UCP_PROFILE_REG_DETAILS'	=> 'Edit account settings',
	'UCP_PROFILE_SIGNATURE'		=> 'Edit signature',

	'UCP_USERGROUPS'			=> 'Usergroups',
	'UCP_USERGROUPS_MEMBER'		=> 'Edit memberships',
	'UCP_USERGROUPS_MANAGE'		=> 'Manage groups',

	'UCP_REGISTER_DISABLE'			=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'					=> 'Send password',
	'UCP_RESEND'					=> 'Send activation email',
	'UCP_WELCOME'					=> 'Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Friends &amp; Foes',
	'UCP_ZEBRA_FOES'				=> 'Manage foes',
	'UCP_ZEBRA_FRIENDS'				=> 'Manage friends',
	'UNKNOWN_FOLDER'				=> 'Unknown folder',
	'UNWATCH_MARKED'				=> 'Unwatch marked',
	'UPLOAD_AVATAR_FILE'			=> 'Upload from your machine',
	'UPLOAD_AVATAR_URL'				=> 'Upload from a URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Enter the URL of the location containing the image, it will be copied to this site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only alphanumeric characters',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use alphanumeric, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Length must be between %1$d and %2$d characters.',
	'USERNAME_TAKEN_USERNAME'		=> 'The username you entered is already in use, please select an alternative.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'The username you entered has been banned.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'The usernames you specified could either not be found or are not activated users.',

	'VIEW_AVATARS'				=> 'Display avatars',
	'VIEW_EDIT'					=> 'View/Edit',
	'VIEW_FLASH'				=> 'Display Flash animations',
	'VIEW_IMAGES'				=> 'Display images within posts',
	'VIEW_NEXT_HISTORY'			=> 'Next PM in history',
	'VIEW_NEXT_PM'				=> 'Next PM',
	'VIEW_PM'					=> 'View message',
	'VIEW_PM_INFO'				=> 'Message details',
	'VIEW_PM_MESSAGE'			=> '1 message',
	'VIEW_PM_MESSAGES'			=> '%d messages',
	'VIEW_PREVIOUS_HISTORY'		=> 'Previous PM in history',
	'VIEW_PREVIOUS_PM'			=> 'Previous PM',
	'VIEW_SIGS'					=> 'Display signatures',
	'VIEW_SMILIES'				=> 'Display smileys as images',
	'VIEW_TOPICS_DAYS'			=> 'Display topics from previous days',
	'VIEW_TOPICS_DIR'			=> 'Display topic order direction',
	'VIEW_TOPICS_KEY'			=> 'Display topics ordering by',
	'VIEW_POSTS_DAYS'			=> 'Display posts from previous days',
	'VIEW_POSTS_DIR'			=> 'Display post order direction',
	'VIEW_POSTS_KEY'			=> 'Display posts ordering by',

	'WATCHED_EXPLAIN'			=> 'Below is a list of forums and topics you are subscribed to. You will be notified of new posts in either. To unsubscribe mark the forum or topic and then press the <em>Unwatch marked</em> button.',
	'WATCHED_FORUMS'			=> 'Watched forums',
	'WATCHED_TOPICS'			=> 'Watched topics',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database',

	'YOUR_DETAILS'				=> 'Your activity',
	'YOUR_FOES'					=> 'Your foes',
	'YOUR_FOES_EXPLAIN'			=> 'To remove usernames select them and click submit',
	'YOUR_FRIENDS'				=> 'Your friends',
	'YOUR_FRIENDS_EXPLAIN'		=> 'To remove usernames select them and click submit',
	'YOUR_WARNINGS'				=> 'Your warning level',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Place into folder',
		'MARK_AS_READ'		=> 'Mark as read',
		'MARK_AS_IMPORTANT'	=> 'Mark message',
		'DELETE_MESSAGE'	=> 'Delete message'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Subject',
		'SENDER'	=> 'Sender',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Message status',
		'TO'		=> 'Sent To'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'is like',
		'IS_NOT_LIKE'	=> 'is not like',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is not',
		'BEGINS_WITH'	=> 'begins with',
		'ENDS_WITH'		=> 'ends with',
		'IS_FRIEND'		=> 'is friend',
		'IS_FOE'		=> 'is foe',
		'IS_USER'		=> 'is user',
		'IS_GROUP'		=> 'is in usergroup',
		'ANSWERED'		=> 'answered',
		'FORWARDED'		=> 'forwarded',
		'TO_GROUP'		=> 'to my default usergroup',
		'TO_ME'			=> 'to me'
	),


	'GROUPS_EXPLAIN'	=> 'Usergroups enable board admins to better administer users. By default you will be placed in a specific group, this is your default group. This group defines how you may appear to other users, for example your username colouration, avatar, rank, etc. Depending on whether the administrator allows it you may be allowed to change your default group. You may also be placed in or allowed to join other groups. Some groups may give you extra rights to view content or increase your capabilities in other areas.',
	'GROUP_LEADER'		=> 'Leaderships',
	'GROUP_MEMBER'		=> 'Memberships',
	'GROUP_PENDING'		=> 'Pending memberships',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'Group details',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));

?>