<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property string $username
 * @property string $rol
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'rol'], 'required'],
            [['username', 'rol'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Email',
            'rol' => 'Rol',
        ];
    }
}
