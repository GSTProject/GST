<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$type = 'Customers';
$page = 'index';


$this->title = 'Update Customer:' .  $model->customer_name;
$this->params['breadcrumbs'][] = ['label' => $type, 'url' => [$page]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-update">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
