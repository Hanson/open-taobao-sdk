<?php


namespace Hanson\Taobao;


use Hanson\Foundation\Foundation;

class Taobao extends Foundation
{

    public function request($method, $params)
    {
        $api = new Api($this['config']['key'], $this['config']['secret']);

        return $api->request($method, $params);
    }

}