<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity.
 *
 * @property int $id_hotel
 * @property int $nb_etoile
 * @property string $nom_hotel
 * @property string $adresse
 * @property string $ville
 * @property string $pays
 * @property string $code_postal
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $description_cr
 * @property string $description_lg
 * @property \App\Model\Entity\Equipement[] $equipement
 */
class Hotel extends Entity
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
        'id_hotel' => false,
    ];
}
