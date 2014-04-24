<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$error = '';

rex_sql::factory()->setQuery("DROP TABLE IF EXISTS rex_912_ppx`;");

if ($error != '')
  $REX['ADDON']['installmsg']['ppx'] = $error;
else
  $REX['ADDON']['install']['ppx'] = 0;

?>