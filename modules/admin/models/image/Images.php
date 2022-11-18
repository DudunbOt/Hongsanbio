<?php

namespace app\modules\admin\models\image;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $content_id
 * @property string|null $img_title
 * @property string|null $img_subtitle
 * @property string $image
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_id', 'image'], 'required'],
            [['content_id', 'img_title', 'img_subtitle', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_id' => 'Content ID',
            'img_title' => 'Img Title',
            'img_subtitle' => 'Img Subtitle',
            'image' => 'Image',
        ];
    }
}
