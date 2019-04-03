<?php
namespace lib;
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: linweixin 502510773@qq.com
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
        $class = DS.APP_DIR.DS.$m.DS.CONTROLLER_DIR.DS.$c;
        $obj = new $class();
        $obj->$a();
    }
=======
 * User: Administrator
 * Date: 2018/3/14
 * Time: 11:43
 */
Class App{
    public static function run(){
        $class = "\\app\\".$_GET['m']."\\controller\\".$_GET['c'];
        $obj = new $class();
        $obj->$_GET['a']();
    }


>>>>>>> origin/master
}