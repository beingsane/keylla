<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menstruationTypes`.
 */
class m170701_230127_create_menstruationTypes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menstruationTypes', [
            'id' => $this->primaryKey(),
            'description' => $this->string(20)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menstruationTypes');
    }
}
