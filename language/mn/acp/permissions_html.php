<?php
/**
*
* @package Enable HTML
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'acl_u_html'		=> array('lang' => 'Can post HTML in posts.<br /><em>This allows all HTML, including scripts, which is a major security vulnerability.  This option should <strong>never</strong> be given to any user.</em>', 'cat' => 'post'),
	'acl_f_html'		=> array('lang' => 'Can post HTML in posts.<br /><em>This allows all HTML, including scripts, which is a major security vulnerability.  This option should <strong>never</strong> be given to any user.</em>', 'cat' => 'content'),
));
?>