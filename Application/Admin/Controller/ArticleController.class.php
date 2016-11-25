<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 文章控制器
 * Class ArticleController
 * @package Admin\Controller
 */
class ArticleController extends Controller {
    /**
     * 显示添加文章页面
     */
    public function addArticle() {
        $data = D('Cate')->getCate();
        $currentTime = time();

        $this->assign('data' , $data);
        $this->assign('currentTime' , $currentTime);
        $this->display();
    }

    /**
     * 添加文章动作
     */
    public function addAction() {
        $data['title']      = I('post.title');
        $data['cid']        = I('post.cate');
        $data['descrption'] = I('post.description');
        $data['author']     = I('post.author');
        $data['addtime']    = I('post.add_time');
        $data['status']     = I('post.status');
        $data['a_order']    = I('post.ord');
        $data['content']    = htmlspecialchars(I('post.content'));
        $res = D('Article')->addArticle($data);//把文章内容插入数据库
        if ($res) {
            return $this->redirect('article/index');
        }
        return $this->error('添加文章失败');
    }
<<<<<<< HEAD
    /**
     * 获取文章列表操作
=======

    /**
     * 显示文章列表
>>>>>>> c77bd63c93729f58718b14cf49bdf6d88b59516d
     */
    public function ArticleList(){
    	$data = D('Aarticle')->getArticle();
        $this->assign('data',$data);
        $this->display('ArticleList');
    }
    public function delArticle(){
        $data['aid']=I('get.aid');
        if(D('article')->delArticle($data))
        {
            $this->success('删除成功','ArticleList',2);
        }else{
            $this->error('删除失败',2);
        }
    }
}