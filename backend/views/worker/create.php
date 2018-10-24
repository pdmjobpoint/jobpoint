<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Create Service Providers';
$this->params['breadcrumbs'][] = ['label' => 'Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-create">

    <div class="card">
    	<div class="card-header">
            <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
    	</div>
        <div class="card-content">
            <div class="row">
                <div class="col-lg-12">


				    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
