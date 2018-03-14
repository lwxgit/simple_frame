<?php
namespace lib;
/**
 * Created by PhpStorm.
 * User: lwx
 * Date: 2018/3/13
 * Time: 15:12
 */
//TODO 引入配置文件

// 载入autoload.php
require 'Loader.php';
spl_autoload_register('Loader::autoload'); // 注册自动加载

App::run();

