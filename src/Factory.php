<?php


namespace sffi;

use sffi\service\Assets;
use sffi\service\AssetsType;
use sffi\service\Idcard;
use sffi\service\Info;
use sffi\service\Member;
use sffi\service\PlatformApp;
use sffi\service\Third;
use sffi\util\RequestUtil;

/**
 * Class Factory
 * @method static Assets Assets($url='',$key='')              资产
 * @method static Member Member($url='',$key='')              用户
 * @method static AssetsType AssetsType($url='',$key='')      资产类型
 * @method static Idcard Idcard($url='',$key='')              证件
 * @method static Info Info($url='',$key='')                  证件
 * @method static Third Third($url='',$key='')                第三方信息
 * @method static PlatformApp Platform($url='',$key='')                第三方信息
 * @package sffi
 */
class Factory
{
    public static $apps = [];

    public static function make($name, array $config)
    {
        if (!in_array($name, self::$apps)) {

            $application = "sffi\\service\\{$name}";

            $config = RequestUtil::getConfig($config);

            self::$apps[$name] = new $application(...$config);
        }

        return self::$apps[$name];
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
