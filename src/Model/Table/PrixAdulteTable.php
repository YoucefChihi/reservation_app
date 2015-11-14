<?php
namespace App\Model\Table;

use App\Model\Entity\PrixAdulte;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrixAdulte Model
 *
 */
class PrixAdulteTable extends Table
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

        $this->table('prix_adulte');
        $this->displayField('id_prix_adulte');
        $this->primaryKey('id_prix_adulte');

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
            ->add('id_prix_adulte', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_prix_adulte', 'create');

        $validator
            ->add('id_hotel', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_hotel', 'create')
            ->notEmpty('id_hotel');

        $validator
            ->add('prix', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('prix');

        $validator
            ->add('du', 'valid', ['rule' => 'date'])
            ->allowEmpty('du');

        $validator
            ->add('au', 'valid', ['rule' => 'date'])
            ->allowEmpty('au');

        return $validator;
    }
}
