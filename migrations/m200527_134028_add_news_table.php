<?php

use yii\db\Migration;

/**
 * Class m200527_134028_add_news_table
 * to create table in the db
 * ./yii migrate/create add_news_table
 */
class m200527_134028_add_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200527_134028_add_news_table cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('tbl_news', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_news');
    }
    
}
