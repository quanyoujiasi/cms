<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $data = D('Article')->getArticle();
        $this->assign('data',$data);
        $this->display();
    }
}