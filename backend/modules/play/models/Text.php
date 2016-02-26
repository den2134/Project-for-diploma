<?php

namespace backend\modules\play\models;

use Yii;

/**
 * This is the model class for table "text".
 *
 * @property integer $id
 * @property string $string
 */
class Text extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['string'], 'required'],
            [['string'], 'string', 'min' => 100],
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
