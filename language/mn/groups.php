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
	'ALREADY_DEFAULT_GROUP'	    => 'The selected group is already your default group',
	'ALREADY_IN_GROUP'		    => 'Та аль хэдийнэ энэ бүлгэмд нэгдсэн байна',
	'ALREADY_IN_GROUP_PENDING'	=> 'You already requested joining the selected group.',
	
	'CANNOT_JOIN_GROUP'         => 'You are not able to join this group. You are only able to join open and freely open groups.',
    'CANNOT_RESIGN_GROUP'      => 'You are not able to resign from this group. You are only able to resign from open and freely open groups.',
   	'CHANGED_DEFAULT_GROUP'     => 'Successfully changed default group.',
	
	'GROUP_AVATAR'						=> 'Бүлгэмийн хөрөг', 
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'Хаалттай',
	'GROUP_DESC'						=> 'Бүлгэмийн тодорхойлолт',
	'GROUP_HIDDEN'						=> 'Нууцлагдсан',
	'GROUP_INFORMATION'					=> 'Бүлгэмийн мэдээлэл', 
	'GROUP_IS_CLOSED'					=> 'Энэ бол хаалттай бүлгэм байна, шинээр гишүүнээр элсэж боломжгүй харин бүлгэмийн тэргүүлэгчийн урилгаар элсэх боломжтой.',
	'GROUP_IS_FREE'						=> 'Энэ бол нээлттэй бүлгэм байна, бүх хэрэглэгчдэд гишүүнчлэл нээлттэй.', 
	'GROUP_IS_HIDDEN'					=> 'Энэ бол нууцлагдмал бүлгэм байна, зөвхөн гишүүд энэ бүлгэмийн тухай үзэж чадна.',
	'GROUP_IS_OPEN'						=> 'Энэ бол нээлттэй бүлгэм байна, бүх хэрэглэгчдэд гишүүнчлэл нээлттэй.',
	'GROUP_IS_SPECIAL'					=> 'Энэ бол онцгой бүлгэм байна, форумын удирдагчид энэ бүлгэмийг удирдана.', 
	'GROUP_JOIN'						=> 'Бүлгэмд нэгдэх',
	'GROUP_JOIN_CONFIRM'				=> 'Та энэ бүлгэмд нэгдэхийг хүсч байна уу?',
	'GROUP_JOIN_PENDING'				=> 'Request to join group',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Are you sure you want to request joining the selected group?',
	'GROUP_JOINED'						=> 'Бүлгэмд амжилттай нэгдлээ',
	'GROUP_JOINED_PENDING'				=> 'Successfully requested group membership. Please wait for a group leader to approve your membership.',
	'GROUP_LIST'						=> 'Manage users',
	'GROUP_MEMBERS'						=> 'Бүлгэмийн гишүүд',
	'GROUP_NAME'						=> 'Бүлгэмийн нэр',
	'GROUP_OPEN'						=> 'Нээлттэй',
	'GROUP_RANK'						=> 'Бүлнэмийн үнэлгээ', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Resign group membership',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Are you sure you want to resign your membership from the selected group?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Та энэ бүлгэмээс амжилттай хасагдлаа',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group',
	'GROUP_TYPE'						=> 'Бүлгэмийн төрөл',
	'GROUP_UNDISCLOSED'					=> 'Нууцлагдмал бүлгэм',
	'FORUM_UNDISCLOSED'					=> 'Нууцлагдсан форумын зохицуулах',

	'LOGIN_EXPLAIN_GROUP'	=> 'Та нэвтрэн орж бүлгэмийн мэдээллийг үзнэ үү',

	'NO_LEADERS'					=> 'Та аль нэгэн бүлгэмийн тэргүүлэгч биш байна',
	'NOT_LEADER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a leader of the selected group.',
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.',
	
	'PRIMARY_GROUP'		=> 'Primary group',

	'REMOVE_SELECTED'		=> 'Сонгосоныг устгах',

	'USER_GROUP_CHANGE'			=> 'From “%1$s” group to “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Тэргүүлэгчээс огцруулах',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));

?>
