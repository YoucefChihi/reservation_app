<?php
namespace App\Model\Table;

use App\Model\Entity\Equipement;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipement Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Hotel
 */
class EquipementTable extends Table
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

        $this->table('equipement');
        $this->displayField('id_equipement');
        $this->primaryKey('id_equipement');

        $this->belongsToMany('Hotel', [
            'foreignKey' => 'equipement_id',
            'targetForeignKey' => 'hotel_id',
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
            ->add('id_equipement', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_equipement', 'create');

        $validator
            ->allowEmpty('nom_equipement');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('lien_photo');

        return $validator;
    }
}
