<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $userId
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $personalCode
 * @property string $phone
 * @property integer $active
 * @property integer $isDead
 * @property string $lang
 *
 * @property Loans[] $loans
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'personalCode', 'phone', 'lang'], 'required'],
            [['active', 'isDead'], 'integer'],
            [['firstName', 'lastName', 'email'], 'string', 'max' => 100],
            [['personalCode', 'phone'], 'string', 'max' => 20],
            [['lang'], 'string', 'max' => 3],
	    ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'personalCode' => 'Personal Code',
            'phone' => 'Phone',
            'active' => 'Active',
            'isDead' => 'Is Dead',
            'lang' => 'Lang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoans()
    {
        return $this->hasMany(Loans::className(), ['userId' => 'userId']);
    }
    
    /**
     * @return full name
     */
    public function getFullName()
    {
	return $this->firstName.' '.$this->lastName;
    }
    
    
    

}
