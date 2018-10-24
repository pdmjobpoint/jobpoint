<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="worker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'worker_firstname',
            'worker_lastname',
            'worker_middlename',
            'worker_suffix',
            'worker_birthdate',
            'worker_gender',
            'worker_placeofbirth',
            'worker_civil_status_id',
            'worker_present_houseno',
            'worker_present_brgy',
            'worker_present_city',
            'worker_present_province',
            'worker_permanent_houseno',
            'worker_permanent_brgy',
            'worker_permanent_city',
            'worker_permanent_province',
            'worker_citizenship_id',
            'worker_height',
            'worker_weight',
            'worker_landlineno',
            'worker_primary_cpno',
            'worker_second_cpno',
            'worker_email:email',
            'worker_disability_id',
            'worker_employment_status_id',
            'worker_preferred_occupation',
            'worker_preferred_industry',
            'worker_preferred_location_local',
            'worker_preferred_location_overseas',
            'worker_expected_salary',
            'worker_educ_level_id',
            'worker_educ_year',
            'worker_educ_school',
            'worker_educ_course',
            'worker_educ_award',
            'worker_past_company',
            'worker_past_company_address',
            'worker_past_position',
            'worker_inclusive_date',
            'worker_status_appointment',
            'worker_centuryskill',
            'worker_technicalskill',
            'worker_createddate',
            'worker_created_by',
        ],
    ]) ?>

</div>
