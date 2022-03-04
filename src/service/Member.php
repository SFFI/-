<?php


namespace sffi\service;


use Exception;


/**
 * Class Member
 * @method array query($id,$type=[]) 查询用户
 * @method array registe($username,$password) 用户注册
 * @method array valid($username,$password) 验证用户密码
 * @method array update($id,$member,$info,$card,$third) 更新用户信息
 * @method array updateUsername($id,$username,$new_username) 更新用户账号（危险操作）
 * @method array cancellationMember($id) 注销用户账号（危险操作）
 * @method array alterPwd($id,$old_pwd,$new_pwd) 用户账号密码（危险操作）
 * @method array realVerify($id,$authentication) 实人认证
 * @method array verifyResult($id,$business_type) 认证结果查询
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
    protected $argUpdateUsername = [
        'id',
        'username',
        'new_username'
    ];
    protected $argCancellationMember = [
        'member_id',
    ];
    protected $argAlterPwd = [
        'id',
        'old_pwd',
        'new_pwd'
    ];
    protected $argRealVerify = [
        'id',
        'authentication'
    ];
    protected $argVerifyResult = [
        'id',
        'business_type'
    ];

    /**
     * 批量查询用户
     * @param $where array|string 查询条件
     * @param $with array 用户信息或者证件信息 info, card
     * @param string $page 分页
     * @param string $size 分页量
     * @return mixed
     * @throws Exception
     */
    public function batchQuery($where, $with = [], $page = '', $size = '')
    {
        $keys = [];
        $values = [];
        $types = [];
        foreach ($where as $key=>$item) {
            if (is_array($item)){
                array_push($keys, $item[0]);
                array_push($types, $item[1]);
                $values[] = is_array($item[2]) ? implode(',', $item[2]) : $item[2];
            }else{
                array_push($keys, $key);
                array_push($types, '=');
                array_push($values, $item);
            }
        }
        return $this->request(__FUNCTION__,[
            'filterField'=>implode('|', $keys),
            'type'=>implode('|', $types),
            'filterValue'=>implode('|', $values),
            'with'=>$with,
            'page'=>$page,
            'size'=>$size
        ]);
    }
}
