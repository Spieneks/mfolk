<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Applications;

/**
 * ApplicationsSearch represents the model behind the search form of `app\models\Applications`.
 */
class ApplicationsSearch extends Applications
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_number', 'application_status', 'sum_start', 'sum_end', 'sum_already', 'user_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
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
        $query = Applications::find();

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
            'application_number' => $this->application_number,
            'application_status' => $this->application_status,
            'start_date' => $this->start_date,
            'sum_start' => $this->sum_start,
            'end_date' => $this->end_date,
            'sum_end' => $this->sum_end,
            'sum_already' => $this->sum_already,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
