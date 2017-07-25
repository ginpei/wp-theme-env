<?php

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

echo md("* One\n* Two");
echo md('"');
