<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
    public function getArticle(){
        return $this->select();
    }
    public function delArticle($data){
        return $this->data($data)->delete();
    }
}

?>