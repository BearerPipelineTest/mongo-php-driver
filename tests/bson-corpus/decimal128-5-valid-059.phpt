--TEST--
Decimal128: [decq649] fold-down full sequence (Clamped)
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640000CA9A3B00000000000000000000FE5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1E+6120"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "1.000000000E+6120"}}';

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
1800000013640000ca9a3b00000000000000000000fe5f00
{"d":{"$numberDecimal":"1.000000000E+6120"}}
{"d":{"$numberDecimal":"1.000000000E+6120"}}
{"d":{"$numberDecimal":"1.000000000E+6120"}}
1800000013640000ca9a3b00000000000000000000fe5f00
1800000013640000ca9a3b00000000000000000000fe5f00
===DONE===