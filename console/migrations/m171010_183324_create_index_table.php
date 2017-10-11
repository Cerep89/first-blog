<?php

use yii\db\Migration;

/**
 * Handles the creation of table `index`.
 */
class m171010_183324_create_index_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('index', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('index');
    }
}
