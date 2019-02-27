<?php
namespace app\admin\controller;
use \think\Db;

class Index extends \think\Controller
{
	//初始化方法 相当于__construct()
	// public function _initialize()
 //    {
 //        //验证登录代码
 //        if ( session('admin_id') == NULL )
 //        {
 //        	$this->error("未登录",'/admin/login/index');
 //        }
 //    }

    public function index()
    {
        return view("index");
    }
}
