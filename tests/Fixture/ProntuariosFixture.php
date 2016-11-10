<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProntuariosFixture
 *
 */
class ProntuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idProntuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'registroAntiRabica' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'registroMultipla' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'registroCastracao' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'controleParasitas' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'dataControleParasitas' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'veterinarioResponsavelControleParasitas' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'dataRegistro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'patologia' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'deformidade' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'idAnimal_Animal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'animal_fk' => ['type' => 'index', 'columns' => ['idAnimal_Animal'], 'length' => []],
            'pk_prontuario' => ['type' => 'index', 'columns' => ['idProntuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idProntuario'], 'length' => []],
            'prontuarios_ibfk_1' => ['type' => 'foreign', 'columns' => ['idAnimal_Animal'], 'references' => ['animais', 'idAnimal'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idProntuario' => 1,
            'registroAntiRabica' => 'Lorem ipsum dolor sit amet',
            'registroMultipla' => 'Lorem ipsum dolor sit amet',
            'registroCastracao' => 'Lorem ipsum dolor sit amet',
            'controleParasitas' => 'Lorem ipsum dolor sit amet',
            'dataControleParasitas' => '2016-11-10',
            'veterinarioResponsavelControleParasitas' => 'Lorem ipsum dolor sit amet',
            'dataRegistro' => '2016-11-10',
            'patologia' => 'Lorem ipsum dolor sit amet',
            'deformidade' => 1,
            'idAnimal_Animal' => 1
        ],
    ];
}
