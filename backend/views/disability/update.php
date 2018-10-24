<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Disability */

$this->title = 'Update Disability: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disabilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disability-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
