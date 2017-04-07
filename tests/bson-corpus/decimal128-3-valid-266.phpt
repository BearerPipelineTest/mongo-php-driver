--TEST--
Decimal128: [basx158] Numbers with E
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('180000001364002C00000000000000000000000000523000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "44E+9"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "4.4E+10"}}';

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
180000001364002c00000000000000000000000000523000
{"d":{"$numberDecimal":"4.4E+10"}}
{"d":{"$numberDecimal":"4.4E+10"}}
{"d":{"$numberDecimal":"4.4E+10"}}
180000001364002c00000000000000000000000000523000
180000001364002c00000000000000000000000000523000
===DONE===