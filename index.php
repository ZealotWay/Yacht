<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/5/31
 * Time: 10:26
 */

// 判断PHP版本
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('PHP Version Must Be > 5.3.0');

define('GLOBAL_CONFIG_PATH','Config/Base.config.php');
// 引入核心文件
require './Engine/boot.php';