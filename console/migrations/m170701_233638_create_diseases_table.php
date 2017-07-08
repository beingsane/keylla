<?php

use yii\db\Migration;

/**
 * Handles the creation of table `diseases`.
 */
class m170701_233638_create_diseases_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('diseases', [
            'id' => $this->primaryKey(),
            'description' => $this->string(150)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('diseases');
    }
}
