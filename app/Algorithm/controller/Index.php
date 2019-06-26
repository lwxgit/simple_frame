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
        $left_arr = $this->quick_sort($left_arr);
        $right_arr = $this->quick_sort($right_arr);
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

    function select_sort($arr) {
        //双重循环完成，外层控制轮数，内层控制比较次数
        $len=count($arr);
        for($i=0; $i<$len-1; $i++) {
            //先假设最小的值的位置
            $p = $i;

            for($j=$i+1; $j<$len; $j++) {
                //$arr[$p] 是当前已知的最小值
                if($arr[$p] > $arr[$j]) {
                    //比较，发现更小的,记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
                    $p = $j;
                }
            }
            //已经确定了当前的最小值的位置，保存到$p中。如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
            if($p != $i) {
                $tmp = $arr[$p];
                $arr[$p] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        //返回最终结果
        return $arr;
    }


    public function index(){
//        性能测试
        $a = [];
        for ($i=0;$i<1000;$i++){
            $a[] = mt_rand(0,1000);
        }
        $msectime1 = get_msectime();
        $re = $this->maopao($a);
        $msectime2 = get_msectime();
        echo '冒泡排序时间：'.($msectime2 - $msectime1)."ms<br />";
        $re = $this->quick_sort($a);
        $msectime3 = get_msectime();
        echo '快速排序时间：'.($msectime3 - $msectime2)."ms<br />";
        $re = $this->insert_sort($a);
        $msectime4 = get_msectime();
        echo '插入排序时间：'.($msectime4 - $msectime3)."ms<br />";
        $re = $this->select_sort($a);
        $msectime5 = get_msectime();
        echo '选择排序时间：'.($msectime5 - $msectime4)."ms<br />";
    }

}