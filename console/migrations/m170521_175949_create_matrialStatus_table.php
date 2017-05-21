<?php

use yii\db\Migration;

/**
 * Handles the creation of table `matrialStatus`.
 */
class m170521_175949_create_matrialStatus_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('matrialStatus', [
            'id' => $this->primaryKey(),
            'description' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('matrialStatus');
    }
}
