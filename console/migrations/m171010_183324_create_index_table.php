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
            /****************************
             *     First section
             **************************/
            'first_image_left' => $this->string(),
            'first_title_left' => $this->string(),
            'first_text_left' => $this->string(), //End section left
//            First Section Center
            'first_image_center' => $this->string(),
            'first_title_center' => $this->string(),
            'first_text_center' => $this->string(),//End section Center
            //            First Section 3
            'first_image_right' => $this->string(),
            'first_title_right' => $this->string(),
            'first_text_right' => $this->string(),//End section Right
            /****************************
             *         Section Two
             ****************************/
//        Left
            'two_title_left' => $this->string(),
            'two_button_left' => $this->string(),
            'two_button_link_left' => $this->string(),
//Center
            'two_text_center' => $this->string(),
//          Right
            'two_title_right' => $this->string(),
            'two_text_link_one_right' => $this->string(),
            'two_link_one_right' => $this->string(),
            'two_text_link_two_right' => $this->string(),
            'two_link_two_right' => $this->string(),
            'two_text_link_three_right' => $this->string(),
            'two_link_three_right' => $this->string(),
            /****************************
             * Section three
             ********************/
            'three_background' => $this->string(),
            'three_title' => $this->string(),
            'three_year' => $this->integer(),
            'three_text' => $this->string(),
//            Proiect
            'three_proiect_one_number' => $this->integer(),
            'three_proiect_one_title' => $this->string(),
            'three_proiect_one_text' => $this->string(),
            'three_proiect_two_number' => $this->integer(),
            'three_proiect_two_title' => $this->string(),
            'three_proiect_two_text' => $this->string(),
            'three_proiect_three_number' => $this->integer(),
            'three_proiect_three_title' => $this->string(),
            'three_proiect_three_text' => $this->string(),
            /****************************
             * Section for
             ********************/
            'for_background' => $this->string(),
            'for_title' => $this->string(),

//            Items
            'for_one_item_title' => $this->string(),
            'for_one_item_text' => $this->string(),
            'for_two_item_title' => $this->string(),
            'for_two_item_text' => $this->string(),
            'for_three_item_title' => $this->string(),
            'for_three_item_text' => $this->string(),
            'for_for_item_title' => $this->string(),
            'for_for_item_text' => $this->string(),
//           Image right
            'for_for_image_right' => $this->string(),
            /****************************
             * Section five
             ********************/
            'five_image_left' => $this->string(),
            'five_title_right' => $this->string(),
            'five_text_right' => $this->string(),
            'five_button_right' => $this->string(),
            'five_button_link_right' => $this->string(),



//
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
