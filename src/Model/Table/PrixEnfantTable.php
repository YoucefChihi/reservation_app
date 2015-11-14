<?php
namespace App\Model\Table;

use App\Model\Entity\PrixEnfant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrixEnfant Model
 *
 */
class PrixEnfantTable extends Table
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

        $this->table('prix_enfant');
        $this->displayField('id_prix_enfant');
        $this->primaryKey('id_prix_enfant');

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
            ->add('id_prix_enfant', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_prix_enfant', 'create');

        $validator
            ->add('id_hotel', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_hotel', 'create')
            ->notEmpty('id_hotel');

        $validator
            ->add('reduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('reduction');

        $validator
            ->add('du', 'valid', ['rule' => 'date'])
            ->allowEmpty('du');

        $validator
            ->add('au', 'valid', ['rule' => 'date'])
            ->allowEmpty('au');

        $validator
            ->add('age_du', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('age_du');

        $validator
            ->add('age_au', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('age_au');

        $validator
            ->add('index', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('index');

        return $validator;
    }
}
