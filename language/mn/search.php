<?php
/** 
*
* search [Mongolian]
*
* @package language
* @version $Id: search.php,v 1.19 2007/01/21 18:33:45 B.Munkh-Erdene $
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
	'ALL_AVAILABLE'			=> 'All available',
	'ALL_RESULTS'			=> 'Хайлтын үр дүн',

	'DISPLAY_RESULTS'		=> 'Дэлгэцэнд харуулахдаа',

	'FOUND_SEARCH_MATCH'		=> 'Хайлтаар %d зүйл олдлоо',
	'FOUND_SEARCH_MATCHES'		=> 'Хайлтаар %d зүйл олдлоо',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Search found more than %d matches',

	'GLOBAL'				=> 'Нийтийн зарлал',

	'IGNORED_TERMS'			=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'The following words in your search query were ignored because they are too common words: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Бичлэгийг үзэх',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'The board requires you to be registered and logged in to view your own posts.',

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %d characters and must not contain more than %d characters excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'No suitable matches were found.',
	'NO_SEARCH_TIME'		=> 'Sorry but you cannot use search at this time. Please try again in a few minutes.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'тэмдэгтийг буцаа',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'Limit results to previous',
	'RESULT_SORT'			=> 'Үр дүнг эрэмбэлэх',
	'RETURN_FIRST'			=> 'Бичлэгүүдийн эхний',
	'RETURN_TO_SEARCH_ADV'	=> 'Return to advanced search',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'Оруулсан ямар нэгэн үг юмуу эсвэл оруулсан бүтцийг ашиглан хай',
	'SEARCH_ANY_TERMS'			=> 'Бүх оруулсан үгсээр хай',
	'SEARCH_AUTHOR'				=> 'Зохиогчоор хайх',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Орлуулгыг тэмдэглэхдээ * тэмдэгийг ашиглана уу!',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'Хэлэлцүүлгээс хайх',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'			=> 'Эдгээр олдсон зүйлээс хайх',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'Зөвхөн бичлэгээс',
	'SEARCH_OPTIONS'			=> 'Хайлтын тохиргоо',
	'SEARCH_QUERY'				=> 'Хайлтын бүтэц',
	'SEARCH_SUBFORUMS'			=> 'Дэд форумаас',
	'SEARCH_TITLE_MSG'			=> 'Агуулга болон бичлэгээс',
	'SEARCH_TITLE_ONLY'			=> 'Зөвхөн сэдвийн гарчигаар',
	'SEARCH_WITHIN'				=> 'Хайхдаа',
	'SORT_ASCENDING'			=> 'Өсөхөөр',
	'SORT_AUTHOR'				=> 'Зохиогч',
	'SORT_DESCENDING'			=> 'Буурахаар',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Гарчиг',
	'SORT_TIME'					=> 'Огноо',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>
