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

$lang = array_merge($lang, [
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Показ изображений в сообщениях',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Вступление',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Создание ссылок',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Создание списков',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Прочее',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Цитирование и вывод текста фиксированной ширины',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Форматирование текста',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Теперь вложения могут быть помещены в любой части сообщения при помощи нового тега BBCode <strong>[attachment=][/attachment]</strong>, если вложения разрешены администратором конференции и если вы имеете необходимые права доступа. На странице размещения сообщения находится выпадающий список (соответственно кнопка) для размещения вложений в сообщении.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Добавление вложений в сообщение',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BBCode включает тег для добавления картинки в ваше сообщение. При этом следует помнить две очень важные вещи: во-первых, многих пользователей раздражает большое количество изображений, во-вторых, ваше изображение уже должно быть размещено в интернете (т. е. оно не может быть расположено только на вашем компьютере, если, конечно, вы не запустили на нём веб-сервер!). На данный момент нет возможности хранить изображения локально на phpBB (ожидается, что это ограничение будет снято в следующей версии phpBB). Для вывода изображения вы должны окружить его URL тегами <strong>[img][/img]</strong>. Например:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Как указано в предыдущем пункте, вы можете заключить изображение в теги <strong>[url][/url]</strong>, то есть<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />выдаст:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Добавление изображения в сообщение',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode — это специальный вариант HTML. Сможете ли вы использовать BBCode в ваших сообщениях или нет, определяется администратором форумов. Кроме того, вы сможете отключить использование BBCode в конкретном сообщении при его размещении. Сам BBCode по стилю похож на HTML, теги заключены в квадратные скобки [ и ], а не в &lt; и &gt;; он даёт больше возможностей управления тем, как выводятся данные. При использовании некоторых шаблонов вы сможете добавлять BBCode в ваши сообщения, пользуясь простым интерфейсом, расположенным над полем для ввода текста. Но даже в этом случае данное руководство может оказаться полезным.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Что такое BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'В BBCode поддерживается несколько способов создания URL\'ов.<ul><li>Первый из них использует тег <strong>[url=][/url]</strong>, после знака = должен идти нужный URL. Например, для ссылки на phpBB.com вы могли бы использовать:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Посетите phpBB!<strong>[/url]</strong><br /><br />Это создаст следующую ссылку: <a href="https://www.phpbb.com/">Посетите phpBB!</a> Учтите, что ссылка будет открываться в том же или в новом окне, в зависимости от настроек браузера пользователя.</li><li>Если вы хотите, чтобы в качестве текста ссылки показывался сам URL, вы можете просто сделать следующее:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Это выдаст следующую ссылку: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Кроме того, phpBB поддерживает возможность, называемую <i>Автоматические ссылки</i>, это переведёт любой синтаксически правильный URL в ссылку без необходимости указания тегов и даже префикса http://. Например, ввод www.phpbb.com в ваше сообщение приведёт к автоматической выдаче <a href="https://www.phpbb.com/">www.phpbb.com</a> при просмотре сообщения.</li><li>То же самое относится и к адресам email, вы можете либо указать адрес в явном виде:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />что выдаст <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, или просто ввести no.one@domain.adr в ваше сообщение, и он будет автоматически преобразован при просмотре.</li></ul>Как и со всеми прочими тегами BBCode, вы можете заключать в URL\'ы любые другие теги, например <strong>[img][/img]</strong> (см. следующий пункт), <strong>[b][/b]</strong> и т. д. Как и с тегами форматирования, правильная вложенность тегов зависит от вас, например:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">неверно</span>, что может привести к последующему удалению вашего сообщения, так что будьте аккуратнее.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Ссылки на другой сайт',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Второй тип списка, нумерованный, позволяет выбрать, что именно будет выводиться перед каждым элементом. Для создания нумерованного списка используйте <strong>[list=1][/list]</strong> или <strong>[list=a][/list]</strong> для создания алфавитного списка. Как и в случае маркированного списка, элементы определяются с помощью <strong>[*]</strong>. Например:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Пойти в магазин<br /><strong>[*]</strong>Купить новый компьютер<br /><strong>[*]</strong>Обругать компьютер, когда случится ошибка<br /><strong>[/list]</strong><br /><br />выдаст следующее:<ol style="list-style-type: decimal;"><li>Пойти в магазин</li><li>Купить новый компьютер</li><li>Обругать компьютер, когда случится ошибка</li></ol>Для алфавитного списка используйте:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Первый возможный ответ<br /><strong>[*]</strong>Второй возможный ответ<br /><strong>[*]</strong>Третий возможный ответ<br /><strong>[/list]</strong><br /><br />что выдаст<ol style="list-style-type: lower-alpha"><li>Первый возможный ответ</li><li>Второй возможный ответ</li><li>Третий возможный ответ</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Создание нумерованного списка',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode поддерживает два вида списков: маркированные и нумерованные. Они практически идентичны своим эквивалентам из HTML. В маркированном списке все элементы выводятся последовательно, каждый отмечается символом-маркером. Для создания маркированного списка используйте <strong>[list][/list]</strong> и определите каждый элемент при помощи <strong>[*]</strong>. Например, чтобы вывести свои любимые цвета, вы можете использовать:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Красный<br /><strong>[*]</strong>Синий<br /><strong>[*]</strong>Жёлтый<br /><strong>[/list]</strong><br /><br />Это выдаст такой список:<ul><li>Красный</li><li>Синий</li><li>Жёлтый</li></ul><br />Также можно указать стиль маркера списка, используя <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Создание маркированного списка',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Если вы являетесь администратором этой конференции и имеетe достаточные права, то можете добавить новые теги BBCode в администраторском разделе.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Могу ли я добавить собственные теги?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Если нужно вывести часть программного кода или другие данные фиксированной ширины, такие, как шрифт Courier, необходимо заключать текст в теги <strong>[code][/code]</strong>, непример<br /><br /><strong>[code]</strong>echo &quot;Здесь находится код&quot;;<strong>[/code]</strong><br /><br />Всё форматирование, используемое внутри тегов <strong>[code][/code]</strong>, будет сохранено.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Вывод кода или данных фиксированной ширины',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Существует два способа цитирования текста: с обращением и без.<ul><li> При использовании кнопки цитирования для ответа на сообщение, в окно ответа добавляется текст цитируемого сообщения, обрамлённый тегами <strong>[quote=&quot;&quot;][/quote]</strong>. Этот способ позволяет цитировать с обращением к пользователю или к кому-то (чему-то) ещё, по выбору. Например, чтобы прцитировать текст, написанный пользователем Mr. Blobby, можно ввести:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Здесь находится текст, написанный пользователем Mr. Blobby<strong>[/quote]</strong><br /><br />В результате перед текстом будут вставлены слова «Mr. Blobby писал(а):». Помните, что <strong>обязательно</strong> заключать обращение в кавычки &quot;&quot;, они не могут быть пропущены.</li><li>Второй способ позволяет создавать простые цитаты. Для этого необходимо заключить текст в теги <strong>[quote][/quote]</strong>. При просмотре сообщения будет просто показан текст в блоке цитирования.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Цитирование при ответах',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode включает теги для быстрого изменения стиля шрифта. Это достигается следующими способами: <ul><li>Чтобы сделать текст жирным, заключите его в <strong>[b][/b]</strong>, например:<br /><br /><strong>[b]</strong>Привет<strong>[/b]</strong><br /><br />станет <strong>Привет</strong></li><li>Для подчёркивания используйте <strong>[u][/u]</strong>, например:<br /><br /><strong>[u]</strong>Доброе утро<strong>[/u]</strong><br /><br />станет <span style="text-decoration: underline">Доброе утро</span></li><li>Чтобы сделать текст курсивным, используйте тег <strong>[i][/i]</strong>, например:<br /><br />Это <strong>[i]</strong>здорово!<strong>[/i]</strong><br /><br />выведет Это <i>здорово!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Как сделать текст жирным, наклонным или подчёркнутым',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Для изменения цвета или размера шрифта могут быть использованы следующие теги (окончательный вид будет зависеть от системы и браузера пользователя): <ul><li>Цвет текста можно изменить, окружив его <strong>[color=][/color]</strong>. Можно указать либо известное имя цвета (red, blue, yellow и т. п.), либо его шестнадцатеричное представление, например #FFFFFF, #000000. Таким образом, для создания красного текста можно использовать:<br /><br /><strong>[color=red]</strong>Привет!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Привет!<strong>[/color]</strong><br /><br />в обоих случаях будет выведено <span style="color:red">Привет!</span></li><li>Изменение размера достигается аналогичным образом при использовании тега <strong>[size=][/size]</strong>. Этот тег зависит от используемых шаблонов, рекомендуемый формат — число, показывающее размер текста в процентах, от 20% (очень маленький) до 200% (очень большой) от размера по умолчанию. Например:<br /><br /><strong>[size=30]</strong>МАЛЕНЬКИЙ<strong>[/size]</strong><br /><br />скорее всего будет выведено как <span style="font-size:30%;">МАЛЕНЬКИЙ</span><br /><br />в то время, как:<br /><br /><strong>[size=200]</strong>ОГРОМНЫЙ!<strong>[/size]</strong><br /><br />будет выведено как <span style="font-size:200%;">ОГРОМНЫЙ!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Как изменить цвет или размер текста',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Да, это возможно. Например, чтобы привлечь внимание, можно написать:<br /><br /><strong>[size=200][color=red][b]</strong>ПОСМОТРИТЕ НА МЕНЯ!<strong>[/b][/color][/size]</strong><br /><br />в этом случае будет выведено <span style="color:red;font-size:200%;"><strong>ПОСМОТРИТЕ НА МЕНЯ!</strong></span><br /><br />Не рекомендуется выводить таким образом длинные тексты! Учтите, что автор сообщения должен позаботиться о правильном закрытии тегов. Например, следующее использование тегов BBCode неверно:<br /><br /><strong>[b][u]</strong>Это неверно<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Могу ли я комбинировать теги?',
]);
