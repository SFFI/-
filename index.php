<?php

require "vendor/autoload.php";

$s = \sffi\Factory::Assets('http://api.mb.com.cn','7fc7940b4f7f58b49c71bf9e237b633e')->query(1,'rmb');
var_dump($s);
