<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SearchCase */

$this->title = 'Create Search Case';
$this->params['breadcrumbs'][] = ['label' => 'Search Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-case-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
