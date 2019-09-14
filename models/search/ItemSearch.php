<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form of `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'user_id', 'model_id', 'category_id', 'status','viloyat_id', 'tuman_id','created_at', 'view', 'compare','vendor_id'], 'integer'],
            [['phone', 'title', 'full', 'price'], 'safe'],
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
        $query = Item::find();

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
            'item_id' => $this->item_id,
            'user_id' => $this->user_id,
            'vendor_id' => $this->vendor_id,
            'model_id' => $this->model_id,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'viloyat_id' => $this->viloyat_id,
            'tuman_id' => $this->tuman_id,
            'compare' => $this->compare,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'full', $this->full]);

        return $dataProvider;
    }
}
