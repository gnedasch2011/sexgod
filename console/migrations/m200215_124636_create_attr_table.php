<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attr}}`.
 */
class m200215_124636_create_attr_table extends Migration
{
    /**
     * {@inheritdoc}
     */


    public function safeUp()
    {
        $this->createTable('{{%attr}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'group_id' => $this->integer()->defaultValue(1),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attr}}');
    }

}
