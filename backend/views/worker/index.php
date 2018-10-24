<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'worker_fullname',
            'worker_permanent_address',
            'worker_birthdate',
            'worker_age',
            //'worker_suffix',
            //'worker_birthdate',
            //'worker_gender',
            //'worker_placeofbirth',
            //'worker_civil_status_id',
            //'worker_present_houseno',
            //'worker_present_brgy',
            //'worker_present_city',
            //'worker_present_province',
            //'worker_permanent_houseno',
            //'worker_permanent_brgy',
            //'worker_permanent_city',
            //'worker_permanent_province',
            //'worker_citizenship_id',
            //'worker_height',
            //'worker_weight',
            //'worker_landlineno',
            //'worker_primary_cpno',
            //'worker_second_cpno',
            //'worker_email:email',
            //'worker_disability_id',
            //'worker_employment_status_id',
            //'worker_preferred_occupation',
            //'worker_preferred_industry',
            //'worker_preferred_location_local',
            //'worker_preferred_location_overseas',
            //'worker_expected_salary',
            //'worker_educ_level_id',
            //'worker_educ_year',
            //'worker_educ_school',
            //'worker_educ_course',
            //'worker_educ_award',
            //'worker_past_company',
            //'worker_past_company_address',
            //'worker_past_position',
            //'worker_inclusive_date',
            //'worker_status_appointment',
            //'worker_centuryskill',
            //'worker_technicalskill',
            //'worker_createddate',
            //'worker_created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
