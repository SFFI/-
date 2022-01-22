<?php

namespace sffi\service;

/**
 * 平台app
 * Class PlatformApp
 * @method array create($name,$app_type_code,$app_id='') 新增app $app_type_code来源用户中心app类型 $app_id为空则由用户中心生成
 * @method array list() app列表
 * @method array delete($id) 删除app
 * @method array app_type() 获取app类型
 * @package sffi\service
 */
class PlatformApp extends Base
{
    protected $argCreate = [
        'name',
        'app_type_code',
        'app_id'
    ];

    protected $argList = [];

    protected $argDelete = [
        'id'
    ];

    protected $argAppType = [];
}
