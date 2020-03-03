<?php

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LP_TITLE'				=> 'Сүүлийн бичлэг харуулагч',

	'LP_ENABLED'			=> 'Сүүлийн сэдэв МОД-ыг нээх',

	'LP_SLIDE'				=> 'Слайд хувилбарыг идэвхжүүлэх бас энгийн хувилбарыг үлдээх',
	'LP_AVATAR'				=> 'Хөрөг идэвхжүүлэх ба жирийн дүрс хэвээр орхих',
	'LP_AMOUNT'				=> 'Хэдэн бичлэг харуулах хэмжээ',
	'LP_SAVED'				=> 'Тохиргоо амжилттай хадгалагдлаа!',

	'LP_CONFIG'				=> 'Хэн хаана юу хийж байна?',

	'INSTALLER_INTRO'					=> 'Танилцуулга',
	'INSTALLER_INTRO_WELCOME'			=> 'Суулгацад тавтай морил',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Юу хийхээ сонгоно уу.',

	'INSTALLER_INSTALL'					=> 'Суулгах',
	'INSTALLER_INSTALL_MENU'			=> 'Суулгахцэс',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation of the MOD v%s was successful. You may delete the install-folder now.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installation of the MOD v%s was <strong>not</strong> successful.',
	'INSTALLER_INSTALL_VERSION'			=> 'Install MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Welcome to the Installationmenu',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'When you choose to install the MOD, any database of previous versions will be dropped.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'Та энд хандах эрхгүй байна.',

	'MISSING_PARENT_MODULE'    => 'Module #%s is missing as a parent module for "%s".',

	'WARNING'							=> 'Анхаар',
));

?>
