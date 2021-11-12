<?php
defined('TYPO3_MODE') || die();
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['kjg_sommerlager_layout2021'] = 'EXT:kjg_sommerlager_layout2021/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kjg_sommerlager_layout2021/Configuration/TsConfig/Page/All.tsconfig">');
