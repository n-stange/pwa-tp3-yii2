<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Busquedas".
 *
 * @property int $idBusqueda
 * @property int $idRubro
 * @property string $empresa
 * @property string $titulo
 * @property string|null $descripcion
 */
class Busquedas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Busquedas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idRubro', 'empresa', 'titulo'], 'required'],
            [['idRubro'], 'integer'],
            [['empresa', 'titulo', 'descripcion'], 'string', 'max' => 150],
            [['idRubro'], 'exist', 'skipOnError' => true, 'targetClass' => Rubros::className(), 'targetAttribute' => ['idRubro' => 'idRubro']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBusqueda' => 'Id Busqueda',
            'idRubro' => 'Id Rubro',
            'empresa' => 'Empresa',
            'titulo' => 'Título',
            'descripcion' => 'Descripción',
        ];
    }
}
