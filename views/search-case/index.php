<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Product;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Search Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-case-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'case_id',
				'options' => ['width' => '12px']
			],
			[
				'attribute' => 'product_title',
				'label' => 'product title',
				'format' => 'raw',
				'value' => function($model){
					return Html::a($model->product_title,
						['product/view', 'id' => $model->product_uid]
						,['target'=>'_blank'] );
				}
			],
            'query',
			[
				'attribute' => 'relevance',
				'options' => ['width' => '12px'],
			],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
