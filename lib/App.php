<?php
namespace lib;
/**
 * Created by PhpStorm
 * User: linweixin 1500354647@qq.com
 * Date: 2019/4/2
 * Time: 11:43
 */
Class App{
    private static $m = '';
    private static $c = '';
    private static $a = '';

    public function __construct()
    {

    }
    public static function run(){
        $m = isset($_GET['m'])?$_GET['m']:MODULE;
        $c = isset($_GET['c'])?$_GET['c']:CONTROLLER;
        $a = isset($_GET['a'])?$_GET['a']:ACTION;
        $class = "\\".APP_DIR."\\".$m."\\".CONTROLLER_DIR."\\".$c;
        $obj = new $class();
        $obj->$a();
    }

}
