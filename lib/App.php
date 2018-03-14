<?php
namespace lib;
/**
 * Created by PhpStorm.
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


}