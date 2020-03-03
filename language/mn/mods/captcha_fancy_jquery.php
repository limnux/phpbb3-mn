<?php
/**
*
* fancy_captcha [English]
*
* @package Fancy jQuery Captcha
* @version $Id: captcha_fancy_jquery.php 40 2009-10-03 19:44:04Z mikewill $
* @copyright (c) 2009 Michael Williams (http://www.whizdevelopment.com)
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
	'CAPTCHA_FANCY_JQUERY'		=> '',

	'DRAG_OBJECT_FAILED'		=> 'Та хүн болохоо баталж доорх зааврын дагуу хулганаар хэлсэн зүйлийг тойрог дотор аваачиж тавьна уу.',

	'ENABLE_JAVASCRIPT'			=> 'Та хүн гэдгээ батлахын тулд веб хөтчийнхөө Javascript тохиргоог асаана уу.',

	'VERIFY_HUMAN'				=> 'Та өөрийгөө хүн гэдгийг батлахын тулд,<br /><span>хайчийг</span> тойрог руу хулганаараа зөөж тавина уу.',
));

?>
