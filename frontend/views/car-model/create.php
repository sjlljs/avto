<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\CarModel $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => "Модели", 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud car-model-create">

    <h1>
        Модель
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
