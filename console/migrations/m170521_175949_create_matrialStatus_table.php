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

        $columns = [
            'id',
            'description'
        ];

        $values = [
            [1, 'solteiro(a)'],
            [2, 'casado(a)'],
            [3, 'divorciado(a)'],
            [4, 'casado(a)'],
            [5, 'desquitado(a)'],
        ]

        $this->batchInsert('cities', $columns, $values);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('matrialStatus');
    }
}
