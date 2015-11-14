<?php
namespace App\Model\Table;

use App\Model\Entity\Hotel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotel Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Equipement
 */
class HotelTable extends Table
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

        $this->table('hotel');
        $this->displayField('id_hotel');
        $this->primaryKey('id_hotel');

        $this->belongsToMany('Equipement', [
            'foreignKey' => 'hotel_id',
            'targetForeignKey' => 'equipement_id',
            'joinTable' => 'equipement_hotel'
        ]);
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
            ->add('nb_etoile', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nb_etoile');

        $validator
            ->allowEmpty('nom_hotel');

        $validator
            ->allowEmpty('adresse');

        $validator
            ->allowEmpty('ville');

        $validator
            ->allowEmpty('pays');

        $validator
            ->allowEmpty('code_postal');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('fax');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');

        $validator
            ->allowEmpty('description_cr');

        $validator
            ->allowEmpty('description_lg');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
