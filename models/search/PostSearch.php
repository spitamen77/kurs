<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public $searchstring;
    public function rules()
    {
        return [
            [['id', 'post_id', 'narx', 'pulik', 'active', 'arrArea'], 'integer'],
            [['title', 'tarif', 'rasm1','rasm2'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Post::find();

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
            'post_id' => $this->post_id,
            'narx' => $this->narx,
            'pulik' => $this->pulik,
            'active' => $this->active,
            'arrArea' => $this->arrArea,
        ])->orderBy('id DESC');

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'tarif', $this->tarif])
            ->andFilterWhere(['like', 'rasm1', $this->rasm1])
            ->andFilterWhere(['like', 'rasm2', $this->rasm2]);

        return $dataProvider;
    }
}
