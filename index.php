<?php

require "vendor/autoload.php";

$res = \sffi\Factory::Idcard('http://api.member.cmrpt.com','7fc7940b4f7f58b49c71bf9e237b633e')->query(1,'');
var_dump($res);
