<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m171010_183314_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            /****************************
             *     Contact section page
             * First section
             **************************/

            'contact_title' => $this->string(),
            'contact_text' => $this->string(),
            /****************************
             * Two section for items personal date
             **************************/
            'contact_title_one' => $this->string(),
            'contact_text_one' => $this->string(),
            'contact_title_two' => $this->string(),
            'contact_text_two' => $this->string(),
            'contact_title_three' => $this->string(),
            'contact_text_three' => $this->string(),
            'contact_title_for' => $this->string(),
            'contact_text_for' => $this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
