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

    /**
     * ��ȡ�����б�
     * @return mixed
     */
    public function getArticle(){
        return $this->select();
    }
    public function delArticle($data){
        return $this->data($data)->delete();
    }
    public function saveArticle($data){
        return $this->data($data)->save();
    }
}
