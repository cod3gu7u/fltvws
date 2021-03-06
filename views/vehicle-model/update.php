<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleModel */

$this->title = 'Update Vehicle Model: ' . ' ' . $model->model_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->model_id, 'url' => ['view', 'id' => $model->model_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
