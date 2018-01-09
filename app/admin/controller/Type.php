<?php
/**
 * Created by PhpStorm.
 * User: XuGuanyu
 * Date: 2018/1/9
 * Time: 10:43
 */

namespace app\admin\controller;


use function getTree;
use think\Db;
use think\Request;

class Type extends Admin
{
    //列表
    public function index(){
        $type=Db::name('type')->select();
        $type=getTree($type);
        foreach($type as &$v){
            $level='';
            for($i=0;$i<$v['level'];$i++){
                $level.='--';
            }
            $v['level']=$level;
        }
        $this->assign('type',$type);
        return $this->fetch();
    }
    //分类添加
    public function add(){
        if(Request::instance()->isGet()){
            $type=Db::name('type')->select();
            $type=getTree($type);
            foreach($type as &$v){
                $level='';
                for($i=0;$i<$v['level'];$i++){
                    $level.='--';
                }
                $v['level']=$level;
            }
            $this->assign('type',$type);
            return $this->fetch();
        }
        if(Request::instance()->isPost()){
            $data=Request::instance()->param();
            $data['status']=1;
            $res=Db::name('type')->insert($data);
            if($res){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }

    }
    //分类编辑
    public function edit(){
        if(Request::instance()->isGet()){
            $id=Request::instance()->param('id');
            $data=Db::name('type')->where('id',$id)->find();
            $type=Db::name('type')->select();
            $type=getTree($type);
            foreach($type as &$v){
                $level='';
                for($i=0;$i<$v['level'];$i++){
                    $level.='--';
                }
                $v['level']=$level;
            }
            $this->assign('type',$type);
            $this->assign('data',$data);
            return $this->fetch();
        }
        if(Request::instance()->isPost()){
            $id=Request::instance()->param('idd');
            $data['pid']=Request::instance()->param('pid');
            $data['status']=Request::instance()->param('status');
            $data['name']=Request::instance()->param('name');
            $res=Db::name('type')->where('id',$id)->update($data);
            if($res){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }

        }
    }
    //删除分类
    public function delete(){
        $id=Request::instance()->param('id');

    }
}