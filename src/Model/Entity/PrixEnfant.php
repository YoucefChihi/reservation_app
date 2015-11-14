<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PrixEnfant Entity.
 *
 * @property int $id_prix_enfant
 * @property int $id_hotel
 * @property float $reduction
 * @property \Cake\I18n\Time $du
 * @property \Cake\I18n\Time $au
 * @property int $age_du
 * @property int $age_au
 * @property int $index
 */
class PrixEnfant extends Entity
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
        'id_prix_enfant' => false,
    ];
}
