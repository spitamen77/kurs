<?php
namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\data\ActiveDataProvider;
// use app\models\OnlineConsultSearch;
// use app\models\InformationsSearch;
// use app\models\NewsSearch;


/**
* 
*/
class QidirForm extends Model
{
    public $searchstring, $cat;

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

        $dataProvider = new ActiveDataProvider([
            // 'query' => $query,
            'pagination' => [ 'pageSize' => 10 ],
        ]);

        $rows = $dataProvider->getModels();
// print_r($rows); die;

        // add conditions that should always apply here

        // $dataProvider = new ActiveDataProvider([
        //     'query' => $query,
        // ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }

}

 ?>