<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shopType}}`.
 */
class m190513_185055_create_shopType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopType}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shopType}}');
    }
}
