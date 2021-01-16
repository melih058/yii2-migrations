<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210102_113408_categories
 */
class m210102_113408_categories extends Migration
{
    public function safeUp()
    {
         $this->createTable('categories', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
        ]);

        $this->insert('categories', [
            'name' => 'Oyun',
        ]);

        $this->insert('categories', [
            'name' => 'Teknoloji',
        ]);

        $this->insert('categories', [
            'name' => 'Aksesuar',
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return $this->dropTable('categories');
    }
}
