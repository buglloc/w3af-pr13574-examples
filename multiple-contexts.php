<?php
$jsValue = strtr($_GET['input'], [
	"\n" => '\n',
	"\r" => '\r',
	"\xe2\x80\xa8" => '\n',
	"\xe2\x80\xa9" => '\r',
	"\\" => '\\\\',
	"'" => "\\'",
	'"' => '\\"',
	'</' => '\x3C\x2F'
]);
$htmlValue = htmlspecialchars($_GET['input']);
?>
<html>
<body>
<div>one: <?=$htmlValue?></div>
<div>two: <?=$htmlValue?></div>
</body>
<script>
// var foo = <?=$jsValue?>;
var bar = '<?=$jsValue?>';
</script>
</html>