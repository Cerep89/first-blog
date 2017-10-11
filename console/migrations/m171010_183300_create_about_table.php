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
            /****************************
             *     About section page
             * First section
             **************************/

            'about_title' => $this->string(),
            'about_text' => $this->string(),

            /****************************
            Two section three step
             **************************/
            'about_left_item_img' => $this->string(),
            'about_left_item_title' => $this->string(),
            'about_left_item_text' => $this->string(),
            'about_center_item_img' => $this->string(),
            'about_center_item_title' => $this->string(),
            'about_center_item_text' => $this->string(),
            'about_right_item_img' => $this->string(),
            'about_right_item_title' => $this->string(),
            'about_right_item_text' => $this->string(),


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
