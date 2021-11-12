<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'kjg_sommerlager_layout2021';

    /**
     * Default TypoScript for KjgSommerlagerLayout2021
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'KjG Sommerlager Layout 2021'
    );
});
