<?php
/**
 * REDAXO PPX Skin-Theme
 * 
 * @author webmaster[at]pixelworks[dot]info Joachim Dörr
 * @author <a href="http://www.pixelworks.info">www.pixelworks.info</a>
 * 
 *
 * @package redaxo4
 * @version 1.3
 */

$error = '';

if ($error != '')
  $REX['ADDON']['installmsg']['ppx_skin'] = $error;
else
  $REX['ADDON']['install']['ppx_skin'] = true;
  
?>