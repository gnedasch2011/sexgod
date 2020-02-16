<?php

use yii\db\Migration;

/**
 * Class m200215_181624_new_table_change_category
 */
class m200215_181624_new_table_change_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category',"keyword",$this->string() );
        $this->addColumn('category',"desc",$this->string() );
        $this->addColumn('category',"nameForBreadCrumb",$this->string() );
        $this->addColumn('category',"slug",$this->string() );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200215_181624_new_table_change_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200215_181624_new_table_change_category cannot be reverted.\n";

        return false;
    }

    */

}
