<?php
namespace app\Home\controller;
/**
 * Created by PhpStorm.
 * User: linweixin 502510773@qq.com
 * Date: 2019/4/2
 * Time: 11:43
 */
Class Index{
    public function __construct()
    {


    }

    public function index(){
        function maopao($arr)

        {

            $len = count($arr); //数组长度

            $n = count($arr) - 1; //

            for ($i = 0; $i < $len; $i++) {

                for ($j = 0; $j < $n; $j++) {

                    if ($arr[$j] > $arr[$j + 1]) {

                        $tmp = $arr[$j];

                        $arr[$j] = $arr[$j + 1];

                        $arr[$j + 1] = $tmp;

                    }

                }

            }

            return $arr;

        }


        function quick_sort($array) {

            if (count($array) <= 1) return $array;

            $key = $array[0];

            $left_arr = array();

            $right_arr = array();

            for ($i=1; $i<count($array); $i++){

                if ($array[$i] <= $key)

                    $left_arr[] = $array[$i];

                else

                    $right_arr[] = $array[$i];

            }
            var_dump($left_arr);
            var_dump($right_arr);
//            $left_arr = quick_sort($left_arr);
//
//            $right_arr = quick_sort($right_arr);
//
//            return array_merge($left_arr, array($key), $right_arr);

        }

        $re = quick_sort([2,366,54,36]);
//        var_dump($re);

        /*$a = "hello";
        $b = &$a;
        unset($b);
        $b = "world";
        //答案为:hello
        echo $a;*/


//        echo "hello world";
    }

}