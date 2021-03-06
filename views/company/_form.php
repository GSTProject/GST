<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\DropDown;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin([
		'layout' => 'horizontal',
		'fieldConfig' => [
			'template' => '{label} <div class="row"><div class="col-md-5">{input}{error}{hint}</div></div>',
			'labelOptions' => ['class' => 'col-md-3 control-labe1'],
			'horizontalCssClasses' => [
				'offset' => '',
				'wrapper' => 'col-md-5',
				'error' => '',
				'hint' => '',
			],
		],
	]); ?>
	

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_number')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'company_GSTno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_add1')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'company_add2')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'company_add3')->textarea(['rows' => 4]) ?> 

    <?= $form->field($model, 'company_poscode')->textInput() ?>

    <?= $form->field($model, 'company_tel1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_tel2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_website')->textInput(['maxlength' => true]) ?>
	
	<?=  $form->field($model, 'company_inventory')->dropdownList([
		'p' => 'Invoice & Part List', 
		'f' => 'Invoice & Inventory'
	]); ?>  
	
	<?= $form->field($model, 'company_taxLabel')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'company_taxPercent', [
		  'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon">%</span></div>',
	]);?>
 
    <?= $form->field($model, 'company_partno')->inline()->radioList(array('y'=>'Yes', 'n'=>'No')); ?>

    <?= $form->field($model, 'company_discount')->inline()->radioList(array('y'=>'Yes', 'n'=>'No')); ?>	

    <?= $form->field($model, 'company_printerFormat')->inline()->radioList(array('y'=>'Full', 'n'=>'Minimum')); ?>

    <?= $form->field($model, 'company_letterHead')->inline()->radioList(array('y'=>'Yes', 'n'=>'No')); ?>

    <?= $form->field($model, 'company_autogenerateNo')->inline()->radioList(array('y'=>'Auto', 'n'=>'User')); ?>

    <?= $form->field($model, 'company_title')->inline()->radioList(array(0=>'Yes', 1=>'No')); ?>

    <?= $form->field($model, 'company_printSize')->inline()->radioList(array(0=>'Full', 1=>'Minimum'),['inline'=>true]); ?>
	
	<?= $form->field($model, 'company_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_expiry')->widget(
		DatePicker::className(), [
			'name' => 'Test',
			'template' => '{addon}{input}',
			'clientOptions' => [
				'autoclose' => true,
				'format' => 'yyyy-mm-dd'
			]
	]);?>

    <?= $form->field($model, 'company_quotationText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_invoiceText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_purchaseOrderText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_deliveryOrderText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_creditNoteText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_debitNoteText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_receiptText')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
