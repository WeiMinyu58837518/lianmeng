<?php
/**
 * Created by PhpStorm.
 * User: XuGuanyu
 * Date: 2018/1/10
 * Time: 9:55
 */

namespace app\admin\controller;


use think\Db;
use think\Request;

class Doghouse extends Admin
{
    //犬舍列表
    public function index(){
        $data=Db::name('doghouse')->paginate(10);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function add(){
        if(Request::instance()->isGet()){
            return $this->fetch();
        }
        if(Request::instance()->isPost()){
            $title=Request::instance()->param('title');
            $author=Request::instance()->param('author');
            $content=Request::instance()->param('content');
            $rules = [
                'name' => 'require',
                'type' => 'require|integer',
                'merchant' => 'require|integer',
                'num' => 'require|integer',
                'intro' => 'require'
            ];
            $msg = [
                'name.require' => '商品名称不能为空',
                'name.max' => '商品名称太长',
                'type.require' => '商品类型不能为空',
                'type.integer' => '商品类型不正确',
                'merchant.require' => '商家不能为空',
                'merchant.integer' => '商家不正确',
                'num.require' => '商品库存不能为空',
                'num.integer' => '库存输入不正确',
                'intro.require' => '请输入商品简介'
            ];
            $validate = new Validate($rules, $msg);
        }

    }
}