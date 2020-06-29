<?php


namespace sffi\service;

use http\Encoding\Stream;

/**
 * Class Assets
 * @method recharge($id,$assetsType,$assets,$orderid='')    充值
 * @method consume($id,$assetsType,$assets,$orderid='')     消费
 * @method frozen($id,$assetsType,$assets,$orderid='')      冻结
 * @method query($id,string $assetsType,$startTime='',$endTime='')             查询
 * @method batchQuery($id,array $assetsTypes,$startTime='',$endTime='')        批量查询
 * @package sffi\service
 */

class Assets extends Base
{
    protected $argRecharge = [
        'id','assetsType','assets','orderId',
    ];

    protected $argConsume = [
        'id','assetsType','assets','orderId',
    ];

    protected $argFrozen = [
        'id','assetsType','assets','orderId',
    ];

    protected $argQuery = [
        'id','assetsType','startTime','endTime',
    ];

    protected $argBatchQuery = [
        'id','assetsTypes','startTime','endTime',
    ];
}
