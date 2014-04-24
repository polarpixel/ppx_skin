<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$error = '';

rex_sql::factory()->setQuery("DROP TABLE IF EXISTS rex_912_ppx;");

rex_sql::factory()->setQuery("CREATE TABLE IF NOT EXISTS rex_912_ppx (
  `id` int(11) NOT NULL auto_increment,
  `logo` varchar(255) NOT NULL default '',
  `logo_distance_top` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

rex_sql::factory()->setQuery("INSERT INTO rex_912_ppx (`id`, `logo`, `logo_distance_top`) VALUES (1, '', 10);");

if ($error != '') {
  $REX['ADDON']['installmsg']['ppx'] = $error;
} else {
  $REX['ADDON']['install']['ppx'] = true;
}
?>