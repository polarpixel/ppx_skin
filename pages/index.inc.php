<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$Basedir = dirname(__FILE__);
$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');
$mypage = 'ppx';

include $REX['INCLUDE_PATH'].'/layout/top.php';

$subpages = array(
	array('ppx',"Einstellungen"),
);

rex_title("Polarpixel Skin", $subpages);
require $Basedir .'/settings.inc.php';

include $REX['INCLUDE_PATH'].'/layout/bottom.php';
?>