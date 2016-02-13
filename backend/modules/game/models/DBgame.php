<?php

namespace backend\modules\game\models;

use Yii;

/**
 * This is the model class for table "thegame".
 *
 * @property integer $id
 * @property string $level_name
 * @property string $level_description
 * @property string $level_code
 */
class DBgame extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thegame';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_name', 'level_description', 'level_code'], 'required'],
            [['level_description', 'level_code'], 'string'],
            [['level_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_name' => 'Level Name',
            'level_description' => 'Level Description',
            'level_code' => 'Level Code',
        ];
    }
}
