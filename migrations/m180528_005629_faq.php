<?php

use yii\db\Migration;

/**
 * Class m180528_005629_faq
 */
class m180528_005629_faq extends Migration
{
        public function up()
     {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
     }
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),
            'soru' => $this->text(),
			'cevap' => $this->text(),
            'telefon' => $this->text(),
            'adres' => $this->text(),
        ], $tableOptions);

     public function down()
     {
         $this->dropTable('{{%faq}}');

     }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180528_005629_faq cannot be reverted.\n";

        return false;
    }
    */
}
