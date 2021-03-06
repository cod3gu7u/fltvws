<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'service_type_id',
            'service_type',
            'notes:ntext',
            'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
