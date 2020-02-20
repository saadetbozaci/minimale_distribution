<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'minimale_distribution',
    'Configuration/TSConfig/FooterBE.tsconfig',
    'FooterBE'
);