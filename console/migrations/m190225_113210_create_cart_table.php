<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cart}}`.
 */
class m190225_113210_create_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cart}}', [
            'id' => $this->primaryKey(),
            'good_id' => $this->integer()->notNull(),
            'cart_id' => $this->integer()->notNull(),
            'quentity' => $this->integer(),
            'created_at' => $this->datetime()->notNull(),
        ]);

        $this->createIndex(
            'idx-cart-cart_id',
            'cart',
            'cart_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cart}}');
        $this->dropIndex(
            'idx-cart-cart_id',
            'cart'
        );
    }
}
