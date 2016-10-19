<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "customer".
 *
 * @property string $id
 * @property string $name
 * @property string $full_name
 * @property string $phone
 * @property string $comment
 * @property integer $deleted
 * @property string $created
 *
 * @property \common\models\Car[] $cars
 * @property string $aliasModel
 */
abstract class Customer extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created',
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['comment'], 'string'],
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['full_name'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 90],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'comment' => 'Comment',
            'created' => 'Created',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(\common\models\Car::className(), ['customer_id' => 'id']);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\query\CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CustomerQuery(get_called_class());
    }


}