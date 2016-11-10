<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Animai Entity
 *
 * @property int $idAnimal
 * @property string $nome
 * @property \Cake\I18n\Time $dataNascimento
 * @property string $raca
 * @property string $cor
 * @property string $especie
 * @property string $pelagem
 * @property bool $deformidade
 * @property string $porte
 * @property string $resenha
 * @property \Cake\I18n\Time $dataCadastro
 * @property string $foto
 * @property float $localidadeLongitude
 * @property float $localidadeLatitude
 * @property int $idSituacao_Situacao
 * @property int $idFeira_Feira
 * @property string $codigoAnimal
 */
class Animai extends Entity
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
        'idAnimal' => false
    ];
}
