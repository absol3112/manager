<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property integer $log_id
 * @property integer $product_id
 * @property string $date
 * @property string $content
 * @property integer $number
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'number'], 'required'],
            [['product_id', 'number'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'product_id' => 'Product ID',
            'date' => 'Date',
            'content' => 'Content',
            'number' => 'Number',
        ];
    }
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            if (parent::beforeSave($insert)) {
                $this->date = date("Y/m/d H:i:s"); 
                return true;
            }
        }
        return false;
    }
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }
}
