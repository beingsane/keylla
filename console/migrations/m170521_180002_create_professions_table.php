<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profession`.
 */
class m170521_180002_create_professions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('profession', [
            'id' => $this->primaryKey(),
            'description' => $this->string(155)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('profession');
    }
}
