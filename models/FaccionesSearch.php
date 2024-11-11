<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Facciones;

/**
 * FaccionesSearch represents the model behind the search form of `app\models\Facciones`.
 */
class FaccionesSearch extends Facciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['faccion_id', 'lider_id'], 'integer'],
            [['nombre_faccion', 'fecha_creacion', 'fecha_disolucion'], 'safe'],
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
        $query = Facciones::find();

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
            'faccion_id' => $this->faccion_id,
            'lider_id' => $this->lider_id,
            'fecha_creacion' => $this->fecha_creacion,
            'fecha_disolucion' => $this->fecha_disolucion,
        ]);

        $query->andFilterWhere(['like', 'nombre_faccion', $this->nombre_faccion]);

        return $dataProvider;
    }
}
