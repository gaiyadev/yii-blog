<?php

use yii\db\Migration;

/**
 * Class m200528_180313_add_forms_table
 */
class m200528_180313_add_forms_table extends Migration
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
        echo "m200528_180313_add_forms_table cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
         $this->createTable('tbl_forms', array(
            'id' => 'pk',
            'firstname' => 'string NOT NULL',
            'lastname' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_forms');

    }
    
}
