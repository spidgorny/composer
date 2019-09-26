<?php

$url = 'https://somebody:withpassword@appdev.nintendo.de/hg/nadlib';

$ok = preg_match('{^(https?)://((.+)(?:\:(.+))?@)?([^/]+)(/.*)?}mi', $url, $matches);

var_dump([$ok, $matches]);
