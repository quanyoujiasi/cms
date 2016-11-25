<?php
namespace Common\Model;
use Think\Model;

/**
 * 文章模型
 * Class ArticleModel
 * @package Common\Model
 */
class ArticleModel extends Model {
    /**
     * 添加文章
     * @param array $data 文章的数据
     * @return mixed
     */
    public function addArticle($data) {
        $this->create($data);
        return $this->add();
    }
}
