<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PurchaseOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
// $this->registerJsFile(
//     '@web/frontend/assets/js/script.js',
//     ['depends' => [\yii\web\JqueryAsset::className()]]
//     );

$this->title = 'Purchase Orders';
// $this->params['breadcrumbs'][] = $this->title;

    $total_amount = 0; 
    $billed_amount = 0; 
    foreach  ($dataProvider->getModels()  as  $key => $val) { 
            $total_amount += $val['total_amount']; 
            $billed_amount += $val['billed_amount']; 
        } 
?>

<h5><strong>Purchase Orders: <?=  Html::encode($title) ?> </strong></h5>

<p>
    <?= Html::a('Create Payment Voucher', ['#'], [
        'class' => 'btn btn-success',
        'id' => 'paymentvoucher-convert',
        ]) ?>
</p>

<div class="purchase-order-index">

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'footerRowOptions'=>['style'=>'font­weight:bold;text­decoration: underline;', 'class'=>'active text-right'],
        'headerRowOptions'=>['class'=>'info'],
        'showFooter' => true,
        'showOnEmpty'=>false,
        'emptyCell'=>'­-',
        'tableOptions' =>['class' => 'table table­-striped table­-bordered table-condensed'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'purchase_order_id',
            'creditor.creditor',
            'order_date',
            // 'shipping_date',
            [
                'attribute'=>'total_amount',
                'format'=>'currency',
                'contentOptions' =>['class' => 'text-right'],
                'headerOptions' =>['class' => 'text-right'],
                'footerOptions' =>['id' => 'footer-total_amount'],
                'footer' => '<strong>' . Yii::$app->formatter->asCurrency($total_amount) . '</strong>',
            ],
            [
                'attribute'=>'billed_amount',
                'format'=>'currency',
                'headerOptions' =>['class' => 'text-right'],
                'contentOptions' =>['class' => 'text-right'],
                'footerOptions' =>['id' => 'footer-billed_amount'],
                'footer' => '<strong>' . Yii::$app->formatter->asCurrency($billed_amount) . '</strong>',
            ],
            [
                'attribute' => 'orderStatus',
                'value' => 'orderStatus.purchase_order_status',
            ],
            // 'notes:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>



<?php

$this->registerJs("var billed_amount = " . $billed_amount . "; 
$('#paymentvoucher-convert').click(function(event) {
    event.preventDefault();
    $('#paymentvoucher-amount').val(billed_amount);
    $('#paymentvoucher-amount').trigger('change');
    $('#paymentvoucher-amount, #paymentvoucher-creditor_id, #select2-paymentvoucher-creditor_id-container').attr('readonly','readonly');
    $('#modal').modal('hide');
});
"); 
?>