<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$mypage = 'ppx_skin';

$REX['ADDON']['version'][$mypage] = '1.1';
$REX['ADDON']['author'][$mypage] = 'Peter Bickel';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';

if($REX['REDAXO']) {

	$I18N->appendFile(dirname(__FILE__) .'/lang/');
	function rex_be_style_ppx_skin_css_body($params) {
		$params["subject"]["class"][] = "be-style-ppx-skin";
		return $params["subject"];
	}

	require_once(dirname(__FILE__). '/extensions/extensions_ppx_replace.inc.php');
	rex_register_extension('PAGE_BODY_ATTR', 'rex_be_style_ppx_skin_css_body');

}
?>