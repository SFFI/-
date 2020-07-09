<?php

require "vendor/autoload.php";


try {
    $res = \sffi\Factory::Member()->batchQuery([
        'username' => '18800000000',
        ['level', '>', 2]
    ]);
}catch (\Exception $exception){
    var_dump($exception);
}
print_r($res);
