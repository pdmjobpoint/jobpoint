<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ServiceCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories of Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-category-index">

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
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
