<?php
/** 
*
* mcp [Mongolian]
*
* @package language
* @version $Id: mcp.php,v 1.83 2007/10/04 15:07:24 B.Munkh-Erdene $
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
	'ACTION'				=> 'Үйлдэл',
	'ACTION_NOTE'			=> 'Action/Note',
	'ADD_FEEDBACK'			=> 'Add feedback',
	'ADD_FEEDBACK_EXPLAIN'	=> 'If you would like to add a report on this please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted.',
	'ADD_WARNING'			=> 'Сануулга өгөх',
	'ADD_WARNING_EXPLAIN'	=> 'To send a warning to this user please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted.',
	'ALL_ENTRIES'			=> 'All entries',
	'ALL_NOTES_DELETED'		=> 'Бүх хэрэглэгчийн тэмдэглэлүүд устгагдлаа',
	'ALL_REPORTS'			=> 'Бүх мэдээллүүд',
	'ALREADY_REPORTED'		=> 'Энэ бичлэг аль хэдийнэ мэдээлэшдсэн байна',
	'ALREADY_WARNED'		=> 'A warning has already been issued for this post',
	'APPROVE'				=> 'Сайшаах',
	'APPROVE_POST'			=> 'Бичлэг сайшаах',
	'APPROVE_POST_CONFIRM'	=> 'Та энэ бичлэгийг сайшааж үзэх үү?',
	'APPROVE_POSTS'			=> 'Бичлэгүүд сайшаах',
	'APPROVE_POSTS_CONFIRM'	=> 'Та энэ бичлэгүүдийг сайшааж үзэх үү?',

	'CANNOT_MOVE_SAME_FORUM'=> 'You cannot move a topic to the forum it’s already in',
	'CANNOT_WARN_ANONYMOUS'	=> 'Та бүртгэгдээгүй хэрэглэгч болон зочдод сануулга өгч чадахгүй',
	'CANNOT_WARN_SELF'		=> 'Та өөртөө сануулга өгч чадахгүй',
	'CAN_LEAVE_BLANK'		=> 'This can be left blank.',
	'CHANGE_POSTER'			=> 'Бичэгчийг солих',
	'CLOSE_REPORT'			=> 'Мэдээллийг хаах',
	'CLOSE_REPORT_CONFIRM'	=> 'Та сонгосон мэдээллийн хаах уу?',
	'CLOSE_REPORTS'			=> 'Мэдээллийг хаах',
	'CLOSE_REPORTS_CONFIRM'	=> 'Та сонгосон мэдээллийг хаах уу?',

	'DELETE_POSTS'				=> 'Бичлэгүүдийг устгах',
	'DELETE_POSTS_CONFIRM'		=> 'Та энэ бичлэгүүдийг устгах уу?',
	'DELETE_POST_CONFIRM'		=> 'Та энэ бичлэгийг устгах уу?',
	'DELETE_REPORT'				=> 'Мэдээллийг устгах',
	'DELETE_REPORT_CONFIRM'		=> 'Та сонгосон мэдээллийг устгахыг хүсч байна уу?',
	'DELETE_REPORTS'			=> 'Мэдээллийг устгах',
	'DELETE_REPORTS_CONFIRM'	=> 'Та сонгосон мэдээллийг устгахыг хүсч байна уу?',
	'DELETE_SHADOW_TOPIC'		=> 'Сэдвийн сүүдрийг устгах',
	'DELETE_TOPICS'				=> 'Сонгосон сэдвийг устгах',
	'DELETE_TOPICS_CONFIRM'		=> 'Та энэ сэдэвүүдийг устгах уу?',
	'DELETE_TOPIC_CONFIRM'		=> 'Та энэ сэдвийг устгах уу?',
	'DISAPPROVE'				=> 'Буруушаах',
	'DISAPPROVE_REASON'			=> 'Reason for disapproval',
	'DISAPPROVE_POST'			=> 'Бичлэг буруушаах',
	'DISAPPROVE_POST_CONFIRM'	=> 'Та энэ бичлэгүүдийг буруушааж үзэх үү?',
	'DISAPPROVE_POSTS'			=> 'Бичлэгүүд буруушаах',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Та энэ бичлэгүүдийг буруушааж үзэх үү?',
	'DISPLAY_LOG'				=> 'Өмнөхөөс харуулах',
	'DISPLAY_OPTIONS'			=> 'Тохиргоо',

	'EMPTY_REPORT'					=> 'You must enter a description when selecting this reason',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Please note that one or several topics have been removed from the database because they were or become empty.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Хуулах',
	'FORK_TOPIC'			=> 'Сэдвийг хуулах',
	'FORK_TOPIC_CONFIRM'	=> 'Та энэ сэдвийг хуулахыг зөвшөөрч байна уу?',
	'FORK_TOPICS'			=> 'Сонгосон сэдэвүүд хуулагдлаа',
	'FORK_TOPICS_CONFIRM'	=> 'Та энэ сэдэвүүдийг хуулахыг зөвшөөрч байна уу?',
	'FORUM_DESC'			=> 'Description',
	'FORUM_NAME'			=> 'Форумын нэр',
	'FORUM_NOT_EXIST'		=> 'The forum you selected does not exist.',
	'FORUM_NOT_POSTABLE'	=> 'The forum you selected cannot be posted to.',
	'FORUM_STATUS'			=> 'Форумын статус',
	'FORUM_STYLE'			=> 'Форумын загвар',

	'GLOBAL_ANNOUNCEMENT'	=> 'Нийтийн зарлал',

	'IP_INFO'				=> 'IP хаягийн мэдээлэл',
	'IPS_POSTED_FROM'		=> 'Хэрэглэгч энэ IP хаягаас бичсэн байна',

	'LATEST_LOGS'				=> 'Сүүлийн 5 үйлдэл',
	'LATEST_REPORTED'			=> 'Сүүлийн 5 мэдээлэл',
	'LATEST_UNAPPROVED'			=> 'Сайшаал хүлээж буй сүүлийн 5 бичлэг',
	'LATEST_WARNING_TIME'		=> 'Сүүлийн сануулгын огноо',
	'LATEST_WARNINGS'			=> 'Сүүлийн 5 сануулга',
	'LEAVE_SHADOW'				=> 'Leave shadow topic in place',
	'LIST_REPORT'				=> '1 мэдээлэл',
	'LIST_REPORTS'				=> '%d мэдээлэл',
	'LOCK'						=> 'Цоожлох',
	'LOCK_POST_POST'			=> 'Бичлэгийг цоожлох',
	'LOCK_POST_POST_CONFIRM'	=> 'Are you sure you want to prevent editing this post?',
	'LOCK_POST_POSTS'			=> 'Сонгосон бичлэгийг цоожлох',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Are you sure you want to prevent editing the selected posts?',
	'LOCK_TOPIC_CONFIRM'		=> 'Та энэ сэдвийг цоожлох уу?',
	'LOCK_TOPICS'				=> 'Сонгосон сэдвийг цоожлох',
	'LOCK_TOPICS_CONFIRM'		=> 'Та сонгосон бүх сэдвийг цоожлох уу?',
	'LOGS_CURRENT_TOPIC'		=> 'Currently viewing logs of:',
	'LOGIN_EXPLAIN_MCP'			=> 'Форумыг зохицуулахын тулд нэвтэрнэ үү.',
	'LOGVIEW_VIEWTOPIC'			=> 'Сэдвийг үзэх',
	'LOGVIEW_VIEWLOGS'			=> 'View topic log',
	'LOGVIEW_VIEWFORUM'			=> 'Форум үзэх',
	'LOOKUP_ALL'				=> 'Бүх IP хаягийг үзэх',
	'LOOKUP_IP'					=> 'Энэ IP хаягийг үзаэх',

	'MARKED_NOTES_DELETED'		=> 'Сонгосон тэмдэглэлүүд устгагдлаа',

	'MCP_ADD'						=> 'Сануулга өгөх',

	'MCP_BAN'					=> 'Banning',
	'MCP_BAN_EMAILS'			=> 'Ban emails',
	'MCP_BAN_IPS'				=> 'Ban IPs',
	'MCP_BAN_USERNAMES'			=> 'Ban Usernames',

	'MCP_LOGS'						=> 'Moderator logs',
	'MCP_LOGS_FRONT'				=> 'Нүүр хуудас',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forum logs',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Topic logs',

	'MCP_MAIN'						=> 'Үндсэн',
	'MCP_MAIN_FORUM_VIEW'			=> 'Форум үзэх',
	'MCP_MAIN_FRONT'				=> 'Нүүр хуудас',
	'MCP_MAIN_POST_DETAILS'			=> 'Бичлэгийн тухай үзэх',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Сэдэв үзэх',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modify to “Зарлал”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Та сэдвийн төрөлийг “Зарлал” болгож солих уу?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modify to “Зарлал”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Та сэдвийн төрөлийг “Зарлал” болгож солих уу?',
	'MCP_MAKE_GLOBAL'				=> 'Modify to “Нийтийн зарлал”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Та сэдвийн төрөлийг “Нийтийн зарлал” болгож солих уу?',
	'MCP_MAKE_GLOBALS'				=> 'Modify to “Нийтийн зарлал”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Та сэдвийн төрөлийг “Нийтийн зарлал” болгож солих уу?',
	'MCP_MAKE_STICKY'				=> 'Modify to “Наалттай”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Та сэдвийн төрөлийг “Наалттай” болгож солих уу?',
	'MCP_MAKE_STICKIES'				=> 'Modify to “Наалттай”s',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Та сэдвийн төрөлийг “Наалттай” болгож солих уу?',
	'MCP_MAKE_NORMAL'				=> 'Modify to “Стандарт сэдэв”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Та сэдвийн төрөлийг “Стандарт сэдэв” болгож солих уу?',
	'MCP_MAKE_NORMALS'				=> 'Modify to “Стандарт сэдэв”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Та сэдвийн төрөлийг “Стандарт сэдэв” болгож солих уу?',

	'MCP_NOTES'						=> 'Хэрэглэгчийн тэмдэглэл',
	'MCP_NOTES_FRONT'				=> 'Нүүр хуудас',
	'MCP_NOTES_USER'				=> 'Хэрэглэгчийг үзэх',

	'MCP_POST_REPORTS'				=> 'Reports issued on this post',
	
	'MCP_REPORTS'					=> 'Мэдээлэгдсэн бичлэг',
	'MCP_REPORT_DETAILS'			=> 'Мэдээллийг үзэх',
	'MCP_REPORTS_CLOSED'			=> 'Хаалттай мэдээлэл',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'This is a list of all reports about posts which have previously been resolved',
	'MCP_REPORTS_OPEN'				=> 'Нээлттэй мэдээлэл',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'This is a list of all reported posts which are still to be handled',

	'MCP_QUEUE'								=> 'Moderation queue',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Approve details',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Сайшаал хүлээж буй бичлэг',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'This is a list of all posts which require approving before they will be visible to users',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Сайшаал хүлээж буй сэдэв',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'This is a list of all topics which require approving before they will be visible to users',

	'MCP_VIEW_USER'			=> 'View warnings for a specific user',

	'MCP_WARN'				=> 'Сануулга',
	'MCP_WARN_FRONT'		=> 'Нүүр хуудас',
	'MCP_WARN_LIST'			=> 'Сануулгын жагсаалт',
	'MCP_WARN_POST'			=> 'Warn for specific post',
	'MCP_WARN_USER'			=> 'Сануулга өгөх',

	'MERGE_POSTS'			=> 'Бичлэгүүдийг хуваах',
	'MERGE_POSTS_CONFIRM'	=> 'Are you sure you want to merge the selected posts?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Using the form below you can merge selected posts into another topic. These posts will not be reordered and will appear as if the users posted them to the new topic.<br />Please enter the destination topic id or click on “Select topic” to search for one.',
	'MERGE_TOPIC_ID'		=> 'Destination topic identification number',
	'MERGE_TOPICS'			=> 'Merge topics',
	'MERGE_TOPICS_CONFIRM'	=> 'Are you sure you want to merge the selected topics?',
	'MODERATE_FORUM'		=> 'Форумыг зохицуулах',
	'MODERATE_TOPIC'		=> 'Moderate topic',
	'MODERATE_POST'			=> 'Moderate post',
	'MOD_OPTIONS'			=> 'Зохицуулагчийн тохиргоо',
	'MORE_INFO'				=> 'Further information',
	'MOST_WARNINGS'			=> 'Хамгийн олон сануулга авсан хэрэглэгчид',
	'MOVE_TOPIC_CONFIRM'	=> 'Are you sure you want to move the topic into a new forum?',
	'MOVE_TOPICS'			=> 'Move selected topics',
	'MOVE_TOPICS_CONFIRM'	=> 'Are you sure you want to move the selected topics into a new forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notify poster about approval?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notify poster about disapproval?',
	'NOTIFY_USER_WARN'				=> 'Notify user about warning?',
	'NOT_MODERATOR'					=> 'You are not a moderator of this forum',
	'NO_DESTINATION_FORUM'			=> 'Please select a forum for destination',
	'NO_DESTINATION_FORUM_FOUND'	=> 'There is no destination forum available.',
	'NO_ENTRIES'					=> 'No log entries for this period',
	'NO_FEEDBACK'					=> 'No feedback exists for this user',
	'NO_FINAL_TOPIC_SELECTED'		=> 'You have to select a destination topic for merging posts',
	'NO_MATCHES_FOUND'				=> 'Тохирох зүйл олдсонгүй',
	'NO_POST'						=> 'You have to select a post in order to warn the user for a post',
	'NO_POST_REPORT'				=> 'This post was not reported.',
	'NO_POST_SELECTED'				=> 'You must select at least one post to perform this action',
	'NO_REASON_DISAPPROVAL'			=> 'Please give an appropriate reason for disapproval',
	'NO_REPORT'						=> 'Мэдээлэл байхгүй',
	'NO_REPORTS'					=> 'Мэдээлэл алга байна',
	'NO_REPORT_SELECTED'			=> 'You must select at least one report to perform this action.',
	'NO_TOPIC_ICON'					=> 'None',
	'NO_TOPIC_SELECTED'				=> 'You must select at least one topic to perform this action.',
	'NO_TOPICS_QUEUE'				=> 'Сэдэв байхгүй',

	'ONLY_TOPIC'			=> '"%s" зөвхөн сэдэв',
	'OTHER_USERS'			=> 'Бусад хэрэглэгч энэ IP хаягаас бичсэн байна',

	'POSTER'					=> 'Бичигч',
	'POSTS_APPROVED_SUCCESS'	=> 'Сонгосон бичлэг сайшаагдлаа',
	'POSTS_DELETED_SUCCESS'		=> 'Сонгосон бичлэг мэдээллийн сангаас амжилттай устгагдлаа',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Сонгосон бичлэг буруушаагдлаа',
	'POSTS_LOCKED_SUCCESS'		=> 'Сонгосон бичлэг амжилттай цоожлогдлоо',
	'POSTS_MERGED_SUCCESS'		=> 'Сонгосон бичлэг хуваагдлаа',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Сонгосон бичлэг амжилттай нээгдлээ',
	'POSTS_PER_PAGE'			=> 'Хуудсан дахь бичлэг',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts)',
	'POST_APPROVED_SUCCESS'		=> 'Сонгосон бичлэг сайшаагдлаа',
	'POST_DELETED_SUCCESS'		=> 'онгосон бичлэг мэдээллийн сангаас амжилттай устгагдлаа',
	'POST_DISAPPROVED_SUCCESS'	=> 'Сонгосон бичлэг буруушаагдлаа',
	'POST_LOCKED_SUCCESS'		=> 'Бичлэг амжилттай цоожлогдлоо',
	'POST_NOT_EXIST'			=> 'The post you requested does not exist',
	'POST_REPORTED_SUCCESS'		=> 'Энэ бичлэг амжилттай мэдээлэгдлээ',
	'POST_UNLOCKED_SUCCESS'		=> 'Бичлэг амжилттай нээгдлээ',

	'READ_USERNOTES'			=> 'Хэрэглэгчийн мэвдэглэл',
	'READ_WARNINGS'				=> 'Хэрэглэгчийн сануулга',
	'REPORTER'					=> 'Мэдээлэгч',
	'REPORTED'					=> 'Мэдээлэгдсэн',
	'REPORTED_BY'				=> 'Мэдээлсэн',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'The selected reports have been closed successfully.',
	'REPORTS_DELETED_SUCCESS'	=> 'The selected reports have been deleted successfully.',
	'REPORTS_TOTAL'				=> 'In total there are <strong>%d</strong> reports to review',
	'REPORTS_ZERO_TOTAL'		=> 'Одоогоор мэдээлэл алга',
	'REPORT_CLOSED'				=> 'This report has previously been closed.',
	'REPORT_CLOSED_SUCCESS'		=> 'Сонгосон мэдээлэл амжилттай хаагдлаа.',
	'REPORT_DELETED_SUCCESS'	=> 'Сонгосон мэдээлэл амжилттай устгагдлаа.',
	'REPORT_DETAILS'			=> 'Мэдээллийг үзэх',
	'REPORT_MESSAGE'			=> 'Энэ бичлэгийг мэдээлэх',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected message. Reporting should generally be used only if the message breaks forum rules.',
	'REPORT_NOTIFY'				=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'Report reason',
	'REPORT_TIME'				=> 'Мэдээллийн огноо',
	'REPORT_TOTAL'				=> 'In total there is <strong>1</strong> report to review',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sЗурвас руу буцах%s',
	'RETURN_NEW_FORUM'			=> '%sШинэ форум луу буцах%s',
	'RETURN_NEW_TOPIC'			=> '%sШинэ сэдэв рүү буцах%s',
	'RETURN_POST'				=> '%sБичлэг рүү буцахt%s',
	'RETURN_QUEUE'				=> '%sReturn to the queue%s',
	'RETURN_REPORTS'			=> '%sМэдээлэл рүү буцах%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sСэдэв рүү буцах%s',

	'SEARCH_POSTS_BY_USER'				=> 'Хэрэглэгчийн бичлэгээс хайх',
	'SELECT_ACTION'						=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'						=> 'Select for merge',
	'SELECT_TOPICS_FROM'				=> 'Select topics from',
	'SELECT_TOPIC'						=> 'Сэдэв сонгох',
	'SELECT_USER'						=> 'Хэрэглэгч сонгох',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'Огноо',
	'SORT_IP'							=> 'IP хаяг',
	'SORT_WARNINGS'						=> 'Сануулга',
	'SPLIT_AFTER'						=> 'Сонгосон сэдвийг хуваах',
	'SPLIT_FORUM'						=> 'Форумын шинэ сэдэвт хуваах',
	'SPLIT_POSTS'						=> 'Сонгосон бичлэгийг хуваах',
	'SPLIT_SUBJECT'						=> 'Шинэ сэдвийн гарчиг',
	'SPLIT_TOPIC_ALL'					=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Та энэ сэдвийг хуваах уу?',
	'SPLIT_TOPIC_BEYOND'				=> 'Split topic at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this topic at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post',

	'THIS_POST_IP'				=> 'Энэ бичлэгийн IP хаяг',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected topics have been approved',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected topics have been successfully removed from the database',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'The selected topics have been disapproved',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected topics have been copied successfully',
	'TOPICS_LOCKED_SUCCESS'		=> 'Сонгосон сэдэв цоожлогдлоо',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected topics have been moved successfully',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected topics have been resynchronised',
	'TOPICS_TYPE_CHANGED'		=> 'Сэдвийн төрөлийг амжилттай солилоо.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Сонгосон сэдэв нээгдлээ',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected topic has been approved',
	'TOPIC_DELETED_SUCCESS'		=> 'Сонгосон сэдэв мэдээллийн сангаас амжилттай устгагдлаа',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected topic has been disapproved',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected topic has been copied successfully',
	'TOPIC_LOCKED_SUCCESS'		=> 'Сонгосон сэдэв цоожлогдлоо',
	'TOPIC_MOVED_SUCCESS'		=> 'Сонгосон сэдэв амжилттай зөөгдлөө',
	'TOPIC_NOT_EXIST'			=> 'The topic you selected does not exist',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected topic has been split successfully',
	'TOPIC_TIME'				=> 'Сэдвийн огноо',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected topic has been unlocked',
	'TOTAL_WARNINGS'			=> 'Нийт сануулга',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Нийт <strong>%d</strong> сайшаал хүлээж байна',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Сайшаал хүлээж байгаа бичлэг алга',
	'UNAPPROVED_POST_TOTAL'			=> 'Одоо <strong>1</strong> сайшаал хүлээж байна',
	'UNLOCK'						=> 'Нээх',
	'UNLOCK_POST'					=> 'Бичлэгийг нээх',
	'UNLOCK_POST_EXPLAIN'			=> 'Allow editing',
	'UNLOCK_POST_POST'				=> 'Бичлэгийг нээх',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Are you sure you want to allow editing this post?',
	'UNLOCK_POST_POSTS'				=> 'Сонгосон бичлэгийг нээх',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'Сэдвийг нээх',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Are you sure you want to unlock this topic?',
	'UNLOCK_TOPICS'					=> 'Сонгосон сэдвийг нээх',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Are you sure you want to unlock all selected topics?',
	'USER_CANNOT_POST'				=> 'Та энэ форумд бичлэг хийж чадахгүй',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'Хэрэглэгчид сануулга өглөө.',

	'VIEW_DETAILS'			=> 'Мэдээллийг үзэх',

	'WARNED_USERS'			=> 'Сануулга авсан хэрэглэгчид',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> 'This is a warning regarding the following post made by you: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Сануулга алга байна',

	'YOU_SELECTED_TOPIC'	=> 'You selected topic number %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Варез',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Хориотой сэдэв',
			'OTHER'		=> 'Бусад'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'The post contains links to illegal or pirated software',
			'SPAM'		=> 'The reported post has the only purpose to advertise for a website or another product',
			'OFF_TOPIC'	=> 'The reported post is off topic',
			'OTHER'		=> 'The reported post does not fit into any other category, please use the further information field'
		)
	),
));

?>
