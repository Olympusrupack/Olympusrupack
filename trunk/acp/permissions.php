<?php
/** 
*
* acp_permissions [Russian]
*
* @package language
* @version $Id: permissions.php,v 1.26 2007/01/24 00:58:45 shs Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Права доступа детализированы и сгруппированы в следующие четыре основных раздела:</p>

		<h2>Глобальные права доступа</h2>
		<p>Они используются для контроля доступа на глобальном уровне и применяются в целом к конференции. Далее они разделены на Права пользователей, Права групп, Администраторы и Супермодераторы.</p>

		<h2>Локальные права доступа</h2>
		<p>Они используются для контроля доступа на уровне форумов. Далее они разделены на Доступ к форумам, Модераторы форумов, Форумные права пользователей, Форумные права групп.</p>

		<h2>Роли</h2>
		<p>Они используются для создания типичного набора прав различного доступа, чтобы в дальнейшем можно было назначать права, основанные на ролевом доступе. Роли по умолчанию должны целиком перекрываться правами администратора конференции, хотя в пределах каждого из четырех разделов вы можете добавлять/редактировать/удалять роли так, как считаете целесообразным.</p>

		<h2>Маски прав доступа</h2>
		<p>Они используются для просмотра действующих прав доступа, назначенных для Пользователей, Модераторов (локальных и супермодераторов), Администраторов и Форумов (локальные права).</p>
	
		<br />

		<p>Для более подробной информации по установкам и управлению правами доступа на вашей конференции phpBB3 смотрите <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Никогда',
	'ACL_SET'				=> 'Настройки прав доступа',
	'ACL_SET_EXPLAIN'		=> 'Права доступа основаны на простой системе <samp>ДА</samp>/<samp>НЕТ</samp>. Установление значения  <samp>НИКОГДА</samp> для пользователя или группы означает игнорирование любых иных значений, установленных по данной опции. Если вы не хотите устанавливать право по опции для данного пользователя или группы выберите <samp>НЕТ</samp>. Если значения по опции установленны где-нибудь еще, они могут иметь более высокий приоритет, если не установлено <samp>НИКОГДА</samp>. Все отмеченные чекбоксы (перед вами) отображают установленные вами права доступа.',
	'ACL_SETTING'			=> 'Настройки',

	'ACL_TYPE_A_'			=> 'Права доступа администратора',
	'ACL_TYPE_F_'			=> 'Доступ к форумам',
	'ACL_TYPE_M_'			=> 'Права доступа модератора',
	'ACL_TYPE_U_'			=> 'Права доступа пользователя',

	'ACL_TYPE_GLOBAL_A_'	=> 'Администратор',
	'ACL_TYPE_GLOBAL_U_'	=> 'Права доступа пользователя',
	'ACL_TYPE_GLOBAL_M_'	=> 'Супермодератор',
	'ACL_TYPE_LOCAL_M_'		=> 'Модератор форума',
	'ACL_TYPE_LOCAL_F_'		=> 'Форумные права доступа',
	
	'ACL_NO'				=> 'Нет',
	'ACL_VIEW'				=> 'Просмотр прав доступа',
	'ACL_VIEW_EXPLAIN'		=> 'Здесь вы можете видеть действующие права доступа для пользователя/группы. Красный цвет обозначает отсутствие права у пользователя/группы, зеленый цвет обозначает наличие права у пользователя/группы.',
	'ACL_YES'				=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Здесь вы можете назначить права администратора пользователям или группам. Все пользователи с правами администратора могут просматривать Администраторский раздел.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Здесь вы можете назначать пользователей или группы модераторами форумов. Для назначения прав доступа к форумам, определения прав супермодератора и администратора используйте соответствующий раздел.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете изменять для каждого пользователя или группы доступ к каждому форуму. Для назначения модераторов или определения прав администратора используйте соответствующий раздел.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Здесь вы можете можете назначать права супермодератора пользователям или группам. Супермодераторы подобны обычным модераторам, но кроме того они имеют доступ ко всем форумам конференции.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначать форумные права групп.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Здесь вы можете определять глобальные права доступа для групп - права пользователей, права супермодераторов, права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях, преимущественный метод заключается в помещении пользователей в группы и назначении прав группам.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять администраторскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять форумными ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Здесь вы можете управлять модераторскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять пользовательскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначить пользователям права доступа на форумы.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете определять глобальные права доступа для пользователей - права пользователей, права супермодераторов, права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях, преимущественный метод заключается в помещении пользователей в группы и назначении прав группам.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете просмотреть действующие администраторские права доступа для выбранных пользователей/групп',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Здесь вы можете просмотреть действующие супермодераторские права доступа для выбранных пользователей/групп',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете просмотреть действующие локальные права доступа для выбранных пользователей/групп и форумов',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Здесь вы можете просмотреть действующие модераторские права доступа для выбранных пользователей/групп и форумов',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Здесь вы можете просмотреть действующие пользовательские права доступа для выбранных пользователей/групп',

	'ADD_GROUPS'				=> 'Добавить группы',
	'ADD_PERMISSIONS'			=> 'Добавить права',
	'ADD_USERS'					=> 'Добавить пользователей',
	'ADVANCED_PERMISSIONS'		=> 'Расширенные права',
	'ALL_GROUPS'				=> 'Выбрать все группы',
	'ALL_NEVER'					=> 'Все <samp>НИКОГДА</samp>',
	'ALL_NO'					=> 'Все <samp>НЕТ</samp>',
	'ALL_USERS'					=> 'Выбрать всех пользователей',
	'ALL_YES'					=> 'Все <samp>ДА</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Применить все права',
	'APPLY_PERMISSIONS'			=> 'Применить права',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Права доступа и роль, определенные для данного объекта, будут применены только к этому объекту и всем проверенным объектам.', // ???
	'AUTH_UPDATED'				=> 'Права доступа обновлены.',

	'CREATE_ROLE'				=> 'Создать роль',
	'CREATE_ROLE_FROM'			=> 'Использовать настройки от…',
	'CUSTOM'					=> 'Custom…', //не ясен контекст

	'DEFAULT'					=> 'По умолчанию',
	'DELETE_ROLE'				=> 'Удалить роль',
	'DELETE_ROLE_CONFIRM'		=> 'Вы уверены, что хотите удалить эту роль? Объекты с данной ролью <strong>не</strong> потеряют определенные ею настройки прав доступа.',
	'DISPLAY_ROLE_ITEMS'		=> 'Просмотреть объекты с данной ролью',

	'EDIT_PERMISSIONS'			=> 'Редактировать права',
	'EDIT_ROLE'					=> 'Редактировать роль',

	'GROUPS_NOT_ASSIGNED'		=> 'Нет групп с данной ролью',

	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Вы можете выбрать более одного форума',
	'LOOK_UP_GROUP'				=> 'Выбор группы',
	'LOOK_UP_USER'				=> 'Выбор пользователя',

	'MANAGE_GROUPS'		=> 'Управление группами',
	'MANAGE_USERS'		=> 'Управление пользователями',

	'NO_AUTH_SETTING_FOUND'		=> 'Настройки прав доступа не определены.',
	'NO_ROLE_ASSIGNED'			=> 'Ни одна роль не назначена…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Настройки для данной роли не изменяют прав доступа (справа). Если вы хотите сбросить/удалить все права доступа, вы должны использовать ссылку “Все <samp>НЕТ</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Роли недоступны',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Дайте название роли.',
	'NO_ROLE_SELECTED'			=> 'Роль не найдена.',
	'NO_USER_GROUP_SELECTED'	=> 'Вы не выбрали пользователя или группу.',

	'ONLY_FORUM_DEFINED'	=> 'Вы определили только форум. Выберите, по крайней мере, одного пользователя или группу.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS'				=> '+Подфорумы',

	'REMOVE_PERMISSIONS'			=> 'Удалить права доступа',
	'REMOVE_ROLE'					=> 'Удалить роль',
	'ROLE'							=> 'Роль',
	'ROLE_ADD_SUCCESS'				=> 'Роль успешно добавлена.',
	'ROLE_ASSIGNED_TO'				=> 'Пользователям/Группам назначена %s',
	'ROLE_DELETED'					=> 'Роль успешно удалена.',
	'ROLE_DESCRIPTION'				=> 'Описание роли',

	'ROLE_ADMIN_FORUM'			=> 'Администратор форума',
	'ROLE_ADMIN_FULL'			=> 'Администратор конференции',
	'ROLE_ADMIN_STANDARD'		=> 'Администратор',
	'ROLE_ADMIN_USERGROUP'		=> 'Администратор пользователей и групп',
	'ROLE_FORUM_BOT'			=> 'Доступ для бота',
	'ROLE_FORUM_FULL'			=> 'Полный доступ',
	'ROLE_FORUM_LIMITED'		=> 'Ограниченный доступ',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ограниченный доступ + Опросы',
	'ROLE_FORUM_NOACCESS'		=> 'Нет доступа',
	'ROLE_FORUM_ONQUEUE'		=> 'С предварительным одобрением',
	'ROLE_FORUM_POLLS'			=> 'Стандартный доступ + Опросы',
	'ROLE_FORUM_READONLY'		=> 'Доступ только для чтения',
	'ROLE_FORUM_STANDARD'		=> 'Стандартный доступ',
	'ROLE_MOD_FULL'				=> 'Супермодератор',
	'ROLE_MOD_QUEUE'			=> 'Модератор одобрения', //???
	'ROLE_MOD_SIMPLE'			=> 'Младший модератор', //???
	'ROLE_MOD_STANDARD'			=> 'Модератор',
	'ROLE_USER_FULL'			=> 'Все возможности',
	'ROLE_USER_LIMITED'			=> 'Ограниченные возможности',
	'ROLE_USER_NOAVATAR'		=> 'Без аватары',
	'ROLE_USER_NOPM'			=> 'Без личных сообщений',
	'ROLE_USER_STANDARD'		=> 'Стандартные возможности',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Имеет доступ к управлению форумом и настройкам форумных прав доступа.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Имеет доступ ко всем администраторским функциям на конференции.<br />Не рекомендовано.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Имеет доступ к большинству администраторских возможностей, но не может использовать инструменты изменения системных настроек и конфигурации сервера.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Может управлять группами и пользователями: изменять настройки прав доступа, установки, управлять блокировкой и званиями.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Эта роль рекомендована для ботов и поисковиков.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Доступ к использованию всех возможностей на форуме, включая создание объявлений и прилепленных тем. Также возможность игнорирования флуд-контроля.<br />Не рекомендуется для обычных пользователей.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Доступ к обычным возможностям на форуме, за исключением прикрепления вложений или использования значков сообщений.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Аналогично ограниченному доступу, но с возможностью создания опросов.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Отсутствие доступа, в том числе возможности видеть форум.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений, но создаваемые сообщения и темы требуют предварительного одобрения модератором.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Аналогично стандартному доступу, но с возможностью создавать опросы.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Доступ к чтению форума, но без возможности создавать новые темы или отвечать на сообщения.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений, но без права создавать опросы, закрывать или удалять собственные темы.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Может использовать все модераторские возможности, включая блокировку пользователей.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Может осуществлять только предварительное одобрение и правку сообщений.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Может выполнять только основные действия в темах. Не может объявлять предупреждения или совершать предварительное одобрение сообщений.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Может использовать большинство модераторских возможностей, но не имеет доступа к блокировке пользователей или смене автора сообщения.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Может использовать все доступные на форуме возможности для пользователя, включая смену имени или игнорирование флуд-контроля.<br />Не рекомендовано.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Имеет доступ к обычным возможностям для пользователя. Прикрепление вложений, отсылка emails-сообщений или мгновенных сообщений недоступны.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Имеет ограниченные возможности, не может использовать аватару.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Имеет ограниченные возможности, не имеет доступа к личным сообщениям.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Имеет доступ к большинству, но не ко всем возможностям для пользователя. Например, не может изменять имя или игнорировать флуд-контроль.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Вы можете ввести краткое описание роли. Текст, который вы здесь введёте, будет отображен как описание роли в перечне ролей.',
	'ROLE_DESCRIPTION_LONG'			=> 'Описание роли слишком длинное, ограничте до 4000 символов.',
	'ROLE_DETAILS'					=> 'Role details',
	'ROLE_EDIT_SUCCESS'				=> 'Роль успешно изменена.',
	'ROLE_NAME'						=> 'Название роли',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Название роли <strong>%s</strong> уже существует для данного набора прав доступа.',
	'ROLE_NOT_ASSIGNED'				=> 'Рольне не была назначена.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Выбранный форум(ы) не существует.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Выбранная группа(ы) не существует.',
	'SELECTED_USER_NOT_EXIST'		=> 'Выбранный пользователь(ли) не существует.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Выбранный вами здесь форум включает все подворумы',
	'SELECT_ROLE'					=> 'Выбор роли…',
	'SELECT_TYPE'					=> 'Выбрать тип',
	'SET_PERMISSIONS'				=> 'Установить права',
	'SET_ROLE_PERMISSIONS'			=> 'Установить права по роли',
	'SET_USERS_PERMISSIONS'			=> 'Установить пользовательские права',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Установить локальные права',

	'TRACE_DEFAULT'					=> 'By default every permission is <samp>NO</samp> (unset). So the permission can be overwritten by other settings.',
	'TRACE_FOR'						=> 'Trace for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'This group’s permission is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'This group’s permission is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NO'				=> 'The permission is <samp>NO</samp> for this group so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'This group’s permission is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'This group’s permission is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_PERMISSION'				=> 'Trace permission - %s',
	'TRACE_SETTING'					=> 'Trace setting',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',
	'TRACE_USER_FOUNDER'					=> 'The user has the founder type set, therefore admin permissions are set to <samp>YES</samp> by default.',
	'TRACE_USER_KEPT'						=> 'The user permission is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'The user permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'The user permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'The user permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO'								=> 'Who',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'No user assigned to this role',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'is a member of the following default groups',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'is a member of the following custom groups',

	'VIEW_ASSIGNED_ITEMS'	=> 'View assigned items',
	'VIEW_LOCAL_PERMS'		=> 'Local permissions',
	'VIEW_GLOBAL_PERMS'		=> 'Global permissions',
	'VIEW_PERMISSIONS'		=> 'View permissions',

	'WRONG_PERMISSION_TYPE'	=> 'Wrong permission type selected.',
));

?>