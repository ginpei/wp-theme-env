<?php
exec('echo "* One\n* Two" | ruby md.rb', $lines);
$result = join("\n", $lines);
echo $result;
