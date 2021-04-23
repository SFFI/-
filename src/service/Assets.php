<?php


namespace sffi\service;

use http\Encoding\Stream;

/**
 * Class Assets
 * @method array recharge($id,$assetsType,$assets,$orderid='')    充值
 * @method array consume($id,$assetsType,$assets,$orderid='')     消费
 * @method array frozen($id,$assetsType,$assets,$orderid='')      冻结
 * @method array query($id,array $assetsTypes)             查询
 * @method array batchQuery(array $ids,array $assetsTypes)        批量查询
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
        'id','assetsTypes',
    ];

    protected $argBatchQuery = [
        'ids','assetsTypes',
    ];
}
