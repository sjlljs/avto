<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "CustomerController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CustomerController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Customer';
}
