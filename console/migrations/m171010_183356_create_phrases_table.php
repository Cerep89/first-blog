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
            /****************************
             *     Phrases section
             **************************/
            'phrases_title_' => $this->string(),
            'phrases_text' => $this->string(),
            'phrases_author' => $this->string(),
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
