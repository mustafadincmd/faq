<?php

namespace kouosl\faq\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $soru
 * @property string $cevap
 * @property string $telefon
 * @property string $adres
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'soru', 'cevap', 'telefon', 'adres'], 'required'],
            [['id'], 'integer'],
            [['soru', 'cevap', 'telefon', 'adres'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'soru' => 'Soru',
            'cevap' => 'Cevap',
            'telefon' => 'Telefon',
            'adres' => 'Adres',
        ];
    }
}
