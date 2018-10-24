<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EducationalLevel */

$this->title = 'Update Educational Level: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Educational Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="educational-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
