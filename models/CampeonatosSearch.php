<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Campeonatos;

/**
 * CampeonatosSearch represents the model behind the search form of `app\models\Campeonatos`.
 */
class CampeonatosSearch extends Campeonatos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo_id', 'estado_activo'], 'integer'],
            [['nombre_titulo', 'fecha_creacion', 'descripcion'], 'safe'],
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
        $query = Campeonatos::find();

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
            'titulo_id' => $this->titulo_id,
            'fecha_creacion' => $this->fecha_creacion,
            'estado_activo' => $this->estado_activo,
        ]);

        $query->andFilterWhere(['like', 'nombre_titulo', $this->nombre_titulo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
