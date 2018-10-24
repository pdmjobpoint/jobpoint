<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property int $user_id
 * @property string $worker_firstname
 * @property string $worker_lastname
 * @property string $worker_middlename
 * @property string $worker_suffix
 * @property string $worker_birthdate
 * @property string $worker_gender
 * @property string $worker_placeofbirth
 * @property int $worker_civil_status_id
 * @property string $worker_present_houseno
 * @property string $worker_present_brgy
 * @property string $worker_present_city
 * @property string $worker_present_province
 * @property string $worker_permanent_houseno
 * @property string $worker_permanent_brgy
 * @property string $worker_permanent_city
 * @property string $worker_permanent_province
 * @property int $worker_citizenship_id
 * @property string $worker_height
 * @property string $worker_weight
 * @property string $worker_landlineno
 * @property string $worker_primary_cpno
 * @property string $worker_second_cpno
 * @property string $worker_email
 * @property int $worker_disability_id
 * @property int $worker_employment_status_id
 * @property string $worker_preferred_occupation
 * @property string $worker_preferred_industry
 * @property string $worker_preferred_location_local
 * @property string $worker_preferred_location_overseas
 * @property double $worker_expected_salary
 * @property int $worker_educ_level_id
 * @property string $worker_educ_year
 * @property string $worker_educ_school
 * @property string $worker_educ_course
 * @property string $worker_educ_award
 * @property string $worker_past_company
 * @property string $worker_past_company_address
 * @property string $worker_past_position
 * @property string $worker_inclusive_date
 * @property string $worker_status_appointment
 * @property string $worker_centuryskill
 * @property string $worker_technicalskill
 * @property string $worker_createddate
 * @property int $worker_created_by
 *
 * @property Citizenship $workerCitizenship
 * @property CivilStatus $workerCivilStatus
 * @property User $workerCreatedBy
 * @property Disability $workerDisability
 * @property EducationalLevel $workerEducLevel
 * @property EmploymentStatus $workerEmploymentStatus
 * @property WorkerEligibility[] $workerEligibilities
 * @property WorkerTraining[] $workerTrainings
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'worker_firstname', 'worker_lastname', 'worker_suffix', 'worker_birthdate', 'worker_gender', 'worker_placeofbirth', 'worker_civil_status_id', 'worker_present_houseno', 'worker_present_brgy', 'worker_present_city', 'worker_present_province', 'worker_permanent_houseno', 'worker_permanent_brgy', 'worker_permanent_city', 'worker_permanent_province', 'worker_citizenship_id', 'worker_height', 'worker_weight', 'worker_primary_cpno', 'worker_second_cpno', 'worker_email', 'worker_disability_id', 'worker_employment_status_id', 'worker_preferred_occupation', 'worker_preferred_industry', 'worker_preferred_location_local', 'worker_preferred_location_overseas', 'worker_expected_salary', 'worker_educ_level_id', 'worker_educ_year', 'worker_educ_school', 'worker_educ_course', 'worker_past_company', 'worker_past_company_address', 'worker_past_position', 'worker_inclusive_date', 'worker_status_appointment', 'worker_centuryskill', 'worker_technicalskill', 'worker_createddate', 'worker_created_by'], 'required'],
            [['user_id', 'worker_civil_status_id', 'worker_citizenship_id', 'worker_disability_id', 'worker_employment_status_id', 'worker_educ_level_id', 'worker_created_by'], 'integer'],
            [['worker_birthdate', 'worker_educ_year', 'worker_inclusive_date', 'worker_createddate'], 'safe'],
            [['worker_expected_salary'], 'number'],
            [['worker_firstname'], 'string', 'max' => 40],
            [['worker_lastname', 'worker_middlename', 'worker_present_brgy', 'worker_present_city', 'worker_present_province', 'worker_permanent_brgy', 'worker_permanent_city', 'worker_permanent_province', 'worker_preferred_occupation', 'worker_preferred_industry', 'worker_centuryskill', 'worker_technicalskill'], 'string', 'max' => 25],
            [['worker_suffix', 'worker_weight'], 'string', 'max' => 3],
            [['worker_gender'], 'string', 'max' => 6],
            [['worker_placeofbirth', 'worker_preferred_location_local', 'worker_preferred_location_overseas', 'worker_educ_school', 'worker_past_company_address'], 'string', 'max' => 100],
            [['worker_present_houseno', 'worker_permanent_houseno', 'worker_landlineno'], 'string', 'max' => 10],
            [['worker_height'], 'string', 'max' => 4],
            [['worker_primary_cpno', 'worker_second_cpno'], 'string', 'max' => 13],
            [['worker_email'], 'string', 'max' => 70],
            [['worker_educ_course', 'worker_past_company'], 'string', 'max' => 75],
            [['worker_educ_award', 'worker_past_position'], 'string', 'max' => 45],
            [['worker_status_appointment'], 'string', 'max' => 12],
            [['worker_citizenship_id'], 'exist', 'skipOnError' => true, 'targetClass' => Citizenship::className(), 'targetAttribute' => ['worker_citizenship_id' => 'id']],
            [['worker_civil_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => CivilStatus::className(), 'targetAttribute' => ['worker_civil_status_id' => 'id']],
            [['worker_created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['worker_created_by' => 'id']],
            [['worker_disability_id'], 'exist', 'skipOnError' => true, 'targetClass' => Disability::className(), 'targetAttribute' => ['worker_disability_id' => 'id']],
            [['worker_educ_level_id'], 'exist', 'skipOnError' => true, 'targetClass' => EducationalLevel::className(), 'targetAttribute' => ['worker_educ_level_id' => 'id']],
            [['worker_employment_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmploymentStatus::className(), 'targetAttribute' => ['worker_employment_status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'worker_firstname' => 'Worker Firstname',
            'worker_lastname' => 'Worker Lastname',
            'worker_middlename' => 'Worker Middlename',
            'worker_suffix' => 'Worker Suffix',
            'worker_birthdate' => 'Worker Birthdate',
            'worker_gender' => 'Worker Gender',
            'worker_placeofbirth' => 'Worker Placeofbirth',
            'worker_civil_status_id' => 'Worker Civil Status ID',
            'worker_present_houseno' => 'Worker Present Houseno',
            'worker_present_brgy' => 'Worker Present Brgy',
            'worker_present_city' => 'Worker Present City',
            'worker_present_province' => 'Worker Present Province',
            'worker_permanent_houseno' => 'Worker Permanent Houseno',
            'worker_permanent_brgy' => 'Worker Permanent Brgy',
            'worker_permanent_city' => 'Worker Permanent City',
            'worker_permanent_province' => 'Worker Permanent Province',
            'worker_citizenship_id' => 'Worker Citizenship ID',
            'worker_height' => 'Worker Height',
            'worker_weight' => 'Worker Weight',
            'worker_landlineno' => 'Worker Landlineno',
            'worker_primary_cpno' => 'Worker Primary Cpno',
            'worker_second_cpno' => 'Worker Second Cpno',
            'worker_email' => 'Worker Email',
            'worker_disability_id' => 'Worker Disability ID',
            'worker_employment_status_id' => 'Worker Employment Status ID',
            'worker_preferred_occupation' => 'Worker Preferred Occupation',
            'worker_preferred_industry' => 'Worker Preferred Industry',
            'worker_preferred_location_local' => 'Worker Preferred Location Local',
            'worker_preferred_location_overseas' => 'Worker Preferred Location Overseas',
            'worker_expected_salary' => 'Worker Expected Salary',
            'worker_educ_level_id' => 'Worker Educ Level ID',
            'worker_educ_year' => 'Worker Educ Year',
            'worker_educ_school' => 'Worker Educ School',
            'worker_educ_course' => 'Worker Educ Course',
            'worker_educ_award' => 'Worker Educ Award',
            'worker_past_company' => 'Worker Past Company',
            'worker_past_company_address' => 'Worker Past Company Address',
            'worker_past_position' => 'Worker Past Position',
            'worker_inclusive_date' => 'Worker Inclusive Date',
            'worker_status_appointment' => 'Worker Status Appointment',
            'worker_centuryskill' => 'Worker Centuryskill',
            'worker_technicalskill' => 'Worker Technicalskill',
            'worker_createddate' => 'Worker Createddate',
            'worker_created_by' => 'Worker Created By',
            'worker_fullname'   => 'Name',
            'worker_permanent_address'    => 'Address'
        ];
    }

    public function getWorker_fullname()
    {
        return $this->worker_firstname.' '.$this->worker_lastname;
    }
    public function getWorker_permanent_address()
    {
        return $this->worker_permanent_houseno.' '.$this->worker_permanent_brgy;
    }
    public function getWorker_age()
    {
        return $this->worker_birthdate;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitizenships()
    {
        return $this->hasOne(Citizenship::className(), ['id' => 'worker_citizenship_id']);
    }
    public function getCitizenship()
    {
        return $this->citizenships ? $this->citizenships->citizenship_name : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCivilStatuses()
    {
        return $this->hasOne(CivilStatus::className(), ['id' => 'worker_civil_status_id']);
    }
    public function getCivilStatus()
    {
        return $this->civilStatuses ? $this->civilStatuses->civil_status_name : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'worker_created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisabilities()
    {
        return $this->hasOne(Disability::className(), ['id' => 'worker_disability_id']);
    }
    public function getDisability()
    {
        return $this->disabilities ? $this->disabilities->disability_name : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducLevels()
    {
        return $this->hasOne(EducationalLevel::className(), ['id' => 'worker_educ_level_id']);
    }
    public function getEducLevel()
    {
        return $this->educLevels ? $this->educLevels->educational_level_name : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploymentStatuses()
    {
        return $this->hasOne(EmploymentStatus::className(), ['id' => 'worker_employment_status_id']);
    }
    public function getEmploymentStatus()
    {
        return $this->employmentStatuses ? $this->employmentStatuses->employment_status_name : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEligibilities()
    {
        return $this->hasMany(WorkerEligibility::className(), ['worker_id' => 'id']);
    }
    public function getEligibilityName()
    {
        return $this->eligibilities ? $this->eligibilities->eligibility_name : '-';
    }
    public function getEligibilityCode()
    {
        return $this->eligibilities ? $this->eligibilities->eligibility_code : '-';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkerTrainings()
    {
        return $this->hasMany(WorkerTraining::className(), ['worker_id' => 'id']);
    }
}
