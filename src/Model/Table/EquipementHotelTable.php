<?php
namespace App\Model\Table;

use App\Model\Entity\EquipementHotel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EquipementHotel Model
 *
 */
class EquipementHotelTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('equipement_hotel');
        $this->displayField('id_hotel');
        $this->primaryKey(['id_hotel', 'id_equipement']);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_hotel', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_hotel', 'create');

        $validator
            ->add('id_equipement', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_equipement', 'create');

        return $validator;
    }
}
