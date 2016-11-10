<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 *
 */
class UsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'login' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'senha' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'dataNascimento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cpfCnpj' => ['type' => 'string', 'fixed' => true, 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'emp_nomeFantasia' => ['type' => 'string', 'fixed' => true, 'length' => 75, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'emp_razaoSocial' => ['type' => 'string', 'fixed' => true, 'length' => 75, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'email' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'rg' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'tipoAcesso' => ['type' => 'string', 'fixed' => true, 'length' => 3, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'tipoPessoa' => ['type' => 'string', 'fixed' => true, 'length' => 3, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'telefoneCelular' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'foto' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idUsuario'], 'length' => []],
            'cpfCnpj' => ['type' => 'unique', 'columns' => ['cpfCnpj'], 'length' => []],
            'login' => ['type' => 'unique', 'columns' => ['login'], 'length' => []],
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
            'idUsuario' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'login' => 'Lorem ipsum dolor sit amet',
            'senha' => 'Lorem ipsum dolor sit amet',
            'dataNascimento' => '2016-11-10',
            'cpfCnpj' => 'Lorem ipsum ',
            'emp_nomeFantasia' => 'Lorem ipsum dolor sit amet',
            'emp_razaoSocial' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'rg' => 'Lorem ipsum d',
            'tipoAcesso' => 'L',
            'tipoPessoa' => 'L',
            'telefoneCelular' => 'Lorem ipsum d',
            'foto' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
