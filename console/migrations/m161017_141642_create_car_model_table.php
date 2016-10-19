<?php

use yii\db\Migration;

/**
 * Handles the creation for table `car_model`.
 */
class m161017_141642_create_car_model_table extends Migration
{
    public static $tableName="{{%car_model}}";
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable($this::$tableName, [
            'id' => $this->primaryKey()->unsigned(),
            'firm_id'=>$this->integer()->unsigned()->notNull(),
            'name'=>$this->string(30)->notNull()->unique(),
            'year_begin'=>$this->smallInteger()->unsigned(),
            'year_end'=>$this->smallInteger()->unsigned(),
            'comment'=>$this->text(),
            'deleted'=>$this->boolean(),
        ]);
        $this->createIndex('{{%idx_model_firm}}',$this::$tableName,'firm_id');
        $this->addForeignKey('{{%fk_car_model_firm}}',$this::$tableName,'firm_id',"{{%car_firm}}",'id','CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('{{%fk_car_model_firm}}',$this::$tableName);
        $this->dropIndex('{{%idx_model_firm}}',$this::$tableName);
        $this->dropTable($this::$tableName);
    }
}
