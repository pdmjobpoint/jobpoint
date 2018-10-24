<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Disability */

$this->title = 'Create Disability';
$this->params['breadcrumbs'][] = ['label' => 'Disabilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disability-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
