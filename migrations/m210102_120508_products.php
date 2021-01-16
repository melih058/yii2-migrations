<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210102_120508_products
 */
class m210102_120508_products extends Migration
{

    public function safeUp()
    {
        $this->createTable('products', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'count'=> Schema::TYPE_INTEGER,
            'price'=> Schema::TYPE_INTEGER,
            'category_id'=>Schema::TYPE_INTEGER,
            'picture'=>Schema::TYPE_STRING,

        ]);

        $this->createIndex(
            'idx-products-category_id',
            'products',
            'category_id'
        );

        $this->addForeignKey(
            'fk-products-category_id',
            'products',
            'category_id',
            'categories',
            'id',
            'CASCADE'
        );

        $this->insert('products', [
            'name' => 'TES V: Skyrim',
            'count'=> '11',
            'price'=> '100',
            'category_id'=>'1',
            'picture'=>'https://fanatical.imgix.net/product/original/305f04c9-8780-4c7b-91dd-e87979844dab.jpg?auto=compress,format&w=400&fit=max',
        ]);

        $this->insert('products', [
            'name' => 'Cyberpunk2077',
            'count'=> '5',
            'price'=> '250',
            'category_id'=>'1',
            'picture'=>'https://c.files.bbci.co.uk/0379/production/_114698800_cyberpunk2077_5ecfe92351d704_86615862-png-1024x576.png',
        ]);


        $this->insert('products', [
            'name' => 'PS5',
            'count'=> '0',
            'price'=> '8000',
            'category_id'=>'2',
            'picture'=>'https://digitalage.com.tr/wp-content/uploads/2020/09/playstation-5-cikis-tarihi-ve-fiyati.jpg',
        ]);

        $this->insert('products', [
            'name' => 'Televizyon',
            'count'=> '20',
            'price'=> '4000',
            'category_id'=>'2',
            'picture'=>'https://www.vestel.com.tr/ProductImages/LargeImagesNew/20275256_listt.jpg',
        ]);

        $this->insert('products', [
            'name' => 'APPLE Airpods Pro',
            'count'=> '5',
            'price'=> '2500',
            'category_id'=>'3',
            'picture'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MWP22?wid=2000&hei=2000&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=1591634795000',
        ]);

        $this->insert('products', [
            'name' => 'Hyperx Cloud',
            'count'=> '15',
            'price'=> '1000',
            'category_id'=>'3',
            'picture'=>'https://www.itopya.com/picture500x0/hyperx-cloud-core-7-1-kulaklik-26.jpg',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_120508_products cannot be reverted.\n";

        return false;
    }
    */
}
