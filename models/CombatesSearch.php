<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Combates;

/**
 * CombatesSearch represents the model behind the search form of `app\models\Combates`.
 */
class CombatesSearch extends Combates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['combate_id', 'ganador_id', 'perdedor_id'], 'integer'],
            [['nombre_evento', 'fecha_combate', 'tipo_combate', 'estipulacion'], 'safe'],
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
        $query = Combates::find();

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
            'combate_id' => $this->combate_id,
            'fecha_combate' => $this->fecha_combate,
            'ganador_id' => $this->ganador_id,
            'perdedor_id' => $this->perdedor_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_evento', $this->nombre_evento])
            ->andFilterWhere(['like', 'tipo_combate', $this->tipo_combate])
            ->andFilterWhere(['like', 'estipulacion', $this->estipulacion]);

        return $dataProvider;
    }
}
