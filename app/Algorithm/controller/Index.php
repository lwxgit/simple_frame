<?php
namespace app\Algorithm\controller;

/**
 * Created by PhpStorm.
 * User: linweixin 502510773@qq.com
 * Date: 2019/5/24
 * Time: 11:43
 */
Class Index{
    public function __construct()
    {


    }
    /**
     * 冒泡排序
     * @param $arr
     * @return mixed
     */
    public function maopao($arr)
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
    /**
     * 快速排序
     * @param $array
     * @return array
     */
    public function quick_sort($array) {

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
        $left_arr = quick_sort($left_arr);
        $right_arr = quick_sort($right_arr);
        return array_merge($left_arr,array($key),$right_arr);
    }

    /**
     * 插入排序
     * @param $arr
     * @return mixed
     */
    public function insert_sort($arr)
    {
        $len=count($arr);
        for($i=1; $i<$len; $i++) {
            //获得当前需要比较的元素值。
            $tmp = $arr[$i];
            //内层循环控制 比较 并 插入
            for($j=$i-1; $j>=0; $j--) {
                //$arr[$i];//需要插入的元素; $arr[$j];//需要比较的元素
                if($tmp < $arr[$j]) {
                    //发现插入的元素要小，交换位置
                    //将后边的元素与前面的元素互换
                    $arr[$j+1] = $arr[$j];
                    //将前面的数设置为 当前需要交换的数
                    $arr[$j] = $tmp;
                } else {
                    //如果碰到不需要移动的元素
                    //由于是已经排序好是数组，则前面的就不需要再次比较了。
                    break;
                }
            }
        }
        //将这个元素 插入到已经排序好的序列内。
        //返回
        return $arr;
    }
    public function index(){

        $re = quick_sort([2,366,54,36]);
        var_dump($re);
    }

}