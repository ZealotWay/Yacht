<?php
/**
 * Created by PhpStorm.
 * User: Hsere-00
 * Date: 2016/5/31
 * Time: 10:31
 */
// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);  // 可用$_SERVER['REQUEST_TIME_FLOAT']代替

// 记录内存初始使用
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();

// 注册常量
define('CORE_VERSION','0.1.1');

define('PATH',dirname(__FILE__));

include "Lib/Core/Core.lib.php";
spl_autoload_register('Engine\Lib\Core\Core::load');
// 设定错误和异常处理
//register_shutdown_function();
//set_error_handler();
//set_exception_handler();

// 启用工具
$Tools = new \Engine\Lib\Tools\Tools();

// 读取配置文件
$ObjConfig = new \Engine\Lib\Core\Config();
$config = $ObjConfig -> loadConfig();
echo '<pre>';
var_dump($GLOBALS);
echo '</pre>';
//$GLOBALS['config'] = $config;

// 处理router
$ObjRoute = new \Engine\Lib\Core\Route();
$config = $ObjRoute -> route();
