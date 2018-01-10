<?php
/**
 * Created by PhpStorm.
 * User: XuGuanyu
 * Date: 2018/1/10
 * Time: 9:55
 */

namespace app\admin\controller;


use think\Db;

class Doghouse extends Admin
{
    //犬舍列表
    public function index(){
        $data=Db::name('doghouse')->paginate(10);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function add(){
        return $this->fetch();
    }
}