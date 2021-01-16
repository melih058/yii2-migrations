<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210103_170908_purchasehistory
 */
class m210103_170908_purchasehistory extends Migration
{
    public function safeUp()
    {
        $this->createTable('purchasehistory', [
            'id'=>Schema::TYPE_PK,
            'userid' => Schema::TYPE_INTEGER,
            'productid' => Schema::TYPE_INTEGER,
        ]);


        $this->createIndex(
            'idx-userhistory-id',
            'purchasehistory',
            'userid'
        );


        $this->addForeignKey(
            'fk-user-shoppinghistory_id',
            'purchasehistory',
            'userid',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-producthistory-id',
            'purchasehistory',
            'productid'
        );


        $this->addForeignKey(
            'fk-user-productshistory_id',
            'purchasehistory',
            'productid',
            'products',
            'id',
            'CASCADE'
        );

    }
    public function safeDown()
    {
        return $this->dropTable('purchasehistory');
    }
}
