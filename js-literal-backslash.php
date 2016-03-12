<?php
$value = strtr($_GET['input'], [
		"'" => "\\'",
		"</" => '\x3C\x2F'
	]);
?>
<script>
var foo = '<?=$value?>';
</script>