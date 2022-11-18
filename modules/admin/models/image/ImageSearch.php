<?php

namespace app\modules\admin\models\image;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\image\Images;

/**
 * ImageSearch represents the model behind the search form of `app\modules\admin\models\image\Images`.
 */
class ImageSearch extends Images
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['content_id', 'img_title', 'img_subtitle', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Images::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'content_id', $this->content_id])
            ->andFilterWhere(['like', 'img_title', $this->img_title])
            ->andFilterWhere(['like', 'img_subtitle', $this->img_subtitle])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
