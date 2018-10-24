<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ServiceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Types of Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-type-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php Pjax::begin(); ?>
    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'category',
            'service_type_name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
