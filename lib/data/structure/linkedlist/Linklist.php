<?php
namespace lib\data\structure\linkedlist;

/**
 * 链表
 * Created by PhpStorm.
 * User: linweixin 1500354647@qq.com
 * Date: 2021/1/5
 */
class Linklist
{
    public $head;           //头节点(默认一个虚拟头节点)
    public $size;           //长度
    
    public $a = 0;

    public function __construct()
    {
        $this->head = new Node();
        $this->size  = 0;
    }

    /**
     * 头插法
     * @param $value
     */
    public function addFirst( $value ){
        //$this->head = new Node($value);
        //$this->size++;
        $this->add(0,$value);
    }

    /**
     * 指定索引位置插入
     * @param $index
     * @param $value
     */
    public function add( $index, $value ){
        
        if($index > $this->size){
            return false;
        }
        $prev = $this->head;
        for($i=0;$i<$index;$i++){
            $prev = $prev->next;
        }
        $prev->next = new Node($value,$prev->next);
        $this->size++;
        
        //$b = $this->a;
        //$b++;
        //var_dump($this->a);
        //var_dump($b);
        return true;
    }

    /**尾插法
     * @param $value
     */
    public function addLast( $value ){
        /* $prev = $this->head;
        while ($prev->next){
            $prev = $prev->next;
        }
        $prev->next = new Node($value,$prev->next);
        $this->size++;
        return true; */
        
        $this->add($this->size,$value);
    }


    /***
     * 编辑
     * @param $index
     * @param $value
     * @throws Exception
     */
    public function edit( $index, $value ){
        if($index <=0 || $index > $this->size){
            return false;
        }
        $prev = $this->head;
        for ($i = 1; $i < $index; $i++){
            $prev = $prev->next;
        }
//        var_dump($prev);
        $prev->val = $value;
        return true;

    }

    /**
     * 查询
     * @param $index
     * @return null
     * @throws Exception
     */
    public function select($index){

    }


    /**删除
     * @param $index
     * @throws Exceptionr
     */
    public function delete( $index ){

    }

    /**检索值是否存在
     * @param $value
     * @return bool
     */
    public function iscontain( $value ){

    }

    /**转换为字符串
     * @return string
     */
    public function toString(){

        $prev = $this->head->next;
        $res = [];
//        $res[] = $prev->val;
        while ($prev){
            $res[] = $prev->val;
            $prev = $prev->next;
        }
        //$res[] = $prev->val;
        return implode('->',$res);
    }

    /**
     * 删除指定的节点值
     * @param $value
     */
    public function removeFileds( $value ){

    }

    /**
     * 通过递归方式删除指定的节点值
     * @param $value
     */
    public function removeFiledsByRecursion( $value ){

    }

    public function removeByRecursion( $node , $value, $level=0 ){

    }

    /**
     * 显示深度
     * 帮助理解递归执行过程，回调函数执行层序遵循系统栈
     * @param int $level 深度层级
     * @param $val
     * @return bool
     */
    public function showDeeep( $level=1,$val ){
    }
}
