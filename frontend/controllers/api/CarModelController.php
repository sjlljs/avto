<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "CarModelController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CarModelController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\CarModel';
}
