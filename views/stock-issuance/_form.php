<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use yii\helpers\Url;
// use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model app\models\PaymentVoucher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-order-form">

<?php

$form = ActiveForm::begin(['id'=>'purchase-order-form-grid']);
echo FormGrid::widget([
    'model'=>$model,
    'form'=>$form,
    'autoGenerateColumns'=>true,
    'rows'=>[
        [
            'attributes'=>[       // 2 column layout
                'barcode'=>[
                        'type'=>Form::INPUT_TEXT, 
                        'options'=>[
                            'placeholder'=>'Barcode...',
                            ],
                        ],
                'purchase_order_item_id'=>[         
                        'type'=>Form::INPUT_WIDGET, 
                        'widgetClass'=>'\kartik\widgets\Select2', 
                        'options'=>['data' => \app\models\PurchaseOrderItem::getPurchaseOrderItemList(),
                            // 'addon' => [
                            //         'append' => [
                            //             'content' => Html::a(
                            //                 '<i class="glyphicon glyphicon-plus"></i>',
                            //                 ['/creditor/create1'],
                            //                 ['class'=>'btn btn-primary showModalButton']),
                            //             'asButton' => true
                            //         ]
                            //     ],  
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ],
                    ],
                'issuance_date'=>['type'=>Form::INPUT_WIDGET, 
                        'widgetClass'=>'\kartik\widgets\DatePicker', 
                        'options' => ['pluginOptions' => [
                            'format' => 'yyyy-mm-dd', 
                            'autoclose'=>true, 
                            'todayHighlight' => true]],
                        ], 
                'units'=>[
                    'type'=>Form::INPUT_TEXT, 
                    'options'=>[
                        'placeholder'=>'Enter amount...',
                        ],
                    ],
            ]
        ],
        [
            'attributes'=>[       // 1 column layout
                'notes'=>['type'=>Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter notes...']],
            ],
        ],
        [
            'attributes'=>[
                'record_status'=>['type'=>Form::INPUT_DROPDOWN_LIST, 
                    'items'=>[ 'active' => 'Active', 'inactive' => 'Inactive', ], 
                    ], 
                'actions'=>[    // embed raw HTML content
                    'type'=>Form::INPUT_RAW, 
                    'value'=>  '<div style="text-align: right; margin-top: 20px">' . 
                        Html::resetButton('Reset', ['class'=>'btn btn-default']) . ' ' .
                        Html::submitButton('Submit', ['class'=>'btn btn-primary']) . 
                        '</div>'
                ],
             ],
        ],
    ],
]);
ActiveForm::end();
?>

</div>