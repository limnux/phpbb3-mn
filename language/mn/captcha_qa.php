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
	'CAPTCHA_QA'				=> 'Асуулт, хариулт',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Та доорх талбарт дээрх асуултанд хариулна уу.',
	'CONFIRM_QUESTION_WRONG'	=> 'Таны хариулт буруу байна.',
	'CONFIRM_QUESTION_MISSING'	=> 'Questions for the captcha could not be retrieved. Please contact a board administrator.',

	'QUESTION_ANSWERS'			=> 'Хариултууд',
	'ANSWERS_EXPLAIN'			=> 'Зөв хариулт бүрийг мөр мөрөөр бичнэ үү.',
	'CONFIRM_QUESTION'			=> 'Асуулт:',

	'ANSWER'					=> 'Хариулт',
	'EDIT_QUESTION'				=> 'Асуулт засах',
	'QUESTIONS'					=> 'Асуултууд',
	'QUESTIONS_EXPLAIN'			=> 'During registration, users will be asked one of the questions specified here. To use this plugin, at least one question must be set in the default language. These questions should be easy for your target audience to answer, but beyond the ability of a bot capable of running a Google™ search. Using a large and regulary changed set of questions will yield the best results. Enable the strict setting if your question relies on punctuation or capitalisation.',
	'QUESTION_DELETED'			=> 'Асуулт устгагдлаа',
	'QUESTION_LANG'				=> 'Хэлт',
	'QUESTION_LANG_EXPLAIN'		=> 'Энэ асуулт хариулт нь дараах хэлээр бичигдсэн байна.',
	'QUESTION_STRICT'			=> 'Strict check',
	'QUESTION_STRICT_EXPLAIN'	=> 'If enabled, capitalisation and whitespace will also be enforced.',

	'QUESTION_TEXT'				=> 'Асуулт:',
	'QUESTION_TEXT_EXPLAIN'		=> 'The question that will be asked on registration.',

	'QA_ERROR_MSG'				=> 'Та асуултанд хариулж дор хаяж нэг хариулт оруулна уу.',
	'QA_LAST_QUESTION'			=> 'You cannot delete all questions while the plugin is active.',
));
