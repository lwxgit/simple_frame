<?php
namespace lib\data\structure\linkedlist;

/**
 * 定义一个节点类
 * Created by PhpStorm.
 * User: linweixin 1500354647@qq.com
 * Date: 2021/1/5
 */
class Node
{
    public $val;
    public $next;



    public function __construct( $val = null, $next = null )
    {
        $this->val  = $val;
        $this->next = $next;
    }


}
