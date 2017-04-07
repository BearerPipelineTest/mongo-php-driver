--TEST--
Decimal128: [basx371] Engineering notation tests
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640007000000000000000000000000004E3000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "7E7"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "7E+7"}}';

// Canonical extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($canonicalJson))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

// Canonical extJSON to Canonical BSON
echo bin2hex(fromJSON($canonicalJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
1800000013640007000000000000000000000000004e3000
{"d":{"$numberDecimal":"7E+7"}}
{"d":{"$numberDecimal":"7E+7"}}
{"d":{"$numberDecimal":"7E+7"}}
1800000013640007000000000000000000000000004e3000
1800000013640007000000000000000000000000004e3000
===DONE===