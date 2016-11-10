<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnimaisFixture
 *
 */
class AnimaisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idAnimal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'dataNascimento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'raca' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'cor' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'especie' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'pelagem' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'deformidade' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'porte' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'resenha' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'dataCadastro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'foto' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'localidadeLongitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'localidadeLatitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'idSituacao_Situacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idFeira_Feira' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'codigoAnimal' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'feira_fk' => ['type' => 'index', 'columns' => ['idFeira_Feira'], 'length' => []],
            'pk_animal' => ['type' => 'index', 'columns' => ['idAnimal'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idAnimal'], 'length' => []],
            'codigoAnimal' => ['type' => 'unique', 'columns' => ['codigoAnimal'], 'length' => []],
            'animais_ibfk_1' => ['type' => 'foreign', 'columns' => ['idFeira_Feira'], 'references' => ['feiras', 'idFeira'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idAnimal' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'dataNascimento' => '2016-11-10',
            'raca' => 'Lorem ipsum dolor sit amet',
            'cor' => 'Lorem ipsum dolor sit a',
            'especie' => 'Lorem ipsum dolor sit amet',
            'pelagem' => 'Lorem ipsum dolor sit amet',
            'deformidade' => 1,
            'porte' => 'Lorem ip',
            'resenha' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'dataCadastro' => '2016-11-10',
            'foto' => 'Lorem ipsum dolor sit amet',
            'localidadeLongitude' => 1,
            'localidadeLatitude' => 1,
            'idSituacao_Situacao' => 1,
            'idFeira_Feira' => 1,
            'codigoAnimal' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
