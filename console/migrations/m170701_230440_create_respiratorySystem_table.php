<?php

use yii\db\Migration;

/**
 * Handles the creation of table `respiratorySystem`.
 */
class m170701_230440_create_respiratorySystem_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('respiratorySystem', [
            'id' => $this->primaryKey(),
            'description' => $this->string(30)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('respiratorySystem');
    }
}
