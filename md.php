<?php
function md($source) {
	$tmpfname = tempnam("/tmp", "md");

	$handle = fopen($tmpfname, "w");
	fwrite($handle, $source);
	fclose($handle);

	exec("cat $tmpfname | ruby md.rb", $lines);  // TODO make it secure
	$result = join("\n", $lines);

	unlink($tmpfname);

	return $result;
}

echo md("* One\n* Two");
echo md('"');
