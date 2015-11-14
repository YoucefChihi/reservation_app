<?php
namespace App\Model\Table;

use App\Model\Entity\ChambreHotel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChambreHotel Model
 *
 */
class ChambreHotelTable extends Table
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

        $this->table('chambre_hotel');
        $this->displayField('id_type_chambre');
        $this->primaryKey(['id_type_chambre', 'id_hotel']);

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
            ->add('id_type_chambre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_type_chambre', 'create');

        $validator
            ->add('id_hotel', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_hotel', 'create');

        return $validator;
    }
}
