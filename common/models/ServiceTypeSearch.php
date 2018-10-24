<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ServiceType;

/**
 * ServiceTypeSearch represents the model behind the search form of `common\models\ServiceType`.
 */
class ServiceTypeSearch extends ServiceType
{
    public $category;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'service_category_id'], 'integer'],
            [['service_type_name', 'description','category'], 'safe'],
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
        $query = ServiceType::find()->joinwith(['categories']);

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
            'service_type.id' => $this->id,
            'service_type.service_category_id' => $this->service_category_id,
        ]);

        $query->andFilterWhere(['like', 'service_type.service_type_name', $this->service_type_name])
            ->andFilterWhere(['like', 'service_type.description', $this->description]);

        $query->andFilterWhere(['like', 'service_category.category', $this->category]);

        return $dataProvider;
    }
}
