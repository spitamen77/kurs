<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guest;

/**
 * GuestSearch represents the model behind the search form about `app\models\Guest`.
 */
class GuestSearch extends Guest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'shaxar_id'], 'integer'],
            [['ism', 'tel', 'tip_user'], 'safe'],
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
        $query = Guest::find();

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
            'shaxar_id' => $this->shaxar_id,
        ]);

        $query->andFilterWhere(['like', 'ism', $this->ism])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'tip_user', $this->tip_user]);

        return $dataProvider;
    }
}
