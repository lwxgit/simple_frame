<?php
namespace app\structure\controller;

/**
 * 数据结构-矩阵
 * Created by PhpStorm.
 * User: zero_hero 1500354647@qq.com
 * Date: 2021/3/24
 * Time: 19:59
 */

class Matrix
{
    public function index(){
        // 对称矩阵
        $arr = self::createArray(5,5,0);

//        $data = [1,2,3,4,2,6,7,8,3,7,11,12,4,8,12,16];
        $data = [1,2,3,4,5,2,7,8,9,10,3,8,13,14,15,4,9,14,19,20,5,10,15,20,25];
        self::insertData($arr,$data);

        self::showMatrix($arr);
//        exit;
        $res_data = [];
        $res = self::compressData($arr,$res_data);

//        return json($res_data);
//        echo
        echo implode(',',$res_data);
    }

    /**
     * 创建一个二维数组
     * @param int $line
     * @param int $column
     * @param int $init
     * @return array
     */
    private function createArray($line = 1,$column = 1,$init = 0){
        $a = [];
        for ($i = 0;$i < $line;$i++){
            for ($j = 0;$j < $column;$j++){
                $a[$i][$j] = $init;
            }
        }
        return $a;
    }

    /**
     * 展示矩阵 输出
     * @param array $arr
     */
    private function showMatrix($arr = []){
        echo "<table>";
        foreach ($arr as $i => $v){
            echo "<tr>";
            foreach ($v as $j => $z){
                echo "<td height='50'>arr[{$i}][{$j}] = {$z}</td>";
            }
            echo "</tr>";
        }
        echo "<table>";
    }

    /**
     * @param array $arr
     */
    private function showCompressArr($arr = []){
        echo "<table>";
        foreach ($arr as $i => $v){
            echo "<tr>";
            foreach ($v as $j => $z){
                echo "<td height='50'>arr[{$i}][{$j}] = {$z}</td>";
            }
            echo "</tr>";
        }
        echo "<table>";
    }

    /**
     * 初始化数据
     * @param array $arr
     * @param array $data
     * @return bool
     */
    private function insertData(&$arr = [],$data = []){
        $line = count($arr);
        $column = count($arr[0]);
        if(count($data) != $line * $column){
            return false;
        }
        foreach ($arr as $i => $v){
            foreach ($v as $j => $z){
                $t = $column * $i +$j;
                if(isset($data[$t])) $arr[$i][$j] = $data[$t];

            }
        }
        return true;
    }

    /**
     * 压缩矩阵
     * @param array $arr
     * @param array $data
     * @return bool
     */
    private function compressData(&$arr = [],&$data = []){
//        $log = new Log(App::getInstance());
        foreach ($arr as $i => $v){
            for ($k = 0;$k < $i+1;$k++){
//                trace("k:{$k}",'info');
//                trace("i:{$i}",'info');
//                $kk = 1 * ($i) + ((($i) * $i-1) / 2) * 1;
//                $kk = 1 * ($i+1) + (($i+1) * $i)/2;
//                trace($kk,'info');
                $n = $i+1;
//                $kk = 1 * ($n-1) + ((($n-1) * ($n-1-1)) / 2) * 1;
//                $kk = 1 * ($n) + ((($n) * ($n-1)) / 2) * 1;
                $kk = ($n * ($n-1)) / 2;

                $data[$kk+$k] = $arr[$i][$k];
            }
        }
        return true;
    }


}
