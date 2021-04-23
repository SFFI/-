<?php


namespace sffi\service;

/**
 * Class AssetsType
 * @method array addAssetsType($id, $assetsType)
 * @method array frozenAssetsType($id, $assetsType)
 * @package sffi\service
 */
class AssetsType extends Base
{
    protected $controler = 'assetsType';

    protected $argAddAssetsType=[
        'id', 'assetsType'
    ];

    protected $argFrozenAssetsType=[
        'id', 'assetsType'
    ];
}
