<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/6/7
 * Time: 11:14
 */
namespace Engine\Lib\Core;

class Core
{
    public static function load($class)
    {
        $path = $class . '.lib.php';
        include $path;
    }
}