<?php

namespace backend\modules\game\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\game\models\DBgame;

/**
 * DBgameSearch represents the model behind the search form about `backend\modules\game\models\DBgame`.
 */
class DBgameSearch extends DBgame
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['level_name', 'level_description', 'level_code'], 'safe'],
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
        $query = DBgame::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'level_name', $this->level_name])
            ->andFilterWhere(['like', 'level_description', $this->level_description])
            ->andFilterWhere(['like', 'level_code', $this->level_code]);

        return $dataProvider;
    }
}
