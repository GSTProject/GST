<?php

use yii\helpers\Html;
use fedemotta\datatables\DataTables;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
$session = Yii::$app->session;

if($session->get('accessList')->access_category_view == 1){
	$view = '{view}';
}else{
	$view = '';
}

if($session->get('accessList')->access_category_update == 1){
	$update = '{update}';
}else{
	$update = '';
}

if($session->get('accessList')->access_category_delete == 1){
	$delete = '{delete}';
}else{
	$delete = '';
}
?>
<div class="category-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $session->get('accessList')->access_category_create == 1 ? Html::a('Create Category', ['create'], ['class' => 'btn btn-success']): ''; ?>
    </p>

    <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'category_name',
            'category_description:ntext',

            [
				'class' => 'yii\grid\ActionColumn',	
				'template' => $view . ' ' . $update . ' '. $delete,				
				'buttons' => [
				//view button
				'view' => function ($url, $model) {
					return Html::a('<span class="fa fa-search"></span>View', $url, [
						'title' => Yii::t('app', 'View'),
						'class'=>'btn btn-primary btn-xs',                                  
						]);
					},
				],
			],
        ],
    ]); ?>
	
</div>
