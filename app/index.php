<?
$conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
?>
<h1>MySQL</h1>
<?  if ($conn->connect_error) { ?>
	<p>Failed: <?= $conn->connect_error ?></p>
<? } else { ?>
	<p>OK!</p>
<? } ?>

<h1>Markdown</h1>

<?php
$source = "* One\n* Two";
$result = md($source);

function md($markdown) {
	$html = work_on_tmpfile($markdown, function($tmpfname) {
		exec("cat $tmpfname | ruby md.rb", $lines);
		$result = join("\n", $lines);
		return $result;
	});

	return $html;
}

function work_on_tmpfile($text, $callback) {
	$tmpfname = tempnam("/tmp", "md");

	$handle = fopen($tmpfname, "w");
	fwrite($handle, $text);
	fclose($handle);

	$result = $callback($tmpfname);

	unlink($tmpfname);

	return $result;
}
?>

<pre><?= $source ?></pre>
<div><?= $result ?></div>

