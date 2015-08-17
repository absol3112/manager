<?php

use yii\db\Schema;
use yii\db\Migration;

class m150817_083845_add_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('product', [
            'product_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'code' => Schema::TYPE_STRING,
            'cost' => Schema::TYPE_INTEGER . ' NOT NULL',
            'number' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
        $this->createTable('log', [
            'log_id' => Schema::TYPE_PK,
            'product_id' => Schema::TYPE_INTEGER. ' NOT NULL',    
            'date' => Schema::TYPE_DATETIME,
            'number' => Schema::TYPE_INTEGER . ' NOT NULL',    
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('product');
        $this->dropTable('log');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
