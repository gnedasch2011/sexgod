<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attr_product}}`.
 */
class m200215_150912_create_attr_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attr_product}}', [
            'id' => $this->primaryKey(),
            'attr_id' => $this->string()->notNull(),
            'product_id' => $this->integer()->defaultValue(1),
            'value' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attr_product}}');
    }
}
