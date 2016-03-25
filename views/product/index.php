<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'product_uid',
				'options' => ['width' => '65']
			],
			[
		        'attribute' => 'product_title',
		        'format' => 'raw',
				'value'=>function($data){
					return Html::a($data['product_title'], ['product/view', 'id' => $data['product_uid']], ['target'=>'_blank']);
				}
				
		    ],
			[
				'attribute' =>'product_description',
				'format'=>'text',
				'value'=>function($model){
					return substr($model->product_description, 0, 30) . "...";
				}
			]
            
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
