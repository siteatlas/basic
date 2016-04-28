<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yearselect".
 *
 * @property integer $id
 * @property integer $yearthai
 * @property integer $yearvalue
 */
class Yearselect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yearselect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yearthai', 'yearvalue'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yearthai' => 'ปีพุทธศักราช',
            'yearvalue' => 'ปีคริสต์ศักราช',
        ];
    }
}
