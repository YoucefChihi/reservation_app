<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipementHotelFixture
 *
 */
class EquipementHotelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'equipement_hotel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_hotel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_equipement' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'equipement_hotel_fk1' => ['type' => 'index', 'columns' => ['id_equipement'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_hotel', 'id_equipement'], 'length' => []],
            'equipement_hotel_fk0' => ['type' => 'foreign', 'columns' => ['id_hotel'], 'references' => ['hotel', 'id_hotel'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'equipement_hotel_fk1' => ['type' => 'foreign', 'columns' => ['id_equipement'], 'references' => ['equipement', 'id_equipement'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_hotel' => 1,
            'id_equipement' => 1
        ],
    ];
}
