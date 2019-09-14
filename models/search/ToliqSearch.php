<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Toliq;

/**
 * ToliqSearch represents the model behind the search form about `app\models\Toliq`.
 */
class ToliqSearch extends Toliq
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'guest_id', 'korish', 'solish', 'holati', 'vendor_id', 'model_id', 'date', 'start', 'finish'], 'integer'],
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
        $query = Toliq::find();

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
            'guest_id' => $this->guest_id,
            'korish' => $this->korish,
            'solish' => $this->solish,
            'holati' => $this->holati,
            'vendor_id' => $this->vendor_id,
            'model_id' => $this->model_id,
            'date' => $this->date,
            'start' => $this->start,
            'finish' => $this->finish,
        ]);

        return $dataProvider;
    }
}
