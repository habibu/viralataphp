<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistoricoFeiraAnimai Entity
 *
 * @property int $idHistoricoFeiraAnimal
 * @property int $idFeira_Feira
 * @property int $idAnimal_Animal
 * @property \Cake\I18n\Time $dataRegistro
 */
class HistoricoFeiraAnimai extends Entity
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
        'idHistoricoFeiraAnimal' => false
    ];
}
