<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function addArticle() {
        $this->display();
    }
    public function addAction() {
        $data = D('Cate')->getCate();
    }
}