<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCase */

$this->title = 'Update Search Case: ' . $model->case_id;
$this->params['breadcrumbs'][] = ['label' => 'Search Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->case_id, 'url' => ['view', 'id' => $model->case_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="search-case-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
