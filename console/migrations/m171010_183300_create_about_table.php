<?php

use yii\db\Migration;

/**
 * Handles the creation of table `about`.
 */
class m171010_183300_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about');
    }
}
