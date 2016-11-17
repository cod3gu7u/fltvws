<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseOrderStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-order-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'purchase_order_status_id') ?>

    <?= $form->field($model, 'purchase_order_status') ?>

    <?= $form->field($model, 'notes') ?>

    <?= $form->field($model, 'record_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
