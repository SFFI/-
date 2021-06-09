<?php


namespace sffi\service;

/**
 * Class Idcard
 * @method array applyAuth(int $id,int $card_id,string $callback,$extra='',$type=0) 申请认证
 * @method array query(int $id,int $card_id)
 * @method array createCard($idcard_no,$true_name,$start_time='',$end_time='',$nation='',$address='',$depart='',$card_dn_no='')
 * @method array authCallback($BizToken)
 * @method array checkoutAuth(int $id,int $card_id, $extra='') 申请认证新
 * @method array getAuth(string $BizToken, bool $IsNeedVideo=false, bool $IsNeedBestFrame=false) 新视频核身
 * @method array callbackVideoResult(string $BizToken, int $ErrorCode) 新视频核身结果确认
 * @package sffi\service
 */
class Idcard extends Base
{
    protected $argApplyAuth = [
        'id','card_id','callback','extra', 'type'
    ];
    protected $argQuery = [
        'id','card_id'
    ];
    protected $argCreateCard = [
        'idcard_no','true_name', 'nation', 'end_time', 'start_time', 'address', 'depart', 'card_dn_no'
    ];
    protected $argAuthCallback = [
        'BizToken'
    ];
    protected $argCheckoutAuth = [
        'id','card_id','extra'
    ];
    protected $argGetAuth = [
        'BizToken', 'IsNeedVideo', 'IsNeedBestFrame'
    ];
    protected $argCallbackVideoResult = [
        'BizToken', 'ErrorCode'
    ];
}
