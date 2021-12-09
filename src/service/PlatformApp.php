<?php

namespace sffi\service;

/**
 * 平台app
 * Class PlatformApp
 * @method array create($name,$app_type_code) 新增app
 * @method array list() app列表
 * @method array delete($id) 删除app
 * @method array app_type() 获取app类型
 * @package sffi\service
 */
class PlatformApp extends Base
{
    protected $argCreate = [
        'name',
        'app_type_code'
    ];

    protected $argList = [];

    protected $argDelete = [
        'id'
    ];

    protected $argAppType = [];
}
