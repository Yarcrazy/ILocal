<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shopStatus}}`.
 */
class m190509_155744_create_shopStatus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopStatus}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shopStatus}}');
    }
}
