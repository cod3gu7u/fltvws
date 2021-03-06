<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SalesQuoteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales Quotes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-quote-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sales Quote', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sales_quote_id',
            'vehicle.reference_number',
            'customer.customer_name',
            'salesPerson.sales_person',
            'quote_issue_date',
            'quote_expiry_date',
            'quoted_amount',
            // 'notes:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
