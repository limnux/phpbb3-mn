<?php
/** 
*
* memberlist [Mongolian]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 B.Munkh-Erdene $
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
	'ABOUT_USER'			=> 'Хувийн тохиргоо',
	'ACTIVE_IN_FORUM'		=> 'Идэвхитэй хэлэлцүүлэг',
	'ACTIVE_IN_TOPIC'		=> 'Идэвхитэй сэдэв',
	'ADD_FOE'				=> 'Дайснаар сонгох',
	'ADD_FRIEND'			=> 'Найзаар сонгох',
	'AFTER'					=> 'Дараа',	

	'ALL'					=> 'All',
	
	'BEFORE'				=> 'Өмнө',

	'CC_EMAIL'				=> 'Энэ Эмэйлын хуулбарыг өөртөө илгээх',
	'CONTACT_USER'			=> 'Холбоо барих',

	'DEST_LANG'				=> 'Хэл',
	'DEST_LANG_EXPLAIN'		=> 'Select an appropriate language (if available) for the recipient of this message.',

	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.',
	'EMAIL_DISABLED'		=> 'Sorry but all email related functions have been disabled.',
	'EMAIL_SENT'			=> 'Эмэйл илгээгдлээ.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid email address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'You must enter a message to be emailed.',
	'EMPTY_MESSAGE_IM'		=> 'You must enter a message to be send.',
	'EMPTY_NAME_EMAIL'		=> 'You must enter the real name of the recipient.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the email.',
	'EQUAL_TO'				=> 'Equal to',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another email at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Бүлгэмийн удирдагч',

	'HIDE_MEMBER_SEARCH'	=> 'Нууцлагдсан хэрэглэгч хайх',

	'IM_ADD_CONTACT'		=> 'Add Contact',
	'IM_AIM'				=> 'Please note that you need AOL Instant Messenger installed to use this.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Download application',
	'IM_ICQ'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'		=> 'This is an automated message please do not reply! Message from user %1$s at %2$s',
	'IM_MESSAGE'			=> 'Таны зурвас',
	'IM_MSNM'				=> 'Please note that you need Windows Messenger installed to use this.',
	'IM_MSNM_BROWSER'		=> 'Your browser does not support this.',
	'IM_MSNM_CONNECT'		=> 'MSNM is not connected.\nYou have to connect to MSNM to continue.',		
	'IM_NAME'				=> 'Таны нэр',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.',
    'IM_NO_JABBER'         => 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'Хүлээн авагч',
	'IM_SEND'				=> 'Зурвас бичих',
	'IM_SEND_MESSAGE'		=> 'Зурвас бичих',
	'IM_SENT_JABBER'		=> 'Таны зурвас %1$s гишүүнд амжилттай илгээгдлээ.',
	'IM_USER'				=> 'Яаралтай зурвас илгээх',
	
	'LAST_ACTIVE'				=> 'Сүүлд зочилсон',
	'LESS_THAN'					=> 'Less than',
	'LIST_USER'					=> '1 гишүүн',
	'LIST_USERS'				=> '%d гишүүд',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Та нэвтрэн орж бүлгэмийн жагсаалтыг үзнэ үү.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Та нэвтрэн орж гишүүдийн жагсаалтыг үзнэ үү.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Та нэвтрэн орж хэрэглэгч хайна уу.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Та нэвтрэн орж хувийн мэдээлэл үзнэ үү.',

	'MORE_THAN'				=> 'Илүү: ',

	'NO_EMAIL'				=> 'Та гишүүдэд майл илгээх эрхгүй байна.',
	'NO_VIEW_USERS'			=> 'Та гишүүдийн жагсаалт болон танилцуулгыг харах эрхгүй байна.',

	'ORDER'					=> 'Эрэмбэлэх',
	'OTHER'					=> 'Бусад',

	'POST_IP'				=> 'Бичсэн IP/домайн',

	'RANK'					=> 'Үнэлгээ',
	'REAL_NAME'				=> 'Хүлээн авагчийн нэр',
	'RECIPIENT'				=> 'Хүлээн авагч',
	'REMOVE_FOE'			=> 'Дайсныг устгах',
	'REMOVE_FRIEND'			=> 'Найзыг устгах',

	'SEARCH_USER_POSTS'		=> 'Хэрэглэгчийн бичлэгийг хайх',
	'SELECT_MARKED'			=> 'Тэмдэглэсэнийг сонгох',
	'SELECT_SORT_METHOD'	=> 'Эрэмбэлэх төрөл',
	'SEND_AIM_MESSAGE'		=> 'AIM мессенжер',
	'SEND_ICQ_MESSAGE'		=> 'ICQ мессенжер',
	'SEND_IM'				=> 'Мессенжерээр холбогдох',
	'SEND_JABBER_MESSAGE'	=> 'Jabber мессенжер',
	'SEND_MESSAGE'			=> 'Зурвас илгээх',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM мессенжер',
	'SEND_YIM_MESSAGE'		=> 'YM мессенжер',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Сүүлд зочилсон',
	'SORT_POST_COUNT'		=> 'Бичлэгийн тоо',

	'USERNAME_BEGINS_WITH'	=> 'Username begins with',
	'USER_ADMIN'			=> 'Administrate user',
	'USER_BAN'              => 'Banning',
	'USER_FORUM'			=> 'Хэрэглэгчийн үзүүлэлт',
	'USER_ONLINE'			=> 'Холбогдсон',
	'USER_PRESENCE'			=> 'Forum presence',

	'VIEWING_PROFILE'		=> '%s -н мэдээлэл',
	'VISITED'				=> 'Сүүлд зочилсон',

	'WWW'					=> 'Веб сайт',
));

?>
