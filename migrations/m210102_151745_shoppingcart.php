<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210102_151745_shoppingcart
 */
class m210102_151745_shoppingcart extends Migration
{
    public function safeUp()
    {
        $this->createTable('shoppingcart', [
            'id'=>Schema::TYPE_PK,
            'userid' => Schema::TYPE_INTEGER,
            'productid' => Schema::TYPE_INTEGER,
        ]);


        $this->createIndex(
            'idx-user-id',
            'shoppingcart',
            'userid'
        );


        $this->addForeignKey(
            'fk-user-shopping_id',
            'shoppingcart',
            'userid',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-product-id',
            'shoppingcart',
            'productid'
        );


        $this->addForeignKey(
            'fk-user-products_id',
            'shoppingcart',
            'productid',
            'products',
            'id',
            'CASCADE'
        );

    }


    public function safeDown()
    {
        return $this->dropTable('shoppingcart');
    }
}
