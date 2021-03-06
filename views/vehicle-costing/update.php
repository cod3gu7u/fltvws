<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleCosting */

$this->title = 'Update Vehicle Costing: ' . ' ' . $model->vehicle_costing_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Costings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vehicle_costing_id, 'url' => ['view', 'id' => $model->vehicle_costing_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-costing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
