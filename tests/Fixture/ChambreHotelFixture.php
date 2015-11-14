<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChambreHotelFixture
 *
 */
class ChambreHotelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'chambre_hotel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_type_chambre' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_hotel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'chambre_hotel_fk1' => ['type' => 'index', 'columns' => ['id_hotel'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_type_chambre', 'id_hotel'], 'length' => []],
            'chambre_hotel_fk0' => ['type' => 'foreign', 'columns' => ['id_type_chambre'], 'references' => ['type_chambre', 'id_type_chambre'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'chambre_hotel_fk1' => ['type' => 'foreign', 'columns' => ['id_hotel'], 'references' => ['hotel', 'id_hotel'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_type_chambre' => 1,
            'id_hotel' => 1
        ],
    ];
}
