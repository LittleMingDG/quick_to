<?php
namespace app\admin\controller;
use \think\Db;

class Login extends \think\Controller
{
    public function index()
    {
        return view("login");
    }
}
