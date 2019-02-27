<?php
namespace app\admin\controller;
use \think\Db;

class Console extends \think\Controller
{
    public function index()
    {
        return view("console");
    }
}
