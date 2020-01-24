<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programa Entity
 *
 * @property int $id
 * @property string $programa
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Avance[] $avances
 * @property \App\Model\Entity\Proyecto[] $proyectos
 */
class Programa extends Entity
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
        'programa' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'avances' => true,
        'proyectos' => true,
    ];
}
