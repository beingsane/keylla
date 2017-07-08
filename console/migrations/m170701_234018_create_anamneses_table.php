<?php

use yii\db\Migration;

/**
 * Handles the creation of table `anamneses`.
 */
class m170701_234018_create_anamneses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('anamneses', [
            'id' => $this->primaryKey(),
            'deseaseId' => $this->integer()->notNull(),
            'surgeryId' => $this->integer()->notNull(),
            'flavorId' => $this->integer()->notNull(),
            'menstruationId' => $this->integer()->notNull(),
            'pa' => $this->string(5),
            'complaint' => $this->string(200)->notNull,
            'treatments_exams' => $this->string(500),
            'medicament' => $this->string(500),
            'medicationArlegic' => $this->boolean(),
            'medicationArlegicDesc' => $this->string(500),
            'metalArlegic' => $this->boolean(),
            'tapeArlegic' => $this->boolean(),
            'historic' => $this->string(2000),
            'urine' => $this->boolean(),
            'urineColor' => $this->string(15),
            'urinePain' => $this->boolean(),
            'urineFrequency' => $this->string(20),
            'urinePainWeight' => $this->boolean(),
            'urineIncontinence' => $this->boolean(),
            'urineRetention' => $this->boolean(),
            'urineInfection' => $this->boolean(),
            'discharge' => $this->boolean(),
            'menstruationColor' => $this->string(15),
            'mestruationCoagulant' => $this->boolean(),
            'mestruationDuration' => $this->smallInteger(),
            'mestruationIntensity' => $this->string(15),
            'sexualActivity' => $this->boolean(),
            'pregnancy' => $this->boolean(),
            'childBirth' => $this->string(150),
            'abortion' => $this->string(150),
            'contraceptive' => $this->boolean(),
            'insomnia' => $this->boolean(),
            'insomniaTinme' => $this->time(),
            'somnolence' => $this->boolean(),
            'memory' => $this->string(150),
            'dormancy' => $this->boolean(),
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
