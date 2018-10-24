<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WorkerTraining;

/**
 * WorkerTrainingSearch represents the model behind the search form of `common\models\WorkerTraining`.
 */
class WorkerTrainingSearch extends WorkerTraining
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'worker_id'], 'integer'],
            [['training_name', 'training_duration', 'training_institution', 'training_certificates', 'training_completion'], 'safe'],
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
        $query = WorkerTraining::find();

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
        ]);

        $query->andFilterWhere(['like', 'training_name', $this->training_name])
            ->andFilterWhere(['like', 'training_duration', $this->training_duration])
            ->andFilterWhere(['like', 'training_institution', $this->training_institution])
            ->andFilterWhere(['like', 'training_certificates', $this->training_certificates])
            ->andFilterWhere(['like', 'training_completion', $this->training_completion]);

        return $dataProvider;
    }
}
