<?php


namespace sffi;

use sffi\service\Assets;
use sffi\service\AssetsType;
use sffi\service\Idcard;
use sffi\service\Member;

/**
 * Class Factory
 * @method static Assets Assets($url,$key)              资产
 * @method static Member Member($url,$key)              用户
 * @method static AssetsType AssetsType($url,$key)      资产类型
 * @method static Idcard Idcard($url,$key)              证件
 * @package sffi
 */
class Factory
{
    public static function make($name, array $config)
    {
        $application = "sffi\\service\\{$name}";

        return new $application(...$config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, $arguments);
    }
}
