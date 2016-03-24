<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->product_title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_uid',
            'product_title',
            'product_description:ntext',

        ],
    ]) ?>


<?= GridView::widget([
    'dataProvider' => $attrsDP,
    'columns' => [
        'name',
        'value',
    ],
]); ?>
</div>
