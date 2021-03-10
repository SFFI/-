<?php


namespace sffi\service;


use sffi\util\RequestUtil;


/**
 * Class Member
 * @method array query($unionid='',$type='',$open_id='', $member='') 查询第三方信息
 * @method array create($openid,$unionid='',$type='',$nickname='',$head_img_url='',$province='',$city='',$country='') 新增第三方信息
 * @method array bindMember($unionid,$openid,$member_id,$type) 绑定用户
 * @method array unBindMember($unionid,$openid,$member_id,$type) 解绑用户
 * @package sffi\service
 */
class Third extends Base
{
    protected $argQuery = [
        'unionid',
        'type',
        'openid',
        'member'
    ];

    protected $argCreate = [
        'openid',
        'unionid',
        'type',
        'nickname',
        'head_img_url',
        'province',
        'city',
        'country'
    ];

    protected $argBindMember = [
        'openid',
        'unionid',
        'member_id',
        'type'
    ];

    protected $argUnBindMember = [
        'openid',
        'unionid',
        'member_id',
        'type'
    ];

}
