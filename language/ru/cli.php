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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Включите данную опцию, если значение параметра конфигурации изменяется слишком часто, для её кэширования.',
	'CLI_CONFIG_CURRENT'				=> 'Текущее значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно удалён параметр конфигурации %s.',
	'CLI_CONFIG_NEW'					=> 'Новое значение параметра конфигурации. Используйте 0 и 1, чтобы задавать значения логического типа (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметр конфигурации %s не существует',
	'CLI_CONFIG_OPTION_NAME'			=> 'Имя параметра конфигурации',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Включите данную опцию, если значения должны быть выведены без перевода строки в конце.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Увеличить на величину',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно увеличен параметр конфигурации %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не удалось установить параметр конфигурации %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно установлен параметр конфигурации %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Вывести список готовых и не готовых к выполнению задач планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запустить все готовые к выполнению задачи планировщика (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Имя задачи планировщика, которая будет выполнена',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обновить базу данных путём применения миграций.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Удалить параметр конфигурации',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Отключить заданное расширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Включить заданное расширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Найти миграции, не имеющие зависимостей.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Получить значение параметра конфигурации',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличить значение числового параметра конфиругации',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Вывести список всех расширений из базы данных и файловой системы.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Наименование окружения.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустить командную строку в безопасном режиме (без расширений).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустить командную строку.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Удалить расширение вместе с данными.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Выводит список типов текста, доступных для репарсинга.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Осуществляет репарсинг сохранённого текста с помощью текущих сервисов text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Тип текста для репарсинга. оставьте поле пустым для репарсинга всех типов.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не сохранять любые изменения; только вывести предполагаемый результат',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Наименьшее значение ID (идентификатора) записи для обработки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Наибольшее значение ID (идентификатора) записи для обработки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизительное число обрабатываемых записей в единицу времени',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Продолжить репарсинг с момента последней остановки',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Пересчитать поле user_email_hash в таблице пользователей.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Установить значение параметра конфигурации в случае, если старое значение совпадает с текущим',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Установить значение параметра конфигурации',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Удалить все существующие миниатюры.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Создать все недостающие миниатюры.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Пересоздать заново все миниатюры.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не удалось отключить расширение %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно отключено расширение %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не удалось включить расширение %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно включенио расширение %s',
	'CLI_EXTENSION_NAME'				=> 'Имя расширения',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не удалось удалить файлы и данные расширения %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно удалены файлы и данные расширения %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Расширений не найдено.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступные',
	'CLI_EXTENSIONS_DISABLED'			=> 'Отключённые',
	'CLI_EXTENSIONS_ENABLED'			=> 'Включённые',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно пересчитаны все значения хэшей email.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Обработка %1$s (диапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Обработка %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Обработка успешно завершена',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) удалена.',
	'CLI_THUMBNAIL_DELETING'	=> 'Удаление миниатюр',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропущена.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) создана.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Создание миниатюр',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Все миниатюры были пересозданы.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Все миниатюры были удалены.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Миниатюры для создания отсутствуют.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Миниатюры для удаления отсутствуют.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Можно указать только имя отдельной задачи для запуска.',
));
