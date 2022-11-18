<?php

namespace app\modules\admin\models\content;

use Yii;

/**
 * This is the model class for table "contents".
 *
 * @property int $id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $text
 * @property string $tag
 */
class Contents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'tag'], 'required'],
            [['text'], 'string'],
            [['title', 'subtitle', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'text' => 'Text',
            'tag' => 'Tag',
        ];
    }
}
