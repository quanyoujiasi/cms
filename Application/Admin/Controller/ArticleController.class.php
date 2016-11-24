<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function addArticle() {
        $data = D('Cate')->getCate();
        $currentTime = time();

        $this->assign('data' , $data);
        $this->assign('currentTime' , $currentTime);
        $this->display();
    }
    public function addAction() {
        $data['title'] = I('post.title');
        $data['cid'] = I('post.cate');
        $data['descrption'] = I('post.description');
        $data['author'] = I('post.author');
        $data['addtime'] = I('post.add_time');
        $data['status'] = I('post.status');
        $data['a_order'] = I('post.ord');
        $data['content'] = htmlspecialchars(I('post.content'));
        $res = D('Article')->addArticles($data);//把文章内容插入数据库
    }
}