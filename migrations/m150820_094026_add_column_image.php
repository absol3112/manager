<?php

use yii\db\Schema;
use yii\db\Migration;

class m150820_094026_add_column_image extends Migration
{
    public function safeUp()
    {
        $this->addColumn('product', 'image', Schema::TYPE_STRING);
    }
    
    public function safeDown()
    {
        $this->dropColumn('product', 'image');
    }
}
