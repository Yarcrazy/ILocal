<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shopAddress}}`.
 */
class m190509_160834_create_shopAddress_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopAddress}}', [
            'id' => $this->primaryKey(),
            'shopId' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shopAddress}}');
    }
}
