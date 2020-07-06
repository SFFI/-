<?php


namespace sffi\service;

/**
 * Class Idcard
 * @method array applyAuth(int $id,int $card_id,string $callback,$extra='') 申请认证
 * @method array query(int $id,int $card_id)
 * @method array createCard($idcard_no,$true_name)
 * @method array authCallback($BizToken)
 * @package sffi\service
 */
class Idcard extends Base
{
    protected $argApplyAuth = [
        'id','card_id','callback','extra'
    ];
    protected $argQuery = [
        'id','card_id'
    ];
    protected $argCreateCard = [
        'idcard_no','true_name'
    ];
    protected $argAuthCallback = [
        'BizToken'
    ];
}
