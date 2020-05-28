<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_forms".
 *
 * @property int $id
 * @property string $firstname
 * @property string|null $lastname
 */
class TblForms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_forms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname'], 'required'],
            [['lastname'], 'string'],
            [['firstname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
        ];
    }
}
