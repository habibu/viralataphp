<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prontuario Entity
 *
 * @property int $idProntuario
 * @property string $registroAntiRabica
 * @property string $registroMultipla
 * @property string $registroCastracao
 * @property string $controleParasitas
 * @property \Cake\I18n\Time $dataControleParasitas
 * @property string $veterinarioResponsavelControleParasitas
 * @property \Cake\I18n\Time $dataRegistro
 * @property string $patologia
 * @property bool $deformidade
 * @property int $idAnimal_Animal
 */
class Prontuario extends Entity
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
        'idProntuario' => false
    ];
}
