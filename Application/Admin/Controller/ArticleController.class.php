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
            return $this->redirect('Article/addArticle','添加成功',2);
        }
            return $this->error('添加文章失败');
    }

    /**
     * 获取文章列表操作


    /**
     * 显示文章列表

     */
    public function ArticleList(){
    	$data = D('Article')->getArticle();
        $this->assign('data',$data);
        $this->display('ArticleList');
    }

    /**
     *删除文章
     *
     */
    public function delArticle(){
        $data['aid']=I('get.aid');
        if(D('Article')->delArticle($data))
        {
            $this->success('删除成功','ArticleList',2);
        }else{
            $this->error('删除失败',2);
        }
    }
    /**
     * 更新文章
     */
    public function updateArticle(){
        $data =I('get.aid');
        $data=D('Article')->where('aid='.$data)->getArticle();
        $cate_name=D('Cate')->getCateName($data);
        $data[0]['cate_name']=$cate_name['cate_name'];
//        var_dump($data);die;
        $this->assign('data',$data);
        $this->display('updateArticle');
    }

    /**
     * 获取更新文章的数据入库
     */
    public function updateAction(){
        $aid=I('post.aid');
        $data['addtime']=time();
        $data['title']=I('post.title');
        $data['descrption']=I('post.descrption');
        $data['author']=I('post.author');
        $data['content']=I('post.content');
        $data['status']=I('post.status');
        $data['a_order']=I('post.ord');
//        var_dump($data['a_order']);die;
        $data=D('Article')->where('aid='.$aid)->saveArticle($data);
         if($data){
             $this->success('更新成功','ArticleList',3);
         }else{
             $this->error('更新失败',2);
         }
    }
}