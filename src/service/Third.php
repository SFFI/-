<?php


namespace sffi\service;


use sffi\util\RequestUtil;


/**
 * Class Member
 * @method array query($unionid,$type='',$open_id='') 查询第三方信息
 * @package sffi\service
 */
class Third extends Base
{
    protected $argQuery = [
        'unionid',
        'type',
        'open_id'
    ];

}
