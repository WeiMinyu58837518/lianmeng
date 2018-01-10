<?php
/**
 * Created by PhpStorm.
 * User: XuGuanyu
 * Date: 2018/1/10
 * Time: 9:55
 */

namespace app\admin\controller;


use function date;
use think\Db;
use think\Request;
use think\Validate;

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
            $data=Request::instance()->param();
            $rules = [
                'title' => 'require',
                'author' => 'require',
                'img'=>'require',
                'content' => 'require'
            ];
            $msg = [
                'title.require'=>'文章标题不能为空',
                'author.require'=>'作者不能为空',
                'img.require'=>'请上传图片',
                'content.require'=>'正文不能为空'
            ];
            $validate = new Validate($rules, $msg);
            $res = $validate->check($data);
            if(!$res){
                $this->error($validate->getError());
            }
            //验证结束入库

            $id=Db::name('doghouse')->insertGetId(['title'=>$data['title'],'author'=>$data['author'],'img'=>$data['img'],'ctime'=>date('Y-m-d H:i:s',time()),'ptime'=>date('Y-m-d H:i:s',time())]);
            $res=Db::name('doghouse_content')->insert(['doghouse_id'=>$id,'content'=>$data['content']]);
            if($res){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }

    }
    public function edit(){
        if(Request::instance()->isGet()){
            $id=Request::instance()->param('id');
            $data=Db::name('doghouse')->alias('d1')->join('lm_doghouse_content d2','d1.id=d2.doghouse_id')->find();
            $this->assign('data',$data);
            return $this->fetch();
        }
        if(Request::instance()->isPost()){
            $data=Request::instance()->param();
            $rules = [
                'title' => 'require',
                'author' => 'require',
                'img'=>'require',
                'content' => 'require'
            ];
            $msg = [
                'title.require'=>'文章标题不能为空',
                'author.require'=>'作者不能为空',
                'img.require'=>'请上传图片',
                'content.require'=>'正文不能为空'
            ];
            $validate = new Validate($rules, $msg);
            $res = $validate->check($data);
            if(!$res){
                $this->error($validate->getError());
            }
            //验证结束入库
            $res=true;
            $ress=Db::name('doghouse')->where('id',$data['idd'])->update(['title'=>$data['title'],'author'=>$data['author'],'img'=>$data['img'],'ptime'=>date('Y-m-d H:i:s',time())]);
            if(!$ress){
                $res=false;
            }
            $resss=Db::name('doghouse_content')->where('doghouse_id',$data['idd'])->update(['content'=>$data['content']]);
            if(!$resss){
                $res=false;
            }
            if($res){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
    }
}