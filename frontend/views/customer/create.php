<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Customer $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => "Покупатели", 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud customer-create">

    <h1>
        Покупатель
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
