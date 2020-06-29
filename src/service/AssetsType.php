<?php


namespace sffi\service;

/**
 * Class AssetsType
 * @method addAssetsType($id, $assetsType)
 * @method frozenAssetsType($id, $assetsType)
 * @package sffi\service
 */
class AssetsType extends Base
{
    protected $controler = 'assets_type';

    protected $argAddAssetsType=[
        'id', 'assetsType'
    ];

    protected $argFrozenAssetsType=[
        'id', 'assetsType'
    ];
}
