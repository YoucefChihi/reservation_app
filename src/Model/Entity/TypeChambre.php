<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TypeChambre Entity.
 *
 * @property int $id_type_chambre
 * @property string $type
 * @property int $max_pers
 * @property int $min_pers
 * @property int $max_adulte
 * @property int $min_adulte
 * @property int $max_enfant
 * @property int $min_enfant
 */
class TypeChambre extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_type_chambre' => false,
    ];
}
