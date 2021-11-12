<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'kjg_sommerlager_layout2021';

    /**
     * Default PageTS for KjgSommerlagerLayout2021
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'KjG Sommerlager Layout 2021'
    );
});
