<?php
/**
*
* posting [Russian]
*
* @package language
* @version $Id: posting.php,v 1.36 2007/05/19 23:39:45 acydburn Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode - это особая реализация HTML, предоставляющая больший контроль над тем, что и как отображается на форуме. На данной странице вы можете добавлять, удалять и редактировать собственные BBCode.',
	'ADD_BBCODE'				=> 'Добавить BBCode',

	'BBCODE_ADDED'				=> 'BBCode успешно добавлен.',
	'BBCODE_EDITED'				=> 'BBCode успешно отредактирован.',
	'BBCODE_NOT_EXIST'			=> 'Выбранный BBCode не существует.',
	'BBCODE_HELPLINE'			=> 'Подсказка',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Данное поле содержит текст, который появляется при наведении курсора на BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Текст подсказки',
	'BBCODE_INVALID_TAG_NAME'	=> 'Выбранное имя тега BBCode уже существует.',
	'BBCODE_INVALID_TAG_NAME'	=> 'The BBCode tag name that you selected already exists.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Ваш BBCode должен содержать открывающий и закрывающий теги.',
	'BBCODE_TAG'				=> 'Тег',
	'BBCODE_TAG_TOO_LONG'		=> 'Выбранное имя тега слишком длинное.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Введенное определение тега слишком длинное, пожалуйста, уменьшите его.',
	'BBCODE_USAGE'				=> 'Использование BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Здесь определяется, как использовать BBCode. Любая вводимая переменная может быть заменена на соотвествующую лексему (%sсмотрите ниже%s)',

	'EXAMPLE'						=> 'Пример:',
	'EXAMPLES'						=> 'Примеры:',

	'HTML_REPLACEMENT'				=> 'HTML-замена',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Здесь задаётся HTML-код, по умолчанию (каждый шаблон может иметь свои собственные HTML-замены). Не забудьте добавить лексемы, использованные выше!',

	'TOKEN'					=> 'Лексема',
	'TOKENS'				=> 'Лексемы',
	'TOKENS_EXPLAIN'		=> 'Лексемы являются метками-заполнителями для вводимого пользователем содержимого. Правильность введённого содержимого будет подтверждена лишь в случае, если оно отвечает соответствующему определению. Если необходимо, вы можете нумеровать их путём добавления номера в конце лексемы внутри фигурных скобок, непример {USERNAME1}, {USERNAME2}.<br /><br />Кроме лексем, вы можете использовать любую из языковых переменных, присутствующих в вашей языковой папке (language/), например: {L_<em>&lt;stringname&gt;</em>}, где <em>&lt;stringname&gt;</em> - это имя переведённой строки, которую вы хотите добавить. Например, {L_WROTE} будет отображено как "wrote" или его перевод в соответствии с языком пользователя',
	'TOKEN_DEFINITION'		=> 'Описание',
	'TOO_MANY_BBCODES'		=> 'Вы больше не можете создать BBCode. Удалите  один или более BBCode и попробуйте снова.',

	'tokens'	=>	array(
		'TEXT'			=> 'Любой текст, включая символы любого языка, числа и т.п.',
		'NUMBER'		=> 'Любая последовательность цифр',
		'EMAIL'			=> 'Правильный email-адрес',
		'URL'			=> 'Правильная ссылка (URL) с использованием любого протокола (http, ftp и т.п. не могут быть использованы в javascript-эксплойтах). Если не задано, "http://" будет автоматически добавлено к строке',
		'LOCAL_URL'		=> 'Локальная ссылка (URL). Ссылка должна относиться к странице темы и не может содержать имя сервера или протокола',
		'COLOR'			=> 'HTML-цвет, может быть задан в форме числа <samp>#FF1234</samp> или <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">цветового ключа CSS</a>, например <samp>fuchsia</samp> или <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'На этой странице вы можете добавлять, удалять или редактировать значки, которые могут добавляться пользователями к своим темам или сообщениям. Эти значки обычно отображаются рядом с названием темы при просмотре форума, или рядом с заголовком сообщения при просмотре темы. Вы можете также устанавливать или создавать новые пакеты значков.',
	'ACP_SMILIES_EXPLAIN'	=> 'Смайлики, или эмотиконы - обычно маленькие, иногда анимированные картинки, используемые для передачи эмоции или чувства. На этой странице вы можете добавлять, удалять или редактировать эмотиконы, которые могут добавляться пользователями к своим сообщениям и ЛС. Вы можете также устанавливать или создавать новые пакеты смайликов.',
	'ADD_SMILIES'			=> 'Добавить несколько смайликов',
	'ADD_SMILEY_CODE'		=> 'Add additional smiley code',
	'ADD_ICONS'				=> 'Добавить несколько значков',
	'AFTER_ICONS'			=> 'После %s',
	'AFTER_SMILIES'			=> 'После %s',

	'CODE'						=> 'Код',
	'CURRENT_ICONS'				=> 'Установленные значки',
	'CURRENT_ICONS_EXPLAIN'		=> 'Выберите действие, которое нужно применить к уже установленным значкам',
	'CURRENT_SMILIES'			=> 'Установленные смайлики',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Выберите действие, которое нужно применить к уже установленным смайликам',

	'DISPLAY_ON_POSTING'	=> 'Показывать при отправке сообщений',

	'EDIT_ICONS'				=> 'Редактировать значки',
	'EDIT_SMILIES'				=> 'Редактировать смайлики',
	'EMOTION'					=> 'Эмотикон',
	'EXPORT_ICONS'				=> 'Экспортировать и скачать icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sПо щелчку на этой ссылке конфигурация установленных значков будет сохранена в файле <samp>icons.pak</samp>, который после скачивания может быть упакован в <samp>.zip</samp> или <samp>.tgz</samp> файл, содержащий все ваши значки вместе с данным конфигурационным файлом <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Экспортировать и скачать smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sПо щелчку на этой ссылке конфигурация установленных смайликов будет сохранена в файле <samp>smilies.pak</samp>, который после скачивания может быть упакован в <samp>.zip</samp> или <samp>.tgz</samp> файл, содержащий все ваши смайлики вместе с данным конфигурационным файлом <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Первый',

	'ICONS_ADD'				=> 'Добавить значок',
	'ICONS_ADDED'			=> 'Значок был успешно добавлен.',
	'ICONS_CONFIG'			=> 'Настройки значков',
	'ICONS_DELETED'			=> 'Значок был успешно удалён.',
	'ICONS_EDIT'			=> 'Редактировать значок',
	'ICONS_EDITED'			=> 'Значок был успешно обновлён.',
	'ICONS_HEIGHT'			=> 'Высота значка',
	'ICONS_IMAGE'			=> 'Картинка значка',
	'ICONS_IMPORTED'		=> 'Пакет значков был успешно установлен.',
	'ICONS_IMPORT_SUCCESS'	=> 'Пакет значков был успешно импортирован.',
	'ICONS_LOCATION'		=> 'Путь к значку',
	'ICONS_NOT_DISPLAYED'	=> 'Следующие значки не будут отображаться на странице размещения сообщения',
	'ICONS_ORDER'			=> 'Порядок значков',
	'ICONS_URL'				=> 'Файл картинки значка',
	'ICONS_WIDTH'			=> 'Ширина значка',
	'IMPORT_ICONS'			=> 'Установить пакет значков',
	'IMPORT_SMILIES'		=> 'Установить пакет смайликов',

	'KEEP_ALL'			=> 'Сохранить всё',

	'MASS_ADD_SMILIES'	=> 'Добавить много смайликов',

	'NO_ICONS_ADD'		=> 'There are no icons available for adding.',
	'NO_ICONS_EDIT'		=> 'There are no icons available for modifying.',
	'NO_ICONS_EXPORT'	=> 'Отсутствуют значки для создания пакета.',
	'NO_ICONS_PAK'		=> 'Пакеты значков не обнаружены.',
	'NO_SMILIES_ADD'	=> 'There are no smilies available for adding.',
	'NO_SMILIES_EDIT'	=> 'There are no smilies available for modifying.',
	'NO_SMILIES_EXPORT'	=> 'Отсутствуют смайлики для создания пакета.',
	'NO_SMILIES_PAK'	=> 'Пакеты смайликов не обнаружены.',

	'PAK_FILE_NOT_READABLE'		=> 'Ошибка чтения <samp>.pak</samp> файла.',

	'REPLACE_MATCHES'	=> 'Заменить парные',

	'SELECT_PACKAGE'			=> 'Выбрать файл пакета',
	'SMILIES_ADD'				=> 'Добавить смайлик',
	'SMILIES_ADDED'				=> 'Смайлик был успешно добавлен.',
	'SMILIES_CODE'				=> 'Код смайлика',
	'SMILIES_CONFIG'			=> 'Настройки смайлика',
	'SMILIES_DELETED'			=> 'Смайлик был успешно удалён.',
	'SMILIES_EDIT'				=> 'Редактировать смайлик',
	'SMILIES_EDITED'			=> 'Смайлик был успешно обновлён.',
	'SMILIES_EMOTION'			=> 'Эмоция',
	'SMILIES_HEIGHT'			=> 'Высота смайлика',
	'SMILIES_IMAGE'				=> 'Картинка смайлика',
	'SMILIES_IMPORTED'			=> 'Пакет смайликов был успешно установлен.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Пакет смайликов был успешно импортирован.',
	'SMILIES_LOCATION'			=> 'Путь к смайлику',
	'SMILIES_NOT_DISPLAYED'		=> 'Следующие смайлики не будут отображаться на странице размещения сообщения',
	'SMILIES_ORDER'				=> 'Порядок смайликов',
	'SMILIES_URL'				=> 'Файл картинки смайлика',
	'SMILIES_WIDTH'				=> 'Ширина смайлика',

	'WRONG_PAK_TYPE'	=> 'Указанный пакет не содержит подходящих данных.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'С помощью этой панели управления вы можете добавлять, редактировать и удалять слова, которые будут автоматически подвергаться цензуре на конефренции. Кроме того, пользователи не смогут зарегистрироваться с именами, содержащими эти слова. Звёздочки (*) могут быть использованы в поле воода, например шаблону *test* будет соответствовать в том числе detestable, шаблону test* - testing, шаблону *test -  detest.',
	'ADD_WORD'				=> 'Добавить слово',

	'EDIT_WORD'		=> 'Редактировать слово',
	'ENTER_WORD'	=> 'Вы должны задать слово и его замену.',

	'NO_WORD'	=> 'Не выбрано слово для редактирования.',

	'REPLACEMENT'	=> 'Замена',

	'UPDATE_WORD'	=> 'Обновить слово',

	'WORD'				=> 'Слово',
	'WORD_ADDED'		=> 'Слово было успешно добавлено.',
	'WORD_REMOVED'		=> 'Выбранное слово было успешно удалено.',
	'WORD_UPDATED'		=> 'Выбранное слово было успешно обновлено.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'С помощью этой формы вы можете добавлять, редактировать, просматривать и удалять звания. Вы можете также сами создавать звания, которые могут быть присвоены пользователю через раздел управления пользователями.',
	'ADD_RANK'				=> 'Добавить звание',

	'MUST_SELECT_RANK'		=> 'Вы должны выбрать звание.',

	'NO_ASSIGNED_RANK'		=> 'Не присвоено специального звания.',
	'NO_RANK_TITLE'			=> 'Не задан заголовок звания.',
	'NO_UPDATE_RANKS'		=> 'Звание успешно удалено. Однако, учётные записи пользователей, которым оно присвоено, не обновлены. Вам необходимо вручную сбросить звания в этих учётных записях.',

	'RANK_ADDED'			=> 'Звание было успешно добавлено.',
	'RANK_IMAGE'			=> 'Картинка звания',
	'RANK_IMAGE_EXPLAIN'	=> 'Здесь просваивается маленькое изображение, связанное с данным званием. Путь задаётся относительно корневой папки  phpBB.',
	'RANK_MINIMUM'			=> 'Минимум сообщений',
	'RANK_REMOVED'			=> 'Звание было успешно удалено.',
	'RANK_SPECIAL'			=> 'Установить как специальное звание',
	'RANK_TITLE'			=> 'Заголовок звания',
	'RANK_UPDATED'			=> 'Звание было успешно обновлено.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Здесь вы можете управлять именами пользователей, запрещёнными для использования. Запрещённые имена могут содержать символ звёздочки *. Учтите, что вы не можете запретить имя, которое уже было зарегистрировано, для этого вы должны сначала удалить его',
	'ADD_DISALLOW_EXPLAIN'	=> 'Вы можете запретить имя, используя символ звёздочки *, которому будет соответствовать любой символ',
	'ADD_DISALLOW_TITLE'	=> 'Добавить запрещённое имя',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Вы можете удалить имя из числа запрещённых, выбрав его из этого списка и нажав Отправить',
	'DELETE_DISALLOW_TITLE'		=> 'Удалить имя из списка запрещённых',
	'DISALLOWED_ALREADY'		=> 'Заданное вами имя не может быть запрещено. Оно уже запрещено, находится в спивке слов автоцензора или зарегистрировано на пользователя.',
	'DISALLOWED_DELETED'		=> 'Имя было успешно удалено из списка запрещённых.',
	'DISALLOW_SUCCESSFUL'		=> 'Имя было успешно запрещено.',

	'NO_DISALLOWED'				=> 'Нет запрещённых имён',
	'NO_USERNAME_SPECIFIED'		=> 'Не выбрано или не задано имя.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Здесь вы можете управлять причинами, используемыми в жалобах и уведомлениях об отклонении сообщений пользователей. Причину по умолчанию (помеченную звёздочкой *) нельзя удалить, она обычно используется в случаях, когда никакие другие причины не являются подходящими.',
	'ADD_NEW_REASON'		=> 'Добавить причину',
	'AVAILABLE_TITLES'		=> 'Доступные причины на других языках',

	'IS_NOT_TRANSLATED'			=> 'Причина <strong>не была</strong> переведена.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Причина <strong>не была</strong> переведена на другой язык. Если вы хотите перевести её, укажите правильный индекс из раздела «Причины жалоб» языковых файлов.',
	'IS_TRANSLATED'				=> 'Причина была переведена.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Причина была переведена на другой язык. Если она задана в разделе «Причины жалоб» языковых файлов, то будет использована переведённая форма заголовка и описания причины.',

	'NO_REASON'					=> 'Не удалось найти причину.',
	'NO_REASON_INFO'			=> 'Вы должны задать заголовок и описание для этой причины.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Нельзя удалить прияину по умолчанию «Другая».',

	'REASON_ADD'				=> 'Добавить причину жалобы/запрета',
	'REASON_ADDED'				=> 'Причина жалобы/запрета успешно добавлена.',
	'REASON_ALREADY_EXIST'		=> 'Причина с таким заголовком уже существует, пожалуйста, задайте другой заголовок.',
	'REASON_DESCRIPTION'		=> 'Описание причины',
	'REASON_DESC_TRANSLATED'	=> 'Отображаемое описание причины',
	'REASON_EDIT'				=> 'Редактировать причину жалобы/запрета',
	'REASON_EDIT_EXPLAIN'		=> 'Здесь вы можете добавть или отредактировать причину. Если данная причина переведена на другой язык, будет использована переведённая версия вместо заданного здесь описания.',
	'REASON_REMOVED'			=> 'Причина жалобы/запрета успешно удалена.',
	'REASON_TITLE'				=> 'Заголовок причины',
	'REASON_TITLE_TRANSLATED'	=> 'Отображаемый заголовок причины',
	'REASON_UPDATED'			=> 'Причина жалобы/запрета успешно обновлена.',

	'USED_IN_REPORTS'		=> 'Используется в жалобах',
));

?>