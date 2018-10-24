<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Worker;

/**
 * WorkerSearch represents the model behind the search form of `common\models\Worker`.
 */
class WorkerSearch extends Worker
{
    public $worker_fullname, $worker_permanent_address;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'worker_civil_status_id', 'worker_citizenship_id', 'worker_disability_id', 'worker_employment_status_id', 'worker_educ_level_id', 'worker_created_by'], 'integer'],
            [['worker_firstname', 'worker_lastname', 'worker_middlename', 'worker_suffix', 'worker_birthdate', 'worker_gender', 'worker_placeofbirth', 'worker_present_houseno', 'worker_present_brgy', 'worker_present_city', 'worker_present_province', 'worker_permanent_houseno', 'worker_permanent_brgy', 'worker_permanent_city', 'worker_permanent_province', 'worker_height', 'worker_weight', 'worker_landlineno', 'worker_primary_cpno', 'worker_second_cpno', 'worker_email', 'worker_preferred_occupation', 'worker_preferred_industry', 'worker_preferred_location_local', 'worker_preferred_location_overseas', 'worker_educ_year', 'worker_educ_school', 'worker_educ_course', 'worker_educ_award', 'worker_past_company', 'worker_past_company_address', 'worker_past_position', 'worker_inclusive_date', 'worker_status_appointment', 'worker_centuryskill', 'worker_technicalskill', 'worker_createddate','worker_permanent_address', 'worker_fullname'], 'safe'],
            [['worker_expected_salary'], 'number'],
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
        $query = Worker::find();

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
            'user_id' => $this->user_id,
            'worker_birthdate' => $this->worker_birthdate,
            'worker_civil_status_id' => $this->worker_civil_status_id,
            'worker_citizenship_id' => $this->worker_citizenship_id,
            'worker_disability_id' => $this->worker_disability_id,
            'worker_employment_status_id' => $this->worker_employment_status_id,
            'worker_expected_salary' => $this->worker_expected_salary,
            'worker_educ_level_id' => $this->worker_educ_level_id,
            'worker_educ_year' => $this->worker_educ_year,
            'worker_inclusive_date' => $this->worker_inclusive_date,
            'worker_createddate' => $this->worker_createddate,
            'worker_created_by' => $this->worker_created_by,
        ]);


        $query->andFilterWhere(['like', 'worker_firstname', $this->worker_firstname])
            ->andFilterWhere(['like', 'worker_lastname', $this->worker_lastname])
            ->andFilterWhere(['like', 'worker_middlename', $this->worker_middlename])
            ->andFilterWhere(['like', 'worker_suffix', $this->worker_suffix])
            ->andFilterWhere(['like', 'worker_gender', $this->worker_gender])
            ->andFilterWhere(['like', 'worker_placeofbirth', $this->worker_placeofbirth])
            ->andFilterWhere(['like', 'worker_present_houseno', $this->worker_present_houseno])
            ->andFilterWhere(['like', 'worker_present_brgy', $this->worker_present_brgy])
            ->andFilterWhere(['like', 'worker_present_city', $this->worker_present_city])
            ->andFilterWhere(['like', 'worker_present_province', $this->worker_present_province])
            ->andFilterWhere(['like', 'worker_permanent_houseno', $this->worker_permanent_houseno])
            ->andFilterWhere(['like', 'worker_permanent_brgy', $this->worker_permanent_brgy])
            ->andFilterWhere(['like', 'worker_permanent_city', $this->worker_permanent_city])
            ->andFilterWhere(['like', 'worker_permanent_province', $this->worker_permanent_province])
            ->andFilterWhere(['like', 'worker_height', $this->worker_height])
            ->andFilterWhere(['like', 'worker_weight', $this->worker_weight])
            ->andFilterWhere(['like', 'worker_landlineno', $this->worker_landlineno])
            ->andFilterWhere(['like', 'worker_primary_cpno', $this->worker_primary_cpno])
            ->andFilterWhere(['like', 'worker_second_cpno', $this->worker_second_cpno])
            ->andFilterWhere(['like', 'worker_email', $this->worker_email])
            ->andFilterWhere(['like', 'worker_preferred_occupation', $this->worker_preferred_occupation])
            ->andFilterWhere(['like', 'worker_preferred_industry', $this->worker_preferred_industry])
            ->andFilterWhere(['like', 'worker_preferred_location_local', $this->worker_preferred_location_local])
            ->andFilterWhere(['like', 'worker_preferred_location_overseas', $this->worker_preferred_location_overseas])
            ->andFilterWhere(['like', 'worker_educ_school', $this->worker_educ_school])
            ->andFilterWhere(['like', 'worker_educ_course', $this->worker_educ_course])
            ->andFilterWhere(['like', 'worker_educ_award', $this->worker_educ_award])
            ->andFilterWhere(['like', 'worker_past_company', $this->worker_past_company])
            ->andFilterWhere(['like', 'worker_past_company_address', $this->worker_past_company_address])
            ->andFilterWhere(['like', 'worker_past_position', $this->worker_past_position])
            ->andFilterWhere(['like', 'worker_status_appointment', $this->worker_status_appointment])
            ->andFilterWhere(['like', 'worker_centuryskill', $this->worker_centuryskill])
            ->andFilterWhere(['like', 'worker_technicalskill', $this->worker_technicalskill]);

        $query->andFilterWhere(['like', 'worker_firstname', $this->worker_fullname])
            ->orFilterWhere(['like', 'worker_lastname', $this->worker_fullname]);

        $query->andFilterWhere(['like', 'worker_permanent_houseno', $this->worker_permanent_address])
            ->orFilterWhere(['like', 'worker_permanent_brgy', $this->worker_permanent_address])
            ->orFilterWhere(['like', 'worker_permanent_city', $this->worker_permanent_address])
            ->orFilterWhere(['like', 'worker_permanent_province', $this->worker_permanent_address]);
        return $dataProvider;
    }
}
