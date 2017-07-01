<?php

use yii\db\Migration;

/**
 * Handles the creation of table `patients`.
 * Has foreign keys to the tables:
 *
 * - `matrialStatus`
 * - `profession`
 */
class m170521_180042_create_patients_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('patients', [
            'id' => $this->primaryKey(),
            'MaritalStatuslId' => $this->integer()->notNull(),
            'professionId' => $this->integer()->notNull(),
            'name' => $this->string(180)->notNull(),
            'bornDate' => $this->date()->notNull(),
            'address' => $this->string(255),
            'phone' => $this->smallInteger(10),
            'cellPhone' => $this->smallInteger(10),
        ]);

        // creates index for column `MaritalStatuslId`
        $this->createIndex(
            'idx-patients-MaritalStatuslId',
            'patients',
            'MaritalStatuslId'
        );

        // add foreign key for table `matrialStatus`
        $this->addForeignKey(
            'fk-patients-MaritalStatuslId',
            'patients',
            'MaritalStatuslId',
            'matrialStatus',
            'id',
            'NO ACTION'
        );

        // creates index for column `professionId`
        $this->createIndex(
            'idx-patients-professionId',
            'patients',
            'professionId'
        );

        // add foreign key for table `profession`
        $this->addForeignKey(
            'fk-patients-professionId',
            'patients',
            'professionId',
            'profession',
            'id',
            'NO ACTION'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `matrialStatus`
        $this->dropForeignKey(
            'fk-patients-MaritalStatuslId',
            'patients'
        );

        // drops index for column `MaritalStatuslId`
        $this->dropIndex(
            'idx-patients-MaritalStatuslId',
            'patients'
        );

        // drops foreign key for table `profession`
        $this->dropForeignKey(
            'fk-patients-professionId',
            'patients'
        );

        // drops index for column `professionId`
        $this->dropIndex(
            'idx-patients-professionId',
            'patients'
        );

        $this->dropTable('patients');
    }
}
