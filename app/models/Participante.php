<?php

namespace PhpComRapadura\Peleja\Model;

class Participante extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=36, nullable=false)
     */
    protected $Credencial_id;

    /**
     * Method to set the value of field Credencial_id
     *
     * @param string $Credencial_id
     * @return $this
     */
    public function setCredencialId($Credencial_id)
    {
        $this->Credencial_id = $Credencial_id;

        return $this;
    }

    /**
     * Returns the value of field Credencial_id
     *
     * @return string
     */
    public function getCredencialId()
    {
        return $this->Credencial_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
        $this->belongsTo('Credencial_id', 'PhpComRapadura\Peleja\Model\Credencial', 'id', ['alias' => 'Credencial']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'participante';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Participante[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Participante
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'Credencial_id' => 'Credencial_id'
        ];
    }

}
