<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IssueInventory */

$this->title = $model->issue_inventory_id;
// $this->params['breadcrumbs'][] = ['label' => 'Issue Inventories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_view-detail', [
        'model' => $model,
    ]) ?>

    <div class="issue-inventory-line-item">
        <?= Yii::$app->controller->renderPartial('@app/views/issue-inventory-line-item/_index',
            [
                'issue_inventory_id' => $model->issue_inventory_id,
                'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => $model->getIssueInventoryLineItems(),
                    'pagination' => false
                    ]),
            ]);
            ?>
    </div>
    

</div>
