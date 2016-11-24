<?php
namespace Common\Model;
use Think\Model;
class CateModel extends Model {
    public function getCate() {
        return $this->field('cid,cate_name')->select();
    }
}