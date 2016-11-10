<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $idUsuario
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property \Cake\I18n\Time $dataNascimento
 * @property string $cpfCnpj
 * @property string $emp_nomeFantasia
 * @property string $emp_razaoSocial
 * @property string $email
 * @property string $rg
 * @property string $tipoAcesso
 * @property string $tipoPessoa
 * @property string $telefoneCelular
 * @property string $foto
 */
class Usuario extends Entity
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
        'idUsuario' => false
    ];
}
