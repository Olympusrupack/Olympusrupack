<?php
/**
*
* acp_search [Russian]
*
* @package language
* @version $Id: search.php,v 1.19 2007/04/28 21:16:31 naderman Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Здесь вы можете управлять индексами поискового механизма. Поскольку обычно используется только один механизм, необходимо удалять все неиспользуемые индексы. После изменения какой-либо настройки поиска (напр. минимального/максимального количества символов), следует пересоздать индексы для того, чтобы они отражали произведённые изменения.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Здесь вы можете задавать, какой поисковый механизм будет использован для индексирования сообщений и осуществления поиска. Вы можете устанавливать различные настройки, которые могут влиять на количество ресурсов, требуемых для обработки запросов. Некоторые из этих установок одинаковы для всех поисковых механизмов.',

	'COMMON_WORD_THRESHOLD'					=> 'Порог для общих слов',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Слова, содержащиеся в основной массе всех сообщений, будут считаться общими. Общие слова игнорируются в поисковых запросах. Установите ноль для отключения этой возможности. Функция работает только при наличии более чем 100 сообщений.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Вы уверены, что хотите переключиться на другой поисковый механизм? В этом случае вы должны будете создать индекс для нового поискового механизма. Если вы не планируете переключаться обратно, вы можете также удалить индекс ранее выбранного поискового механизма для освобождения ресурсов системы.',
	'CONTINUE_DELETING_INDEX'				=> 'Продолжить предыдущий процесс удаления индекса',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Был начат процесс удаления индекса. Для того, чтобы вновь получить доступ к странице поиска, необходимо сначала выполнить этот процесс.',
	'CONTINUE_INDEXING'						=> 'Продолжить предыдущий процесс индексирования',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Был начат процесс индексирования. Для того, чтобы вновь получить доступ к странице поиска, необходимо сначала выполнить этот процесс.',
	'CREATE_INDEX'							=> 'Создать индекс',

	'DELETE_INDEX'							=> 'Удалить индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Идёт удаление индекса',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Поисковый механизм производит очистку своего индекса. Этот процесс может занять несколько минут.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Механизм полнотекстового поиска MySQL может быть использован только с MySQL4 и старше.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Полнотекстовые индексы MySQL могут быть использованы только с таблицами MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общее количество индексированных сообщений',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support for non-latin UTF-8 characters using mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support for non-latin UTF-8 characters using PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'If PCRE does not have unicode character properties, the search backend will try to use mbstring\'s regular expression engine.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'This search backend requires PCRE unicode character properties, only available in PHP 4.4, 5.1 and above, if you want to search for non-latin characters.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Общие настройки поиска',
	'GO_TO_SEARCH_INDEX'					=> 'перейти на страницу поискового индекса',

	'INDEX_STATS'							=> 'Статистика индекса',
	'INDEXING_IN_PROGRESS'					=> 'Идёт индексирование',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'В настоящее время поисковый механизм производит индексирование всех сообщений конференции. Этот процесс может занять от нескольких минут до нескольких часов, в зависимости от объёма информации.',

	'LIMIT_SEARCH_LOAD'						=> 'Ограничение нагрузки системы для поисковой страницы',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Если минутная нагрузка системы превышает это значение, поисковая страница будет отключена. Значение  1.0 соответствует ~100% использованию одного процессора. Применимо только для серверов на основе UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Максимум символов, индексируемых поиском',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Слова, содержащие не более указанного количества символов, будут проиндексированы для осуществления поиска.',
	'MIN_SEARCH_CHARS'						=> 'Минимум символов, индексируемых поиском',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Слова, содержащие не менее указанного количества символов, будут проиндексированы для осуществления поиска.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Минимум символов имени автора',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Пользователи должны задать как минимум указанное количество символов имени при осуществлении поиска атора по маске. Если имя атора короче, чем указанное значение, можно осуществлять поиск по полному имени автора.',

	'PROGRESS_BAR'							=> 'Индикатор процесса',

	'SEARCH_GUEST_INTERVAL'					=> 'Задержка флуда для гостей',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Время в секундах, которое должно пройти между двумя поисковыми запросами гостя. В случае исполнения поискового запроса гостя остальные гости должны дождаться истечения времени задержки флуда.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'All posts up to post id %1$d have now been indexed, of which %2$d posts were within this step.<br />The current rate of indexing is approximately %3$.1f posts per second.<br />Indexing in progress…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'All posts up to post id %1$d have been removed from the search index.<br />Deleting in progress…',
	'SEARCH_INDEX_CREATED'					=> 'Все сообщения в базе данных конференции успешно проиндексированы.',
	'SEARCH_INDEX_REMOVED'					=> 'Поисковый индекс для этого механизма успешно удалён.',
	'SEARCH_INTERVAL'						=> 'Задержка флуда для пользователя',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Время в секундах, которое должно пройти между двумя поисковыми запросами пользователя. Этот интервал проверяется отдельно для каждого пользователя.',
	'SEARCH_STORE_RESULTS'					=> 'Время жизни поискового кэша',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кэшированные результаты поиска будут недействительны по истечению указанного промежутка времени, в секундах. Установите 0 для отключения поискового кэша.',
	'SEARCH_TYPE'							=> 'Поисковый механизм',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB позволяет вам выбрать механизм, используемый для поиска текста в сообщениях. По умолчанию будет использован встроенный полнотекстовый поисковый механизм phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вы сменили поисковый механизм. Чтобы использовать его, вы должны удостовериться, что для выбранного поискового механизма создан индекс.',

	'TOTAL_WORDS'							=> 'Общее количество индексированных слов',
	'TOTAL_MATCHES'							=> 'Общее количество индексированных слов, связанных с сообщениями',

	'YES_SEARCH'							=> 'Включить поисковые возможности',
	'YES_SEARCH_EXPLAIN'					=> 'Включает пользовательский поиск, в том числе поиск пользователей.',
	'YES_SEARCH_UPDATE'						=> 'Включить обновление полнотекстовых индексов',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Обновление полнотекстовых индексов при отправке сообщений. Не осуществляется в случае, если поиск выключен.',
));

?>