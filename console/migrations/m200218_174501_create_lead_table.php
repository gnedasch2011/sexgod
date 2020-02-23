<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lead}}`.
 */
class m200218_174501_create_lead_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lead}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'text_from_client' => $this->string(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'create_date' => $this->string(),
            'robotCheck' => $this->integer(1),

            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lead}}');
    }
}
