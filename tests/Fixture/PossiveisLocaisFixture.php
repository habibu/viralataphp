<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PossiveisLocaisFixture
 *
 */
class PossiveisLocaisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idPossiveisLocais' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'longitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'latitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'idCidade_Cidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'cidade_fk' => ['type' => 'index', 'columns' => ['idCidade_Cidade'], 'length' => []],
            'pk_possiveisLocais' => ['type' => 'index', 'columns' => ['idPossiveisLocais'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idPossiveisLocais'], 'length' => []],
            'possiveis_locais_ibfk_1' => ['type' => 'foreign', 'columns' => ['idCidade_Cidade'], 'references' => ['cidades', 'idCidade'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
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
            'idPossiveisLocais' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'longitude' => 1,
            'latitude' => 1,
            'idCidade_Cidade' => 1
        ],
    ];
}
