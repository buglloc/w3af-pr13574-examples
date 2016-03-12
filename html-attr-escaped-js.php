<?php
$value = strtr($_GET['input'], [
		"\\" => '\\\\',
		"'" => "\\'",
		'"' => '\\"',
		"</" => '\x3C\x2F',
		"\n" => '\n',
		"\r" => '\r',
	]);
?>
<div data-input="<?=$value?>"></div>