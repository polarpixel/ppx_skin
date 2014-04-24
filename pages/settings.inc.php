<?php
/**
 * REDAXO PPX Skin - (be_style Plugin)
 * 
 * @author peter[at]polarpixel[dot]de Peter Bickel
 * @author <a href="http://www.polarpixel.de">www.polarpixel.de</a>
 */

$id = 1;
$msg = rex_request('_msg', 'string');

if ($msg != '') {
	echo rex_info('Einstellungen wurden gespeichert.');
}

$form = new rex_form('rex_912_ppx',"Skin-Einstellung bearbeiten","id=".$id,"post",false);
	
$field = &$form->addMediaField('logo');
$field->setLabel("Logo");

$field = &$form->addTextField('logo_distance_top');
$field->setLabel("oberer Abstand");
$field->setAttribute('style','width: 100px;');
$field->setFooter('<div class="rex-form-row"><p class="explain">(Abstand des Logos vom Seitenrand in px)</p></div>');


if($func == 'edit') {
	$form->addParam('id', $id);
}

$form->show();
?>