<?php
/**
 * REDAXO PXW Skin-Theme - (by_style Plugin)
 * 
 * @author webmaster[at]pixelworks[dot]info Joachim Dörr
 * @author <a href="http://www.pixelworks.info">www.pixelworks.info</a>
 *
 *
 * @package redaxo4
 * @version 1.3
 */

$mypage = 'ppx_skin';

$REX['ADDON']['version'][$mypage] = '1.0';
$REX['ADDON']['author'][$mypage] = 'Peter Bickel';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';

if(!$REX['GG'])
{
	require_once(dirname(__FILE__). '/extensions/extensions_ppx_replace.inc.php');
	rex_register_extension('OUTPUT_FILTER', 'ppx_replace');
}

?>