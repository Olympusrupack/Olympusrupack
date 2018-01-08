<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Настройки VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink - сторонний сервис для монетизации ссылок в сообщениях пользователей, который никак не влияет на внешний вид конференции. Когда пользователь переходит по внешней ссылке на товар или услугу, чтобы совершить покупку, продавец платит VigLink комиссионный сбор, часть которого будет переведена в пользу проекта phpBB. Соглашаясь включить расширение VigLink, вы поддерживаете проект phpBB, обеспечивая его развитие и финансовую безопасность.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Можно в любое время изменить данные настройки на странице «<a href="%1$s">Настройки VigLink</a>».',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Чтобы избежать перенаправления на эту страницу, сохраните настройки нажатием кнопки «Отправить» ниже.',
	'ACP_VIGLINK_ENABLE'			=> 'Включить VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Включает сервисы VigLink на конференции.',
	'ACP_VIGLINK_EARNINGS'			=> 'Запросить собственную комиссию (необязательно)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Можно запросить перевод комиссии в свой адрес, создав учётную запись VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Сервисы VigLink отключены проектом phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Запросить собственную комиссию',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Можно запросить перевод комиссии со ссылок, монетизируемых VigLink, в свой адрес, а не проекту phpBB. Для управления настройками учётной записи, зарегистрируйтесь на «VigLink Convert», перейдя по ссылке «Конвертировать учётную запись».',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Конвертировать учётную запись',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Конвертирование учётной записи VigLink недоступно.',
));
