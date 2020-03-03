<?php
/** 
*
* posting [Mongolian]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 B.Munkh-Erdene $
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
	'ADD_ATTACHMENT'			=> 'Хавсралт оруулах',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Хэрвээ та нэг юмуу хэд хэдэн файл оруулах бол доохи үйлдлийг хийнэ үү',
	'ADD_FILE'					=> 'Файл нэмэх',
	'ADD_POLL'					=> 'Санал асуулга үүсгэх',
	'ADD_POLL_EXPLAIN'			=> 'If you do not want to add a poll to your topic leave the fields blank',
	'ALREADY_DELETED'			=> 'Уучлаарай энэ бичлэг устгагдсан байна.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'The attachment comment contains forbidden characters (Emoji).',
	'ATTACH_DISK_FULL'			=> 'There is not enough free disk space to post this attachment.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, the board attachment quota has been reached.',
	'ATTACH_SIG'				=> 'Гарын үсгээ хавсаргах (Гарын үсгээ хувийн тохиргоондоо өөрчилж болно)',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Bold text: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Code display: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'List: Add list element',
	'BBCODE_F_HELP'				=> 'Font size: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>боломжгүй</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>боломжтой</em>',
	'BBCODE_I_HELP'				=> 'Italic text: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'List: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'List item: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Ordered list: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Зураг: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Quote text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Фонтын өнгө: [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'				=> 'Underline text: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'You cannot bump this topic so soon after the last post.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry but you may only delete posts which have not been replied to.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'This post has been locked. You can no longer edit that post.',
	'CANNOT_EDIT_TIME'			=> 'You can no longer edit or delete that post',
	'CANNOT_POST_ANNOUNCE'		=> 'Уучлаарай та зарласан сэдэв бичих боломжгүй.',
	'CANNOT_POST_STICKY'		=> 'Уучлаарай та наалттай сэдэв бичих боломжгүй.',
	'CHANGE_TOPIC_TO'			=> 'Сэдвийн төрөлийг солих ',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Your message contains %1$d character.',
		2	=> 'Your message contains %1$d characters.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Your signature contains %1$d character.',
		2	=> 'Your signature contains %1$d characters.',
	),
	'CLOSE_TAGS'				=> 'Таг хаах',
	'CURRENT_TOPIC'				=> 'Одоогийн сэдэв',

	'DELETE_FILE'				=> 'Файл устгах',
	'DELETE_MESSAGE'			=> 'Захиаг устгах',
	'DELETE_MESSAGE_CONFIRM'	=> 'Та энэ бичлэгийг устгахыг зөвшөөрч байна уу?',
	'DELETE_OWN_POSTS'			=> 'Sorry but you can only delete your own posts.',
	'DELETE_PERMANENTLY'		=> 'Delete permanently',
	'DELETE_POST_CONFIRM'		=> 'Та энэ бичлэгийг устгахыг зөвшөөрч байна уу?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete this post?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Permanently delete this post so it can not be recovered',
		2	=> 'Permanently delete %1$d posts so they can not be recovered',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Are you sure you want to delete these posts?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete these posts?',
	'DELETE_REASON'				=> 'Reason for deletion',
	'DELETE_REASON_EXPLAIN'		=> 'The specified reason for deletion will be visible to moderators.',
	'DELETE_POST_WARN'			=> 'Delete this post',
	'DELETE_TOPIC_CONFIRM'		=> 'Are you sure you want to delete this topic?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Permanently delete this topic so it can not be recovered',
		2	=> 'Permanently delete %1$d topics so they can not be recovered',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete this topic?',
	'DELETE_TOPICS_CONFIRM'		=> 'Are you sure you want to delete these topics?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Are you sure you want to <strong>permanently</strong> delete these topics?',
	'DISABLE_BBCODE'			=> 'BBCode хөрвүүлэхгүй',
	'DISABLE_MAGIC_URL'			=> 'URL хаяг автоматаар идэвхжүүлэхгүй',
	'DISABLE_SMILIES'			=> 'Эмоц хөрвүүлэхгүй',
	'DISALLOWED_CONTENT'        => 'The upload was rejected because the uploaded file was identified as a possible attack vector.',
	'DISALLOWED_EXTENSION'		=> 'Энэ %s өргөтгөл зөвшөөрөгдөөгүй байна.',
	'DRAFT_LOADED'				=> 'Draft loaded into posting area, you may want to finish your post now.<br />Your draft will be deleted after submitting this post.',
	'DRAFT_LOADED_PM'			=> 'Draft loaded into message area, you may want to finish your private message now.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'				=> 'Draft successfully saved.',
	'DRAFT_TITLE'				=> 'Draft title',

	'EDIT_REASON'				=> 'Reason for editing this post',
	'EMPTY_FILEUPLOAD'			=> 'The uploaded file is empty',
	'EMPTY_MESSAGE'				=> 'You must enter a message when posting.',
	'EMPTY_REMOTE_DATA'			=> 'File could not be uploaded, please try uploading the file manually.',

	'FLASH_IS_OFF'				=> '[flash] <em>боломжгүй</em>',
	'FLASH_IS_ON'				=> '[flash] <em>боломжтой</em>',
	'FLOOD_ERROR'				=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'				=> 'Фонтын өнгө',
	'FONT_COLOR_HIDE'			=> 'Hide font color',
	'FONT_HUGE'					=> 'Аварга том',
	'FONT_LARGE'				=> 'Том',
	'FONT_NORMAL'				=> 'Хэвийн',
	'FONT_SIZE'					=> 'Фонтын хэмжээ',
	'FONT_SMALL'				=> 'Жижиг',
	'FONT_TINY'					=> 'Жижигхээн',

	'GENERAL_UPLOAD_ERROR'		=> 'Could not upload attachment to %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>боломжгүй</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>боломжтой</em>',
	'INVALID_FILENAME'			=> '%s is an invalid filename',

	'LOAD'						=> 'Load',
	'LOAD_DRAFT'				=> 'Load draft',
	'LOAD_DRAFT_EXPLAIN'		=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'You need to login in order to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Та бичлэг устгахын тулд нэвтрэх хэрэгтэй.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'You need to login in order to soft-delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Та бичлэг хийхийн тулд нэвтрэх хэрэгтэй',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Та ишлэлтэй хариулахын тулд нэвтрэх хэрэгтэй.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Та сэдэвт хариулахын тулд нэвтрэх хэрэгтэй.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Your flash files may only be up to %d pixel high.',
		2	=> 'Your flash files may only be up to %d pixels high.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Your flash files may only be up to %d pixel wide.',
		2	=> 'Your flash files may only be up to %d pixels wide.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Your images may only be up to %1$d pixel high.',
		2	=> 'Your images may only be up to %1$d pixels high.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Your images may only be up to %d pixel wide.',
		2	=> 'Your images may only be up to %d pixels wide.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Enter your message here, it may contain no more than <strong>%d</strong> character.',
		2	=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
	),	'MESSAGE_DELETED'			=> 'Зурвас устгагдлаа.',
	'MORE_SMILIES'				=> 'Өөр инээмсэглэлүүд үзэх',

	'NOTIFY_REPLY'				=> 'Энэ сэдэвт хариулт бичигдвэл надад Эмэйлээр мэдэгдэж байх',
	'NOT_UPLOADED'				=> 'File could not be uploaded.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options',
	'NO_PM_ICON'				=> 'No PM icon',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified',
	'NO_TEMP_DIR'				=> 'Temporary folder could not be found or is not writable.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded',
	'PHP_UPLOAD_STOPPED'		=> 'A PHP extension has stopped the file upload.',
	'PHP_SIZE_NA'				=> 'The attachment’s filesize is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s filesize is too large, the maximum upload size is %d MB.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'Санал асуулгыг устгах',
	'POLL_FOR'					=> 'Санал асуулга эхэлсэн',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 or leave blank for a never ending poll',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option. If you remove or add options all previous votes will be reset.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	),
	'POLL_QUESTION'				=> 'Poll question',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Posted attachments',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'Энэ бичлэг амжилттай устгагдлаа',
	'POST_EDITED'				=> 'Энэ бичлэг амжилттай засагдлаа',
	'POST_EDITED_MOD'			=> 'This message has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'Нийтийн зарлал',
	'POST_ICON'					=> 'Бичлэгийн icon',
	'POST_NORMAL'				=> 'Хэвийн',
	'POST_REVIEW'				=> 'Бичлэгийг харах',
	'POST_REVIEW_EDIT'			=> 'Post review',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'Таны бичлэг амжилттай бичигдлээ',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'Сэдвийг өөрчлөхдөө',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'You may embed only %d quote within each other.',
		2	=> 'You may embed only %d quotes within each other.',
	),
	'QUOTE_NO_NESTING'			=> 'You may not embed quotes within each other.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'The specified file could not be uploaded because the request timed out.',
	'SAVE'						=> 'Хадгалах',
	'SAVE_DATE'					=> 'Хадгалагдсан:',
	'SAVE_DRAFT'				=> 'Нийтлэлгүйгээр хадгалах',
	'SAVE_DRAFT_CONFIRM'		=> 'Нийтлэлгүй хадгалахад зөвхөн гарчиг болон бичлэгийн текст хадгалагдах ба бусад зүйлс хадгалагдахгүй. Та үргэлжлүүлэх үү?',
	'SMILIES'					=> 'Инээмсэглэлүүд',
	'SMILIES_ARE_OFF'			=> 'Инээмсэглэлүүд <em>боломжгүй</em>',
	'SMILIES_ARE_ON'			=> 'Инээмсэглэлүүд <em>боломжтой</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Наах/Зарлах хугацаа',
	'STICK_TOPIC_FOR'			=> 'Сэдвийг наах',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 оруулах юм уу хоосон орхисноор үргэлж харагдах наалттай зарлал оруулж болно.',
	'STYLES_TIP'				=> 'Зөвлөмж: Та текстээ идэвхжүүлж байгаад загвар оруулбал их амар байх болно',

	'TOO_FEW_CHARS'				=> 'Текст хэт богино байна.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'You need to enter at least %1$d character.',
		2	=> 'You need to enter at least %1$d characters.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Та дор хаяж хоёр сонголттойгоор санал асуулга үүсгэж чадна.',
	'TOO_MANY_ATTACHMENTS'		=> 'Дахин хавсаргах боломжгүй, дээд хэмжээ %d.',
	'TOO_MANY_CHARS'			=> 'Текст хэт урт байна.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'The maximum number of allowed characters is %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Topic has been bumped successfully.',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Your message contains the following unsupported characters:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Your subject contains the following unsupported characters:<br />%s',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'URL хаяг буруу байна.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] <em>боломжгүй</em>',
	'URL_IS_ON'					=> '[url] <em>боломжтой</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum',
	'USER_CANNOT_DELETE'		=> 'You cannot delete posts in this forum',
	'USER_CANNOT_EDIT'			=> 'You cannot edit posts in this forum',
	'USER_CANNOT_REPLY'			=> 'You cannot reply in this forum',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sЭнд дарж бичлэгээ үзнэ үү%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sӨөрийн бичсэн зурвасаа үзэх%s',

	'WRONG_FILESIZE'			=> 'Файлын хэмжээ хэтэрхий том байна, зөвшөөрөгдөх хэмжээ %1d %2s',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
));

?>
