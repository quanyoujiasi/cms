<?php
namespace Common\Model;
use Think\Model;
class ArticleModel extends Model {
    public function addArticles($data) {
      $this->create($data);
        return $this->add();
    }
}
