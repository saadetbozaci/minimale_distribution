<?php
#Put a file called ext_localconf.php in the main directory of your Extension.
#It does not need to be registered anywhere but will be loaded automatically as soon as the extension is installed.

# Prevent Script from beeing called directly
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:minimale_distribution/Configuration/RTE/custom.yaml';

/*
 * PageTS
 */

#Adding default Backendlayout
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:' . $_EXTKEY . '/Configuration/TSConfig/BackendLayouts.tsconfig"');

#Adding default TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:' . $_EXTKEY . '/Configuration/TSConfig/TCEFORM.tsconfig"');

#Adding default UserTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('@import "EXT:' . $_EXTKEY . '/Configuration/TSConfig/User.tsconfig"');
