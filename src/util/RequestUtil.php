<?php
namespace sffi\util;

class RequestUtil
{
    protected $baseUrl;

    public function __construct($url)
    {
        $this->baseUrl = $url;
    }

    public function post($url, $post_data, $method = 'POST', $head=[])
    {
        $res = [];
        foreach ($head as $key => $item){
            $res[] = $key.':'.$item;
        }
        $postdata = http_build_query($post_data);       #生成一个经过 URL-encode 的请求字符串
        $options = array(
            'http' => array(
                'method' => $method,
                'header' => implode($res, "\r\n"),
                'content' => $postdata,
                'timeout' => 15 * 60 // 超时时间（单位:s）
            )
        );
        $context = stream_context_create($options);     #创建资源流上下文
        $result = file_get_contents($this->baseUrl.$url,false,$context);     #将整个文件读入一个字符串
        $result = json_decode($result,true);

        return $result;
    }
}
