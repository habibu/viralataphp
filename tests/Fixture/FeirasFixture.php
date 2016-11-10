<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FeirasFixture
 *
 */
class FeirasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idFeira' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nomeFeira' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'dataInicio' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'dataEncerramento' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'numeroanimais' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'animaisAdotados' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'longitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'latitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'idCidade_Cidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idpossiveis_locais_PossiveisLocais' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ativo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'cidade_fk' => ['type' => 'index', 'columns' => ['idCidade_Cidade'], 'length' => []],
            'pk_feira' => ['type' => 'index', 'columns' => ['idFeira'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idFeira'], 'length' => []],
            'feiras_ibfk_1' => ['type' => 'foreign', 'columns' => ['idCidade_Cidade'], 'references' => ['cidades', 'idCidade'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idFeira' => 1,
            'nomeFeira' => 'Lorem ipsum dolor sit amet',
            'dataInicio' => 1478821417,
            'dataEncerramento' => 1478821417,
            'numeroanimais' => 1,
            'animaisAdotados' => 1,
            'longitude' => 1,
            'latitude' => 1,
            'idCidade_Cidade' => 1,
            'idpossiveis_locais_PossiveisLocais' => 1,
            'ativo' => 1
        ],
    ];
}
