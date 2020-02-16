<?php

use yii\db\Migration;

/**
 * Class m200215_153708_add_column_in_goods
 */
class m200215_153708_add_column_in_goods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("goods",'slug', "string" );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200215_153708_add_column_in_goods cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200215_153708_add_column_in_goods cannot be reverted.\n";

        return false;
    }
    */
}
