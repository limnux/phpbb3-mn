<?php
/**
*
* groups [English]
*
* @package language
* @version $Id: chat.php 52 2007-11-04 05:56:17Z Handyman $
* @copyright (c) 2006 StarTrekGuide Group 
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'DETAILS'		=> '',
	'MESSAGE'		=> 'Зурвас',
	'ONLINE_LIST'	=> 'Нэвтэрсэн',
	'PAGE_TITLE'	=> 'Самбарын чат',
	'UNIT'			=> 'сек',
	'UPDATES'		=> 'Шинэчлэгдэх: ',
));
?>
