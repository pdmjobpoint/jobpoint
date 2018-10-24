<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\EligibilitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eligibilities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eligibility-index">

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

            'eligibility_code',
            'eligibility_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
