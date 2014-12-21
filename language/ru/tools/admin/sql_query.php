<?php
/**
*
* @package Support Toolkit - SQL Query Russian language Pthelovod
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ERROR_QUERY'					=> 'Запрос содержит ошибку!',

	'NO_RESULTS'					=> 'Нет результатов',
	'NO_SQL_QUERY'					=> 'Вы должны ввести SQL-запрос для выполнения',

	'QUERY_RESULT'					=> 'Результаты запроса',

	'SHOW_RESULTS'					=> 'Отобразить результаты',
	'SQL_QUERY'						=> 'Выполнение SQL-запроса',
	'SQL_QUERY_EXPLAIN'				=> 'Введите SQL-запрос для выполнения. Если по умолчанию введен префикс phpbb_, но вы используете другой префикс, то он будет автоматически заменен на ваш префикс таблиц базы данных.',
	
	'SQL_QUERY_LEGEND'				=> 'SQL-запрос',
	'SQL_QUERY_SUCCESS'				=> 'SQL-запрос выполнен успешно.',
));
