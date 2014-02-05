<?php
/**
 * REDAXO PPX Skin-Theme
 * 
 * @author webmaster[at]pixelworks[dot]info Joachim Dörr
 * @author <a href="http://www.pixelworks.info">www.pixelworks.info</a>
 *
 * @param $params Extension-Point Parameter
 *
 * @package redaxo4
 * @version 1.3
 */

if(!function_exists('rex_get_browser')) {
	function rex_get_browser() {
		return '';
	}
}
function ppx_replace($subject) {	
	$search = array(
		'be_search/be_search.css',
		'rex-a256-searchbar" class="rex-toolbar rex-toolbar-has-form',
	//	'<th>Pri',
		'<li>Sprachen : </li>', 
		'?\')">L',
		'strike">L',
		'&#94;</a>'
	);
	$search_ie6 = array('</ul></dd>
<dt>AddOns</dt><dd><ul id="rex-navi-addons" class="rex-navi-level-1">');
	$replace = array(
		'be_style/plugins/ppx_skin/be_search.css',
		'rex-a256-searchbar"',
	//	'<th style="color:#E9E9E9">Pri',
		'',
		'?\')">l',
		'strike">l',
		'&#x2191;</a>'
	);
	$replace_ie6 = array('');

	$subject['subject'] = str_replace($search, $replace, $subject['subject']);
	// $subject['subject'] = preg_replace('~<td>([0-9]+)<\/td>~U', '<td></td>', $subject['subject']);

	return $subject['subject'];
}

?>