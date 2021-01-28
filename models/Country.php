<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $Class name
 * @property string $Type
 * @property string $Hours
 * @property string $Trainer
 * @property int|null $Spots
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Class name', 'Type', 'Hours', 'Trainer'], 'required'],
            [['Class name', 'Type', 'Trainer'], 'string'],
            [['Hours'], 'safe'],
            [['Spots'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Class name' => 'Class Name',
            'Type' => 'Type',
            'Hours' => 'Hours',
            'Trainer' => 'Trainer',
            'Spots' => 'Spots',
        ];
    }
}
