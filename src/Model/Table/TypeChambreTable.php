<?php
namespace App\Model\Table;

use App\Model\Entity\TypeChambre;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeChambre Model
 *
 */
class TypeChambreTable extends Table
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

        $this->table('type_chambre');
        $this->displayField('id_type_chambre');
        $this->primaryKey('id_type_chambre');

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
            ->allowEmpty('type');

        $validator
            ->add('max_pers', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('max_pers');

        $validator
            ->add('min_pers', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('min_pers');

        $validator
            ->add('max_adulte', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('max_adulte');

        $validator
            ->add('min_adulte', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('min_adulte');

        $validator
            ->add('max_enfant', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('max_enfant');

        $validator
            ->add('min_enfant', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('min_enfant');

        return $validator;
    }
}
