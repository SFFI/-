<?php


namespace sffi\service;


class Info extends Base
{
    public function query($where)
    {
        return $this->request('query', $where);
    }
}
