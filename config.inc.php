<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$mypage = 'ppx';

$REX['ADDON']['rxid'][$mypage] = '912';
$REX['ADDON']['page'][$mypage] = $mypage;    
$REX['ADDON']['name'][$mypage] = 'PPX Skin';

$REX['ADDON']['version'][$mypage] = '1.1';
$REX['ADDON']['author'][$mypage] = 'Peter Bickel';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';

if($REX['REDAXO']) {

	$REX['ADDON']['logo'] = '';
	$REX['ADDON']['logo_distance_top'] = '10';

	$sql = rex_sql::factory();
	$sql_query = '
		SELECT
			logo, logo_distance_top
		FROM
			rex_912_ppx';

	$sql->setQuery($sql_query);
	if ($sql->getValue('logo') != '') {
		$REX['ADDON']['logo'] = $sql->getValue('logo');
	}
	if ($sql->getValue('logo_distance_top') != '') {
		$REX['ADDON']['logo_distance_top'] = $sql->getValue('logo_distance_top');
	}

	rex_register_extension('PAGE_HEADER', 'AddCSS');

	function AddCSS($params) {
		global $REX;
		echo '
	  	<link rel="stylesheet" type="text/css" href="../files/addons/ppx/css_main.css" media="screen, projection, print" />';

		if ($REX['ADDON']['logo'] != '') {
			echo '
			<style> 
			div#rex-navi-logout {
				background-image: url(../files/'.$REX['ADDON']['logo'].');
				background-size: 50px auto;
				background-position: left '.$REX['ADDON']['logo_distance_top'].'px;
			}
			</style>';
		}

	}

}
?>