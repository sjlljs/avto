<?php

namespace common\models;

use Yii;
use \common\models\base\CarFirm as BaseCarFirm;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "car_firm".
 */
class CarFirm extends BaseCarFirm
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
