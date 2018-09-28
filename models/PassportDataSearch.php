<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Passportdata;

/**
 * PassportdataSearch represents the model behind the search form of `app\models\Passportdata`.
 */
class PassportdataSearch extends Passportdata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'passport_number', 'phone'], 'integer'],
            [['fio', 'date_issue', 'organizations', 'birthdate', 'birthplace', 'registration_address', 'residential_address', 'mail'], 'safe'],
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
        $query = Passportdata::find();

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
            'user_id' => $this->user_id,
            'passport_number' => $this->passport_number,
            'date_issue' => $this->date_issue,
            'birthdate' => $this->birthdate,
            'phone' => $this->phone,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'organizations', $this->organizations])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'registration_address', $this->registration_address])
            ->andFilterWhere(['like', 'residential_address', $this->residential_address])
            ->andFilterWhere(['like', 'mail', $this->mail]);

        return $dataProvider;
    }
}
