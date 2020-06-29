<?php


namespace sffi\service;


use sffi\util\RequestUtil;


/**
 * Class Member
 * @method array query($id,$type=[]) 查询用户
 * @method array registe($username,$password) 用户注册
 * @method array valid($id,$type=[]) 验证用户密码
 * @method array update($id,$member,$info,$card,$third) 更新用户信息
 * @package sffi\service
 */
class Member extends Base
{
    protected $argQuery = [
        'id|username',
        'type'
    ];
    protected $argRegiste = [
        'username',
        'password'
    ];
    protected $argValid = [
        'username',
        'password'
    ];
    protected $argUpdate = [
        'id',
        'member',
        'info',
        'card',
        'third'
    ];
}
