--TEST--
Decimal128: [decq825] values around [u]int32 edges (zeros done earlier)
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400FFFFFF7F00000000000000000000403000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "2147483647"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
18000000136400ffffff7f00000000000000000000403000
{"d":{"$numberDecimal":"2147483647"}}
{"d":{"$numberDecimal":"2147483647"}}
18000000136400ffffff7f00000000000000000000403000
===DONE===