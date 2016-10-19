<?php

use yii\db\Migration;

/**
 * Handles the creation for table `car_firm`.
 */
class m161017_141632_create_car_firm_table extends Migration
{
    public static $tableName="{{%car_firm}}";
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this::$tableName, [
            'id' => $this->primaryKey()->unsigned(),
            'name'=>$this->string(20)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this::$tableName);
    }
}
