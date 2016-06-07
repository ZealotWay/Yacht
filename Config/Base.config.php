<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/5/31
 * Time: 11:39
 */

return array(
    'autoload_app' => false,
    'app_register' => array(
        'pc' => '/App/pc',
        'mobile' => '/App/mobile',
        'admin' => '/App/admin',
    ),
    'app_default' => 'default',
    'db' => array(
        'type' => 'mysqli',
        'host' => 'localhost',
        'port' => '3306',
        'account' => 'test',
        'password' => 'test',
        'db_name' => 'test',
    ),
    'url_rule' => array(
        'type' => 'base', // base index.php?c=app/group/controller&param_a=test
        'spilt' => '/',
        'ext' => 'do'
    )
);