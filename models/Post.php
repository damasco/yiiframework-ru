<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $slug
 * @property integer $user_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class Post extends ActiveRecord
{
    /** Inactive status */
    const STATUS_INACTIVE = 0;

    /** Active status */
    const STATUS_ACTIVE = 10;

    /** Deleted status */
    const STATUS_DELETED = 20;

    const SCENARIO_UPDATE_BY_MANAGER = 'update_by_manager';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'user_id',
                'updatedByAttribute' => false,
            ],
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['title', 'required'],
            ['title', 'string', 'max' => 255],

            ['body', 'required'],
            ['body', 'string'],

            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => array_keys(self::getStatuses())]
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return [
            self::SCENARIO_DEFAULT => ['title', 'body'],
            self::SCENARIO_UPDATE_BY_MANAGER => ['title', 'body', 'status'],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('post', 'ID'),
            'title' => Yii::t('post', 'Title'),
            'body' => Yii::t('post', 'Content'),
            'slug' => Yii::t('post', 'Slug'),
            'user_id' => Yii::t('post', 'User ID'),
            'status' => Yii::t('post', 'Status'),
            'created_at' => Yii::t('post', 'Created At'),
            'updated_at' => Yii::t('post', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return string label for current status
     */
    public function getStatusLabel()
    {
        return ArrayHelper::getValue(static::getStatuses(), $this->status);
    }

    /**
     * @return array status labels indexed by status values
     */
    public static function getStatuses()
    {
        return [
            self::STATUS_INACTIVE => Yii::t('post', 'Inactive'),
            self::STATUS_ACTIVE => Yii::t('post', 'Active'),
            self::STATUS_DELETED => Yii::t('post', 'Deleted'),
        ];
    }
}
