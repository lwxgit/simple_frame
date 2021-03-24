<?php
namespace app\structure\controller;

use lib\data\structure\linkedlist\Linklist;

/**
 * Created by PhpStorm.
 * User: zreo_hero 1500354647@qq.com
 * Date: 2019/5/24
 * Time: 11:43
 */
Class Index{
    public function __construct()
    {


    }

    public function test(){
        $node = new Linklist();
        $node->addLast(1);
        $node->addLast(2);
        $node->addLast(3);
        //$node->edit(2,5);
        //var_dump($node->head->next);
        echo $node->tostring();
        
        $node1 = new Linklist();
        $node1->addLast(1);
        $node1->addLast(2);
        $node1->addLast(4);
        //$node->edit(2,5);
        //var_dump($node->head->next);
        echo $node1->tostring();
    }
    
    public function test_dg(){
        $l = ['2020-1-1'];
    }
}
