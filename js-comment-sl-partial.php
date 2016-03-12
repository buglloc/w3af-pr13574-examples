<?php
$value = strtr($_GET['input'], [
		"\n" => '\n',
		"\r" => '\r',
		"\\" => '\\\\',
		"'" => "\\'",
		'"' => '\\"',
		"</" => '\x3C\x2F'
	]);
?>
<script>
// <?=$value?>

</script>