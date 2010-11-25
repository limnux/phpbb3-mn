<?php
/** 
*
* viewforum [Mongolian]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 B.Munkh-Erdene $
* @copyright (c) 2005 phpBB Group
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Идэвхитэй сэдэвүүд',
	'ANNOUNCEMENTS'			=> 'Зарлалууд',

	'FORUM_PERMISSIONS'		=> 'Форумд хандах эрх',

	'ICON_ANNOUNCEMENT'		=> 'Зарлал',
	'ICON_STICKY'			=> 'Наалттай',

	'LOGIN_NOTIFY_FORUM'	=> 'Сэдвийг уншихын тулд нэвтрэн орно уу.',

	'MARK_TOPICS_READ'		=> 'Уншсан болгож тэмдэглэх',
	
	'NEW_POSTS_HOT'			=> 'Шинэ бичлэг [ Түгээмэл]',
	'NEW_POSTS_LOCKED'		=> 'Шинэ бичлэг [ Цоожтой ]',
	'NO_NEW_POSTS_HOT'		=> 'Шинэ бичлэг алга [ Түгээмэл]',
	'NO_NEW_POSTS_LOCKED'	=> 'Шинэ бичлэг алга [ Цоожтой ]',
	'NO_READ_ACCESS'		=> 'Та нэвтрэн орж форумын сэдвүүдийг уншина уу.',

	'POST_FORUM_LOCKED'		=> 'Форум цоожтой',

	'TOPICS_MARKED'			=> 'Форумын сэдэвүүдийг уншсан болгож тэмдэглэлээ',

	'VIEW_FORUM'			=> 'Форум үзэх',
	'VIEW_FORUM_TOPIC'		=> '1 сэдэв',
	'VIEW_FORUM_TOPICS'		=> '%d сэдэв',
));

?>
