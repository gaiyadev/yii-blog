<?php

use yii\db\Migration;

/**
 * Class m200527_090742_posts
 */
class m200527_090742_posts extends Migration
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
        echo "m200527_090742_posts cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'user_id' => $this->string()->unique(),
            'body' => $this->text(),
        ]);
    }

    public function down()
    {
//        echo "m200527_090742_posts cannot be reverted.\n";
//        return false;
        $this->dropTable('posts');
    }

}
