<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['DmitryDulepov\\Realurl\\Utility'] = [
    'className' => 'WebitDe\\RealurlSuomiurl\\Overrides\\Utility'
];
