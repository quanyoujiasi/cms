<?php
namespace Common\Model;
use Think\Model;

/**
 * ����ģ��
 * Class ArticleModel
 * @package Common\Model
 */
class ArticleModel extends Model {
    /**
     * �������
     * @param array $data ���µ�����
     * @return mixed
     */
    public function addArticle($data) {
        $this->create($data);
        return $this->add();
    }
}
