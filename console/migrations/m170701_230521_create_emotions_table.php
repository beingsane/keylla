<?php

use yii\db\Migration;

/**
 * Handles the creation of table `emotions`.
 */
class m170701_230521_create_emotions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('emotions', [
            'id' => $this->primaryKey(),
            'description' => $this->string(30)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('emotions');
    }
}
