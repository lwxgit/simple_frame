<?php
/**
 * Created by PhpStorm.
 * User: linweixin 502510773@qq.com
 * Date: 2019/6/26
 * Time: 16:01
 */
/**
 * 获取毫秒数
 * @return float
 */
function get_msectime(){
    list($msec, $sec) = explode(' ', microtime());
    $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    return $msectime;
}