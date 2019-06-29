<?php
// +----------------------------------------------------------------------
// | simple_frame
// +----------------------------------------------------------------------


define('SF_VERSION', '1');          //版本
define('EXT', '.php');              //拓展名
define('DS', DIRECTORY_SEPARATOR);  //文件分割符
define('MODULE', 'Home');           //默认模块目录
define('CONTROLLER', 'Index');      //默认控制器
define('ACTION', 'index');          //默认方法
define('APP_DIR', 'app');           //
define('CONTROLLER_DIR', 'controller');          //默认方法

// 载入autoload.php
require 'Loader.php';
require 'Common.php';
spl_autoload_register('Loader::autoload'); // 注册自动加载
