<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Adv' instanceof Think\Model\AdvModel,
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Cate' instanceof Common\Model\CateModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Article' instanceof Common\Model\ArticleModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
	];
}