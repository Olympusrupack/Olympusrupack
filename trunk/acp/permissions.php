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
		<p>Права доступа сильно детализированы и сгруппированы в следующие четыре основных раздела:</p>

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
	'ACL_SET'				=> 'Установки прав доступа',
	'ACL_SET_EXPLAIN'		=> 'Права доступа основаны на простой <samp>Да</samp>/<samp>Нет</samp> системе. Установление значения  <samp>Никогда</samp> для пользователя или группы означает игнорирование любых иных значений установленных по данной опции. Если вы не хотите устанавливать право по опции для данного пользователя или группы выберите <samp>Нет</samp>. Если значения по опции установленны где-нибудь еще, они могут иметь более высокий приоритет, если не установлено <samp>Никогда</samp>. Все отмеченные чекбоксы (перед вами) отображают установленные вами права доступа.',
	'ACL_SETTING'			=> 'Установки',

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
	'ACL_VIEW_EXPLAIN'		=> 'Здесь вы можете видеть действующие права доступа для пользователя/группы. Красный цвет обозначает отсуствие права у пользователя/группы, зеленый цвет обозначает наличие права у пользователя/группы.',
	'ACL_YES'				=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Здесь вы можете назначить права администратора пользователям или группам. Все пользователи с правами администратора могут просматривать Администраторский раздел.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Здесь вы можете назначать пользователей или группы модераторами форумов. Для назначения прав доступа к форумам, определения прав супермодератора и администратора используйте соответствующий раздел.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете изменять для каждого пользователя или группы доступ к каждому форуму. Для назначения модераторов или определения прав администратора используйте соответствующий раздел.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Здесь вы можете можете назначать права супермодератора пользователям или группам. Супермодераторы подобны обычным модераторам, но кроме того они имеют доступ ко всем форумам конференции.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначать форумные права групп.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Здесь вы можете определять глобальные права доступа для групп - Права пользователей, права супермодераторов, права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора типа одобрения сообщений, управления темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях, преимущественный метод заключается в помещении пользователей в группы и назначении прав группам.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять администраторскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять форумными ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Здесь вы можете управлять модераторскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Здесь вы можете управлять пользовательскими ролями. Роли содержат действующие права доступа, если вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Здесь вы можете назначит пользователям права доступа на форумы.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Здесь вы можете определять глобальные права доступа для пользователей - Права пользователей, права супермодераторов, права администраторов. Права пользователей включают такие возможности, как использование аватары, отправка личных сообщений и так далее; права супермодератора типа одобрения сообщений, управления темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях, преимущественный метод заключается в помещении пользователей в группы и назначении прав группам.',
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
	'DELETE_ROLE_CONFIRM'		=> 'Вы уверены, что хотите удалить эту роль? Объекты с данной ролью потеряют определенные ею настройки прав доступа.',
	'DISPLAY_ROLE_ITEMS'		=> 'Просмотреть объекты с данной ролью',

	'EDIT_PERMISSIONS'			=> 'Редактировать права',
	'EDIT_ROLE'					=> 'Редактировать роль',

	'GROUPS_NOT_ASSIGNED'		=> 'Нет групп с данной ролью',

	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Вы можете выбрать более одного форума',
	'LOOK_UP_GROUP'				=> 'Найти группу',
	'LOOK_UP_USER'				=> 'Найти пользователя',

	'MANAGE_GROUPS'		=> 'Управление группами',
	'MANAGE_USERS'		=> 'Управление пользователями',

	'NO_AUTH_SETTING_FOUND'		=> 'Настройки прав доступа не определены.',
	'NO_ROLE_ASSIGNED'			=> 'Ни одна роль не назначена…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Настройки для данной роли не изменяют прав доступа справа. Если вы хотите сбросить/удалить все права доступа, вы должны использовать ссылку “Все <samp>НЕТ</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Роли недоступны',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Дайте название роли.',
	'NO_ROLE_SELECTED'			=> 'Роль не найдена.',
	'NO_USER_GROUP_SELECTED'	=> 'Вы не выбрали пользователя или группу.',

	'ONLY_FORUM_DEFINED'	=> 'Вы определили только форум. Выберите, по крайней мере, одного пользователя или группу.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS'				=> '+Subforums',

	'REMOVE_PERMISSIONS'			=> 'Remove permissions',
	'REMOVE_ROLE'					=> 'Remove role',
	'ROLE'							=> 'Role',
	'ROLE_ADD_SUCCESS'				=> 'Role successfully added.',
	'ROLE_ASSIGNED_TO'				=> 'Users/Groups assigned to %s',
	'ROLE_DELETED'					=> 'Role successfully removed.',
	'ROLE_DESCRIPTION'				=> 'Role description',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'User and Groups Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Standard Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'No Avatar',
	'ROLE_USER_NOPM'			=> 'No Private Messages',
	'ROLE_USER_STANDARD'		=> 'Standard Features',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Can access the forum management and forum permission settings.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Has access to all admin functions of this forum.<br />Not recommended.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Has access to most admin features but is not allowed to use server or system related tools.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Can manage groups and users: Able to change permissions, settings, manage bans, and manage ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'This role is recommended for bots and search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Can use all forum features, including posting of announcements and stickies. Can also ignore the flood limit.<br />Not recommended for normal users.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Can use some forum features, but cannot attach files or use post icons.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Can neither see nor access the forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Can use most forum features including attachments, but posts and topics need to be approved by a moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Like Standard Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Can read the forum, but cannot create new topics or reply to posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Can use most forum features including attachments, but cannot lock or delete own topics, and cannot create polls.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Can use all moderating features, including banning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Can use the Moderation Queue to validate and edit posts, but nothing else.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Can only use basic topic actions. Cannot send warnings or use moderation queue.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Can use most moderating tools, but cannot ban users or change the post author.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Can use all available forum features for users, including changing the user name or ignoring the flood limit.<br />Not recommended.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Can access some of the user features. Attachments, e-mails, or instant messages are not allowed.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Has a limited feature set and is not allowed to use the Avatar feature.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Has a limited feature set, and is not allowed to use Private Messages.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Can access most but not all user features. Cannot change user name or ignore the flood limit, for instance.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'You are able to enter a short explanation of what the role is doing or for what it is meant for. The text you enter here will be displayed within the permissions screens too.',
	'ROLE_DESCRIPTION_LONG'			=> 'The role description is too long, please limit it to 4000 characters.',
	'ROLE_DETAILS'					=> 'Role details',
	'ROLE_EDIT_SUCCESS'				=> 'Role successfully edited.',
	'ROLE_NAME'						=> 'Role name',
	'ROLE_NAME_ALREADY_EXIST'		=> 'A role named <strong>%s</strong> already exist for the specified permission type.',
	'ROLE_NOT_ASSIGNED'				=> 'Role has not been assigned yet.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'The selected forum(s) do not exist.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'The selected group(s) do not exist.',
	'SELECTED_USER_NOT_EXIST'		=> 'The selected user(s) do not exist.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'The forum you select here will include all subforums into the selection',
	'SELECT_ROLE'					=> 'Select role…',
	'SELECT_TYPE'					=> 'Select type',
	'SET_PERMISSIONS'				=> 'Set permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Set role permissions',
	'SET_USERS_PERMISSIONS'			=> 'Set users permissions',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Set users forum permissions',

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