<?php


namespace sffi\service;

/**
 * Class Idcard
 * @method array applyAuth($id) 申请认证
 * @method array query($id)
 * @package sffi\service
 */
class Idcard extends Base
{
    protected $argApplyAuth = [
        'id'
    ];
    protected $argQuery = [
        'id'
    ];
}
