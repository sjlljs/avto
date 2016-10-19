<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\CarFirm $model
*/
    
$this->title = "Фирма-производитель " . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => "Фирма-производитель", 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud car-firm-update">

    <h1>
        Фирма-производитель
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
