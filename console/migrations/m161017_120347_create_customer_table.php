<?php

use yii\db\Migration;

/**
 * Handles the creation for table `customer`.
 */
class m161017_120347_create_customer_table extends Migration
{
    public static $tableName="{{%customer}}";
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable($this::$tableName, [
            'id' => $this->primaryKey()->unsigned(),
            'name'=>$this->string(50)->notNull()->unique(),
            'full_name'=>$this->string(100),
            'phone'=>$this->string(90),
            'comment'=>$this->text(),
            'created'=>$this->timestamp(),
            'deleted'=>$this->boolean(),
        ]);

        $this->createIndex('{{%idx_customer_name}}',$this::$tableName,'name');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropIndex('{{%idx_customer_name}}',$this::$tableName);
        $this->dropTable($this::$tableName);
    }
}
