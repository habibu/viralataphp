<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoricoFeiraAnimaisFixture
 *
 */
class HistoricoFeiraAnimaisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idHistoricoFeiraAnimal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idFeira_Feira' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idAnimal_Animal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dataRegistro' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'feira_fk' => ['type' => 'index', 'columns' => ['idFeira_Feira'], 'length' => []],
            'animal_fk' => ['type' => 'index', 'columns' => ['idAnimal_Animal'], 'length' => []],
            'pk_historicoFeiraAnimal' => ['type' => 'index', 'columns' => ['idHistoricoFeiraAnimal'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idHistoricoFeiraAnimal'], 'length' => []],
            'historico_feira_animais_ibfk_1' => ['type' => 'foreign', 'columns' => ['idFeira_Feira'], 'references' => ['feiras', 'idFeira'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'historico_feira_animais_ibfk_2' => ['type' => 'foreign', 'columns' => ['idAnimal_Animal'], 'references' => ['animais', 'idAnimal'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idHistoricoFeiraAnimal' => 1,
            'idFeira_Feira' => 1,
            'idAnimal_Animal' => 1,
            'dataRegistro' => 1478821471
        ],
    ];
}
