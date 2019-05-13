<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shopAddress}}`.
 */
class m190513_194736_create_shopAddress_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopAddress}}', [
            'id' => $this->primaryKey(),
            'shopId' => $this->integer()->notNull(),
            'street' => $this->string()->notNull(),
            'houseNumber' => $this->string()->notNull(),
            'housing' => $this->integer(),
            'building' => $this->integer(),
        ]);
        $this->addForeignKey('fx_shopAddress_shop', 'shopAddress', ['shopId'], 'shop', ['shopId']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shopAddress}}');
    }
}
