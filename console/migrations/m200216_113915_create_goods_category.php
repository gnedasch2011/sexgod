<?php

use yii\db\Migration;

/**
 * Class m200216_113915_create_goods_category
 */
class m200216_113915_create_goods_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('goods_category', [
            'id' => $this->primaryKey(),
            'goods_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'position' => $this->integer()->defaultValue(0),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200216_113915_create_goods_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200216_113915_create_goods_category cannot be reverted.\n";

        return false;
    }
    */
}
