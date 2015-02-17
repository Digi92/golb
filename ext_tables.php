<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$boot = function($packageKey) {
	$extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($packageKey);

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Blog.' . $packageKey,
		'Blog',
		'Blog'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($packageKey, 'Configuration/TypoScript', 'Golb');

	//New fields
	$GLOBALS['TCA']['tt_content']['columns']['golb_sorting'] = array(
		'exclude' => 0,
		'label' => 'LLL:EXT:golb/Resources/Private/Language/locallang_db.xlf:ttcontent.sorting',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'varchar'
		),
	);
	$GLOBALS['TCA']['tt_content']['columns']['golb_sorting_direction'] = array(
		'exclude' => 0,
		'label' => 'LLL:EXT:golb/Resources/Private/Language/locallang_db.xlf:ttcontent.sortingdirection',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'varchar'
		),
	);
	$GLOBALS['TCA']['tt_content']['columns']['golb_limit'] = array(
		'exclude' => 0,
		'label' => 'LLL:EXT:golb/Resources/Private/Language/locallang_db.xlf:ttcontent.limit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'int'
		),
	);
	$GLOBALS['TCA']['tt_content']['columns']['golb_offset'] = array(
		'exclude' => 0,
		'label' => 'LLL:EXT:golb/Resources/Private/Language/locallang_db.xlf:ttcontent.offset',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'int'
		),
	);
	$GLOBALS['TCA']['tt_content']['columns']['golb_related'] = array(
		'exclude' => 0,
		'label' => 'LLL:EXT:golb/Resources/Private/Language/locallang_db.xlf:ttcontent.related',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'varchar'
		),
	);

	$GLOBALS['TCA']['pages']['columns']['subpages'] = array(
		'exclude' => 0,
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'pages',
			'foreign_field' => 'pid',
			'maxitems'      => 9999,
		),
	);

	$GLOBALS['TCA']['sys_category']['columns']['sub_categories'] = array(
		'exclude' => 0,
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'sys_category',
			'foreign_field' => 'parent',
			'maxitems'      => 9999,
		),
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Blog', 'golb'), 'CType');
	$GLOBALS['TCA']['tt_content']['types']['golb']['showitem'] =
		'CType;;4;button;1-1-1, golb_sorting, golb_sorting_direction, golb_limit, golb_offset, golb_related, pages, categories,
		--div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access,starttime, endtime, fe_group';

	//Set new page types
	$GLOBALS['TCA']['pages']['types']['41'] = $GLOBALS['TCA']['pages']['types']['1'];

	$pageItems = &$GLOBALS['TCA']['pages']['columns']['doktype']['config']['items'];
	array_push($pageItems, array('Golb', '--div--'));
	array_push($pageItems, array('Blog post', '41', 'EXT:golb/Resources/Public/Icons/doktype_blogpost.gif'));

	\TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
		'pages',
		'41',
		$extPath . 'Resources/Public/Icons/doktype_blogpost.gif'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
		'options.pageTree.doktypesToShowInNewPageDragArea := addToList(41)'
	);

};

/** @var string $_EXTKEY */
$boot($_EXTKEY);
unset($boot);