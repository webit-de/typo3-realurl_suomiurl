<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurl/class.tx_realurl_advanced.php'] =  t3lib_extMgm::extPath('realurl_suomiurl') . "XCLASS/class.ux_tx_realurl_advanced.php";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_realurl_advanced']['className']='ux_tx_realurl_advanced';


?>




