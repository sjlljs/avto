<?php

namespace common\models;

use Yii;
use \common\models\base\CarModel as BaseCarModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "car_model".
 */
class CarModel extends BaseCarModel
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
