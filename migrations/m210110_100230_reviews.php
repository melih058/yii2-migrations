<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210110_100230_reviews
 */
class m210110_100230_reviews extends Migration
{
    public function safeUp()
    {
        $this->createTable('reviews', [
            'id'=>Schema::TYPE_PK,
            'userid' => Schema::TYPE_INTEGER,
            'productid' => Schema::TYPE_INTEGER,
            'comment' => Schema::TYPE_TEXT,
            'starpoint' => Schema::TYPE_INTEGER,
        ]);


        $this->createIndex(
            'idx-userreviews-id',
            'purchasehistory',
            'userid'
        );


        $this->addForeignKey(
            'fk-user-shoppingreviews_id',
            'reviews',
            'userid',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-productreviews-id',
            'reviews',
            'productid'
        );


        $this->addForeignKey(
            'fk-user-productreviews_id',
            'reviews',
            'productid',
            'products',
            'id',
            'CASCADE'
        );

    }
    public function safeDown()
    {
        return $this->dropTable('reviews');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210110_100230_reviews cannot be reverted.\n";

        return false;
    }
    */
}
