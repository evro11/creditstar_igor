<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loans".
 *
 * @property string $loanId
 * @property string $userId
 * @property string $amount
 * @property string $interest
 * @property integer $duration
 * @property string $dateApplied
 * @property string $dateLoanEnds
 * @property integer $campaign
 * @property integer $status
 *
 * @property Users $user
 */
class Loans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'amount', 'interest', 'duration', 'dateApplied', 'dateLoanEnds', 'campaign', 'status'], 'required'],
            [['loanId', 'userId', 'duration', 'dateApplied', 'dateLoanEnds', 'campaign', 'status'], 'integer'],
            [['amount', 'interest'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loanId' => 'Loan ID',
            'userId' => 'User ID',
            'amount' => 'Amount',
            'interest' => 'Interest',
            'duration' => 'Duration',
            'dateApplied' => 'Date Applied',
            'dateLoanEnds' => 'Date Loan Ends',
            'campaign' => 'Campaign',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['userId' => 'userId']);
    }
}
