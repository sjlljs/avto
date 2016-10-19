<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "CarController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CarController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Car';
}
