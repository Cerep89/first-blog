<?php

use yii\db\Migration;

/**
 * Handles the creation of table `phrases`.
 */
class m171010_183356_create_phrases_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('phrases', [
            'id' => $this->primaryKey(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phrases');
    }
}
