<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentMethod */

$this->title = 'Update Payment Method: ' . ' ' . $model->payment_method_id;
$this->params['breadcrumbs'][] = ['label' => 'Payment Methods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payment_method_id, 'url' => ['view', 'id' => $model->payment_method_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-method-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
