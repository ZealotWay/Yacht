<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/6/7
 * Time: 16:24
 */
namespace Engine\Lib\Tools;

class Tools {
    public function dump($obj) {
        echo '<pre>';
        var_dump($obj);
        echo '</pre>';
    }
}
