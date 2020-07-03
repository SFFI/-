<?php


namespace sffi\service;
/**
 * @author 鱼子 yuyi@cmrpt.com
 */

use sffi\util\RequestUtil;

class  Base
{
    protected $request;
    protected $key;
    protected $controler;
    protected $arg;

    public function __construct($url,$key)
    {
        $this->request = new RequestUtil($url);
        $this->key = $key;
    }

    public function __call($name, $arguments)
    {
        $args = [];
        foreach ($this->getArg($name) as $key => $item){
            if (!isset($arguments[$key]) || !$arguments[$key]) continue;
            if (strpos($item,'|')){
                 $args[explode('|',$item)[count($arguments) == count($this->getArg($name)) ? 0 : 1]] = $arguments[$key];
            } else {
                $args[$item] = $arguments[$key];
            }
        }
        return $this->toPost($name,$args);
    }

    protected function toPost($name,$args)
    {
        $controller = ($this->controler?:strtolower(basename(str_replace('\\','/',static::class))));
        $requestGet = ['idcard.query'];
        $result = $this->request->post('/'.$controller.'/'.$name,
            $args, in_array($controller.'.'.$name,$requestGet) ? 'GET' : 'POST',
            ['PLATFORM-KEY'=>$this->key,'Content-type'=>'application/x-www-form-urlencoded']);
        if ($result['code'] == 1){
            return $result['data'];
        }
        throw new \Exception($result['msg'],$result['code']);
    }

    protected function getArg($name) {
        $arg = 'arg'.ucfirst($name);
        return $this->$arg;
    }
}
