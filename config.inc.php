<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
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