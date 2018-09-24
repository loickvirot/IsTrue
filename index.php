<?php

require __DIR__ . './vendor/autoload.php';

use LoickVirot\Classes\IsTrue;

//require_once "IsTrue.php";

$ok = "OK <br />";
$nok = "NOK <br />";

$variable = "true";
if (IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "TRUE";
if (IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "TrUe";
if (IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "false";
if (!IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "FALSE";
if (!IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "I am a fish";
if (!IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = true;
if (IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = false;
if (!IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}

$variable = "truelle";
if (!IsTrue::test($variable)) {
    echo $ok;
} else {
    echo $nok;
}
