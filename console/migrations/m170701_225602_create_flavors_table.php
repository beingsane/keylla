<?php

use yii\db\Migration;

/**
 * Handles the creation of table `flavors`.
 */
class m170701_225602_create_flavors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('flavors', [
            'id' => $this->primaryKey(),
            'description' => $this->string(20)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('flavors');
    }
}
