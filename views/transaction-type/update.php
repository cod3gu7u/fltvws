<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransactionType */

$this->title = 'Update Transaction Type: ' . ' ' . $model->transaction_id;
$this->params['breadcrumbs'][] = ['label' => 'Transaction Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transaction_id, 'url' => ['view', 'id' => $model->transaction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaction-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
