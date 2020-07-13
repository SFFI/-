<?php


namespace sffi\service;

/**
 * Class Idcard
 * @method array applyAuth(int $id,int $card_id,string $callback,$extra='') 申请认证
 * @method array query(int $id,int $card_id)
 * @method array createCard($idcard_no,$true_name)
 * @method array authCallback($BizToken)
 * @method array checkoutAuth(int $id,int $card_id, $extra='') 申请认证新
 * @method array getAuth(string $BizToken, bool $IsNeedVideo=false, bool $IsNeedBestFrame=false) 新视频核身
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
    protected $argCheckoutAuth = [
        'id','card_id','extra'
    ];
    protected $argGetAuth = [
        'true_name', 'idcard_no', 'extra'
    ];
}
