<?php

use yii\db\Migration;

/**
 * Handles the creation of table `surgeries`.
 */
class m170701_233705_create_surgeries_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('surgeries', [
            'id' => $this->primaryKey(),
            'description' => $this->string(150)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('surgeries');
    }
}
