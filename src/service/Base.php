<?php


namespace sffi\service;
/**
 * @author 鱼子 yuyi@cmrpt.com
 */

use sffi\util\RequestUtil;

class Base
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
        $requestType = ['query'=>'POST','valid'=>'POST','egiste'=>'POST','update'=>'POST'];
        $result = $this->request->post('/'.($this->controler?:strtolower(basename(static::class))).'/'.$name, $args, $requestType[$name],
            ['PLATFORM-KEY'=>$this->key,'Content-type'=>'application/x-www-form-urlencoded']);
        if ($result['code'] == 1){
            return $result['data'];
        }
        throw new \Exception($result['msg']);
    }

    protected function getArg($name) {
        $arg = 'arg'.ucfirst($name);
        return $this->$arg;
    }
}
