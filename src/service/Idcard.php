<?php


namespace sffi\service;

/**
 * Class Idcard
 * @method array applyAuth($id,$card_id) 申请认证
 * @method array query($id,$card_id)
 * @method array createCard($idcard_no,$true_name)
 * @package sffi\service
 */
class Idcard extends Base
{
    protected $argApplyAuth = [
        'id','card_id'
    ];
    protected $argQuery = [
        'id','card_id'
    ];
    protected $argCreateCard = [
        'idcard_no','true_name'
    ];
}
