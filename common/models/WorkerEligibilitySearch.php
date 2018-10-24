<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WorkerEligibility;

/**
 * WorkerEligibilitySearch represents the model behind the search form of `common\models\WorkerEligibility`.
 */
class WorkerEligibilitySearch extends WorkerEligibility
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'worker_id', 'eligibility_id'], 'integer'],
            [['eligibility_licenseno', 'eligibility_expirydate'], 'safe'],
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
        $query = WorkerEligibility::find();

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
            'worker_id' => $this->worker_id,
            'eligibility_id' => $this->eligibility_id,
            'eligibility_expirydate' => $this->eligibility_expirydate,
        ]);

        $query->andFilterWhere(['like', 'eligibility_licenseno', $this->eligibility_licenseno]);

        return $dataProvider;
    }
}
