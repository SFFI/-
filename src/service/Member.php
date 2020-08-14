<?php


namespace sffi\service;


use sffi\util\RequestUtil;


/**
 * Class Member
 * @method array query($id,$type=[]) 查询用户
 * @method array registe($username,$password) 用户注册
 * @method array valid($username,$password) 验证用户密码
 * @method array update($id,$member,$info,$card,$third) 更新用户信息
 * @method array updateUsername($id,$username,$new_username) 更新用户账号（危险操作）
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
        'new_username',
    ];

    /**
     * 批量查询用户
     * @param $where array 查询条件
     */
    public function batchQuery($where)
    {
        $keys = [];
        $values = [];
        $types = [];
        foreach ($where as $key=>$item) {
            if (is_array($item)){
                array_push($keys, $item[0]);
                array_push($types, $item[1]);
                array_push($values, is_array($item[2]) ? implode(',', $item[2]) : $item[2]);
            }else{
                array_push($keys, $key);
                array_push($types, '=');
                array_push($values, $item);
            }
        }
        return $this->request(__FUNCTION__,['filterField'=>implode('|',$keys),'type'=>implode('|',$types),'filterValue'=>implode('|',$values)]);
    }
}
