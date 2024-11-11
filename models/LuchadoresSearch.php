<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Luchadores;

/**
 * LuchadoresSearch represents the model behind the search form of `app\models\Luchadores`.
 */
class LuchadoresSearch extends Luchadores
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['luchador_id', 'altura_cm', 'peso_kg'], 'integer'],
            [['nombre', 'nombre_ring', 'fecha_debut', 'fecha_nacimiento', 'nacionalidad', 'movimiento_firma'], 'safe'],
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
        $query = Luchadores::find();

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
            'luchador_id' => $this->luchador_id,
            'fecha_debut' => $this->fecha_debut,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'altura_cm' => $this->altura_cm,
            'peso_kg' => $this->peso_kg,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'nombre_ring', $this->nombre_ring])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'movimiento_firma', $this->movimiento_firma]);

        return $dataProvider;
    }
}
