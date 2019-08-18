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
	$lang = [];
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

// User pruning
$lang = array_merge($lang, [
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Здесь вы можете удалять или отключать пользователей конференции. Учётные записи могут быть отфильтрованы различными способами — по количеству сообщений, по времени последнего посещения и так далее. Критерии могут быть объединены с целью сокращения учётных записей, к которым будет применена очистка. Например, вы можете удалить пользователей, которые не посещали конференцию после 01.01.2002, и имеющих менее десяти сообщений. Используйте звёздочку * как маску для текстовых полей. Также вы можете полностью пропустить выбор критериев, вручную введя желаемых пользователей (каждого на отдельной строке) в текстовое поле. Будьте осторожны с этим инструментом — удалённых пользователей восстановить невозможно!',

	'CRITERIA'				=> 'Критерий',

	'DEACTIVATE_DELETE'			=> 'Деактивировать или удалить',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Выберите действие, которое будет применено к пользователям. Помните, что удалённых пользователей восстановить невозможно!',
	'DELETE_USERS'				=> 'Удалить',
	'DELETE_USER_POSTS'			=> 'Удалить также их сообщения',
	'DELETE_USER_POSTS_EXPLAIN' => 'Удаляет пользователей вместе с их сообщениями. Не работает, если выбрана деактивация пользователей.',

	'JOINED_EXPLAIN'			=> 'Введите дату в формате <kbd>ГГГГ-ММ-ДД</kbd>. Можно использовать оба поля для указания конечного диапазона, либо оставить одно из полей пустым для указания открытого диапазона.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Введите дату в формате <kbd>ГГГГ-ММ-ДД</kbd>. Введите <kbd>0000-00-00</kbd> для очистки пользователей, которые никогда не входили на конференцию, <em>до</em> и <em>после</em> игнорирования условий.',

	'POSTS_ON_QUEUE'			=> 'Сообщения, ожидающие одобрения',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Только пользователи, входящие в выбранную группу.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Все группы',
	'PRUNE_USERS_LIST'				=> 'Список очистки',
	'PRUNE_USERS_LIST_DELETE'		=> 'По заданным критериям очистки будут удалены следующие учётные записи пользователей. Можно исключить отдельных пользователей из списка снятием галочки напротив его имени.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'По заданным критериям очистки будут деактивированы следующие учётные записи пользователей. Можно исключить отдельных пользователей из списка снятием галочки напротив его имени.',

	'SELECT_USERS_EXPLAIN'		=> 'Введите в это поле имена конкретных пользователей. В этом случае заданные выше критерии не будут использованы. Примечание: основатели не могут быть удалены или отключены.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Отобранные пользователи успешно деактивированы.',
	'USER_DELETE_SUCCESS'		=> 'Отобранные пользователи успешно удалены.',
	'USER_PRUNE_FAILURE'		=> 'Нет пользователей, подходящих под указанные критерии.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Недопустимый формат даты. Дата должна быть в формате <kbd>ГГГГ-ММ-ДД</kbd>.',
]);

// Forum Pruning
$lang = array_merge($lang, [
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Будут удалены все темы, в которые не писали и которые не просматривали указанное количество дней. Если вы не введёте число дней, то будут удалены все темы. По умолчанию темы, в которых продолжаются опросы, а также прилепленные темы и объявления не будут удалены.',

	'FORUM_PRUNE'		=> 'Очистка форумов',

	'NO_PRUNE'			=> 'Очистка форумов не произведена.',

	'SELECTED_FORUM'	=> 'Выбран форум',
	'SELECTED_FORUMS'	=> 'Выбраны форумы',

	'POSTS_PRUNED'					=> 'Сообщений удалено',
	'PRUNE_ANNOUNCEMENTS'			=> 'Удалять объявления',
	'PRUNE_FINISHED_POLLS'			=> 'Удалять оконченные опросы',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Удалять темы, в которых опросы завершены.',
	'PRUNE_FORUM_CONFIRM'			=> 'Восстановить удалённые темы и сообщения невозможно. Вы действительно хотите очистить выбранные форумы по заданным критериям?',
	'PRUNE_NOT_POSTED'				=> 'Дней с последнего сообщения',
	'PRUNE_NOT_VIEWED'				=> 'Дней с последнего просмотра',
	'PRUNE_OLD_POLLS'				=> 'Удалять старые опросы',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Удалять темы, в опросах которых не было голосов за указанное выше количество дней.',
	'PRUNE_STICKY'					=> 'Удалять прилепленные темы',
	'PRUNE_SUCCESS'					=> 'Очистка форумов успешно произведена',

	'TOPICS_PRUNED'		=> 'Тем удалено',
]);
