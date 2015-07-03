<?php

use yii\db\Schema;
use yii\db\Migration;

class m150703_182050_create_auth_table extends Migration
{

    public function up()
    {
        $this->createTable('auth',
            [
            'id' => 'pk',
            'user_id' => Schema::TYPE_INTEGER.' NOT NULL',
            'source string' => Schema::TYPE_STRING.'(255) NOT NULL',
            'source_id' => Schema::TYPE_STRING.'(255) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('auth');
    }
}