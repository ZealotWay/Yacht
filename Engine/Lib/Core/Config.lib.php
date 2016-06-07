<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/5/31
 * Time: 10:47
 */

namespace Engine\Lib\Core;

class Config
{
    public function __construct()
    {
    }

    public function setConfig($key,$value) {

    }
    public function loadConfig() {
        $config = include GLOBAL_CONFIG_PATH;
        return $config;
    }
}