<?php


namespace sffi\service;

use http\Encoding\Stream;

/**
 * Class AssetsLog
 * @method array query($id,string $assetsType,$type,$startTime='',$endTime='')             查询
 * @method array batchQuery($id,array $assetsTypes,$type,$startTime='',$endTime='')        批量查询
 * @package sffi\service
 */

class AssetsLog extends Base
{

    protected $argQuery = [
        'id','assetsType','type','startTime','endTime',
    ];

    protected $argBatchQuery = [
        'id','assetsTypes','type','startTime','endTime',
    ];
}
