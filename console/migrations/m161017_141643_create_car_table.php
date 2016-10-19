<?php

use yii\db\Migration;

/**
 * Handles the creation for table `car`.
 */
class m161017_141643_create_car_table extends Migration
{
    public static $tableName="{{%car}}";
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable($this::$tableName, [
            'id' => $this->primaryKey()->unsigned(),
            'customer_id'=>$this->integer()->notNull()->unsigned(),
            'model_id'=>$this->integer()->unsigned(),
            'vin'=>$this->string(17),
            'year'=>$this->smallInteger()->unsigned(),
            'comment'=>$this->text(),
            'deleted'=>$this->boolean(),
        ]);
        $this->createIndex('{{%idx_car_customer}}',$this::$tableName,'customer_id');
        $this->addForeignKey('{{%fk_car_customer}}',$this::$tableName,'customer_id',"{{%customer}}",'id','CASCADE');

        $this->createIndex('{{%idx_car_model}}',$this::$tableName,'model_id');
        $this->addForeignKey('{{%fk_car_model}}',$this::$tableName,'model_id','{{%car_model}}','id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('{{%fk_car_model}}',$this::$tableName);
        $this->dropIndex('{{%idx_car_model}}',$this::$tableName);

        $this->dropForeignKey('{{%fk_car_customer}}',$this::$tableName);
        $this->dropIndex('{{%idx_car_customer}}',$this::$tableName);
        $this->dropTable($this::$tableName);
    }
}
