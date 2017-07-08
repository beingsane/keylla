<?php

use yii\db\Migration;

/**
 * Handles the creation of table `anamneses`.
 */
class m170701_232117_create_anamneses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('anamneses', [
            'id' => $this->primaryKey(),
            'pa' => $this->string(5),
            'complaint' => $this->string(200)->notNull,
            'treatments_exams' => $this->string(500),
            'medicament' => $this->string(500),
            'medicationArlegic' => $this->boolean(),
            'medicationArlegicDesc' => $this->string(500),
            'metalArlegic' => $this->boolean(),
            'tapeArlegic' => $this->boolean(),
            'medicationArlegicDesc' => $this->string(500),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('anamneses');
    }
}
