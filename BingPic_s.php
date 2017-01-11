<?php
$fp = fsockopen("udp://127.0.0.1", 13, $errno, $errstr);
var_dump($fp);