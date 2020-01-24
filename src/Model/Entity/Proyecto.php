<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proyecto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $accion
 * @property float $monto
 * @property float $anticipo
 * @property float $primeraEstimacion
 * @property float $segundaEstimacion
 * @property \Cake\I18n\FrozenDate $fechaInicio
 * @property \Cake\I18n\FrozenDate $fechaFin
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $programa_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Programa $programa
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Avance[] $avances
 */
class Proyecto extends Entity
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
        'nombre' => true,
        'accion' => true,
        'monto' => true,
        'anticipo' => true,
        'primeraEstimacion' => true,
        'segundaEstimacion' => true,
        'fechaInicio' => true,
        'fechaFin' => true,
        'created' => true,
        'modified' => true,
        'programa_id' => true,
        'user_id' => true,
        'programa' => true,
        'user' => true,
        'avances' => true,
    ];
}
