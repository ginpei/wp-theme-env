<?php
function md($source) {
	exec('echo "' . $source . '" | ruby md.rb', $lines);  // TODO make it secure
	$result = join("\n", $lines);
	return $result;
}

echo md("* One\n* Two");
echo md('"');
