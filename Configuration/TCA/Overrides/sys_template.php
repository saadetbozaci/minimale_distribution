<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('minimale_distribution', 'Configuration/TypoScript', 'Beispielprojekt T3 9LTS');
