<?php
/** 
*
* acp_bots [Russian]
*
* @package language
* @version $Id: bots.php,v 1.8 2007/01/21 18:33:45 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Управление поисковыми роботами',
	'BOTS_EXPLAIN'		=> 'Роботами называют программы-агенты, обычно используемые поисковыми системам для обновления своих баз данных. Так как роботы редко должным образом работают с сессиями, они могут исказить настоящее значение счетчика посетителей, увеличить нагрузку на сервер и иногда могут некорректно проиндексировать конференцию. Здесь вы можете создать пользователей особого типа, чтобы преодолеть эти проблемы.',
	'BOT_ACTIVATE'		=> 'Активировать',
	'BOT_ACTIVE'		=> 'Робот активен',
	'BOT_ADD'			=> 'Добавить робота',
	'BOT_ADDED'			=> 'Новый робот успешно добавлен.',
	'BOT_AGENT'			=> 'Представление (agent)',
	'BOT_AGENT_EXPLAIN'	=> 'Строка, полностью или частично совпадающая с User-Agent робота.',
	'BOT_DEACTIVATE'	=> 'Деактивировать',
	'BOT_DELETED'		=> 'Бот успешно удалён.',
	'BOT_EDIT'			=> 'Редактирование бота',
	'BOT_EDIT_EXPLAIN'	=> 'Здесь вы можете добавить или отредактировать имеющиеся данные о роботе. Вы можете задать строку представления (agent) робота и/или один и более IP-адресов (либо диапазонов адресов) для его идентификации. Будьте внимательны, устанавливая User-Agent или IP-адреса робота. Также можно указать стиль и язык конференции, которые будет использовать робот. Это позволяет снизить трафик путём установки простого стиля конференции для ботов. Не забудьте установить подходящие права доступа для специальной группы Боты.',
	'BOT_LANG'			=> 'Язык для робота',
	'BOT_LANG_EXPLAIN'	=> 'Язык конференции, используемый роботом при посещении.',
	'BOT_LAST_VISIT'	=> 'Последнее посещение',
	'BOT_IP'			=> 'IP-адреса робота',
	'BOT_IP_EXPLAIN'	=> 'Допустимы частичные совпадения, адреса должны разделяться запятой.',
	'BOT_NAME'			=> 'Название робота',
	'BOT_NAME_EXPLAIN'	=> 'Только для вашего сведения.',
	'BOT_NEVER'			=> 'Не был',
	'BOT_STYLE'			=> 'Стиль для робота',
	'BOT_STYLE_EXPLAIN'	=> 'Стиль конференции, используемый роботом.',
	'BOT_UPDATED'		=> 'Существующий робот успешно обновлен.',
	'BOT_VIS'			=> 'Робот видим',
	'BOT_VIS_EXPLAIN'	=> 'Показывать робота в списках «Кто сейчас на конференции».',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Указанное представление (agent) робота совпадает с вашим значением User-Agent. Пожалуйста, исправьте представление робота.',
	'ERR_BOT_NO_IP'				=> 'Вы указали недопустимые IP-адреса или не удается разрешить имя хоста.',
	'ERR_BOT_NO_MATCHES'		=> 'Вы должны ввести по крайней мере одно представление (agent) или IP-адрес для определения робота.',

	'NO_BOT'		=> 'Робот с указанным идентификационным номером не найден.',
	'NO_BOT_GROUP'	=> 'Не найдена специальная группа поисковых роботов.',
));

?>