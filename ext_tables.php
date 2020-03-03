<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function () {
        if (\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\Features::class)->isFeatureEnabled('FrontendBaseUrlInPagePreview')) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['viewOnClickClass'][] = \FriendsOfTYPO3\Headless\Hooks\PreviewUrlHook::class;
        }
    }
);