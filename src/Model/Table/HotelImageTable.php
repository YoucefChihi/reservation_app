<?php
namespace App\Model\Table;

use App\Model\Entity\HotelImage;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HotelImage Model
 *
 */
class HotelImageTable extends Table
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

        $this->table('hotel_image');
        $this->displayField('id_image');
        $this->primaryKey('id_image');

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
            ->add('id_image', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_image', 'create');

        $validator
            ->add('id_hotel', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_hotel', 'create')
            ->notEmpty('id_hotel');

        $validator
            ->allowEmpty('nom_image');

        $validator
            ->allowEmpty('lien_image');

        return $validator;
    }
}
