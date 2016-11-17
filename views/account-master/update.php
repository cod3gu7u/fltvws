<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccountMaster */

$this->title = 'Update Account Master: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Account Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->account_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
