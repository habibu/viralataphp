<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feira Entity
 *
 * @property int $idFeira
 * @property string $nomeFeira
 * @property \Cake\I18n\Time $dataInicio
 * @property \Cake\I18n\Time $dataEncerramento
 * @property int $numeroanimais
 * @property int $animaisAdotados
 * @property float $longitude
 * @property float $latitude
 * @property int $idCidade_Cidade
 * @property int $idpossiveis_locais_PossiveisLocais
 * @property bool $ativo
 */
class Feira extends Entity
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
        'idFeira' => false
    ];
}
