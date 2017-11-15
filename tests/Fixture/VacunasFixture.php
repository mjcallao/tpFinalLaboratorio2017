<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VacunasFixture
 *
 */
class VacunasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_vacunas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre_vacuna' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dosis_vacuna' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion_vacuna' => ['type' => 'string', 'length' => 180, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_vacunas_2' => ['type' => 'index', 'columns' => ['id_vacunas'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_vacunas'], 'length' => []],
            'id_vacunas' => ['type' => 'unique', 'columns' => ['id_vacunas'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
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
            'id_vacunas' => 1,
            'nombre_vacuna' => 'Lorem ipsum dolor sit amet',
            'dosis_vacuna' => 'Lorem ipsum dolor sit amet',
            'descripcion_vacuna' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
