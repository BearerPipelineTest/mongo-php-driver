--TEST--
MongoDB\Driver\Manager::__construct(): too many arguments
--SKIPIF--
<?php if (defined("HHVM_VERSION_ID")) exit("skip HHVM throws Exception instead of InvalidArgumentException"); ?>
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

echo throws(function() {
    $manager = new MongoDB\Driver\Manager(null, [], [], 1);
}, "MongoDB\Driver\Exception\InvalidArgumentException"), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
MongoDB\Driver\Manager::__construct() expects at most 3 parameters, 4 given
===DONE===
