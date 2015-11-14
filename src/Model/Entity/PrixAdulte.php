<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PrixAdulte Entity.
 *
 * @property int $id_prix_adulte
 * @property int $id_hotel
 * @property float $prix
 * @property \Cake\I18n\Time $du
 * @property \Cake\I18n\Time $au
 */
class PrixAdulte extends Entity
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
        'id_prix_adulte' => false,
    ];
}
