<?php

namespace backend\modules\play\models;

use Yii;

/**
 * This is the model class for table "word".
 *
 * @property integer $id
 * @property string $string
 */
class Word extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'word';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['string'], 'required'],
            [['string'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'string' => 'String',
        ];
    }
}
