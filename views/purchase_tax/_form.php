<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseTaxCode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-tax-code-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tax_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_rate')->textInput() ?>

    <?= $form->field($model, 'tax_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
