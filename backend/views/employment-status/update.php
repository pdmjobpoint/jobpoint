<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EmploymentStatus */

$this->title = 'Update Employment Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employment Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employment-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
