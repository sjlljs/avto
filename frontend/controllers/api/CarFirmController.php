<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "CarFirmController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CarFirmController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\CarFirm';
}
