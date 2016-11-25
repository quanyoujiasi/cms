<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
    public function getArticle(){
        return $this->select();
}
}

?>