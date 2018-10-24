<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UsertypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertype-index">

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

            'usertype_name',
            'usertype_description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
